<?php

namespace Consilience\XeroAccounting\Sdk\Model;

/**
 * AssetType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Consilience\XeroAccounting\Sdk
 * @author   OpenAPI Generator team
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
 * OpenAPI Generator version: 4.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

use ArrayAccess;
use JsonSerializable;
use Consilience\XeroAccounting\Sdk\ObjectSerializer;

/**
 * AssetType Class Doc Comment
 *
 * @category Class
 * @package  Consilience\XeroAccounting\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AssetType implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AssetType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assetTypeId' => 'string',
        'assetTypeName' => 'string',
        'fixedAssetAccountId' => 'string',
        'depreciationExpenseAccountId' => 'string',
        'accumulatedDepreciationAccountId' => 'string',
        'bookDepreciationSetting' => '\Consilience\XeroAccounting\Sdk\Model\BookDepreciationSetting',
        'locks' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'assetTypeId' => 'uuid',
        'assetTypeName' => null,
        'fixedAssetAccountId' => 'uuid',
        'depreciationExpenseAccountId' => 'uuid',
        'accumulatedDepreciationAccountId' => 'uuid',
        'bookDepreciationSetting' => null,
        'locks' => null
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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'assetTypeId' => 'assetTypeId',
        'assetTypeName' => 'assetTypeName',
        'fixedAssetAccountId' => 'fixedAssetAccountId',
        'depreciationExpenseAccountId' => 'depreciationExpenseAccountId',
        'accumulatedDepreciationAccountId' => 'accumulatedDepreciationAccountId',
        'bookDepreciationSetting' => 'bookDepreciationSetting',
        'locks' => 'locks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assetTypeId' => 'setAssetTypeId',
        'assetTypeName' => 'setAssetTypeName',
        'fixedAssetAccountId' => 'setFixedAssetAccountId',
        'depreciationExpenseAccountId' => 'setDepreciationExpenseAccountId',
        'accumulatedDepreciationAccountId' => 'setAccumulatedDepreciationAccountId',
        'bookDepreciationSetting' => 'setBookDepreciationSetting',
        'locks' => 'setLocks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assetTypeId' => 'getAssetTypeId',
        'assetTypeName' => 'getAssetTypeName',
        'fixedAssetAccountId' => 'getFixedAssetAccountId',
        'depreciationExpenseAccountId' => 'getDepreciationExpenseAccountId',
        'accumulatedDepreciationAccountId' => 'getAccumulatedDepreciationAccountId',
        'bookDepreciationSetting' => 'getBookDepreciationSetting',
        'locks' => 'getLocks'
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
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
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
        $this->container['assetTypeId'] = isset($data['assetTypeId']) ? $data['assetTypeId'] : null;
        $this->container['assetTypeName'] = isset($data['assetTypeName']) ? $data['assetTypeName'] : null;
        $this->container['fixedAssetAccountId'] = isset($data['fixedAssetAccountId']) ? $data['fixedAssetAccountId'] : null;
        $this->container['depreciationExpenseAccountId'] = isset($data['depreciationExpenseAccountId']) ? $data['depreciationExpenseAccountId'] : null;
        $this->container['accumulatedDepreciationAccountId'] = isset($data['accumulatedDepreciationAccountId']) ? $data['accumulatedDepreciationAccountId'] : null;
        $this->container['bookDepreciationSetting'] = isset($data['bookDepreciationSetting']) ? $data['bookDepreciationSetting'] : null;
        $this->container['locks'] = isset($data['locks']) ? $data['locks'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['assetTypeId'] === null) {
            $invalidProperties[] = "'assetTypeId' can't be null";
        }
        if ($this->container['assetTypeName'] === null) {
            $invalidProperties[] = "'assetTypeName' can't be null";
        }
        if ($this->container['bookDepreciationSetting'] === null) {
            $invalidProperties[] = "'bookDepreciationSetting' can't be null";
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
     * Gets assetTypeId
     *
     * @return string
     */
    public function getAssetTypeId()
    {
        return $this->container['assetTypeId'];
    }

    /**
     * Sets assetTypeId
     *
     * @param string $assetTypeId Xero generated unique identifier for asset types
     *
     * @return $this
     */
    public function setAssetTypeId($assetTypeId)
    {
        $this->container['assetTypeId'] = $assetTypeId;

        return $this;
    }

    /**
     * Gets assetTypeName
     *
     * @return string
     */
    public function getAssetTypeName()
    {
        return $this->container['assetTypeName'];
    }

    /**
     * Sets assetTypeName
     *
     * @param string $assetTypeName The name of the asset type
     *
     * @return $this
     */
    public function setAssetTypeName($assetTypeName)
    {
        $this->container['assetTypeName'] = $assetTypeName;

        return $this;
    }

    /**
     * Gets fixedAssetAccountId
     *
     * @return string|null
     */
    public function getFixedAssetAccountId()
    {
        return $this->container['fixedAssetAccountId'];
    }

    /**
     * Sets fixedAssetAccountId
     *
     * @param string|null $fixedAssetAccountId The asset account for fixed assets of this type
     *
     * @return $this
     */
    public function setFixedAssetAccountId($fixedAssetAccountId)
    {
        $this->container['fixedAssetAccountId'] = $fixedAssetAccountId;

        return $this;
    }

    /**
     * Gets depreciationExpenseAccountId
     *
     * @return string|null
     */
    public function getDepreciationExpenseAccountId()
    {
        return $this->container['depreciationExpenseAccountId'];
    }

    /**
     * Sets depreciationExpenseAccountId
     *
     * @param string|null $depreciationExpenseAccountId The expense account for the depreciation of fixed assets of this type
     *
     * @return $this
     */
    public function setDepreciationExpenseAccountId($depreciationExpenseAccountId)
    {
        $this->container['depreciationExpenseAccountId'] = $depreciationExpenseAccountId;

        return $this;
    }

    /**
     * Gets accumulatedDepreciationAccountId
     *
     * @return string|null
     */
    public function getAccumulatedDepreciationAccountId()
    {
        return $this->container['accumulatedDepreciationAccountId'];
    }

    /**
     * Sets accumulatedDepreciationAccountId
     *
     * @param string|null $accumulatedDepreciationAccountId The account for accumulated depreciation of fixed assets of this type
     *
     * @return $this
     */
    public function setAccumulatedDepreciationAccountId($accumulatedDepreciationAccountId)
    {
        $this->container['accumulatedDepreciationAccountId'] = $accumulatedDepreciationAccountId;

        return $this;
    }

    /**
     * Gets bookDepreciationSetting
     *
     * @return \Consilience\XeroAccounting\Sdk\Model\BookDepreciationSetting
     */
    public function getBookDepreciationSetting()
    {
        return $this->container['bookDepreciationSetting'];
    }

    /**
     * Sets bookDepreciationSetting
     *
     * @param \Consilience\XeroAccounting\Sdk\Model\BookDepreciationSetting $bookDepreciationSetting bookDepreciationSetting
     *
     * @return $this
     */
    public function setBookDepreciationSetting($bookDepreciationSetting)
    {
        $this->container['bookDepreciationSetting'] = $bookDepreciationSetting;

        return $this;
    }

    /**
     * Gets locks
     *
     * @return int|null
     */
    public function getLocks()
    {
        return $this->container['locks'];
    }

    /**
     * Sets locks
     *
     * @param int|null $locks All asset types that have accumulated depreciation for any assets that use them are deemed ‘locked’ and cannot be removed.
     *
     * @return $this
     */
    public function setLocks($locks)
    {
        $this->container['locks'] = $locks;

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
     * Return the JSON serialisable data for this model.
     *
     * @return string|object
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * return a property value.
     *
     * @param string $name Name of the property
     * @param mixed $default Value if property is not set
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
