<?php

namespace Consilience\Xero\FilesSdk\Model;

/**
 * Files
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

use ArrayAccess;
use JsonSerializable;
use Consilience\Xero\FilesSdk\ObjectSerializer;

/**
 * Files Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\FilesSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class Files implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Files';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'totalCount' => 'int',
        'page' => 'int',
        'perPage' => 'int',
        'items' => '\Consilience\Xero\FilesSdk\Model\FileObject[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'totalCount' => null,
        'page' => null,
        'perPage' => null,
        'items' => null
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
        'totalCount' => 'TotalCount',
        'page' => 'Page',
        'perPage' => 'PerPage',
        'items' => 'Items'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'totalCount' => 'setTotalCount',
        'page' => 'setPage',
        'perPage' => 'setPerPage',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'totalCount' => 'getTotalCount',
        'page' => 'getPage',
        'perPage' => 'getPerPage',
        'items' => 'getItems'
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
        $this->container['totalCount'] = $data['totalCount'] ?? null;
        $this->container['page'] = $data['page'] ?? null;
        $this->container['perPage'] = $data['perPage'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
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
     * Gets totalCount
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->get('totalCount');
    }

    /**
     * Sets totalCount
     *
     * @param int|null $totalCount totalCount
     *
     * @return $this
     */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int|null
     */
    public function getPage()
    {
        return $this->get('page');
    }

    /**
     * Sets page
     *
     * @param int|null $page page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets perPage
     *
     * @return int|null
     */
    public function getPerPage()
    {
        return $this->get('perPage');
    }

    /**
     * Sets perPage
     *
     * @param int|null $perPage perPage
     *
     * @return $this
     */
    public function setPerPage($perPage)
    {
        $this->container['perPage'] = $perPage;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Consilience\Xero\FilesSdk\Model\FileObject[]|null
     */
    public function getItems()
    {
        return $this->get('items');
    }

    /**
     * Sets items
     *
     * @param \Consilience\Xero\FilesSdk\Model\FileObject[]|null $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
