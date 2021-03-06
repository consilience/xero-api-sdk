<?php

namespace Consilience\Xero\AccountingSdk\Model;

/**
 * ExpenseClaim
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
 * ExpenseClaim Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\AccountingSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class ExpenseClaim implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExpenseClaim';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'expenseClaimID' => 'string',
        'status' => 'string',
        'payments' => '\Consilience\Xero\AccountingSdk\Model\Payment[]',
        'user' => '\Consilience\Xero\AccountingSdk\Model\User',
        'receipts' => '\Consilience\Xero\AccountingSdk\Model\Receipt[]',
        'updatedDateUTC' => '\DateTime',
        'total' => 'double',
        'amountDue' => 'double',
        'amountPaid' => 'double',
        'paymentDueDate' => '\DateTime',
        'reportingDate' => '\DateTime',
        'receiptID' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'expenseClaimID' => 'uuid',
        'status' => null,
        'payments' => null,
        'user' => null,
        'receipts' => null,
        'updatedDateUTC' => 'date-time',
        'total' => 'double',
        'amountDue' => 'double',
        'amountPaid' => 'double',
        'paymentDueDate' => 'date',
        'reportingDate' => 'date',
        'receiptID' => 'uuid'
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
        'expenseClaimID' => 'ExpenseClaimID',
        'status' => 'Status',
        'payments' => 'Payments',
        'user' => 'User',
        'receipts' => 'Receipts',
        'updatedDateUTC' => 'UpdatedDateUTC',
        'total' => 'Total',
        'amountDue' => 'AmountDue',
        'amountPaid' => 'AmountPaid',
        'paymentDueDate' => 'PaymentDueDate',
        'reportingDate' => 'ReportingDate',
        'receiptID' => 'ReceiptID'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'expenseClaimID' => 'setExpenseClaimID',
        'status' => 'setStatus',
        'payments' => 'setPayments',
        'user' => 'setUser',
        'receipts' => 'setReceipts',
        'updatedDateUTC' => 'setUpdatedDateUTC',
        'total' => 'setTotal',
        'amountDue' => 'setAmountDue',
        'amountPaid' => 'setAmountPaid',
        'paymentDueDate' => 'setPaymentDueDate',
        'reportingDate' => 'setReportingDate',
        'receiptID' => 'setReceiptID'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'expenseClaimID' => 'getExpenseClaimID',
        'status' => 'getStatus',
        'payments' => 'getPayments',
        'user' => 'getUser',
        'receipts' => 'getReceipts',
        'updatedDateUTC' => 'getUpdatedDateUTC',
        'total' => 'getTotal',
        'amountDue' => 'getAmountDue',
        'amountPaid' => 'getAmountPaid',
        'paymentDueDate' => 'getPaymentDueDate',
        'reportingDate' => 'getReportingDate',
        'receiptID' => 'getReceiptID'
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

    const STATUS_SUBMITTED = 'SUBMITTED';
    const STATUS_AUTHORISED = 'AUTHORISED';
    const STATUS_PAID = 'PAID';
    const STATUS_VOIDED = 'VOIDED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUBMITTED,
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
        $this->container['expenseClaimID'] = $data['expenseClaimID'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['payments'] = $data['payments'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
        $this->container['receipts'] = $data['receipts'] ?? null;
        $this->container['updatedDateUTC'] = $data['updatedDateUTC'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
        $this->container['amountDue'] = $data['amountDue'] ?? null;
        $this->container['amountPaid'] = $data['amountPaid'] ?? null;
        $this->container['paymentDueDate'] = $data['paymentDueDate'] ?? null;
        $this->container['reportingDate'] = $data['reportingDate'] ?? null;
        $this->container['receiptID'] = $data['receiptID'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be one of "%s"',
                'status',
                implode('", "', $allowedValues)
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
     * Gets expenseClaimID
     *
     * @return string|null
     */
    public function getExpenseClaimID()
    {
        return $this->get('expenseClaimID');
    }

    /**
     * Sets expenseClaimID
     *
     * @param string|null $expenseClaimID Xero generated unique identifier for an expense claim
     *
     * @return $this
     */
    public function setExpenseClaimID($expenseClaimID)
    {
        $this->container['expenseClaimID'] = $expenseClaimID;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get('status');
    }

    /**
     * Sets status
     *
     * @param string|null $status Current status of an expense claim – see status types
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (! is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Invalid value for "%s", must be one of "%s"',
                    'status',
                    implode('", "', $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \Consilience\Xero\AccountingSdk\Model\Payment[]|null
     */
    public function getPayments()
    {
        return $this->get('payments');
    }

    /**
     * Sets payments
     *
     * @param \Consilience\Xero\AccountingSdk\Model\Payment[]|null $payments See Payments
     *
     * @return $this
     */
    public function setPayments($payments)
    {
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Consilience\Xero\AccountingSdk\Model\User|null
     */
    public function getUser()
    {
        return $this->get('user');
    }

    /**
     * Sets user
     *
     * @param \Consilience\Xero\AccountingSdk\Model\User|null $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets receipts
     *
     * @return \Consilience\Xero\AccountingSdk\Model\Receipt[]|null
     */
    public function getReceipts()
    {
        return $this->get('receipts');
    }

    /**
     * Sets receipts
     *
     * @param \Consilience\Xero\AccountingSdk\Model\Receipt[]|null $receipts receipts
     *
     * @return $this
     */
    public function setReceipts($receipts)
    {
        $this->container['receipts'] = $receipts;

        return $this;
    }

    /**
     * Gets updatedDateUTC
     *
     * @return \DateTime|null
     */
    public function getUpdatedDateUTC()
    {
        return $this->get('updatedDateUTC');
    }

    /**
     * Sets updatedDateUTC
     *
     * @param \DateTime|null $updatedDateUTC Last modified date UTC format
     *
     * @return $this
     */
    public function setUpdatedDateUTC($updatedDateUTC)
    {
        $this->container['updatedDateUTC'] = $updatedDateUTC;

        return $this;
    }

    /**
     * Gets total
     *
     * @return double|null
     */
    public function getTotal()
    {
        return $this->get('total');
    }

    /**
     * Sets total
     *
     * @param double|null $total The total of an expense claim being paid
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets amountDue
     *
     * @return double|null
     */
    public function getAmountDue()
    {
        return $this->get('amountDue');
    }

    /**
     * Sets amountDue
     *
     * @param double|null $amountDue The amount due to be paid for an expense claim
     *
     * @return $this
     */
    public function setAmountDue($amountDue)
    {
        $this->container['amountDue'] = $amountDue;

        return $this;
    }

    /**
     * Gets amountPaid
     *
     * @return double|null
     */
    public function getAmountPaid()
    {
        return $this->get('amountPaid');
    }

    /**
     * Sets amountPaid
     *
     * @param double|null $amountPaid The amount still to pay for an expense claim
     *
     * @return $this
     */
    public function setAmountPaid($amountPaid)
    {
        $this->container['amountPaid'] = $amountPaid;

        return $this;
    }

    /**
     * Gets paymentDueDate
     *
     * @return \DateTime|null
     */
    public function getPaymentDueDate()
    {
        return $this->get('paymentDueDate');
    }

    /**
     * Sets paymentDueDate
     *
     * @param \DateTime|null $paymentDueDate The date when the expense claim is due to be paid YYYY-MM-DD
     *
     * @return $this
     */
    public function setPaymentDueDate($paymentDueDate)
    {
        $this->container['paymentDueDate'] = $paymentDueDate;

        return $this;
    }

    /**
     * Gets reportingDate
     *
     * @return \DateTime|null
     */
    public function getReportingDate()
    {
        return $this->get('reportingDate');
    }

    /**
     * Sets reportingDate
     *
     * @param \DateTime|null $reportingDate The date the expense claim will be reported in Xero YYYY-MM-DD
     *
     * @return $this
     */
    public function setReportingDate($reportingDate)
    {
        $this->container['reportingDate'] = $reportingDate;

        return $this;
    }

    /**
     * Gets receiptID
     *
     * @return string|null
     */
    public function getReceiptID()
    {
        return $this->get('receiptID');
    }

    /**
     * Sets receiptID
     *
     * @param string|null $receiptID The Xero identifier for the Receipt e.g.  e59a2c7f-1306-4078-a0f3-73537afcbba9
     *
     * @return $this
     */
    public function setReceiptID($receiptID)
    {
        $this->container['receiptID'] = $receiptID;

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
