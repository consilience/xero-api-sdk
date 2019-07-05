<?php

namespace Consilience\Xero\AccountingSdk\Model;

/**
 * TenNinteyNineContact
 *
 * PHP version 5
 *
 * @category Class
 * @package  Consilience\Xero\AccountingSdk
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
 * OpenAPI Generator version: 4.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

use ArrayAccess;
use JsonSerializable;
use Consilience\Xero\AccountingSdk\ObjectSerializer;

/**
 * TenNinteyNineContact Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\AccountingSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TenNinteyNineContact implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TenNinteyNineContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'box1' => 'double',
        'box2' => 'double',
        'box3' => 'double',
        'box4' => 'double',
        'box5' => 'double',
        'box6' => 'double',
        'box7' => 'double',
        'box8' => 'double',
        'box9' => 'double',
        'box10' => 'double',
        'box11' => 'double',
        'box13' => 'double',
        'box14' => 'double',
        'name' => 'string',
        'federalTaxIDType' => 'string',
        'city' => 'string',
        'zip' => 'string',
        'state' => 'string',
        'email' => 'string',
        'streetAddress' => 'string',
        'taxID' => 'string',
        'contactId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'box1' => 'double',
        'box2' => 'double',
        'box3' => 'double',
        'box4' => 'double',
        'box5' => 'double',
        'box6' => 'double',
        'box7' => 'double',
        'box8' => 'double',
        'box9' => 'double',
        'box10' => 'double',
        'box11' => 'double',
        'box13' => 'double',
        'box14' => 'double',
        'name' => null,
        'federalTaxIDType' => null,
        'city' => null,
        'zip' => null,
        'state' => null,
        'email' => null,
        'streetAddress' => null,
        'taxID' => null,
        'contactId' => 'uuid'
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
        'box1' => 'Box1',
        'box2' => 'Box2',
        'box3' => 'Box3',
        'box4' => 'Box4',
        'box5' => 'Box5',
        'box6' => 'Box6',
        'box7' => 'Box7',
        'box8' => 'Box8',
        'box9' => 'Box9',
        'box10' => 'Box10',
        'box11' => 'Box11',
        'box13' => 'Box13',
        'box14' => 'Box14',
        'name' => 'Name',
        'federalTaxIDType' => 'FederalTaxIDType',
        'city' => 'City',
        'zip' => 'Zip',
        'state' => 'State',
        'email' => 'Email',
        'streetAddress' => 'StreetAddress',
        'taxID' => 'TaxID',
        'contactId' => 'ContactId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'box1' => 'setBox1',
        'box2' => 'setBox2',
        'box3' => 'setBox3',
        'box4' => 'setBox4',
        'box5' => 'setBox5',
        'box6' => 'setBox6',
        'box7' => 'setBox7',
        'box8' => 'setBox8',
        'box9' => 'setBox9',
        'box10' => 'setBox10',
        'box11' => 'setBox11',
        'box13' => 'setBox13',
        'box14' => 'setBox14',
        'name' => 'setName',
        'federalTaxIDType' => 'setFederalTaxIDType',
        'city' => 'setCity',
        'zip' => 'setZip',
        'state' => 'setState',
        'email' => 'setEmail',
        'streetAddress' => 'setStreetAddress',
        'taxID' => 'setTaxID',
        'contactId' => 'setContactId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'box1' => 'getBox1',
        'box2' => 'getBox2',
        'box3' => 'getBox3',
        'box4' => 'getBox4',
        'box5' => 'getBox5',
        'box6' => 'getBox6',
        'box7' => 'getBox7',
        'box8' => 'getBox8',
        'box9' => 'getBox9',
        'box10' => 'getBox10',
        'box11' => 'getBox11',
        'box13' => 'getBox13',
        'box14' => 'getBox14',
        'name' => 'getName',
        'federalTaxIDType' => 'getFederalTaxIDType',
        'city' => 'getCity',
        'zip' => 'getZip',
        'state' => 'getState',
        'email' => 'getEmail',
        'streetAddress' => 'getStreetAddress',
        'taxID' => 'getTaxID',
        'contactId' => 'getContactId'
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
        $this->container['box1'] = isset($data['box1']) ? $data['box1'] : null;
        $this->container['box2'] = isset($data['box2']) ? $data['box2'] : null;
        $this->container['box3'] = isset($data['box3']) ? $data['box3'] : null;
        $this->container['box4'] = isset($data['box4']) ? $data['box4'] : null;
        $this->container['box5'] = isset($data['box5']) ? $data['box5'] : null;
        $this->container['box6'] = isset($data['box6']) ? $data['box6'] : null;
        $this->container['box7'] = isset($data['box7']) ? $data['box7'] : null;
        $this->container['box8'] = isset($data['box8']) ? $data['box8'] : null;
        $this->container['box9'] = isset($data['box9']) ? $data['box9'] : null;
        $this->container['box10'] = isset($data['box10']) ? $data['box10'] : null;
        $this->container['box11'] = isset($data['box11']) ? $data['box11'] : null;
        $this->container['box13'] = isset($data['box13']) ? $data['box13'] : null;
        $this->container['box14'] = isset($data['box14']) ? $data['box14'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['federalTaxIDType'] = isset($data['federalTaxIDType']) ? $data['federalTaxIDType'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['streetAddress'] = isset($data['streetAddress']) ? $data['streetAddress'] : null;
        $this->container['taxID'] = isset($data['taxID']) ? $data['taxID'] : null;
        $this->container['contactId'] = isset($data['contactId']) ? $data['contactId'] : null;
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
     * Gets box1
     *
     * @return double|null
     */
    public function getBox1()
    {
        return $this->container['box1'];
    }

    /**
     * Sets box1
     *
     * @param double|null $box1 Box 1 on 1099 Form
     *
     * @return $this
     */
    public function setBox1($box1)
    {
        $this->container['box1'] = $box1;

        return $this;
    }

    /**
     * Gets box2
     *
     * @return double|null
     */
    public function getBox2()
    {
        return $this->container['box2'];
    }

    /**
     * Sets box2
     *
     * @param double|null $box2 Box 2 on 1099 Form
     *
     * @return $this
     */
    public function setBox2($box2)
    {
        $this->container['box2'] = $box2;

        return $this;
    }

    /**
     * Gets box3
     *
     * @return double|null
     */
    public function getBox3()
    {
        return $this->container['box3'];
    }

    /**
     * Sets box3
     *
     * @param double|null $box3 Box 3 on 1099 Form
     *
     * @return $this
     */
    public function setBox3($box3)
    {
        $this->container['box3'] = $box3;

        return $this;
    }

    /**
     * Gets box4
     *
     * @return double|null
     */
    public function getBox4()
    {
        return $this->container['box4'];
    }

    /**
     * Sets box4
     *
     * @param double|null $box4 Box 4 on 1099 Form
     *
     * @return $this
     */
    public function setBox4($box4)
    {
        $this->container['box4'] = $box4;

        return $this;
    }

    /**
     * Gets box5
     *
     * @return double|null
     */
    public function getBox5()
    {
        return $this->container['box5'];
    }

    /**
     * Sets box5
     *
     * @param double|null $box5 Box 5 on 1099 Form
     *
     * @return $this
     */
    public function setBox5($box5)
    {
        $this->container['box5'] = $box5;

        return $this;
    }

    /**
     * Gets box6
     *
     * @return double|null
     */
    public function getBox6()
    {
        return $this->container['box6'];
    }

    /**
     * Sets box6
     *
     * @param double|null $box6 Box 6 on 1099 Form
     *
     * @return $this
     */
    public function setBox6($box6)
    {
        $this->container['box6'] = $box6;

        return $this;
    }

    /**
     * Gets box7
     *
     * @return double|null
     */
    public function getBox7()
    {
        return $this->container['box7'];
    }

    /**
     * Sets box7
     *
     * @param double|null $box7 Box 7 on 1099 Form
     *
     * @return $this
     */
    public function setBox7($box7)
    {
        $this->container['box7'] = $box7;

        return $this;
    }

    /**
     * Gets box8
     *
     * @return double|null
     */
    public function getBox8()
    {
        return $this->container['box8'];
    }

    /**
     * Sets box8
     *
     * @param double|null $box8 Box 8 on 1099 Form
     *
     * @return $this
     */
    public function setBox8($box8)
    {
        $this->container['box8'] = $box8;

        return $this;
    }

    /**
     * Gets box9
     *
     * @return double|null
     */
    public function getBox9()
    {
        return $this->container['box9'];
    }

    /**
     * Sets box9
     *
     * @param double|null $box9 Box 9 on 1099 Form
     *
     * @return $this
     */
    public function setBox9($box9)
    {
        $this->container['box9'] = $box9;

        return $this;
    }

    /**
     * Gets box10
     *
     * @return double|null
     */
    public function getBox10()
    {
        return $this->container['box10'];
    }

    /**
     * Sets box10
     *
     * @param double|null $box10 Box 10 on 1099 Form
     *
     * @return $this
     */
    public function setBox10($box10)
    {
        $this->container['box10'] = $box10;

        return $this;
    }

    /**
     * Gets box11
     *
     * @return double|null
     */
    public function getBox11()
    {
        return $this->container['box11'];
    }

    /**
     * Sets box11
     *
     * @param double|null $box11 Box 11 on 1099 Form
     *
     * @return $this
     */
    public function setBox11($box11)
    {
        $this->container['box11'] = $box11;

        return $this;
    }

    /**
     * Gets box13
     *
     * @return double|null
     */
    public function getBox13()
    {
        return $this->container['box13'];
    }

    /**
     * Sets box13
     *
     * @param double|null $box13 Box 13 on 1099 Form
     *
     * @return $this
     */
    public function setBox13($box13)
    {
        $this->container['box13'] = $box13;

        return $this;
    }

    /**
     * Gets box14
     *
     * @return double|null
     */
    public function getBox14()
    {
        return $this->container['box14'];
    }

    /**
     * Sets box14
     *
     * @param double|null $box14 Box 14 on 1099 Form
     *
     * @return $this
     */
    public function setBox14($box14)
    {
        $this->container['box14'] = $box14;

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
     * @param string|null $name Contact name on 1099 Form
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets federalTaxIDType
     *
     * @return string|null
     */
    public function getFederalTaxIDType()
    {
        return $this->container['federalTaxIDType'];
    }

    /**
     * Sets federalTaxIDType
     *
     * @param string|null $federalTaxIDType Contact Fed Tax ID type
     *
     * @return $this
     */
    public function setFederalTaxIDType($federalTaxIDType)
    {
        $this->container['federalTaxIDType'] = $federalTaxIDType;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city Contact city on 1099 Form
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string|null
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string|null $zip Contact zip on 1099 Form
     *
     * @return $this
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state Contact State on 1099 Form
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Contact email on 1099 Form
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets streetAddress
     *
     * @return string|null
     */
    public function getStreetAddress()
    {
        return $this->container['streetAddress'];
    }

    /**
     * Sets streetAddress
     *
     * @param string|null $streetAddress Contact address on 1099 Form
     *
     * @return $this
     */
    public function setStreetAddress($streetAddress)
    {
        $this->container['streetAddress'] = $streetAddress;

        return $this;
    }

    /**
     * Gets taxID
     *
     * @return string|null
     */
    public function getTaxID()
    {
        return $this->container['taxID'];
    }

    /**
     * Sets taxID
     *
     * @param string|null $taxID Contact tax id on 1099 Form
     *
     * @return $this
     */
    public function setTaxID($taxID)
    {
        $this->container['taxID'] = $taxID;

        return $this;
    }

    /**
     * Gets contactId
     *
     * @return string|null
     */
    public function getContactId()
    {
        return $this->container['contactId'];
    }

    /**
     * Sets contactId
     *
     * @param string|null $contactId Contact contact id
     *
     * @return $this
     */
    public function setContactId($contactId)
    {
        $this->container['contactId'] = $contactId;

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
