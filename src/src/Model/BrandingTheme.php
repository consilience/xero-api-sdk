<?php

namespace Consilience\XeroAccounting\Sdk\Model;

/**
 * BrandingTheme
 *
 * PHP version 5
 *
 * @category Class
 * @package  Consilience\XeroAccounting\Sdk
 * @author   OpenAPI Generator team
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
 * BrandingTheme Class Doc Comment
 *
 * @category Class
 * @package  Consilience\XeroAccounting\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BrandingTheme implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BrandingTheme';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brandingThemeID' => 'string',
        'name' => 'string',
        'sortOrder' => 'int',
        'createdDateUTC' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'brandingThemeID' => 'uuid',
        'name' => null,
        'sortOrder' => null,
        'createdDateUTC' => 'date-time'
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
        'brandingThemeID' => 'BrandingThemeID',
        'name' => 'Name',
        'sortOrder' => 'SortOrder',
        'createdDateUTC' => 'CreatedDateUTC'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brandingThemeID' => 'setBrandingThemeID',
        'name' => 'setName',
        'sortOrder' => 'setSortOrder',
        'createdDateUTC' => 'setCreatedDateUTC'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brandingThemeID' => 'getBrandingThemeID',
        'name' => 'getName',
        'sortOrder' => 'getSortOrder',
        'createdDateUTC' => 'getCreatedDateUTC'
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
        $this->container['brandingThemeID'] = isset($data['brandingThemeID']) ? $data['brandingThemeID'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sortOrder'] = isset($data['sortOrder']) ? $data['sortOrder'] : null;
        $this->container['createdDateUTC'] = isset($data['createdDateUTC']) ? $data['createdDateUTC'] : null;
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
     * Gets brandingThemeID
     *
     * @return string|null
     */
    public function getBrandingThemeID()
    {
        return $this->container['brandingThemeID'];
    }

    /**
     * Sets brandingThemeID
     *
     * @param string|null $brandingThemeID Xero identifier
     *
     * @return $this
     */
    public function setBrandingThemeID($brandingThemeID)
    {
        $this->container['brandingThemeID'] = $brandingThemeID;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of branding theme
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets sortOrder
     *
     * @return int|null
     */
    public function getSortOrder()
    {
        return $this->container['sortOrder'];
    }

    /**
     * Sets sortOrder
     *
     * @param int|null $sortOrder Integer – ranked order of branding theme. The default branding theme has a value of 0
     *
     * @return $this
     */
    public function setSortOrder($sortOrder)
    {
        $this->container['sortOrder'] = $sortOrder;

        return $this;
    }

    /**
     * Gets createdDateUTC
     *
     * @return \DateTime|null
     */
    public function getCreatedDateUTC()
    {
        return $this->container['createdDateUTC'];
    }

    /**
     * Sets createdDateUTC
     *
     * @param \DateTime|null $createdDateUTC UTC timestamp of creation date of branding theme
     *
     * @return $this
     */
    public function setCreatedDateUTC($createdDateUTC)
    {
        $this->container['createdDateUTC'] = $createdDateUTC;

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
