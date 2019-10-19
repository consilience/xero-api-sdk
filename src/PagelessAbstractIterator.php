<?php

namespace Consilience\Xero\Support;

/**
 * An abstract iterator for API endpoints returning lists of records
 * with no paging information.
 * Iterates through all records from a given last update time,
 * in last update time order.
 */

use DateTimeImmutable;
use DateTimeInterface;
use DateTime;
use Iterator;
use Countable;
use ArrayAccess;
use DateInterval;
use InvalidArgumentException;
use Consilience\Xero\AccountingSdk\Api\AccountingApi;

abstract class PagelessAbstractIterator implements Iterator, ArrayAccess, Countable
{
    /**
     * @var DateTimeInterface
     */
    protected $ifModifiedSince;

    /**
     * @var AccountingApi
     */
    protected $accountingApi;

    /**
     * @var string models query filter.
     */
    protected $where;

    /**
     * @var mixed[] a page of models fetched from the API.
     */
    protected $pages = [];

    /**
     * @var mixed[] all models fetched from the API indexed by the model ID.
     */
    protected $index = [];

    /**
     * @var string the name of the model ID property (examples: paymentID, accountID).
     */
    protected $idName = 'modelID';

    /**
     * @var int The current page number fetched from the API, zero-indexed.
     */
    protected $currentPage = 0;

    /**
     * The updatedDateUTC of the last record selected by this iterator.
     */
    public function updatedDateUTC()
    {
        return $this->current() ? $this->current()->updatedDateUTC : null;
    }

    public function __debugInfo()
    {
        return [
            'ifModifiedSince' => $this->ifModifiedSince,
            'where' => $this->where,
            'pages' => $this->pages,
            'index' => $this->index,
            'currentPage' => $this->currentPage,
        ];
    }

    /**
     * @var int The current index position of the current page for the current item.
     */
    protected $currentIndex = 0;

    public function offsetExists($offset): bool
    {
        return array_key_exists($offset, $this->index);
    }

    public function offsetGet($offset)
    {
        return $this->index[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->index[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->index[$offset]);
    }

    /**
     * Returns the count of models fetched *so far*
     * so use with caution if still party way through fetching.
     */
    public function count(): int
    {
        return count($this->index);
    }

    /**
     * @param AccountingApi $accountingApi the accounting API set up and ready to go
     * @param DateTimeInterface|string|null $ifModifiedSince starting point for retrieving the models
     * @param string $where the constructed query filter (likely to support an object later)
     */
    public function __construct(AccountingApi $accountingApi, $ifModifiedSince, $where = '')
    {
        if ($ifModifiedSince !== null) {
            if (is_string($ifModifiedSince)) {
                $ifModifiedSince = new DateTimeImmutable($ifModifiedSince);
            }

            if ($ifModifiedSince instanceof DateTime) {
                $ifModifiedSince = DateTimeImmutable::createFromMutable($ifModifiedSince);
            }

            if (! $ifModifiedSince instanceof DateTimeInterface) {
                throw new InvalidArgumentException(sprintf(
                    'Invalid datetime format for ifModifiedSince'
                ));
            }
        }

        $this->ifModifiedSince = $ifModifiedSince;
        $this->accountingApi = $accountingApi;
        $this->where = (string)$where;
    }

    public function current()
    {
        return $this->pages[$this->currentPage][$this->currentIndex];
    }

    /**
     * Make this the Xero model ID.
     */
    public function key()
    {
        if ($this->valid()) {
            return $this->current()->{$this->idName};
        }
    }

    public function next()
    {
        // Increment the current page index, and if we go over
        // the page, fetch another page from the API.

        $this->currentIndex++;

        if ($this->currentIndex >= count($this->pages[$this->currentPage])) {
            $this->currentPage++;

            // Fetch the next page from Xero if we have not already
            // done so in a previous loop.

            if (! array_key_exists($this->currentPage, $this->pages)) {
                $this->fetchPage();
            }

            // Set the current item index to the first key in this page of
            // models.
            // The first  or any subsequent page could be empty, and valid()
            // will catch that.

            $this->currentIndex = 0;
        }
    }

    /**
     * Go to the first model on the first page of models.
     * If there is no first page yet, then fetch it from the API.
     */
    public function rewind()
    {
        $this->currentPage = 0;
        $this->currentIndex = 0;

        if (! array_key_exists($this->currentPage, $this->pages)) {
            // First time through; initialise the first page.

            $this->fetchPage();
        }
    }

    public function valid()
    {
        return ! empty($this->pages[$this->currentPage][$this->currentIndex]);
    }

    /**
     * Fetch a single page of models from the API.
     * Sets the new ifModifiedSince time with a one-second overlap for
     * the next page.
     */
    public function fetchPage()
    {
        $records = $this->fetchRecords();

        if (count($records)) {
            // Find the last record last update time to set for the next page.
            // The updatedDateUTC is immutable, so we can use sub() safely.

            $lastRecordOnPage = array_values(array_slice($records, -1))[0];

            // FIXME issue #2: we actually cannot do this.
            // A payment batch can result in many payments created in the same
            // millisecond, so we must continue from exactly where we finished.
            // If we fetch a page that is completely dismissed as duplicates,
            // then we can move on ONE microsecond, but we DO risk losing any
            // transactions beyond the first page of the microsecond before.

            $currentPageStartTime = $this->ifModifiedSince;
            $currentPageEndTime = $lastRecordOnPage->updatedDateUTC;

            if ($this->ifModifiedSince === null || $currentPageEndTime > $this->ifModifiedSince) {
                $this->ifModifiedSince = $currentPageEndTime;
            }

            // Add to the master contiguous index for array access.
            // This also allows us to throw out duplicates where the
            // pages of records overlap.

            $duplicatesRemoved = false;

            foreach ($records as $index => $record) {
                if (array_key_exists($record->{$this->idName}, $this->index)) {
                    unset($records[$index]);
                    $duplicatesRemoved = true;
                } else {
                    $this->index[$record->{$this->idName}] = $record;
                }
            }

            // Re-key the array so it is zero indexed.

            if ($duplicatesRemoved) {
                $records = array_values($records);

                if (count($records) === 0 && $currentPageStartTime === $currentPageEndTime) {
                    // Every record has been marked as a duplicate.
                    // Wind forward one millisecond IF the start and end times have not
                    // shifted at all, then try one more time.
                    // The ifModifiedSince search parameter is accurate to *one second*,
                    // so that is what we are stuck with for now.

                    // TODO: There is a risk of missing records, so we also need to flag
                    // this somehow.

                    $this->ifModifiedSince = $this->ifModifiedSince->modify('+1 second');

                    // FIXME: limit the number of times this can recurse.
                    // We are not really looking for recursion, so will be a
                    // better way to do retries.

                    $this->fetchPage();

                    return;
                }
            }
        }

        $this->pages[$this->currentPage] = $records;
    }

    /**
     * Fetch a page of Xero records, starting from the current
     * last modified time and given the current where filter.
     *
     * @return Consilience\Xero\AccountingSdk\Model\*[]
     */
    abstract protected function fetchRecords(): array;
}
