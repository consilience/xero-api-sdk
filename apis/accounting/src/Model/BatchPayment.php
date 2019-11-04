<?php

namespace Consilience\Xero\AccountingSdk\Model;

/**
 * BatchPayment
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
 * BatchPayment Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\AccountingSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class BatchPayment implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BatchPayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account' => '\Consilience\Xero\AccountingSdk\Model\Account',
        'reference' => 'string',
        'particulars' => 'string',
        'code' => 'string',
        'details' => 'string',
        'narrative' => 'string',
        'batchPaymentID' => 'string',
        'dateString' => 'string',
        'date' => '\DateTime',
        'amount' => 'double',
        'payments' => '\Consilience\Xero\AccountingSdk\Model\Payment[]',
        'type' => 'string',
        'status' => 'string',
        'totalAmount' => 'string',
        'updatedDateUTC' => '\DateTime',
        'isReconciled' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account' => null,
        'reference' => null,
        'particulars' => null,
        'code' => null,
        'details' => null,
        'narrative' => null,
        'batchPaymentID' => 'uuid',
        'dateString' => null,
        'date' => 'date',
        'amount' => 'double',
        'payments' => null,
        'type' => null,
        'status' => null,
        'totalAmount' => null,
        'updatedDateUTC' => 'date-time',
        'isReconciled' => null
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
        'account' => 'Account',
        'reference' => 'Reference',
        'particulars' => 'Particulars',
        'code' => 'Code',
        'details' => 'Details',
        'narrative' => 'Narrative',
        'batchPaymentID' => 'BatchPaymentID',
        'dateString' => 'DateString',
        'date' => 'Date',
        'amount' => 'Amount',
        'payments' => 'Payments',
        'type' => 'Type',
        'status' => 'Status',
        'totalAmount' => 'TotalAmount',
        'updatedDateUTC' => 'UpdatedDateUTC',
        'isReconciled' => 'IsReconciled'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
        'reference' => 'setReference',
        'particulars' => 'setParticulars',
        'code' => 'setCode',
        'details' => 'setDetails',
        'narrative' => 'setNarrative',
        'batchPaymentID' => 'setBatchPaymentID',
        'dateString' => 'setDateString',
        'date' => 'setDate',
        'amount' => 'setAmount',
        'payments' => 'setPayments',
        'type' => 'setType',
        'status' => 'setStatus',
        'totalAmount' => 'setTotalAmount',
        'updatedDateUTC' => 'setUpdatedDateUTC',
        'isReconciled' => 'setIsReconciled'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
        'reference' => 'getReference',
        'particulars' => 'getParticulars',
        'code' => 'getCode',
        'details' => 'getDetails',
        'narrative' => 'getNarrative',
        'batchPaymentID' => 'getBatchPaymentID',
        'dateString' => 'getDateString',
        'date' => 'getDate',
        'amount' => 'getAmount',
        'payments' => 'getPayments',
        'type' => 'getType',
        'status' => 'getStatus',
        'totalAmount' => 'getTotalAmount',
        'updatedDateUTC' => 'getUpdatedDateUTC',
        'isReconciled' => 'getIsReconciled'
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
        $this->container['account'] = $data['account'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['particulars'] = $data['particulars'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['details'] = $data['details'] ?? null;
        $this->container['narrative'] = $data['narrative'] ?? null;
        $this->container['batchPaymentID'] = $data['batchPaymentID'] ?? null;
        $this->container['dateString'] = $data['dateString'] ?? null;
        $this->container['date'] = $data['date'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['payments'] = $data['payments'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['totalAmount'] = $data['totalAmount'] ?? null;
        $this->container['updatedDateUTC'] = $data['updatedDateUTC'] ?? null;
        $this->container['isReconciled'] = $data['isReconciled'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (! is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 12)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'reference',
                12
            );
        }

        if (! is_null($this->container['particulars']) && (mb_strlen($this->container['particulars']) > 12)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'particulars',
                12
            );
        }

        if (! is_null($this->container['code']) && (mb_strlen($this->container['code']) > 12)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'code',
                12
            );
        }

        if (! is_null($this->container['details']) && (mb_strlen($this->container['details']) > 18)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'details',
                18
            );
        }

        if (! is_null($this->container['narrative']) && (mb_strlen($this->container['narrative']) > 18)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'narrative',
                18
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
     * Gets account
     *
     * @return \Consilience\Xero\AccountingSdk\Model\Account|null
     */
    public function getAccount()
    {
        return $this->get('account');
    }

    /**
     * Sets account
     *
     * @param \Consilience\Xero\AccountingSdk\Model\Account|null $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->get('reference');
    }

    /**
     * Sets reference
     *
     * @param string|null $reference (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     *
     * @return $this
     */
    public function setReference($reference)
    {
        if (! is_null($reference) && (mb_strlen($reference) > 12)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling BatchPayment., must be smaller than or equal to 12.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets particulars
     *
     * @return string|null
     */
    public function getParticulars()
    {
        return $this->get('particulars');
    }

    /**
     * Sets particulars
     *
     * @param string|null $particulars (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     *
     * @return $this
     */
    public function setParticulars($particulars)
    {
        if (! is_null($particulars) && (mb_strlen($particulars) > 12)) {
            throw new \InvalidArgumentException('invalid length for $particulars when calling BatchPayment., must be smaller than or equal to 12.');
        }

        $this->container['particulars'] = $particulars;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->get('code');
    }

    /**
     * Sets code
     *
     * @param string|null $code (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     *
     * @return $this
     */
    public function setCode($code)
    {
        if (! is_null($code) && (mb_strlen($code) > 12)) {
            throw new \InvalidArgumentException('invalid length for $code when calling BatchPayment., must be smaller than or equal to 12.');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets details
     *
     * @return string|null
     */
    public function getDetails()
    {
        return $this->get('details');
    }

    /**
     * Sets details
     *
     * @param string|null $details (Non-NZ Only) These details are sent to the org’s bank as a reference for the batch payment transaction. They will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement imported into Xero. Maximum field length = 18
     *
     * @return $this
     */
    public function setDetails($details)
    {
        if (! is_null($details) && (mb_strlen($details) > 18)) {
            throw new \InvalidArgumentException('invalid length for $details when calling BatchPayment., must be smaller than or equal to 18.');
        }

        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets narrative
     *
     * @return string|null
     */
    public function getNarrative()
    {
        return $this->get('narrative');
    }

    /**
     * Sets narrative
     *
     * @param string|null $narrative (UK Only) Only shows on the statement line in Xero. Max length =18
     *
     * @return $this
     */
    public function setNarrative($narrative)
    {
        if (! is_null($narrative) && (mb_strlen($narrative) > 18)) {
            throw new \InvalidArgumentException('invalid length for $narrative when calling BatchPayment., must be smaller than or equal to 18.');
        }

        $this->container['narrative'] = $narrative;

        return $this;
    }

    /**
     * Gets batchPaymentID
     *
     * @return string|null
     */
    public function getBatchPaymentID()
    {
        return $this->get('batchPaymentID');
    }

    /**
     * Sets batchPaymentID
     *
     * @param string|null $batchPaymentID The Xero generated unique identifier for the bank transaction (read-only)
     *
     * @return $this
     */
    public function setBatchPaymentID($batchPaymentID)
    {
        $this->container['batchPaymentID'] = $batchPaymentID;

        return $this;
    }

    /**
     * Gets dateString
     *
     * @return string|null
     */
    public function getDateString()
    {
        return $this->get('dateString');
    }

    /**
     * Sets dateString
     *
     * @param string|null $dateString Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     *
     * @return $this
     */
    public function setDateString($dateString)
    {
        $this->container['dateString'] = $dateString;

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
     * @param \DateTime|null $date Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double|null
     */
    public function getAmount()
    {
        return $this->get('amount');
    }

    /**
     * Sets amount
     *
     * @param double|null $amount The amount of the payment. Must be less than or equal to the outstanding amount owing on the invoice e.g. 200.00
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * @param \Consilience\Xero\AccountingSdk\Model\Payment[]|null $payments payments
     *
     * @return $this
     */
    public function setPayments($payments)
    {
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get('type');
    }

    /**
     * Sets type
     *
     * @param string|null $type PAYBATCH for bill payments or RECBATCH for sales invoice payments (read-only)
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param string|null $status AUTHORISED or DELETED (read-only). New batch payments will have a status of AUTHORISED. It is not possible to delete batch payments via the API.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets totalAmount
     *
     * @return string|null
     */
    public function getTotalAmount()
    {
        return $this->get('totalAmount');
    }

    /**
     * Sets totalAmount
     *
     * @param string|null $totalAmount The total of the payments that make up the batch (read-only)
     *
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        $this->container['totalAmount'] = $totalAmount;

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
     * @param \DateTime|null $updatedDateUTC UTC timestamp of last update to the payment
     *
     * @return $this
     */
    public function setUpdatedDateUTC($updatedDateUTC)
    {
        $this->container['updatedDateUTC'] = $updatedDateUTC;

        return $this;
    }

    /**
     * Gets isReconciled
     *
     * @return string|null
     */
    public function getIsReconciled()
    {
        return $this->get('isReconciled');
    }

    /**
     * Sets isReconciled
     *
     * @param string|null $isReconciled Booelan that tells you if the batch payment has been reconciled (read-only)
     *
     * @return $this
     */
    public function setIsReconciled($isReconciled)
    {
        $this->container['isReconciled'] = $isReconciled;

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
