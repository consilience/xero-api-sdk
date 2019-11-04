<?php

namespace Consilience\Xero\AccountingSdk\Model;

/**
 * ReportWithRow
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

use ArrayAccess;
use JsonSerializable;
use Consilience\Xero\AccountingSdk\ObjectSerializer;

/**
 * ReportWithRow Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\AccountingSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class ReportWithRow implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportWithRow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reportID' => 'string',
        'reportName' => 'string',
        'reportTitle' => 'string',
        'reportType' => 'string',
        'reportTitles' => 'string[]',
        'reportDate' => 'string',
        'updatedDateUTC' => '\DateTime',
        'rows' => '\Consilience\Xero\AccountingSdk\Model\ReportRows[]',
        'fields' => '\Consilience\Xero\AccountingSdk\Model\ReportFields[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'reportID' => 'UUID',
        'reportName' => null,
        'reportTitle' => null,
        'reportType' => null,
        'reportTitles' => null,
        'reportDate' => null,
        'updatedDateUTC' => 'date-time',
        'rows' => null,
        'fields' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Attributes of form: local name => original name
     * Local name is camelCase, original name is as per API description
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'reportID' => 'ReportID',
        'reportName' => 'ReportName',
        'reportTitle' => 'ReportTitle',
        'reportType' => 'ReportType',
        'reportTitles' => 'ReportTitles',
        'reportDate' => 'ReportDate',
        'updatedDateUTC' => 'UpdatedDateUTC',
        'rows' => 'Rows',
        'fields' => 'Fields'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'reportID' => 'setReportID',
        'reportName' => 'setReportName',
        'reportTitle' => 'setReportTitle',
        'reportType' => 'setReportType',
        'reportTitles' => 'setReportTitles',
        'reportDate' => 'setReportDate',
        'updatedDateUTC' => 'setUpdatedDateUTC',
        'rows' => 'setRows',
        'fields' => 'setFields'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'reportID' => 'getReportID',
        'reportName' => 'getReportName',
        'reportTitle' => 'getReportTitle',
        'reportType' => 'getReportType',
        'reportTitles' => 'getReportTitles',
        'reportDate' => 'getReportDate',
        'updatedDateUTC' => 'getUpdatedDateUTC',
        'rows' => 'getRows',
        'fields' => 'getFields'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to accessor functions
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['reportID'] = $data['reportID'] ?? null;
        $this->container['reportName'] = $data['reportName'] ?? null;
        $this->container['reportTitle'] = $data['reportTitle'] ?? null;
        $this->container['reportType'] = $data['reportType'] ?? null;
        $this->container['reportTitles'] = $data['reportTitles'] ?? null;
        $this->container['reportDate'] = $data['reportDate'] ?? null;
        $this->container['updatedDateUTC'] = $data['updatedDateUTC'] ?? null;
        $this->container['rows'] = $data['rows'] ?? null;
        $this->container['fields'] = $data['fields'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets reportID
     *
     * @return string|null
     */
    public function getReportID()
    {
        return $this->get('reportID');
    }

    /**
     * Sets reportID
     *
     * @param string|null $reportID Report id
     *
     * @return $this
     */
    public function setReportID($reportID)
    {
        $this->container['reportID'] = $reportID;

        return $this;
    }

    /**
     * Gets reportName
     *
     * @return string|null
     */
    public function getReportName()
    {
        return $this->get('reportName');
    }

    /**
     * Sets reportName
     *
     * @param string|null $reportName Name of the report
     *
     * @return $this
     */
    public function setReportName($reportName)
    {
        $this->container['reportName'] = $reportName;

        return $this;
    }

    /**
     * Gets reportTitle
     *
     * @return string|null
     */
    public function getReportTitle()
    {
        return $this->get('reportTitle');
    }

    /**
     * Sets reportTitle
     *
     * @param string|null $reportTitle Title of the report
     *
     * @return $this
     */
    public function setReportTitle($reportTitle)
    {
        $this->container['reportTitle'] = $reportTitle;

        return $this;
    }

    /**
     * Gets reportType
     *
     * @return string|null
     */
    public function getReportType()
    {
        return $this->get('reportType');
    }

    /**
     * Sets reportType
     *
     * @param string|null $reportType The type of report (BalanceSheet,ProfitLoss, etc)
     *
     * @return $this
     */
    public function setReportType($reportType)
    {
        $this->container['reportType'] = $reportType;

        return $this;
    }

    /**
     * Gets reportTitles
     *
     * @return string[]|null
     */
    public function getReportTitles()
    {
        return $this->get('reportTitles');
    }

    /**
     * Sets reportTitles
     *
     * @param string[]|null $reportTitles Report titles array (3 to 4 strings with the report name, orgnisation name and time frame of report)
     *
     * @return $this
     */
    public function setReportTitles($reportTitles)
    {
        $this->container['reportTitles'] = $reportTitles;

        return $this;
    }

    /**
     * Gets reportDate
     *
     * @return string|null
     */
    public function getReportDate()
    {
        return $this->get('reportDate');
    }

    /**
     * Sets reportDate
     *
     * @param string|null $reportDate Date of report
     *
     * @return $this
     */
    public function setReportDate($reportDate)
    {
        $this->container['reportDate'] = $reportDate;

        return $this;
    }

    /**
     * Gets updatedDateUTC
     *
     * @return \DateTime|null
     */
    public function getUpdatedDateUTC()
    {
        return $this->get('updatedDateUTC');
    }

    /**
     * Sets updatedDateUTC
     *
     * @param \DateTime|null $updatedDateUTC Updated Date
     *
     * @return $this
     */
    public function setUpdatedDateUTC($updatedDateUTC)
    {
        $this->container['updatedDateUTC'] = $updatedDateUTC;

        return $this;
    }

    /**
     * Gets rows
     *
     * @return \Consilience\Xero\AccountingSdk\Model\ReportRows[]|null
     */
    public function getRows()
    {
        return $this->get('rows');
    }

    /**
     * Sets rows
     *
     * @param \Consilience\Xero\AccountingSdk\Model\ReportRows[]|null $rows rows
     *
     * @return $this
     */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \Consilience\Xero\AccountingSdk\Model\ReportFields[]|null
     */
    public function getFields()
    {
        return $this->get('fields');
    }

    /**
     * Sets fields
     *
     * @param \Consilience\Xero\AccountingSdk\Model\ReportFields[]|null $fields fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode($this, JSON_PRETTY_PRINT);
    }

    /**
     * Convert to a nested array.
     * This is not an ideal method, and needs to be revisited.
     *
     * @return array
     */
    public function toArray()
    {
        return json_decode(json_encode($this), true);
    }

    /**
     * Return the JSON serialisable data for this model.
     *
     * @return string|object
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Return a property value.
     *
     * @param string $name    Name of the property
     * @param mixed  $default Value if property is not set
     *
     * @return mixed
     */
    public function get(string $name, $default = null)
    {
        return $this->container[$name] ?? $default;
    }

    /**
     * Hangle magic getter to return properties.
     *
     * @param string $name Name of the property
     *
     * @return mixed
     */
    public function __get($name)
    {
        return $this->get($name);
    }
}
