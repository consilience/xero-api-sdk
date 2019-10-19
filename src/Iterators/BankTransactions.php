<?php

namespace Consilience\Xero\Support\Iterators;

/**
 * An iterator for the spending bank transactions API.
 * Iterates through all bank transactions from a given last update time,
 * in last update time order.
 *
 * TODO: unlike the Payments endpoint, the BankTransactions endpoint can
 * take a `page` parameter. If we are to use that, then each page would need
 * to be fetched using the same filter and last update starting point.
 * It *may* be more efficent for Xero if it means they can cache large result
 * sets, but it does not change how we are to retrieve all matching records
 * without any gaps.
 * It would probaly be a trivial change though - keeping the initial query
 * conditions and sending the page number that we already count up in the query.
 */

use Consilience\Xero\Support\PagelessAbstractIterator;

class BankTransactions extends PagelessAbstractIterator
{
    /**
     * @var string the name of the model ID property
     */
    protected $idName = 'paymentID';

    /**
     * Fetch a page of bank transaction records, starting from the current
     * last modified time and given the current where filter.
     *
     * @return Consilience\Xero\AccountingSdk\Model\BankTransactions[]
     */
    protected function fetchRecords(): array
    {
        // Ascending update date is the ONLY way we can be sure to get all payments.

        $order = 'UpdatedDateUTC';

        return $this->accountingApi->getBankTransactions(
            $this->ifModifiedSince,
            $this->where,
            $order
        )->bankTransactions;
    }
}
