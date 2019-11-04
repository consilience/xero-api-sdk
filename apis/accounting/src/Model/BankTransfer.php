<?php

namespace Consilience\Xero\AccountingSdk\Model;

/**
 * BankTransfer
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
use Consilience\Xero\AccountingSdk\ObjectSerializer;

/**
 * BankTransfer Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\AccountingSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class BankTransfer implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BankTransfer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fromBankAccount' => '\Consilience\Xero\AccountingSdk\Model\Account',
        'toBankAccount' => '\Consilience\Xero\AccountingSdk\Model\Account',
        'amount' => 'string',
        'date' => '\DateTime',
        'bankTransferID' => 'string',
        'currencyRate' => 'double',
        'fromBankTransactionID' => 'string',
        'toBankTransactionID' => 'string',
        'hasAttachments' => 'bool',
        'createdDateUTC' => '\DateTime',
        'validationErrors' => '\Consilience\Xero\AccountingSdk\Model\ValidationError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'fromBankAccount' => null,
        'toBankAccount' => null,
        'amount' => null,
        'date' => 'date',
        'bankTransferID' => 'uuid',
        'currencyRate' => 'double',
        'fromBankTransactionID' => 'uuid',
        'toBankTransactionID' => 'uuid',
        'hasAttachments' => null,
        'createdDateUTC' => 'date-time',
        'validationErrors' => null
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
        'fromBankAccount' => 'FromBankAccount',
        'toBankAccount' => 'ToBankAccount',
        'amount' => 'Amount',
        'date' => 'Date',
        'bankTransferID' => 'BankTransferID',
        'currencyRate' => 'CurrencyRate',
        'fromBankTransactionID' => 'FromBankTransactionID',
        'toBankTransactionID' => 'ToBankTransactionID',
        'hasAttachments' => 'HasAttachments',
        'createdDateUTC' => 'CreatedDateUTC',
        'validationErrors' => 'ValidationErrors'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'fromBankAccount' => 'setFromBankAccount',
        'toBankAccount' => 'setToBankAccount',
        'amount' => 'setAmount',
        'date' => 'setDate',
        'bankTransferID' => 'setBankTransferID',
        'currencyRate' => 'setCurrencyRate',
        'fromBankTransactionID' => 'setFromBankTransactionID',
        'toBankTransactionID' => 'setToBankTransactionID',
        'hasAttachments' => 'setHasAttachments',
        'createdDateUTC' => 'setCreatedDateUTC',
        'validationErrors' => 'setValidationErrors'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'fromBankAccount' => 'getFromBankAccount',
        'toBankAccount' => 'getToBankAccount',
        'amount' => 'getAmount',
        'date' => 'getDate',
        'bankTransferID' => 'getBankTransferID',
        'currencyRate' => 'getCurrencyRate',
        'fromBankTransactionID' => 'getFromBankTransactionID',
        'toBankTransactionID' => 'getToBankTransactionID',
        'hasAttachments' => 'getHasAttachments',
        'createdDateUTC' => 'getCreatedDateUTC',
        'validationErrors' => 'getValidationErrors'
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
        $this->container['fromBankAccount'] = $data['fromBankAccount'] ?? null;
        $this->container['toBankAccount'] = $data['toBankAccount'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['date'] = $data['date'] ?? null;
        $this->container['bankTransferID'] = $data['bankTransferID'] ?? null;
        $this->container['currencyRate'] = $data['currencyRate'] ?? null;
        $this->container['fromBankTransactionID'] = $data['fromBankTransactionID'] ?? null;
        $this->container['toBankTransactionID'] = $data['toBankTransactionID'] ?? null;
        $this->container['hasAttachments'] = $data['hasAttachments'] ?? null;
        $this->container['createdDateUTC'] = $data['createdDateUTC'] ?? null;
        $this->container['validationErrors'] = $data['validationErrors'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fromBankAccount'] === null) {
            $invalidProperties[] = sprintf('"%s" can\'t be null', 'fromBankAccount');
        }
        if ($this->container['toBankAccount'] === null) {
            $invalidProperties[] = sprintf('"%s" can\'t be null', 'toBankAccount');
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = sprintf('"%s" can\'t be null', 'amount');
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
     * Gets fromBankAccount
     *
     * @return \Consilience\Xero\AccountingSdk\Model\Account
     */
    public function getFromBankAccount()
    {
        return $this->get('fromBankAccount');
    }

    /**
     * Sets fromBankAccount
     *
     * @param \Consilience\Xero\AccountingSdk\Model\Account $fromBankAccount fromBankAccount
     *
     * @return $this
     */
    public function setFromBankAccount($fromBankAccount)
    {
        $this->container['fromBankAccount'] = $fromBankAccount;

        return $this;
    }

    /**
     * Gets toBankAccount
     *
     * @return \Consilience\Xero\AccountingSdk\Model\Account
     */
    public function getToBankAccount()
    {
        return $this->get('toBankAccount');
    }

    /**
     * Sets toBankAccount
     *
     * @param \Consilience\Xero\AccountingSdk\Model\Account $toBankAccount toBankAccount
     *
     * @return $this
     */
    public function setToBankAccount($toBankAccount)
    {
        $this->container['toBankAccount'] = $toBankAccount;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->get('amount');
    }

    /**
     * Sets amount
     *
     * @param string $amount amount of the transaction
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->get('date');
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date The date of the Transfer YYYY-MM-DD
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets bankTransferID
     *
     * @return string|null
     */
    public function getBankTransferID()
    {
        return $this->get('bankTransferID');
    }

    /**
     * Sets bankTransferID
     *
     * @param string|null $bankTransferID The identifier of the Bank Transfer
     *
     * @return $this
     */
    public function setBankTransferID($bankTransferID)
    {
        $this->container['bankTransferID'] = $bankTransferID;

        return $this;
    }

    /**
     * Gets currencyRate
     *
     * @return double|null
     */
    public function getCurrencyRate()
    {
        return $this->get('currencyRate');
    }

    /**
     * Sets currencyRate
     *
     * @param double|null $currencyRate The currency rate
     *
     * @return $this
     */
    public function setCurrencyRate($currencyRate)
    {
        $this->container['currencyRate'] = $currencyRate;

        return $this;
    }

    /**
     * Gets fromBankTransactionID
     *
     * @return string|null
     */
    public function getFromBankTransactionID()
    {
        return $this->get('fromBankTransactionID');
    }

    /**
     * Sets fromBankTransactionID
     *
     * @param string|null $fromBankTransactionID The Bank Transaction ID for the source account
     *
     * @return $this
     */
    public function setFromBankTransactionID($fromBankTransactionID)
    {
        $this->container['fromBankTransactionID'] = $fromBankTransactionID;

        return $this;
    }

    /**
     * Gets toBankTransactionID
     *
     * @return string|null
     */
    public function getToBankTransactionID()
    {
        return $this->get('toBankTransactionID');
    }

    /**
     * Sets toBankTransactionID
     *
     * @param string|null $toBankTransactionID The Bank Transaction ID for the destination account
     *
     * @return $this
     */
    public function setToBankTransactionID($toBankTransactionID)
    {
        $this->container['toBankTransactionID'] = $toBankTransactionID;

        return $this;
    }

    /**
     * Gets hasAttachments
     *
     * @return bool|null
     */
    public function getHasAttachments()
    {
        return $this->get('hasAttachments');
    }

    /**
     * Sets hasAttachments
     *
     * @param bool|null $hasAttachments Boolean to indicate if a Bank Transfer has an attachment
     *
     * @return $this
     */
    public function setHasAttachments($hasAttachments)
    {
        $this->container['hasAttachments'] = $hasAttachments;

        return $this;
    }

    /**
     * Gets createdDateUTC
     *
     * @return \DateTime|null
     */
    public function getCreatedDateUTC()
    {
        return $this->get('createdDateUTC');
    }

    /**
     * Sets createdDateUTC
     *
     * @param \DateTime|null $createdDateUTC UTC timestamp of creation date of bank transfer
     *
     * @return $this
     */
    public function setCreatedDateUTC($createdDateUTC)
    {
        $this->container['createdDateUTC'] = $createdDateUTC;

        return $this;
    }

    /**
     * Gets validationErrors
     *
     * @return \Consilience\Xero\AccountingSdk\Model\ValidationError[]|null
     */
    public function getValidationErrors()
    {
        return $this->get('validationErrors');
    }

    /**
     * Sets validationErrors
     *
     * @param \Consilience\Xero\AccountingSdk\Model\ValidationError[]|null $validationErrors Displays array of validation error messages from the API
     *
     * @return $this
     */
    public function setValidationErrors($validationErrors)
    {
        $this->container['validationErrors'] = $validationErrors;

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
