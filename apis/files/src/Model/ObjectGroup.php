<?php

namespace Consilience\Xero\FilesSdk\Model;

/**
 * ObjectGroup
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Consilience\Xero\FilesSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Files API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator
 * (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
use Consilience\Xero\FilesSdk\ObjectSerializer;

/**
 * ObjectGroup Class Doc Comment
 *
 * @category    Class
 * @description The Object Group that the object is in. These roughly correlate to the endpoints that can be used to retrieve the object via the core accounting API.
 * @package     Consilience\Xero\FilesSdk
 * @author      OpenAPI Generator team <team@openapitools.org>
 * @link        https://openapi-generator.tech
 */
class ObjectGroup
{
    /**
     * Possible values of this enum
     */
    const ACCOUNT = 'Account';
    const BANK_TRANSACTION = 'BankTransaction';
    const CONTACT = 'Contact';
    const CREDIT_NOTE = 'CreditNote';
    const INVOICE = 'Invoice';
    const ITEM = 'Item';
    const MANUAL_JOURNAL = 'ManualJournal';
    const OVERPAYMENT = 'Overpayment';
    const PAYMENT = 'Payment';
    const PREPAYMENT = 'Prepayment';
    const RECEIPT = 'Receipt';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACCOUNT,
            self::BANK_TRANSACTION,
            self::CONTACT,
            self::CREDIT_NOTE,
            self::INVOICE,
            self::ITEM,
            self::MANUAL_JOURNAL,
            self::OVERPAYMENT,
            self::PAYMENT,
            self::PREPAYMENT,
            self::RECEIPT,
        ];
    }
}
