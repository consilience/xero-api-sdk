<?php

namespace Consilience\Xero\FilesSdk\Model;

/**
 * FileUpload
 *
 * PHP version 5
 *
 * @category Class
 * @package  Consilience\Xero\FilesSdk
 * @author   OpenAPI Generator team
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
 * OpenAPI Generator version: 4.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

use ArrayAccess;
use JsonSerializable;
use Consilience\Xero\FilesSdk\ObjectSerializer;

/**
 * FileUpload Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\FilesSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FileUpload implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FileUpload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'body' => 'string',
        'name' => 'string',
        'filename' => 'string',
        'mimeType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'body' => 'byte',
        'name' => null,
        'filename' => null,
        'mimeType' => null
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
        'body' => 'body',
        'name' => 'name',
        'filename' => 'filename',
        'mimeType' => 'mimeType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'body' => 'setBody',
        'name' => 'setName',
        'filename' => 'setFilename',
        'mimeType' => 'setMimeType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'body' => 'getBody',
        'name' => 'getName',
        'filename' => 'getFilename',
        'mimeType' => 'getMimeType'
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
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['mimeType'] = isset($data['mimeType']) ? $data['mimeType'] : null;
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
     * Gets body
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string|null $body body
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

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
     * @param string|null $name exact name of the file you are uploading
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets filename
     *
     * @return string|null
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string|null $filename filename
     *
     * @return $this
     */
    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets mimeType
     *
     * @return string|null
     */
    public function getMimeType()
    {
        return $this->container['mimeType'];
    }

    /**
     * Sets mimeType
     *
     * @param string|null $mimeType mimeType
     *
     * @return $this
     */
    public function setMimeType($mimeType)
    {
        $this->container['mimeType'] = $mimeType;

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
