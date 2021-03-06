<?php

namespace Consilience\Xero\AccountingSdk\Model;

/**
 * CreditNote
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
 * CreditNote Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\AccountingSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class CreditNote implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreditNote';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'contact' => '\Consilience\Xero\AccountingSdk\Model\Contact',
        'date' => '\DateTime',
        'status' => 'string',
        'lineAmountTypes' => '\Consilience\Xero\AccountingSdk\Model\LineAmountTypes',
        'lineItems' => '\Consilience\Xero\AccountingSdk\Model\LineItem[]',
        'subTotal' => 'double',
        'totalTax' => 'double',
        'total' => 'double',
        'updatedDateUTC' => '\DateTime',
        'currencyCode' => '\Consilience\Xero\AccountingSdk\Model\CurrencyCode',
        'fullyPaidOnDate' => '\DateTime',
        'creditNoteID' => 'string',
        'creditNoteNumber' => 'string',
        'reference' => 'string',
        'sentToContact' => 'bool',
        'currencyRate' => 'double',
        'remainingCredit' => 'double',
        'allocations' => '\Consilience\Xero\AccountingSdk\Model\Allocation[]',
        'payments' => '\Consilience\Xero\AccountingSdk\Model\Payment[]',
        'brandingThemeID' => 'string',
        'hasAttachments' => 'bool',
        'validationErrors' => '\Consilience\Xero\AccountingSdk\Model\ValidationError[]'
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
        'fullyPaidOnDate' => 'date',
        'creditNoteID' => 'uuid',
        'creditNoteNumber' => null,
        'reference' => null,
        'sentToContact' => null,
        'currencyRate' => 'double',
        'remainingCredit' => 'double',
        'allocations' => null,
        'payments' => null,
        'brandingThemeID' => 'uuid',
        'hasAttachments' => null,
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
        'fullyPaidOnDate' => 'FullyPaidOnDate',
        'creditNoteID' => 'CreditNoteID',
        'creditNoteNumber' => 'CreditNoteNumber',
        'reference' => 'Reference',
        'sentToContact' => 'SentToContact',
        'currencyRate' => 'CurrencyRate',
        'remainingCredit' => 'RemainingCredit',
        'allocations' => 'Allocations',
        'payments' => 'Payments',
        'brandingThemeID' => 'BrandingThemeID',
        'hasAttachments' => 'HasAttachments',
        'validationErrors' => 'ValidationErrors'
    ];

    /**
     * Attributes to setter functions
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
        'fullyPaidOnDate' => 'setFullyPaidOnDate',
        'creditNoteID' => 'setCreditNoteID',
        'creditNoteNumber' => 'setCreditNoteNumber',
        'reference' => 'setReference',
        'sentToContact' => 'setSentToContact',
        'currencyRate' => 'setCurrencyRate',
        'remainingCredit' => 'setRemainingCredit',
        'allocations' => 'setAllocations',
        'payments' => 'setPayments',
        'brandingThemeID' => 'setBrandingThemeID',
        'hasAttachments' => 'setHasAttachments',
        'validationErrors' => 'setValidationErrors'
    ];

    /**
     * Array of attributes to getter functions
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
        'fullyPaidOnDate' => 'getFullyPaidOnDate',
        'creditNoteID' => 'getCreditNoteID',
        'creditNoteNumber' => 'getCreditNoteNumber',
        'reference' => 'getReference',
        'sentToContact' => 'getSentToContact',
        'currencyRate' => 'getCurrencyRate',
        'remainingCredit' => 'getRemainingCredit',
        'allocations' => 'getAllocations',
        'payments' => 'getPayments',
        'brandingThemeID' => 'getBrandingThemeID',
        'hasAttachments' => 'getHasAttachments',
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

    const TYPE_ACCPAYCREDIT = 'ACCPAYCREDIT';
    const TYPE_ACCRECCREDIT = 'ACCRECCREDIT';const STATUS_DRAFT = 'DRAFT';
    const STATUS_SUBMITTED = 'SUBMITTED';
    const STATUS_DELETED = 'DELETED';
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
            self::TYPE_ACCPAYCREDIT,
            self::TYPE_ACCRECCREDIT,
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
            self::STATUS_DRAFT,
            self::STATUS_SUBMITTED,
            self::STATUS_DELETED,
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['contact'] = $data['contact'] ?? null;
        $this->container['date'] = $data['date'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['lineAmountTypes'] = $data['lineAmountTypes'] ?? null;
        $this->container['lineItems'] = $data['lineItems'] ?? null;
        $this->container['subTotal'] = $data['subTotal'] ?? null;
        $this->container['totalTax'] = $data['totalTax'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
        $this->container['updatedDateUTC'] = $data['updatedDateUTC'] ?? null;
        $this->container['currencyCode'] = $data['currencyCode'] ?? null;
        $this->container['fullyPaidOnDate'] = $data['fullyPaidOnDate'] ?? null;
        $this->container['creditNoteID'] = $data['creditNoteID'] ?? null;
        $this->container['creditNoteNumber'] = $data['creditNoteNumber'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['sentToContact'] = $data['sentToContact'] ?? null;
        $this->container['currencyRate'] = $data['currencyRate'] ?? null;
        $this->container['remainingCredit'] = $data['remainingCredit'] ?? null;
        $this->container['allocations'] = $data['allocations'] ?? null;
        $this->container['payments'] = $data['payments'] ?? null;
        $this->container['brandingThemeID'] = $data['brandingThemeID'] ?? null;
        $this->container['hasAttachments'] = $data['hasAttachments'] ?? null;
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be one of "%s"',
                'type',
                implode('", "', $allowedValues)
            );
        }

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
     * @param string|null $type See Credit Note Types
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (! is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Invalid value for "%s", must be one of "%s"',
                    'type',
                    implode('", "', $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \Consilience\Xero\AccountingSdk\Model\Contact|null
     */
    public function getContact()
    {
        return $this->get('contact');
    }

    /**
     * Sets contact
     *
     * @param \Consilience\Xero\AccountingSdk\Model\Contact|null $contact contact
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
        return $this->get('date');
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date The date the credit note is issued YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation
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
        return $this->get('status');
    }

    /**
     * Sets status
     *
     * @param string|null $status See Credit Note Status Codes
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
     * Gets lineAmountTypes
     *
     * @return \Consilience\Xero\AccountingSdk\Model\LineAmountTypes|null
     */
    public function getLineAmountTypes()
    {
        return $this->get('lineAmountTypes');
    }

    /**
     * Sets lineAmountTypes
     *
     * @param \Consilience\Xero\AccountingSdk\Model\LineAmountTypes|null $lineAmountTypes lineAmountTypes
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
     * @return \Consilience\Xero\AccountingSdk\Model\LineItem[]|null
     */
    public function getLineItems()
    {
        return $this->get('lineItems');
    }

    /**
     * Sets lineItems
     *
     * @param \Consilience\Xero\AccountingSdk\Model\LineItem[]|null $lineItems See Invoice Line Items
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
        return $this->get('subTotal');
    }

    /**
     * Sets subTotal
     *
     * @param double|null $subTotal The subtotal of the credit note excluding taxes
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
        return $this->get('totalTax');
    }

    /**
     * Sets totalTax
     *
     * @param double|null $totalTax The total tax on the credit note
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
        return $this->get('total');
    }

    /**
     * Sets total
     *
     * @param double|null $total The total of the Credit Note(subtotal + total tax)
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
        return $this->get('updatedDateUTC');
    }

    /**
     * Sets updatedDateUTC
     *
     * @param \DateTime|null $updatedDateUTC UTC timestamp of last update to the credit note
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
     * @return \Consilience\Xero\AccountingSdk\Model\CurrencyCode|null
     */
    public function getCurrencyCode()
    {
        return $this->get('currencyCode');
    }

    /**
     * Sets currencyCode
     *
     * @param \Consilience\Xero\AccountingSdk\Model\CurrencyCode|null $currencyCode currencyCode
     *
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets fullyPaidOnDate
     *
     * @return \DateTime|null
     */
    public function getFullyPaidOnDate()
    {
        return $this->get('fullyPaidOnDate');
    }

    /**
     * Sets fullyPaidOnDate
     *
     * @param \DateTime|null $fullyPaidOnDate Date when credit note was fully paid(UTC format)
     *
     * @return $this
     */
    public function setFullyPaidOnDate($fullyPaidOnDate)
    {
        $this->container['fullyPaidOnDate'] = $fullyPaidOnDate;

        return $this;
    }

    /**
     * Gets creditNoteID
     *
     * @return string|null
     */
    public function getCreditNoteID()
    {
        return $this->get('creditNoteID');
    }

    /**
     * Sets creditNoteID
     *
     * @param string|null $creditNoteID Xero generated unique identifier
     *
     * @return $this
     */
    public function setCreditNoteID($creditNoteID)
    {
        $this->container['creditNoteID'] = $creditNoteID;

        return $this;
    }

    /**
     * Gets creditNoteNumber
     *
     * @return string|null
     */
    public function getCreditNoteNumber()
    {
        return $this->get('creditNoteNumber');
    }

    /**
     * Sets creditNoteNumber
     *
     * @param string|null $creditNoteNumber ACCRECCREDIT – Unique alpha numeric code identifying credit note (when missing will auto-generate from your Organisation Invoice Settings)
     *
     * @return $this
     */
    public function setCreditNoteNumber($creditNoteNumber)
    {
        $this->container['creditNoteNumber'] = $creditNoteNumber;

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
     * @param string|null $reference ACCRECCREDIT only – additional reference number
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets sentToContact
     *
     * @return bool|null
     */
    public function getSentToContact()
    {
        return $this->get('sentToContact');
    }

    /**
     * Sets sentToContact
     *
     * @param bool|null $sentToContact boolean to indicate if a credit note has been sent to a contact via  the Xero app (currently read only)
     *
     * @return $this
     */
    public function setSentToContact($sentToContact)
    {
        $this->container['sentToContact'] = $sentToContact;

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
     * @param double|null $currencyRate The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used
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
        return $this->get('remainingCredit');
    }

    /**
     * Sets remainingCredit
     *
     * @param double|null $remainingCredit The remaining credit balance on the Credit Note
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
     * @return \Consilience\Xero\AccountingSdk\Model\Allocation[]|null
     */
    public function getAllocations()
    {
        return $this->get('allocations');
    }

    /**
     * Sets allocations
     *
     * @param \Consilience\Xero\AccountingSdk\Model\Allocation[]|null $allocations See Allocations
     *
     * @return $this
     */
    public function setAllocations($allocations)
    {
        $this->container['allocations'] = $allocations;

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
     * Gets brandingThemeID
     *
     * @return string|null
     */
    public function getBrandingThemeID()
    {
        return $this->get('brandingThemeID');
    }

    /**
     * Sets brandingThemeID
     *
     * @param string|null $brandingThemeID See BrandingThemes
     *
     * @return $this
     */
    public function setBrandingThemeID($brandingThemeID)
    {
        $this->container['brandingThemeID'] = $brandingThemeID;

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
     * @param bool|null $hasAttachments boolean to indicate if a credit note has an attachment
     *
     * @return $this
     */
    public function setHasAttachments($hasAttachments)
    {
        $this->container['hasAttachments'] = $hasAttachments;

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
