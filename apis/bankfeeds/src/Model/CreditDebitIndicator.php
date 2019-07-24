<?php

namespace Consilience\Xero\BankfeedsSdk\Model;

/**
 * CreditDebitIndicator
 *
 * PHP version 5
 *
 * @category Class
 * @package  Consilience\Xero\BankfeedsSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Bank Feeds API
 *
 * The Xero Bank Feeds API
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
use Consilience\Xero\BankfeedsSdk\ObjectSerializer;

/**
 * CreditDebitIndicator Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\BankfeedsSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CreditDebitIndicator
{
    /**
     * Possible values of this enum
     */
    const CREDIT = 'CREDIT';
    const DEBIT = 'DEBIT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREDIT,
            self::DEBIT,
        ];
    }
}