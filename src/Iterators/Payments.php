<?php

namespace Consilience\Xero\Support\Iterators;

/**
 * An iterator for the payments API.
 * Iterates through all payments from a given last update time,
 * in last update time order.
 */

use Consilience\Xero\Support\PagelessAbstractIterator;

class Payments extends PagelessAbstractIterator
{
    /**
     * Fetch a page of payment records, starting from the current
     * last modified time and given the current where filter.
     *
     * @return Consilience\Xero\AccountingSdk\Model\Payments[]
     */
    protected function fetchRecords(): array
    {
        // Ascending update date is the ONLY way we can be sure to get all payments.

        $order = 'UpdatedDateUTC';

        return $this->accountingApi->getPayments(
            $this->ifModifiedSince,
            $this->where,
            $order
        )->payments;
    }
}
