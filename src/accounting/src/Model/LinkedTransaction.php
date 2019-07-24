<?php

namespace Consilience\Xero\AccountingSdk\Model;

/**
 * LinkedTransaction
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
 * LinkedTransaction Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\AccountingSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LinkedTransaction implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LinkedTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sourceTransactionID' => 'string',
        'sourceLineItemID' => 'string',
        'contactID' => 'string',
        'targetTransactionID' => 'string',
        'targetLineItemID' => 'string',
        'linkedTransactionID' => 'string',
        'status' => 'string',
        'type' => 'string',
        'updatedDateUTC' => '\DateTime',
        'sourceTransactionTypeCode' => 'string',
        'validationErrors' => '\Consilience\Xero\AccountingSdk\Model\ValidationError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sourceTransactionID' => 'uuid',
        'sourceLineItemID' => 'uuid',
        'contactID' => 'uuid',
        'targetTransactionID' => 'uuid',
        'targetLineItemID' => 'uuid',
        'linkedTransactionID' => 'uuid',
        'status' => null,
        'type' => null,
        'updatedDateUTC' => 'date-time',
        'sourceTransactionTypeCode' => null,
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
        'sourceTransactionID' => 'SourceTransactionID',
        'sourceLineItemID' => 'SourceLineItemID',
        'contactID' => 'ContactID',
        'targetTransactionID' => 'TargetTransactionID',
        'targetLineItemID' => 'TargetLineItemID',
        'linkedTransactionID' => 'LinkedTransactionID',
        'status' => 'Status',
        'type' => 'Type',
        'updatedDateUTC' => 'UpdatedDateUTC',
        'sourceTransactionTypeCode' => 'SourceTransactionTypeCode',
        'validationErrors' => 'ValidationErrors'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'sourceTransactionID' => 'setSourceTransactionID',
        'sourceLineItemID' => 'setSourceLineItemID',
        'contactID' => 'setContactID',
        'targetTransactionID' => 'setTargetTransactionID',
        'targetLineItemID' => 'setTargetLineItemID',
        'linkedTransactionID' => 'setLinkedTransactionID',
        'status' => 'setStatus',
        'type' => 'setType',
        'updatedDateUTC' => 'setUpdatedDateUTC',
        'sourceTransactionTypeCode' => 'setSourceTransactionTypeCode',
        'validationErrors' => 'setValidationErrors'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'sourceTransactionID' => 'getSourceTransactionID',
        'sourceLineItemID' => 'getSourceLineItemID',
        'contactID' => 'getContactID',
        'targetTransactionID' => 'getTargetTransactionID',
        'targetLineItemID' => 'getTargetLineItemID',
        'linkedTransactionID' => 'getLinkedTransactionID',
        'status' => 'getStatus',
        'type' => 'getType',
        'updatedDateUTC' => 'getUpdatedDateUTC',
        'sourceTransactionTypeCode' => 'getSourceTransactionTypeCode',
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

    const STATUS_APPROVED = 'APPROVED';
    const STATUS_DRAFT = 'DRAFT';
    const STATUS_ONDRAFT = 'ONDRAFT';
    const STATUS_BILLED = 'BILLED';
    const STATUS_VOIDED = 'VOIDED';const TYPE_BILLABLEEXPENSE = 'BILLABLEEXPENSE';const SOURCE_TRANSACTION_TYPE_CODE_ACCPAY = 'ACCPAY';
    const SOURCE_TRANSACTION_TYPE_CODE_SPEND = 'SPEND';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_APPROVED,
            self::STATUS_DRAFT,
            self::STATUS_ONDRAFT,
            self::STATUS_BILLED,
            self::STATUS_VOIDED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BILLABLEEXPENSE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceTransactionTypeCodeAllowableValues()
    {
        return [
            self::SOURCE_TRANSACTION_TYPE_CODE_ACCPAY,
            self::SOURCE_TRANSACTION_TYPE_CODE_SPEND,
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
        $this->container['sourceTransactionID'] = $data['sourceTransactionID'] ?? null;
        $this->container['sourceLineItemID'] = $data['sourceLineItemID'] ?? null;
        $this->container['contactID'] = $data['contactID'] ?? null;
        $this->container['targetTransactionID'] = $data['targetTransactionID'] ?? null;
        $this->container['targetLineItemID'] = $data['targetLineItemID'] ?? null;
        $this->container['linkedTransactionID'] = $data['linkedTransactionID'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['updatedDateUTC'] = $data['updatedDateUTC'] ?? null;
        $this->container['sourceTransactionTypeCode'] = $data['sourceTransactionTypeCode'] ?? null;
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

        if ($this->container['sourceLineItemID'] === null) {
            $invalidProperties[] = sprintf('"%s" can\'t be null', 'sourceLineItemID');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be one of "%s"',
                'status',
                implode('", "', $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be one of "%s"',
                'type',
                implode('", "', $allowedValues)
            );
        }

        $allowedValues = $this->getSourceTransactionTypeCodeAllowableValues();
        if (!is_null($this->container['sourceTransactionTypeCode']) && !in_array($this->container['sourceTransactionTypeCode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be one of "%s"',
                'sourceTransactionTypeCode',
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
     * Gets sourceTransactionID
     *
     * @return string|null
     */
    public function getSourceTransactionID()
    {
        return $this->get('sourceTransactionID');
    }

    /**
     * Sets sourceTransactionID
     *
     * @param string|null $sourceTransactionID Filter by the SourceTransactionID. Get all the linked transactions created from a particular ACCPAY invoice
     *
     * @return $this
     */
    public function setSourceTransactionID($sourceTransactionID)
    {
        $this->container['sourceTransactionID'] = $sourceTransactionID;

        return $this;
    }

    /**
     * Gets sourceLineItemID
     *
     * @return string
     */
    public function getSourceLineItemID()
    {
        return $this->get('sourceLineItemID');
    }

    /**
     * Sets sourceLineItemID
     *
     * @param string $sourceLineItemID The line item identifier from the source transaction.
     *
     * @return $this
     */
    public function setSourceLineItemID($sourceLineItemID)
    {
        $this->container['sourceLineItemID'] = $sourceLineItemID;

        return $this;
    }

    /**
     * Gets contactID
     *
     * @return string|null
     */
    public function getContactID()
    {
        return $this->get('contactID');
    }

    /**
     * Sets contactID
     *
     * @param string|null $contactID Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
     *
     * @return $this
     */
    public function setContactID($contactID)
    {
        $this->container['contactID'] = $contactID;

        return $this;
    }

    /**
     * Gets targetTransactionID
     *
     * @return string|null
     */
    public function getTargetTransactionID()
    {
        return $this->get('targetTransactionID');
    }

    /**
     * Sets targetTransactionID
     *
     * @param string|null $targetTransactionID Filter by the TargetTransactionID. Get all the linked transactions  allocated to a particular ACCREC invoice
     *
     * @return $this
     */
    public function setTargetTransactionID($targetTransactionID)
    {
        $this->container['targetTransactionID'] = $targetTransactionID;

        return $this;
    }

    /**
     * Gets targetLineItemID
     *
     * @return string|null
     */
    public function getTargetLineItemID()
    {
        return $this->get('targetLineItemID');
    }

    /**
     * Sets targetLineItemID
     *
     * @param string|null $targetLineItemID The line item identifier from the target transaction. It is possible  to link multiple billable expenses to the same TargetLineItemID.
     *
     * @return $this
     */
    public function setTargetLineItemID($targetLineItemID)
    {
        $this->container['targetLineItemID'] = $targetLineItemID;

        return $this;
    }

    /**
     * Gets linkedTransactionID
     *
     * @return string|null
     */
    public function getLinkedTransactionID()
    {
        return $this->get('linkedTransactionID');
    }

    /**
     * Sets linkedTransactionID
     *
     * @param string|null $linkedTransactionID The Xero identifier for an Linked Transaction e.g. /LinkedTransactions/297c2dc5-cc47-4afd-8ec8-74990b8761e9
     *
     * @return $this
     */
    public function setLinkedTransactionID($linkedTransactionID)
    {
        $this->container['linkedTransactionID'] = $linkedTransactionID;

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
     * @param string|null $status Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
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
     * @param string|null $type This will always be BILLABLEEXPENSE. More types may be added in future.
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
     * @param \DateTime|null $updatedDateUTC The last modified date in UTC format
     *
     * @return $this
     */
    public function setUpdatedDateUTC($updatedDateUTC)
    {
        $this->container['updatedDateUTC'] = $updatedDateUTC;

        return $this;
    }

    /**
     * Gets sourceTransactionTypeCode
     *
     * @return string|null
     */
    public function getSourceTransactionTypeCode()
    {
        return $this->get('sourceTransactionTypeCode');
    }

    /**
     * Sets sourceTransactionTypeCode
     *
     * @param string|null $sourceTransactionTypeCode The Type of the source tranasction. This will be ACCPAY if the linked transaction was created from an invoice and SPEND if it was created from a bank transaction.
     *
     * @return $this
     */
    public function setSourceTransactionTypeCode($sourceTransactionTypeCode)
    {
        $allowedValues = $this->getSourceTransactionTypeCodeAllowableValues();
        if (! is_null($sourceTransactionTypeCode) && !in_array($sourceTransactionTypeCode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Invalid value for "%s", must be one of "%s"',
                    'sourceTransactionTypeCode',
                    implode('", "', $allowedValues)
                )
            );
        }
        $this->container['sourceTransactionTypeCode'] = $sourceTransactionTypeCode;

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
