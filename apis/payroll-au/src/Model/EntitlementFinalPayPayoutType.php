<?php

namespace Consilience\Xero\PayrollAuSdk\Model;

/**
 * EntitlementFinalPayPayoutType
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Consilience\Xero\PayrollAuSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU
 *
 * This is the Xero Payroll API for orgs in Australia region.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator
 * (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
use Consilience\Xero\PayrollAuSdk\ObjectSerializer;

/**
 * EntitlementFinalPayPayoutType Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\PayrollAuSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class EntitlementFinalPayPayoutType
{
    /**
     * Possible values of this enum
     */
    const NOTPAIDOUT = 'NOTPAIDOUT';
    const PAIDOUT = 'PAIDOUT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOTPAIDOUT,
            self::PAIDOUT,
        ];
    }
}
