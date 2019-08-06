<?php

namespace Consilience\Xero\AccountingSdk\Model;

/**
 * RowType
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
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator
 * (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
use Consilience\Xero\AccountingSdk\ObjectSerializer;

/**
 * RowType Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\AccountingSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class RowType
{
    /**
     * Possible values of this enum
     */
    const HEADER = 'Header';
    const SECTION = 'Section';
    const ROW = 'Row';
    const SUMMARY_ROW = 'SummaryRow';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HEADER,
            self::SECTION,
            self::ROW,
            self::SUMMARY_ROW,
        ];
    }
}
