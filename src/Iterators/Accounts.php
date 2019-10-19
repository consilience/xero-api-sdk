<?php

namespace Consilience\Xero\Support\Iterators;

/**
 * An iterator for the accounts API.
 * Iterates through all accounts from a given last update time,
 * in last update time order.
 */

use Consilience\Xero\Support\PagelessAbstractIterator;

class Accounts extends PagelessAbstractIterator
{
    /**
     * @var string the name of the model ID property
     */
    protected $idName = 'accountID';

    /**
     * Fetch a page of account records, starting from the current
     * last modified time and given the current where filter.
     *
     * @return Consilience\Xero\AccountingSdk\Model\Accounts[]
     */
    protected function fetchRecords(): array
    {
        // Ascending update date is the ONLY way we can be sure to get all payments.

        $order = 'UpdatedDateUTC';

        return $this->accountingApi->getAccounts(
            $this->ifModifiedSince,
            $this->where,
            $order
        )->accounts;
    }
}
