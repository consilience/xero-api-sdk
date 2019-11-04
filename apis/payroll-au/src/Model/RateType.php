<?php

namespace Consilience\Xero\PayrollAuSdk\Model;

/**
 * RateType
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
 * RateType Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\PayrollAuSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class RateType
{
    /**
     * Possible values of this enum
     */
    const FIXEDAMOUNT = 'FIXEDAMOUNT';
    const MULTIPLE__MULTIPLE_OF_EMPLOYEES_ORDINARY_EARNINGS_RATE___AN_EARNINGS_RATE_WHICH_IS_DERIVED_FROM_AN_EMPLOYEES_ORDINARY_EARNINGS_RATE = 'MULTIPLE  Multiple of Employee’s Ordinary Earnings Rate - an earnings rate which is derived from an employee’s ordinary earnings rate';
    const RATEPERUNIT__AN_EARNINGS_RATE_ALLOWING_ENTRY_OF_A_RATE_PER_UNIT = 'RATEPERUNIT  An earnings rate allowing entry of a rate per unit';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIXEDAMOUNT,
            self::MULTIPLE__MULTIPLE_OF_EMPLOYEES_ORDINARY_EARNINGS_RATE___AN_EARNINGS_RATE_WHICH_IS_DERIVED_FROM_AN_EMPLOYEES_ORDINARY_EARNINGS_RATE,
            self::RATEPERUNIT__AN_EARNINGS_RATE_ALLOWING_ENTRY_OF_A_RATE_PER_UNIT,
        ];
    }
}
