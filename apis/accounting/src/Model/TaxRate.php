<?php

namespace Consilience\Xero\AccountingSdk\Model;

/**
 * TaxRate
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

use ArrayAccess;
use JsonSerializable;
use Consilience\Xero\AccountingSdk\ObjectSerializer;

/**
 * TaxRate Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\AccountingSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class TaxRate implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaxRate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'taxType' => 'string',
        'taxComponents' => '\Consilience\Xero\AccountingSdk\Model\TaxComponent[]',
        'status' => 'string',
        'reportTaxType' => 'string',
        'canApplyToAssets' => 'bool',
        'canApplyToEquity' => 'bool',
        'canApplyToExpenses' => 'bool',
        'canApplyToLiabilities' => 'bool',
        'canApplyToRevenue' => 'bool',
        'displayTaxRate' => 'double',
        'effectiveRate' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'taxType' => null,
        'taxComponents' => null,
        'status' => null,
        'reportTaxType' => null,
        'canApplyToAssets' => null,
        'canApplyToEquity' => null,
        'canApplyToExpenses' => null,
        'canApplyToLiabilities' => null,
        'canApplyToRevenue' => null,
        'displayTaxRate' => 'double',
        'effectiveRate' => 'double'
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
        'name' => 'Name',
        'taxType' => 'TaxType',
        'taxComponents' => 'TaxComponents',
        'status' => 'Status',
        'reportTaxType' => 'ReportTaxType',
        'canApplyToAssets' => 'CanApplyToAssets',
        'canApplyToEquity' => 'CanApplyToEquity',
        'canApplyToExpenses' => 'CanApplyToExpenses',
        'canApplyToLiabilities' => 'CanApplyToLiabilities',
        'canApplyToRevenue' => 'CanApplyToRevenue',
        'displayTaxRate' => 'DisplayTaxRate',
        'effectiveRate' => 'EffectiveRate'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'taxType' => 'setTaxType',
        'taxComponents' => 'setTaxComponents',
        'status' => 'setStatus',
        'reportTaxType' => 'setReportTaxType',
        'canApplyToAssets' => 'setCanApplyToAssets',
        'canApplyToEquity' => 'setCanApplyToEquity',
        'canApplyToExpenses' => 'setCanApplyToExpenses',
        'canApplyToLiabilities' => 'setCanApplyToLiabilities',
        'canApplyToRevenue' => 'setCanApplyToRevenue',
        'displayTaxRate' => 'setDisplayTaxRate',
        'effectiveRate' => 'setEffectiveRate'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'taxType' => 'getTaxType',
        'taxComponents' => 'getTaxComponents',
        'status' => 'getStatus',
        'reportTaxType' => 'getReportTaxType',
        'canApplyToAssets' => 'getCanApplyToAssets',
        'canApplyToEquity' => 'getCanApplyToEquity',
        'canApplyToExpenses' => 'getCanApplyToExpenses',
        'canApplyToLiabilities' => 'getCanApplyToLiabilities',
        'canApplyToRevenue' => 'getCanApplyToRevenue',
        'displayTaxRate' => 'getDisplayTaxRate',
        'effectiveRate' => 'getEffectiveRate'
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

    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_DELETED = 'DELETED';
    const STATUS_ARCHIVED = 'ARCHIVED';const REPORT_TAX_TYPE_OUTPUT = 'OUTPUT';
    const REPORT_TAX_TYPE_INPUT = 'INPUT';
    const REPORT_TAX_TYPE_EXEMPTOUTPUT = 'EXEMPTOUTPUT';
    const REPORT_TAX_TYPE_INPUTTAXED = 'INPUTTAXED';
    const REPORT_TAX_TYPE_BASEXCLUDED = 'BASEXCLUDED';
    const REPORT_TAX_TYPE_EXEMPTEXPENSES = 'EXEMPTEXPENSES';
    const REPORT_TAX_TYPE_EXEMPTINPUT = 'EXEMPTINPUT';
    const REPORT_TAX_TYPE_ECOUTPUT = 'ECOUTPUT';
    const REPORT_TAX_TYPE_ECOUTPUTSERVICES = 'ECOUTPUTSERVICES';
    const REPORT_TAX_TYPE_ECINPUT = 'ECINPUT';
    const REPORT_TAX_TYPE_ECACQUISITIONS = 'ECACQUISITIONS';
    const REPORT_TAX_TYPE_CAPITALSALESOUTPUT = 'CAPITALSALESOUTPUT';
    const REPORT_TAX_TYPE_CAPITALEXPENSESINPUT = 'CAPITALEXPENSESINPUT';
    const REPORT_TAX_TYPE_MOSSSALES = 'MOSSSALES';
    const REPORT_TAX_TYPE_NONE = 'NONE';
    const REPORT_TAX_TYPE_GSTONIMPORTS = 'GSTONIMPORTS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_DELETED,
            self::STATUS_ARCHIVED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReportTaxTypeAllowableValues()
    {
        return [
            self::REPORT_TAX_TYPE_OUTPUT,
            self::REPORT_TAX_TYPE_INPUT,
            self::REPORT_TAX_TYPE_EXEMPTOUTPUT,
            self::REPORT_TAX_TYPE_INPUTTAXED,
            self::REPORT_TAX_TYPE_BASEXCLUDED,
            self::REPORT_TAX_TYPE_EXEMPTEXPENSES,
            self::REPORT_TAX_TYPE_EXEMPTINPUT,
            self::REPORT_TAX_TYPE_ECOUTPUT,
            self::REPORT_TAX_TYPE_ECOUTPUTSERVICES,
            self::REPORT_TAX_TYPE_ECINPUT,
            self::REPORT_TAX_TYPE_ECACQUISITIONS,
            self::REPORT_TAX_TYPE_CAPITALSALESOUTPUT,
            self::REPORT_TAX_TYPE_CAPITALEXPENSESINPUT,
            self::REPORT_TAX_TYPE_MOSSSALES,
            self::REPORT_TAX_TYPE_NONE,
            self::REPORT_TAX_TYPE_GSTONIMPORTS,
        ];
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['taxType'] = $data['taxType'] ?? null;
        $this->container['taxComponents'] = $data['taxComponents'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['reportTaxType'] = $data['reportTaxType'] ?? null;
        $this->container['canApplyToAssets'] = $data['canApplyToAssets'] ?? null;
        $this->container['canApplyToEquity'] = $data['canApplyToEquity'] ?? null;
        $this->container['canApplyToExpenses'] = $data['canApplyToExpenses'] ?? null;
        $this->container['canApplyToLiabilities'] = $data['canApplyToLiabilities'] ?? null;
        $this->container['canApplyToRevenue'] = $data['canApplyToRevenue'] ?? null;
        $this->container['displayTaxRate'] = $data['displayTaxRate'] ?? null;
        $this->container['effectiveRate'] = $data['effectiveRate'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be one of "%s"',
                'status',
                implode('", "', $allowedValues)
            );
        }

        if ($this->container['reportTaxType'] === null) {
            $invalidProperties[] = sprintf('"%s" can\'t be null', 'reportTaxType');
        }
        $allowedValues = $this->getReportTaxTypeAllowableValues();
        if (!is_null($this->container['reportTaxType']) && !in_array($this->container['reportTaxType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be one of "%s"',
                'reportTaxType',
                implode('", "', $allowedValues)
            );
        }

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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get('name');
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of tax rate
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets taxType
     *
     * @return string|null
     */
    public function getTaxType()
    {
        return $this->get('taxType');
    }

    /**
     * Sets taxType
     *
     * @param string|null $taxType The tax type
     *
     * @return $this
     */
    public function setTaxType($taxType)
    {
        $this->container['taxType'] = $taxType;

        return $this;
    }

    /**
     * Gets taxComponents
     *
     * @return \Consilience\Xero\AccountingSdk\Model\TaxComponent[]|null
     */
    public function getTaxComponents()
    {
        return $this->get('taxComponents');
    }

    /**
     * Sets taxComponents
     *
     * @param \Consilience\Xero\AccountingSdk\Model\TaxComponent[]|null $taxComponents See TaxComponents
     *
     * @return $this
     */
    public function setTaxComponents($taxComponents)
    {
        $this->container['taxComponents'] = $taxComponents;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get('status');
    }

    /**
     * Sets status
     *
     * @param string|null $status See Status Codes
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (! is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Invalid value for "%s", must be one of "%s"',
                    'status',
                    implode('", "', $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets reportTaxType
     *
     * @return string
     */
    public function getReportTaxType()
    {
        return $this->get('reportTaxType');
    }

    /**
     * Sets reportTaxType
     *
     * @param string $reportTaxType See ReportTaxTypes
     *
     * @return $this
     */
    public function setReportTaxType($reportTaxType)
    {
        $allowedValues = $this->getReportTaxTypeAllowableValues();
        if (!in_array($reportTaxType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Invalid value for "%s", must be one of "%s"',
                    'reportTaxType',
                    implode('", "', $allowedValues)
                )
            );
        }
        $this->container['reportTaxType'] = $reportTaxType;

        return $this;
    }

    /**
     * Gets canApplyToAssets
     *
     * @return bool|null
     */
    public function getCanApplyToAssets()
    {
        return $this->get('canApplyToAssets');
    }

    /**
     * Sets canApplyToAssets
     *
     * @param bool|null $canApplyToAssets Boolean to describe if tax rate can be used for asset accounts i.e.  true,false
     *
     * @return $this
     */
    public function setCanApplyToAssets($canApplyToAssets)
    {
        $this->container['canApplyToAssets'] = $canApplyToAssets;

        return $this;
    }

    /**
     * Gets canApplyToEquity
     *
     * @return bool|null
     */
    public function getCanApplyToEquity()
    {
        return $this->get('canApplyToEquity');
    }

    /**
     * Sets canApplyToEquity
     *
     * @param bool|null $canApplyToEquity Boolean to describe if tax rate can be used for equity accounts i.e true,false
     *
     * @return $this
     */
    public function setCanApplyToEquity($canApplyToEquity)
    {
        $this->container['canApplyToEquity'] = $canApplyToEquity;

        return $this;
    }

    /**
     * Gets canApplyToExpenses
     *
     * @return bool|null
     */
    public function getCanApplyToExpenses()
    {
        return $this->get('canApplyToExpenses');
    }

    /**
     * Sets canApplyToExpenses
     *
     * @param bool|null $canApplyToExpenses Boolean to describe if tax rate can be used for expense accounts  i.e. true,false
     *
     * @return $this
     */
    public function setCanApplyToExpenses($canApplyToExpenses)
    {
        $this->container['canApplyToExpenses'] = $canApplyToExpenses;

        return $this;
    }

    /**
     * Gets canApplyToLiabilities
     *
     * @return bool|null
     */
    public function getCanApplyToLiabilities()
    {
        return $this->get('canApplyToLiabilities');
    }

    /**
     * Sets canApplyToLiabilities
     *
     * @param bool|null $canApplyToLiabilities Boolean to describe if tax rate can be used for liability accounts  i.e. true,false
     *
     * @return $this
     */
    public function setCanApplyToLiabilities($canApplyToLiabilities)
    {
        $this->container['canApplyToLiabilities'] = $canApplyToLiabilities;

        return $this;
    }

    /**
     * Gets canApplyToRevenue
     *
     * @return bool|null
     */
    public function getCanApplyToRevenue()
    {
        return $this->get('canApplyToRevenue');
    }

    /**
     * Sets canApplyToRevenue
     *
     * @param bool|null $canApplyToRevenue Boolean to describe if tax rate can be used for revenue accounts i.e. true,false
     *
     * @return $this
     */
    public function setCanApplyToRevenue($canApplyToRevenue)
    {
        $this->container['canApplyToRevenue'] = $canApplyToRevenue;

        return $this;
    }

    /**
     * Gets displayTaxRate
     *
     * @return double|null
     */
    public function getDisplayTaxRate()
    {
        return $this->get('displayTaxRate');
    }

    /**
     * Sets displayTaxRate
     *
     * @param double|null $displayTaxRate Tax Rate (decimal to 4dp) e.g 12.5000
     *
     * @return $this
     */
    public function setDisplayTaxRate($displayTaxRate)
    {
        $this->container['displayTaxRate'] = $displayTaxRate;

        return $this;
    }

    /**
     * Gets effectiveRate
     *
     * @return double|null
     */
    public function getEffectiveRate()
    {
        return $this->get('effectiveRate');
    }

    /**
     * Sets effectiveRate
     *
     * @param double|null $effectiveRate Effective Tax Rate (decimal to 4dp) e.g 12.5000
     *
     * @return $this
     */
    public function setEffectiveRate($effectiveRate)
    {
        $this->container['effectiveRate'] = $effectiveRate;

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
