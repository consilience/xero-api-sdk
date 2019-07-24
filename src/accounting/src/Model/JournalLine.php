<?php

namespace Consilience\Xero\AccountingSdk\Model;

/**
 * JournalLine
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
 * OpenAPI Generator version: 4.0.3
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
 * JournalLine Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\AccountingSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class JournalLine implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JournalLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'journalLineID' => 'string',
        'accountID' => 'string',
        'accountCode' => 'string',
        'accountType' => '\Consilience\Xero\AccountingSdk\Model\AccountType',
        'accountName' => 'string',
        'description' => 'string',
        'netAmount' => 'double',
        'grossAmount' => 'double',
        'taxAmount' => 'double',
        'taxType' => 'string',
        'taxName' => 'string',
        'trackingCategories' => '\Consilience\Xero\AccountingSdk\Model\TrackingCategory[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'journalLineID' => 'uuid',
        'accountID' => 'uuid',
        'accountCode' => null,
        'accountType' => null,
        'accountName' => null,
        'description' => null,
        'netAmount' => 'double',
        'grossAmount' => 'double',
        'taxAmount' => 'double',
        'taxType' => null,
        'taxName' => null,
        'trackingCategories' => null
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
        'journalLineID' => 'JournalLineID',
        'accountID' => 'AccountID',
        'accountCode' => 'AccountCode',
        'accountType' => 'AccountType',
        'accountName' => 'AccountName',
        'description' => 'Description',
        'netAmount' => 'NetAmount',
        'grossAmount' => 'GrossAmount',
        'taxAmount' => 'TaxAmount',
        'taxType' => 'TaxType',
        'taxName' => 'TaxName',
        'trackingCategories' => 'TrackingCategories'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'journalLineID' => 'setJournalLineID',
        'accountID' => 'setAccountID',
        'accountCode' => 'setAccountCode',
        'accountType' => 'setAccountType',
        'accountName' => 'setAccountName',
        'description' => 'setDescription',
        'netAmount' => 'setNetAmount',
        'grossAmount' => 'setGrossAmount',
        'taxAmount' => 'setTaxAmount',
        'taxType' => 'setTaxType',
        'taxName' => 'setTaxName',
        'trackingCategories' => 'setTrackingCategories'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'journalLineID' => 'getJournalLineID',
        'accountID' => 'getAccountID',
        'accountCode' => 'getAccountCode',
        'accountType' => 'getAccountType',
        'accountName' => 'getAccountName',
        'description' => 'getDescription',
        'netAmount' => 'getNetAmount',
        'grossAmount' => 'getGrossAmount',
        'taxAmount' => 'getTaxAmount',
        'taxType' => 'getTaxType',
        'taxName' => 'getTaxName',
        'trackingCategories' => 'getTrackingCategories'
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
        $this->container['journalLineID'] = $data['journalLineID'] ?? null;
        $this->container['accountID'] = $data['accountID'] ?? null;
        $this->container['accountCode'] = $data['accountCode'] ?? null;
        $this->container['accountType'] = $data['accountType'] ?? null;
        $this->container['accountName'] = $data['accountName'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['netAmount'] = $data['netAmount'] ?? null;
        $this->container['grossAmount'] = $data['grossAmount'] ?? null;
        $this->container['taxAmount'] = $data['taxAmount'] ?? null;
        $this->container['taxType'] = $data['taxType'] ?? null;
        $this->container['taxName'] = $data['taxName'] ?? null;
        $this->container['trackingCategories'] = $data['trackingCategories'] ?? null;
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
     * Gets journalLineID
     *
     * @return string|null
     */
    public function getJournalLineID()
    {
        return $this->get('journalLineID');
    }

    /**
     * Sets journalLineID
     *
     * @param string|null $journalLineID Xero identifier for Journal
     *
     * @return $this
     */
    public function setJournalLineID($journalLineID)
    {
        $this->container['journalLineID'] = $journalLineID;

        return $this;
    }

    /**
     * Gets accountID
     *
     * @return string|null
     */
    public function getAccountID()
    {
        return $this->get('accountID');
    }

    /**
     * Sets accountID
     *
     * @param string|null $accountID See Accounts
     *
     * @return $this
     */
    public function setAccountID($accountID)
    {
        $this->container['accountID'] = $accountID;

        return $this;
    }

    /**
     * Gets accountCode
     *
     * @return string|null
     */
    public function getAccountCode()
    {
        return $this->get('accountCode');
    }

    /**
     * Sets accountCode
     *
     * @param string|null $accountCode See Accounts
     *
     * @return $this
     */
    public function setAccountCode($accountCode)
    {
        $this->container['accountCode'] = $accountCode;

        return $this;
    }

    /**
     * Gets accountType
     *
     * @return \Consilience\Xero\AccountingSdk\Model\AccountType|null
     */
    public function getAccountType()
    {
        return $this->get('accountType');
    }

    /**
     * Sets accountType
     *
     * @param \Consilience\Xero\AccountingSdk\Model\AccountType|null $accountType accountType
     *
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->container['accountType'] = $accountType;

        return $this;
    }

    /**
     * Gets accountName
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->get('accountName');
    }

    /**
     * Sets accountName
     *
     * @param string|null $accountName See AccountCodes
     *
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get('description');
    }

    /**
     * Sets description
     *
     * @param string|null $description The description from the source transaction line item. Only returned if populated.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets netAmount
     *
     * @return double|null
     */
    public function getNetAmount()
    {
        return $this->get('netAmount');
    }

    /**
     * Sets netAmount
     *
     * @param double|null $netAmount Net amount of journal line. This will be a positive value for a debit and negative for a credit
     *
     * @return $this
     */
    public function setNetAmount($netAmount)
    {
        $this->container['netAmount'] = $netAmount;

        return $this;
    }

    /**
     * Gets grossAmount
     *
     * @return double|null
     */
    public function getGrossAmount()
    {
        return $this->get('grossAmount');
    }

    /**
     * Sets grossAmount
     *
     * @param double|null $grossAmount Gross amount of journal line (NetAmount + TaxAmount).
     *
     * @return $this
     */
    public function setGrossAmount($grossAmount)
    {
        $this->container['grossAmount'] = $grossAmount;

        return $this;
    }

    /**
     * Gets taxAmount
     *
     * @return double|null
     */
    public function getTaxAmount()
    {
        return $this->get('taxAmount');
    }

    /**
     * Sets taxAmount
     *
     * @param double|null $taxAmount Total tax on a journal line
     *
     * @return $this
     */
    public function setTaxAmount($taxAmount)
    {
        $this->container['taxAmount'] = $taxAmount;

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
     * @param string|null $taxType The tax type from TaxRates
     *
     * @return $this
     */
    public function setTaxType($taxType)
    {
        $this->container['taxType'] = $taxType;

        return $this;
    }

    /**
     * Gets taxName
     *
     * @return string|null
     */
    public function getTaxName()
    {
        return $this->get('taxName');
    }

    /**
     * Sets taxName
     *
     * @param string|null $taxName see TaxRates
     *
     * @return $this
     */
    public function setTaxName($taxName)
    {
        $this->container['taxName'] = $taxName;

        return $this;
    }

    /**
     * Gets trackingCategories
     *
     * @return \Consilience\Xero\AccountingSdk\Model\TrackingCategory[]|null
     */
    public function getTrackingCategories()
    {
        return $this->get('trackingCategories');
    }

    /**
     * Sets trackingCategories
     *
     * @param \Consilience\Xero\AccountingSdk\Model\TrackingCategory[]|null $trackingCategories Optional Tracking Category – see Tracking. Any JournalLine can have a maximum of 2 <TrackingCategory> elements.
     *
     * @return $this
     */
    public function setTrackingCategories($trackingCategories)
    {
        $this->container['trackingCategories'] = $trackingCategories;

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
