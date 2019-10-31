<?php

namespace Consilience\Xero\Support\Iterators;

/**
 * An iterator for the batch payments API.
 * Iterates through all payments from a given last update time,
 * in last update time order.
 */

use Consilience\Xero\Support\PagelessAbstractIterator;

class BatchPayments extends PagelessAbstractIterator
{
    /**
     * @var string the name of the model ID property
     */
    protected $idName = 'batchPaymentID';

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

        return $this->accountingApi->getBatchPayments(
            $this->ifModifiedSince,
            $this->where,
            $order
        )->batchPayments;
    }
}
