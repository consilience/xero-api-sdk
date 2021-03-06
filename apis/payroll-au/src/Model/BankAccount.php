<?php

namespace Consilience\Xero\PayrollAuSdk\Model;

/**
 * BankAccount
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
 * BankAccount Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\PayrollAuSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class BankAccount implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BankAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'statementText' => 'string',
        'accountName' => 'string',
        'bSB' => 'string',
        'accountNumber' => 'string',
        'remainder' => 'string',
        'amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'statementText' => null,
        'accountName' => null,
        'bSB' => null,
        'accountNumber' => null,
        'remainder' => null,
        'amount' => 'float'
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
        'statementText' => 'StatementText',
        'accountName' => 'AccountName',
        'bSB' => 'BSB',
        'accountNumber' => 'AccountNumber',
        'remainder' => 'Remainder',
        'amount' => 'Amount'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'statementText' => 'setStatementText',
        'accountName' => 'setAccountName',
        'bSB' => 'setBSB',
        'accountNumber' => 'setAccountNumber',
        'remainder' => 'setRemainder',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'statementText' => 'getStatementText',
        'accountName' => 'getAccountName',
        'bSB' => 'getBSB',
        'accountNumber' => 'getAccountNumber',
        'remainder' => 'getRemainder',
        'amount' => 'getAmount'
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
        $this->container['statementText'] = $data['statementText'] ?? null;
        $this->container['accountName'] = $data['accountName'] ?? null;
        $this->container['bSB'] = $data['bSB'] ?? null;
        $this->container['accountNumber'] = $data['accountNumber'] ?? null;
        $this->container['remainder'] = $data['remainder'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (! is_null($this->container['statementText']) && (mb_strlen($this->container['statementText']) > 18)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'statementText',
                18
            );
        }

        if (! is_null($this->container['accountName']) && (mb_strlen($this->container['accountName']) > 32)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'accountName',
                32
            );
        }

        if (! is_null($this->container['accountNumber']) && (mb_strlen($this->container['accountNumber']) > 9)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'accountNumber',
                9
            );
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
     * Gets statementText
     *
     * @return string|null
     */
    public function getStatementText()
    {
        return $this->get('statementText');
    }

    /**
     * Sets statementText
     *
     * @param string|null $statementText The text that will appear on your employee’s bank statement when they receive payment (max length = 18)
     *
     * @return $this
     */
    public function setStatementText($statementText)
    {
        if (! is_null($statementText) && (mb_strlen($statementText) > 18)) {
            throw new \InvalidArgumentException('invalid length for $statementText when calling BankAccount., must be smaller than or equal to 18.');
        }

        $this->container['statementText'] = $statementText;

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
     * @param string|null $accountName The name of the account (max length = 32)
     *
     * @return $this
     */
    public function setAccountName($accountName)
    {
        if (! is_null($accountName) && (mb_strlen($accountName) > 32)) {
            throw new \InvalidArgumentException('invalid length for $accountName when calling BankAccount., must be smaller than or equal to 32.');
        }

        $this->container['accountName'] = $accountName;

        return $this;
    }

    /**
     * Gets bSB
     *
     * @return string|null
     */
    public function getBSB()
    {
        return $this->get('bSB');
    }

    /**
     * Sets bSB
     *
     * @param string|null $bSB The BSB number of the account (length = 6)
     *
     * @return $this
     */
    public function setBSB($bSB)
    {
        $this->container['bSB'] = $bSB;

        return $this;
    }

    /**
     * Gets accountNumber
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->get('accountNumber');
    }

    /**
     * Sets accountNumber
     *
     * @param string|null $accountNumber The account number (max length = 9)
     *
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        if (! is_null($accountNumber) && (mb_strlen($accountNumber) > 9)) {
            throw new \InvalidArgumentException('invalid length for $accountNumber when calling BankAccount., must be smaller than or equal to 9.');
        }

        $this->container['accountNumber'] = $accountNumber;

        return $this;
    }

    /**
     * Gets remainder
     *
     * @return string|null
     */
    public function getRemainder()
    {
        return $this->get('remainder');
    }

    /**
     * Sets remainder
     *
     * @param string|null $remainder If this account is the Remaining bank account
     *
     * @return $this
     */
    public function setRemainder($remainder)
    {
        $this->container['remainder'] = $remainder;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->get('amount');
    }

    /**
     * Sets amount
     *
     * @param float|null $amount Fixed amounts (for example, if an employee wants to have $100 of their salary transferred to one account, and the remaining amount to another)
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
