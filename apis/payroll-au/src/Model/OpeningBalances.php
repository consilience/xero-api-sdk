<?php

namespace Consilience\Xero\PayrollAuSdk\Model;

/**
 * OpeningBalances
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Consilience\Xero\PayrollAuSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU
 *
 * This is the Xero Payroll API for orgs in Australia region.
 *
 * The version of the OpenAPI document: 1.0.0
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
use Consilience\Xero\PayrollAuSdk\ObjectSerializer;

/**
 * OpeningBalances Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\PayrollAuSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class OpeningBalances implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OpeningBalances';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'openingBalanceDate' => '\DateTime',
        'tax' => 'string',
        'earningsLines' => '\Consilience\Xero\PayrollAuSdk\Model\EarningsLine[]',
        'deductionLines' => '\Consilience\Xero\PayrollAuSdk\Model\DeductionLine[]',
        'superLines' => '\Consilience\Xero\PayrollAuSdk\Model\SuperLine[]',
        'reimbursementLines' => '\Consilience\Xero\PayrollAuSdk\Model\ReimbursementLine[]',
        'leaveLines' => '\Consilience\Xero\PayrollAuSdk\Model\LeaveLine[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'openingBalanceDate' => 'date',
        'tax' => null,
        'earningsLines' => null,
        'deductionLines' => null,
        'superLines' => null,
        'reimbursementLines' => null,
        'leaveLines' => null
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
        'openingBalanceDate' => 'OpeningBalanceDate',
        'tax' => 'Tax',
        'earningsLines' => 'EarningsLines',
        'deductionLines' => 'DeductionLines',
        'superLines' => 'SuperLines',
        'reimbursementLines' => 'ReimbursementLines',
        'leaveLines' => 'LeaveLines'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'openingBalanceDate' => 'setOpeningBalanceDate',
        'tax' => 'setTax',
        'earningsLines' => 'setEarningsLines',
        'deductionLines' => 'setDeductionLines',
        'superLines' => 'setSuperLines',
        'reimbursementLines' => 'setReimbursementLines',
        'leaveLines' => 'setLeaveLines'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'openingBalanceDate' => 'getOpeningBalanceDate',
        'tax' => 'getTax',
        'earningsLines' => 'getEarningsLines',
        'deductionLines' => 'getDeductionLines',
        'superLines' => 'getSuperLines',
        'reimbursementLines' => 'getReimbursementLines',
        'leaveLines' => 'getLeaveLines'
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
        $this->container['openingBalanceDate'] = $data['openingBalanceDate'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
        $this->container['earningsLines'] = $data['earningsLines'] ?? null;
        $this->container['deductionLines'] = $data['deductionLines'] ?? null;
        $this->container['superLines'] = $data['superLines'] ?? null;
        $this->container['reimbursementLines'] = $data['reimbursementLines'] ?? null;
        $this->container['leaveLines'] = $data['leaveLines'] ?? null;
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
     * Gets openingBalanceDate
     *
     * @return \DateTime|null
     */
    public function getOpeningBalanceDate()
    {
        return $this->get('openingBalanceDate');
    }

    /**
     * Sets openingBalanceDate
     *
     * @param \DateTime|null $openingBalanceDate Opening Balance Date. (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setOpeningBalanceDate($openingBalanceDate)
    {
        $this->container['openingBalanceDate'] = $openingBalanceDate;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return string|null
     */
    public function getTax()
    {
        return $this->get('tax');
    }

    /**
     * Sets tax
     *
     * @param string|null $tax Opening Balance tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets earningsLines
     *
     * @return \Consilience\Xero\PayrollAuSdk\Model\EarningsLine[]|null
     */
    public function getEarningsLines()
    {
        return $this->get('earningsLines');
    }

    /**
     * Sets earningsLines
     *
     * @param \Consilience\Xero\PayrollAuSdk\Model\EarningsLine[]|null $earningsLines earningsLines
     *
     * @return $this
     */
    public function setEarningsLines($earningsLines)
    {
        $this->container['earningsLines'] = $earningsLines;

        return $this;
    }

    /**
     * Gets deductionLines
     *
     * @return \Consilience\Xero\PayrollAuSdk\Model\DeductionLine[]|null
     */
    public function getDeductionLines()
    {
        return $this->get('deductionLines');
    }

    /**
     * Sets deductionLines
     *
     * @param \Consilience\Xero\PayrollAuSdk\Model\DeductionLine[]|null $deductionLines deductionLines
     *
     * @return $this
     */
    public function setDeductionLines($deductionLines)
    {
        $this->container['deductionLines'] = $deductionLines;

        return $this;
    }

    /**
     * Gets superLines
     *
     * @return \Consilience\Xero\PayrollAuSdk\Model\SuperLine[]|null
     */
    public function getSuperLines()
    {
        return $this->get('superLines');
    }

    /**
     * Sets superLines
     *
     * @param \Consilience\Xero\PayrollAuSdk\Model\SuperLine[]|null $superLines superLines
     *
     * @return $this
     */
    public function setSuperLines($superLines)
    {
        $this->container['superLines'] = $superLines;

        return $this;
    }

    /**
     * Gets reimbursementLines
     *
     * @return \Consilience\Xero\PayrollAuSdk\Model\ReimbursementLine[]|null
     */
    public function getReimbursementLines()
    {
        return $this->get('reimbursementLines');
    }

    /**
     * Sets reimbursementLines
     *
     * @param \Consilience\Xero\PayrollAuSdk\Model\ReimbursementLine[]|null $reimbursementLines reimbursementLines
     *
     * @return $this
     */
    public function setReimbursementLines($reimbursementLines)
    {
        $this->container['reimbursementLines'] = $reimbursementLines;

        return $this;
    }

    /**
     * Gets leaveLines
     *
     * @return \Consilience\Xero\PayrollAuSdk\Model\LeaveLine[]|null
     */
    public function getLeaveLines()
    {
        return $this->get('leaveLines');
    }

    /**
     * Sets leaveLines
     *
     * @param \Consilience\Xero\PayrollAuSdk\Model\LeaveLine[]|null $leaveLines leaveLines
     *
     * @return $this
     */
    public function setLeaveLines($leaveLines)
    {
        $this->container['leaveLines'] = $leaveLines;

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
