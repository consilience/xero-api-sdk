<?php

namespace Consilience\Xero\PayrollAuSdk\Model;

/**
 * PayslipDeductionLine
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

use ArrayAccess;
use JsonSerializable;
use Consilience\Xero\PayrollAuSdk\ObjectSerializer;

/**
 * PayslipDeductionLine Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\PayrollAuSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class PayslipDeductionLine implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Payslip_DeductionLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'deductionTypeID' => 'string',
        'calculationType' => '\Consilience\Xero\PayrollAuSdk\Model\DeductionTypeCalculationType',
        'percentage' => 'float',
        'numberOfUnits' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'deductionTypeID' => 'uuid',
        'calculationType' => null,
        'percentage' => 'float',
        'numberOfUnits' => 'float'
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
        'deductionTypeID' => 'DeductionTypeID',
        'calculationType' => 'CalculationType',
        'percentage' => 'Percentage',
        'numberOfUnits' => 'NumberOfUnits'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'deductionTypeID' => 'setDeductionTypeID',
        'calculationType' => 'setCalculationType',
        'percentage' => 'setPercentage',
        'numberOfUnits' => 'setNumberOfUnits'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'deductionTypeID' => 'getDeductionTypeID',
        'calculationType' => 'getCalculationType',
        'percentage' => 'getPercentage',
        'numberOfUnits' => 'getNumberOfUnits'
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
        $this->container['deductionTypeID'] = $data['deductionTypeID'] ?? null;
        $this->container['calculationType'] = $data['calculationType'] ?? null;
        $this->container['percentage'] = $data['percentage'] ?? null;
        $this->container['numberOfUnits'] = $data['numberOfUnits'] ?? null;
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
     * Gets deductionTypeID
     *
     * @return string|null
     */
    public function getDeductionTypeID()
    {
        return $this->get('deductionTypeID');
    }

    /**
     * Sets deductionTypeID
     *
     * @param string|null $deductionTypeID Xero identifier for the deduction type
     *
     * @return $this
     */
    public function setDeductionTypeID($deductionTypeID)
    {
        $this->container['deductionTypeID'] = $deductionTypeID;

        return $this;
    }

    /**
     * Gets calculationType
     *
     * @return \Consilience\Xero\PayrollAuSdk\Model\DeductionTypeCalculationType|null
     */
    public function getCalculationType()
    {
        return $this->get('calculationType');
    }

    /**
     * Sets calculationType
     *
     * @param \Consilience\Xero\PayrollAuSdk\Model\DeductionTypeCalculationType|null $calculationType calculationType
     *
     * @return $this
     */
    public function setCalculationType($calculationType)
    {
        $this->container['calculationType'] = $calculationType;

        return $this;
    }

    /**
     * Gets percentage
     *
     * @return float|null
     */
    public function getPercentage()
    {
        return $this->get('percentage');
    }

    /**
     * Sets percentage
     *
     * @param float|null $percentage The Percentage of the Deduction.
     *
     * @return $this
     */
    public function setPercentage($percentage)
    {
        $this->container['percentage'] = $percentage;

        return $this;
    }

    /**
     * Gets numberOfUnits
     *
     * @return float|null
     */
    public function getNumberOfUnits()
    {
        return $this->get('numberOfUnits');
    }

    /**
     * Sets numberOfUnits
     *
     * @param float|null $numberOfUnits Deduction number of units
     *
     * @return $this
     */
    public function setNumberOfUnits($numberOfUnits)
    {
        $this->container['numberOfUnits'] = $numberOfUnits;

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
