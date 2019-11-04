<?php

namespace Consilience\Xero\AccountingSdk\Model;

/**
 * AccountType
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Consilience\Xero\AccountingSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2.0.0
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
use Consilience\Xero\AccountingSdk\ObjectSerializer;

/**
 * AccountType Class Doc Comment
 *
 * @category    Class
 * @description See Account Types
 * @package     Consilience\Xero\AccountingSdk
 * @author      OpenAPI Generator team <team@openapitools.org>
 * @link        https://openapi-generator.tech
 */
class AccountType
{
    /**
     * Possible values of this enum
     */
    const BANK = 'BANK';
    const CURRENT = 'CURRENT';
    const CURRLIAB = 'CURRLIAB';
    const DEPRECIATN = 'DEPRECIATN';
    const DIRECTCOSTS = 'DIRECTCOSTS';
    const EQUITY = 'EQUITY';
    const EXPENSE = 'EXPENSE';
    const FIXED = 'FIXED';
    const INVENTORY = 'INVENTORY';
    const LIABILITY = 'LIABILITY';
    const NONCURRENT = 'NONCURRENT';
    const OTHERINCOME = 'OTHERINCOME';
    const OVERHEADS = 'OVERHEADS';
    const PREPAYMENT = 'PREPAYMENT';
    const REVENUE = 'REVENUE';
    const SALES = 'SALES';
    const TERMLIAB = 'TERMLIAB';
    const PAYGLIABILITY = 'PAYGLIABILITY';
    const PAYG = 'PAYG';
    const SUPERANNUATIONEXPENSE = 'SUPERANNUATIONEXPENSE';
    const SUPERANNUATIONLIABILITY = 'SUPERANNUATIONLIABILITY';
    const WAGESEXPENSE = 'WAGESEXPENSE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BANK,
            self::CURRENT,
            self::CURRLIAB,
            self::DEPRECIATN,
            self::DIRECTCOSTS,
            self::EQUITY,
            self::EXPENSE,
            self::FIXED,
            self::INVENTORY,
            self::LIABILITY,
            self::NONCURRENT,
            self::OTHERINCOME,
            self::OVERHEADS,
            self::PREPAYMENT,
            self::REVENUE,
            self::SALES,
            self::TERMLIAB,
            self::PAYGLIABILITY,
            self::PAYG,
            self::SUPERANNUATIONEXPENSE,
            self::SUPERANNUATIONLIABILITY,
            self::WAGESEXPENSE,
        ];
    }
}
