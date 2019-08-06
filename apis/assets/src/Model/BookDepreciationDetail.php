<?php

namespace Consilience\Xero\AssetsSdk\Model;

/**
 * BookDepreciationDetail
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Consilience\Xero\AssetsSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Assets API
 *
 * This the Xero Assets API
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

use ArrayAccess;
use JsonSerializable;
use Consilience\Xero\AssetsSdk\ObjectSerializer;

/**
 * BookDepreciationDetail Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\AssetsSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class BookDepreciationDetail implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BookDepreciationDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currentCapitalGain' => 'int',
        'currentGainLoss' => 'int',
        'depreciationStartDate' => '\DateTime',
        'costLimit' => 'int',
        'residualValue' => 'int',
        'priorAccumDepreciationAmount' => 'int',
        'currentAccumDepreciationAmount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'currentCapitalGain' => null,
        'currentGainLoss' => null,
        'depreciationStartDate' => 'date',
        'costLimit' => null,
        'residualValue' => null,
        'priorAccumDepreciationAmount' => null,
        'currentAccumDepreciationAmount' => null
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
        'currentCapitalGain' => 'currentCapitalGain',
        'currentGainLoss' => 'currentGainLoss',
        'depreciationStartDate' => 'depreciationStartDate',
        'costLimit' => 'costLimit',
        'residualValue' => 'residualValue',
        'priorAccumDepreciationAmount' => 'priorAccumDepreciationAmount',
        'currentAccumDepreciationAmount' => 'currentAccumDepreciationAmount'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'currentCapitalGain' => 'setCurrentCapitalGain',
        'currentGainLoss' => 'setCurrentGainLoss',
        'depreciationStartDate' => 'setDepreciationStartDate',
        'costLimit' => 'setCostLimit',
        'residualValue' => 'setResidualValue',
        'priorAccumDepreciationAmount' => 'setPriorAccumDepreciationAmount',
        'currentAccumDepreciationAmount' => 'setCurrentAccumDepreciationAmount'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'currentCapitalGain' => 'getCurrentCapitalGain',
        'currentGainLoss' => 'getCurrentGainLoss',
        'depreciationStartDate' => 'getDepreciationStartDate',
        'costLimit' => 'getCostLimit',
        'residualValue' => 'getResidualValue',
        'priorAccumDepreciationAmount' => 'getPriorAccumDepreciationAmount',
        'currentAccumDepreciationAmount' => 'getCurrentAccumDepreciationAmount'
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
        $this->container['currentCapitalGain'] = $data['currentCapitalGain'] ?? null;
        $this->container['currentGainLoss'] = $data['currentGainLoss'] ?? null;
        $this->container['depreciationStartDate'] = $data['depreciationStartDate'] ?? null;
        $this->container['costLimit'] = $data['costLimit'] ?? null;
        $this->container['residualValue'] = $data['residualValue'] ?? null;
        $this->container['priorAccumDepreciationAmount'] = $data['priorAccumDepreciationAmount'] ?? null;
        $this->container['currentAccumDepreciationAmount'] = $data['currentAccumDepreciationAmount'] ?? null;
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
     * Gets currentCapitalGain
     *
     * @return int|null
     */
    public function getCurrentCapitalGain()
    {
        return $this->get('currentCapitalGain');
    }

    /**
     * Sets currentCapitalGain
     *
     * @param int|null $currentCapitalGain When an asset is disposed, this will be the sell price minus the purchase price if a profit was made.
     *
     * @return $this
     */
    public function setCurrentCapitalGain($currentCapitalGain)
    {
        $this->container['currentCapitalGain'] = $currentCapitalGain;

        return $this;
    }

    /**
     * Gets currentGainLoss
     *
     * @return int|null
     */
    public function getCurrentGainLoss()
    {
        return $this->get('currentGainLoss');
    }

    /**
     * Sets currentGainLoss
     *
     * @param int|null $currentGainLoss When an asset is disposed, this will be the lowest one of sell price or purchase price, minus the current book value.
     *
     * @return $this
     */
    public function setCurrentGainLoss($currentGainLoss)
    {
        $this->container['currentGainLoss'] = $currentGainLoss;

        return $this;
    }

    /**
     * Gets depreciationStartDate
     *
     * @return \DateTime|null
     */
    public function getDepreciationStartDate()
    {
        return $this->get('depreciationStartDate');
    }

    /**
     * Sets depreciationStartDate
     *
     * @param \DateTime|null $depreciationStartDate YYYY-MM-DD
     *
     * @return $this
     */
    public function setDepreciationStartDate($depreciationStartDate)
    {
        $this->container['depreciationStartDate'] = $depreciationStartDate;

        return $this;
    }

    /**
     * Gets costLimit
     *
     * @return int|null
     */
    public function getCostLimit()
    {
        return $this->get('costLimit');
    }

    /**
     * Sets costLimit
     *
     * @param int|null $costLimit The value of the asset you want to depreciate, if this is less than the cost of the asset.
     *
     * @return $this
     */
    public function setCostLimit($costLimit)
    {
        $this->container['costLimit'] = $costLimit;

        return $this;
    }

    /**
     * Gets residualValue
     *
     * @return int|null
     */
    public function getResidualValue()
    {
        return $this->get('residualValue');
    }

    /**
     * Sets residualValue
     *
     * @param int|null $residualValue The value of the asset remaining when you've fully depreciated it.
     *
     * @return $this
     */
    public function setResidualValue($residualValue)
    {
        $this->container['residualValue'] = $residualValue;

        return $this;
    }

    /**
     * Gets priorAccumDepreciationAmount
     *
     * @return int|null
     */
    public function getPriorAccumDepreciationAmount()
    {
        return $this->get('priorAccumDepreciationAmount');
    }

    /**
     * Sets priorAccumDepreciationAmount
     *
     * @param int|null $priorAccumDepreciationAmount All depreciation prior to the current financial year.
     *
     * @return $this
     */
    public function setPriorAccumDepreciationAmount($priorAccumDepreciationAmount)
    {
        $this->container['priorAccumDepreciationAmount'] = $priorAccumDepreciationAmount;

        return $this;
    }

    /**
     * Gets currentAccumDepreciationAmount
     *
     * @return int|null
     */
    public function getCurrentAccumDepreciationAmount()
    {
        return $this->get('currentAccumDepreciationAmount');
    }

    /**
     * Sets currentAccumDepreciationAmount
     *
     * @param int|null $currentAccumDepreciationAmount All depreciation occurring in the current financial year.
     *
     * @return $this
     */
    public function setCurrentAccumDepreciationAmount($currentAccumDepreciationAmount)
    {
        $this->container['currentAccumDepreciationAmount'] = $currentAccumDepreciationAmount;

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
