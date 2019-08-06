<?php

namespace Consilience\Xero\PayrollAuSdk\Model;

/**
 * SuperMembership
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Consilience\Xero\PayrollAuSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */

/**
 * Payroll - AU
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * 
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
use Consilience\Xero\PayrollAuSdk\ObjectSerializer;

/**
 * SuperMembership Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\PayrollAuSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class SuperMembership implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SuperMembership';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'superFundID' => 'string',
        'employeeNumber' => 'string',
        'superMembershipID' => 'string',
        'employeeID' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'superFundID' => 'uuid',
        'employeeNumber' => null,
        'superMembershipID' => 'uuid',
        'employeeID' => 'uuid'
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
        'superFundID' => 'SuperFundID',
        'employeeNumber' => 'EmployeeNumber',
        'superMembershipID' => 'SuperMembershipID',
        'employeeID' => 'EmployeeID'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'superFundID' => 'setSuperFundID',
        'employeeNumber' => 'setEmployeeNumber',
        'superMembershipID' => 'setSuperMembershipID',
        'employeeID' => 'setEmployeeID'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'superFundID' => 'getSuperFundID',
        'employeeNumber' => 'getEmployeeNumber',
        'superMembershipID' => 'getSuperMembershipID',
        'employeeID' => 'getEmployeeID'
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
        $this->container['superFundID'] = $data['superFundID'] ?? null;
        $this->container['employeeNumber'] = $data['employeeNumber'] ?? null;
        $this->container['superMembershipID'] = $data['superMembershipID'] ?? null;
        $this->container['employeeID'] = $data['employeeID'] ?? null;
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
     * Gets superFundID
     *
     * @return string|null
     */
    public function getSuperFundID()
    {
        return $this->get('superFundID');
    }

    /**
     * Sets superFundID
     *
     * @param string|null $superFundID Xero identifier for super fund
     *
     * @return $this
     */
    public function setSuperFundID($superFundID)
    {
        $this->container['superFundID'] = $superFundID;

        return $this;
    }

    /**
     * Gets employeeNumber
     *
     * @return string|null
     */
    public function getEmployeeNumber()
    {
        return $this->get('employeeNumber');
    }

    /**
     * Sets employeeNumber
     *
     * @param string|null $employeeNumber The memberhsip number assigned to the employee by the super fund.
     *
     * @return $this
     */
    public function setEmployeeNumber($employeeNumber)
    {
        $this->container['employeeNumber'] = $employeeNumber;

        return $this;
    }

    /**
     * Gets superMembershipID
     *
     * @return string|null
     */
    public function getSuperMembershipID()
    {
        return $this->get('superMembershipID');
    }

    /**
     * Sets superMembershipID
     *
     * @param string|null $superMembershipID Xero unique identifier for Super membership
     *
     * @return $this
     */
    public function setSuperMembershipID($superMembershipID)
    {
        $this->container['superMembershipID'] = $superMembershipID;

        return $this;
    }

    /**
     * Gets employeeID
     *
     * @return string|null
     */
    public function getEmployeeID()
    {
        return $this->get('employeeID');
    }

    /**
     * Sets employeeID
     *
     * @param string|null $employeeID The Xero identifier for an employee e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     *
     * @return $this
     */
    public function setEmployeeID($employeeID)
    {
        $this->container['employeeID'] = $employeeID;

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