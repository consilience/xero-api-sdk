<?php

namespace Consilience\Xero\PayrollAuSdk\Model;

/**
 * SuperannuationLine
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
 * SuperannuationLine Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\PayrollAuSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class SuperannuationLine implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SuperannuationLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'superMembershipID' => 'string',
        'contributionType' => 'string',
        'calculationType' => 'string',
        'minimumMonthlyEarnings' => 'string',
        'expenseAccountCode' => 'string',
        'liabilityAccountCode' => 'string',
        'paymentDateForThisPeriod' => '\DateTime',
        'percentage' => 'string',
        'amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'superMembershipID' => 'uuid',
        'contributionType' => null,
        'calculationType' => null,
        'minimumMonthlyEarnings' => null,
        'expenseAccountCode' => null,
        'liabilityAccountCode' => null,
        'paymentDateForThisPeriod' => 'date',
        'percentage' => null,
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
        'superMembershipID' => 'SuperMembershipID',
        'contributionType' => 'ContributionType',
        'calculationType' => 'CalculationType',
        'minimumMonthlyEarnings' => 'MinimumMonthlyEarnings',
        'expenseAccountCode' => 'ExpenseAccountCode',
        'liabilityAccountCode' => 'LiabilityAccountCode',
        'paymentDateForThisPeriod' => 'PaymentDateForThisPeriod',
        'percentage' => 'Percentage',
        'amount' => 'Amount'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'superMembershipID' => 'setSuperMembershipID',
        'contributionType' => 'setContributionType',
        'calculationType' => 'setCalculationType',
        'minimumMonthlyEarnings' => 'setMinimumMonthlyEarnings',
        'expenseAccountCode' => 'setExpenseAccountCode',
        'liabilityAccountCode' => 'setLiabilityAccountCode',
        'paymentDateForThisPeriod' => 'setPaymentDateForThisPeriod',
        'percentage' => 'setPercentage',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'superMembershipID' => 'getSuperMembershipID',
        'contributionType' => 'getContributionType',
        'calculationType' => 'getCalculationType',
        'minimumMonthlyEarnings' => 'getMinimumMonthlyEarnings',
        'expenseAccountCode' => 'getExpenseAccountCode',
        'liabilityAccountCode' => 'getLiabilityAccountCode',
        'paymentDateForThisPeriod' => 'getPaymentDateForThisPeriod',
        'percentage' => 'getPercentage',
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
        $this->container['superMembershipID'] = $data['superMembershipID'] ?? null;
        $this->container['contributionType'] = $data['contributionType'] ?? null;
        $this->container['calculationType'] = $data['calculationType'] ?? null;
        $this->container['minimumMonthlyEarnings'] = $data['minimumMonthlyEarnings'] ?? null;
        $this->container['expenseAccountCode'] = $data['expenseAccountCode'] ?? null;
        $this->container['liabilityAccountCode'] = $data['liabilityAccountCode'] ?? null;
        $this->container['paymentDateForThisPeriod'] = $data['paymentDateForThisPeriod'] ?? null;
        $this->container['percentage'] = $data['percentage'] ?? null;
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
     * @param string|null $superMembershipID Xero identifier for payroll super fund membership ID
     *
     * @return $this
     */
    public function setSuperMembershipID($superMembershipID)
    {
        $this->container['superMembershipID'] = $superMembershipID;

        return $this;
    }

    /**
     * Gets contributionType
     *
     * @return string|null
     */
    public function getContributionType()
    {
        return $this->get('contributionType');
    }

    /**
     * Sets contributionType
     *
     * @param string|null $contributionType Superannuation contribution type
     *
     * @return $this
     */
    public function setContributionType($contributionType)
    {
        $this->container['contributionType'] = $contributionType;

        return $this;
    }

    /**
     * Gets calculationType
     *
     * @return string|null
     */
    public function getCalculationType()
    {
        return $this->get('calculationType');
    }

    /**
     * Sets calculationType
     *
     * @param string|null $calculationType Superannuation calculation type
     *
     * @return $this
     */
    public function setCalculationType($calculationType)
    {
        $this->container['calculationType'] = $calculationType;

        return $this;
    }

    /**
     * Gets minimumMonthlyEarnings
     *
     * @return string|null
     */
    public function getMinimumMonthlyEarnings()
    {
        return $this->get('minimumMonthlyEarnings');
    }

    /**
     * Sets minimumMonthlyEarnings
     *
     * @param string|null $minimumMonthlyEarnings Superannuation minimum monthly earnings
     *
     * @return $this
     */
    public function setMinimumMonthlyEarnings($minimumMonthlyEarnings)
    {
        $this->container['minimumMonthlyEarnings'] = $minimumMonthlyEarnings;

        return $this;
    }

    /**
     * Gets expenseAccountCode
     *
     * @return string|null
     */
    public function getExpenseAccountCode()
    {
        return $this->get('expenseAccountCode');
    }

    /**
     * Sets expenseAccountCode
     *
     * @param string|null $expenseAccountCode Superannuation expense account code
     *
     * @return $this
     */
    public function setExpenseAccountCode($expenseAccountCode)
    {
        $this->container['expenseAccountCode'] = $expenseAccountCode;

        return $this;
    }

    /**
     * Gets liabilityAccountCode
     *
     * @return string|null
     */
    public function getLiabilityAccountCode()
    {
        return $this->get('liabilityAccountCode');
    }

    /**
     * Sets liabilityAccountCode
     *
     * @param string|null $liabilityAccountCode Superannuation liability account code
     *
     * @return $this
     */
    public function setLiabilityAccountCode($liabilityAccountCode)
    {
        $this->container['liabilityAccountCode'] = $liabilityAccountCode;

        return $this;
    }

    /**
     * Gets paymentDateForThisPeriod
     *
     * @return \DateTime|null
     */
    public function getPaymentDateForThisPeriod()
    {
        return $this->get('paymentDateForThisPeriod');
    }

    /**
     * Sets paymentDateForThisPeriod
     *
     * @param \DateTime|null $paymentDateForThisPeriod Superannuation payment date for the current period (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setPaymentDateForThisPeriod($paymentDateForThisPeriod)
    {
        $this->container['paymentDateForThisPeriod'] = $paymentDateForThisPeriod;

        return $this;
    }

    /**
     * Gets percentage
     *
     * @return string|null
     */
    public function getPercentage()
    {
        return $this->get('percentage');
    }

    /**
     * Sets percentage
     *
     * @param string|null $percentage Superannuation percentage
     *
     * @return $this
     */
    public function setPercentage($percentage)
    {
        $this->container['percentage'] = $percentage;

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
     * @param float|null $amount Superannuation amount
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
