<?php

namespace Consilience\XeroAccounting\Sdk\Model;

/**
 * Prepayment
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
 * Prepayment Class Doc Comment
 *
 * @category Class
 * @package  Consilience\XeroAccounting\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Prepayment implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Prepayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'contact' => '\Consilience\XeroAccounting\Sdk\Model\Contact',
        'date' => '\DateTime',
        'status' => 'string',
        'lineAmountTypes' => '\Consilience\XeroAccounting\Sdk\Model\LineAmountTypes',
        'lineItems' => '\Consilience\XeroAccounting\Sdk\Model\LineItem[]',
        'subTotal' => 'double',
        'totalTax' => 'double',
        'total' => 'double',
        'updatedDateUTC' => '\DateTime',
        'currencyCode' => '\Consilience\XeroAccounting\Sdk\Model\CurrencyCode',
        'prepaymentID' => 'string',
        'currencyRate' => 'double',
        'remainingCredit' => 'double',
        'allocations' => '\Consilience\XeroAccounting\Sdk\Model\Allocation[]',
        'hasAttachments' => 'bool',
        'attachments' => '\Consilience\XeroAccounting\Sdk\Model\Attachment[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'type' => null,
        'contact' => null,
        'date' => 'date',
        'status' => null,
        'lineAmountTypes' => null,
        'lineItems' => null,
        'subTotal' => 'double',
        'totalTax' => 'double',
        'total' => 'double',
        'updatedDateUTC' => 'date-time',
        'currencyCode' => null,
        'prepaymentID' => 'uuid',
        'currencyRate' => 'double',
        'remainingCredit' => 'double',
        'allocations' => null,
        'hasAttachments' => null,
        'attachments' => null
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
        'type' => 'Type',
        'contact' => 'Contact',
        'date' => 'Date',
        'status' => 'Status',
        'lineAmountTypes' => 'LineAmountTypes',
        'lineItems' => 'LineItems',
        'subTotal' => 'SubTotal',
        'totalTax' => 'TotalTax',
        'total' => 'Total',
        'updatedDateUTC' => 'UpdatedDateUTC',
        'currencyCode' => 'CurrencyCode',
        'prepaymentID' => 'PrepaymentID',
        'currencyRate' => 'CurrencyRate',
        'remainingCredit' => 'RemainingCredit',
        'allocations' => 'Allocations',
        'hasAttachments' => 'HasAttachments',
        'attachments' => 'Attachments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'contact' => 'setContact',
        'date' => 'setDate',
        'status' => 'setStatus',
        'lineAmountTypes' => 'setLineAmountTypes',
        'lineItems' => 'setLineItems',
        'subTotal' => 'setSubTotal',
        'totalTax' => 'setTotalTax',
        'total' => 'setTotal',
        'updatedDateUTC' => 'setUpdatedDateUTC',
        'currencyCode' => 'setCurrencyCode',
        'prepaymentID' => 'setPrepaymentID',
        'currencyRate' => 'setCurrencyRate',
        'remainingCredit' => 'setRemainingCredit',
        'allocations' => 'setAllocations',
        'hasAttachments' => 'setHasAttachments',
        'attachments' => 'setAttachments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'contact' => 'getContact',
        'date' => 'getDate',
        'status' => 'getStatus',
        'lineAmountTypes' => 'getLineAmountTypes',
        'lineItems' => 'getLineItems',
        'subTotal' => 'getSubTotal',
        'totalTax' => 'getTotalTax',
        'total' => 'getTotal',
        'updatedDateUTC' => 'getUpdatedDateUTC',
        'currencyCode' => 'getCurrencyCode',
        'prepaymentID' => 'getPrepaymentID',
        'currencyRate' => 'getCurrencyRate',
        'remainingCredit' => 'getRemainingCredit',
        'allocations' => 'getAllocations',
        'hasAttachments' => 'getHasAttachments',
        'attachments' => 'getAttachments'
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

    const TYPE_RECEIVE_PREPAYMENT = 'RECEIVE-PREPAYMENT';
    const TYPE_SPEND_PREPAYMENT = 'SPEND-PREPAYMENT';
    const STATUS_AUTHORISED = 'AUTHORISED';
    const STATUS_PAID = 'PAID';
    const STATUS_VOIDED = 'VOIDED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_RECEIVE_PREPAYMENT,
            self::TYPE_SPEND_PREPAYMENT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_AUTHORISED,
            self::STATUS_PAID,
            self::STATUS_VOIDED,
        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['lineAmountTypes'] = isset($data['lineAmountTypes']) ? $data['lineAmountTypes'] : null;
        $this->container['lineItems'] = isset($data['lineItems']) ? $data['lineItems'] : null;
        $this->container['subTotal'] = isset($data['subTotal']) ? $data['subTotal'] : null;
        $this->container['totalTax'] = isset($data['totalTax']) ? $data['totalTax'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['updatedDateUTC'] = isset($data['updatedDateUTC']) ? $data['updatedDateUTC'] : null;
        $this->container['currencyCode'] = isset($data['currencyCode']) ? $data['currencyCode'] : null;
        $this->container['prepaymentID'] = isset($data['prepaymentID']) ? $data['prepaymentID'] : null;
        $this->container['currencyRate'] = isset($data['currencyRate']) ? $data['currencyRate'] : null;
        $this->container['remainingCredit'] = isset($data['remainingCredit']) ? $data['remainingCredit'] : null;
        $this->container['allocations'] = isset($data['allocations']) ? $data['allocations'] : null;
        $this->container['hasAttachments'] = isset($data['hasAttachments']) ? $data['hasAttachments'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type See Prepayment Types
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \Consilience\XeroAccounting\Sdk\Model\Contact|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \Consilience\XeroAccounting\Sdk\Model\Contact|null $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date The date the prepayment is created YYYY-MM-DD
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status See Prepayment Status Codes
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets lineAmountTypes
     *
     * @return \Consilience\XeroAccounting\Sdk\Model\LineAmountTypes|null
     */
    public function getLineAmountTypes()
    {
        return $this->container['lineAmountTypes'];
    }

    /**
     * Sets lineAmountTypes
     *
     * @param \Consilience\XeroAccounting\Sdk\Model\LineAmountTypes|null $lineAmountTypes lineAmountTypes
     *
     * @return $this
     */
    public function setLineAmountTypes($lineAmountTypes)
    {
        $this->container['lineAmountTypes'] = $lineAmountTypes;

        return $this;
    }

    /**
     * Gets lineItems
     *
     * @return \Consilience\XeroAccounting\Sdk\Model\LineItem[]|null
     */
    public function getLineItems()
    {
        return $this->container['lineItems'];
    }

    /**
     * Sets lineItems
     *
     * @param \Consilience\XeroAccounting\Sdk\Model\LineItem[]|null $lineItems See Prepayment Line Items
     *
     * @return $this
     */
    public function setLineItems($lineItems)
    {
        $this->container['lineItems'] = $lineItems;

        return $this;
    }

    /**
     * Gets subTotal
     *
     * @return double|null
     */
    public function getSubTotal()
    {
        return $this->container['subTotal'];
    }

    /**
     * Sets subTotal
     *
     * @param double|null $subTotal The subtotal of the prepayment excluding taxes
     *
     * @return $this
     */
    public function setSubTotal($subTotal)
    {
        $this->container['subTotal'] = $subTotal;

        return $this;
    }

    /**
     * Gets totalTax
     *
     * @return double|null
     */
    public function getTotalTax()
    {
        return $this->container['totalTax'];
    }

    /**
     * Sets totalTax
     *
     * @param double|null $totalTax The total tax on the prepayment
     *
     * @return $this
     */
    public function setTotalTax($totalTax)
    {
        $this->container['totalTax'] = $totalTax;

        return $this;
    }

    /**
     * Gets total
     *
     * @return double|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param double|null $total The total of the prepayment(subtotal + total tax)
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets updatedDateUTC
     *
     * @return \DateTime|null
     */
    public function getUpdatedDateUTC()
    {
        return $this->container['updatedDateUTC'];
    }

    /**
     * Sets updatedDateUTC
     *
     * @param \DateTime|null $updatedDateUTC UTC timestamp of last update to the prepayment
     *
     * @return $this
     */
    public function setUpdatedDateUTC($updatedDateUTC)
    {
        $this->container['updatedDateUTC'] = $updatedDateUTC;

        return $this;
    }

    /**
     * Gets currencyCode
     *
     * @return \Consilience\XeroAccounting\Sdk\Model\CurrencyCode|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     *
     * @param \Consilience\XeroAccounting\Sdk\Model\CurrencyCode|null $currencyCode currencyCode
     *
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets prepaymentID
     *
     * @return string|null
     */
    public function getPrepaymentID()
    {
        return $this->container['prepaymentID'];
    }

    /**
     * Sets prepaymentID
     *
     * @param string|null $prepaymentID Xero generated unique identifier
     *
     * @return $this
     */
    public function setPrepaymentID($prepaymentID)
    {
        $this->container['prepaymentID'] = $prepaymentID;

        return $this;
    }

    /**
     * Gets currencyRate
     *
     * @return double|null
     */
    public function getCurrencyRate()
    {
        return $this->container['currencyRate'];
    }

    /**
     * Sets currencyRate
     *
     * @param double|null $currencyRate The currency rate for a multicurrency prepayment. If no rate is specified, the XE.com day rate is used
     *
     * @return $this
     */
    public function setCurrencyRate($currencyRate)
    {
        $this->container['currencyRate'] = $currencyRate;

        return $this;
    }

    /**
     * Gets remainingCredit
     *
     * @return double|null
     */
    public function getRemainingCredit()
    {
        return $this->container['remainingCredit'];
    }

    /**
     * Sets remainingCredit
     *
     * @param double|null $remainingCredit The remaining credit balance on the prepayment
     *
     * @return $this
     */
    public function setRemainingCredit($remainingCredit)
    {
        $this->container['remainingCredit'] = $remainingCredit;

        return $this;
    }

    /**
     * Gets allocations
     *
     * @return \Consilience\XeroAccounting\Sdk\Model\Allocation[]|null
     */
    public function getAllocations()
    {
        return $this->container['allocations'];
    }

    /**
     * Sets allocations
     *
     * @param \Consilience\XeroAccounting\Sdk\Model\Allocation[]|null $allocations See Allocations
     *
     * @return $this
     */
    public function setAllocations($allocations)
    {
        $this->container['allocations'] = $allocations;

        return $this;
    }

    /**
     * Gets hasAttachments
     *
     * @return bool|null
     */
    public function getHasAttachments()
    {
        return $this->container['hasAttachments'];
    }

    /**
     * Sets hasAttachments
     *
     * @param bool|null $hasAttachments boolean to indicate if a prepayment has an attachment
     *
     * @return $this
     */
    public function setHasAttachments($hasAttachments)
    {
        $this->container['hasAttachments'] = $hasAttachments;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Consilience\XeroAccounting\Sdk\Model\Attachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Consilience\XeroAccounting\Sdk\Model\Attachment[]|null $attachments See Attachments
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

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
