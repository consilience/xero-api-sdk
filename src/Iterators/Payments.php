<?php

namespace Consilience\Xero\Support\Iterators;

/**
 * An iterator for the payments API.
 * Iterates through all payments from a given last update time,
 * in last update time order.
 */

use DateTime;
use Iterator;
use Countable;
use ArrayAccess;
use DateInterval;
use InvalidArgumentException;
use Consilience\Xero\AccountingSdk\Api\AccountingApi;

class Payments implements Iterator, ArrayAccess, Countable
{
    /**
     * @var DateTime
     */
    protected $ifModifiedSince;

    /**
     * @var AccountingApi
     */
    protected $accountingApi;

    /**
     * @var string payments query filter.
     */
    protected $where;

    /**
     * @var Payment[] a page of payments fetched from the API.
     */
    protected $pages = [];

    /**
     * @var Payment[] all payments fetched from the API indexed by paymentID.
     */
    protected $index = [];

    /**
     * @var int The current page number fetched from the API, zero-indexed.
     */
    protected $currentPage = 0;

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
     * Returns the count of payments fetched *so far*
     * so use with caution if still party way through fetching.
     */
    public function count(): int
    {
        return count($this->index);
    }

    /**
     * @param AccountingApi $accountingApi the accounting API set up and ready to go
     * @param DateTime|string|null $ifModifiedSince starting point for retrieving the payments
     * @param string $where the constructed query filter (likely to support an object later)
     */
    public function __construct(AccountingApi $accountingApi, $ifModifiedSince, $where = '')
    {
        if (is_string($ifModifiedSince)) {
            $ifModifiedSince = new DateTime($ifModifiedSince);
        }

        if (! $ifModifiedSince instanceof DateTime) {
            throw new InvalidArgumentException(sprintf(
                'Invalid datetime format for ifModifiedSince'
            ));
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
     * Make this the Xero paymentID.
     */
    public function key()
    {
        if ($this->valid()) {
            return $this->current()->paymentID;
        }
    }

    public function next()
    {
        // Increment the current page index, and if we go over
        // the page, fetch another page from the API.

        $this->currentIndex++;

        if ($this->currentIndex >= count($this->pages[$this->currentPage])) {
            $this->currentPage++;

            if (! array_key_exists($this->currentPage, $this->pages)) {
                $this->fetchPaymentsPage();
            }

            // Set the current item index to the first key in this first page
            // of payments.
            // The first page could actually be empty, and valid() will catch that.

            $this->currentIndex = 0;
        }
    }

    /**
     * Go to the first payment on the first page of payments.
     * If there is no first page yet, then fetch it from the API.
     */
    public function rewind()
    {
        $this->currentPage = 0;
        $this->currentIndex = 0;

        if (! array_key_exists($this->currentPage, $this->pages)) {
            // First time through; initialise the first page.

            $this->fetchPaymentsPage();
        }
    }

    public function valid()
    {
        return ! empty($this->pages[$this->currentPage][$this->currentIndex]);
    }

    /**
     * Fetch a single page of payments from the API.
     * Sets the new ifModifiedSince time with a one-second overlap for
     * the next page.
     */
    public function fetchPaymentsPage()
    {
        // Ascending.

        $order = 'UpdatedDateUTC';

        $payments = $this->accountingApi->getPayments(
            $this->ifModifiedSince,
            $this->where,
            $order
        )->payments;

        // Find the last record last update time to set for the next page.

        if (count($payments)) {
            $lastPayment = array_values(array_slice($payments, -1))[0];
            $lastPaymentTime = clone $lastPayment->updatedDateUTC;

            $this->ifModifiedSince = $lastPaymentTime->sub(
                new DateInterval('PT1S')
            );

            // Add to overall contiguous index for array access.

            $duplicatesRemoved = false;

            foreach ($payments as $index => $payment) {
                if (array_key_exists($payment->paymentID, $this->index)) {
                    unset($payments[$index]);
                    $duplicatesRemoved = true;
                } else {
                    $this->index[$payment->paymentID] = $payment;
                }
            }

            // Re-key the array so it is zero indexed.

            if ($duplicatesRemoved) {
                $payments = array_values($payments);
            }
        }

        $this->pages[$this->currentPage] = $payments;
    }
}
