<?php

namespace Consilience\Xero\AccountingSdk\Model;

/**
 * Journal
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
 * OpenAPI Generator version: 4.0.1
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
 * Journal Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\AccountingSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Journal implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Journal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'journalID' => 'string',
        'journalDate' => '\DateTime',
        'journalNumber' => 'string',
        'createdDateUTC' => '\DateTime',
        'reference' => 'string',
        'sourceID' => 'string',
        'sourceType' => 'string',
        'journalLines' => '\Consilience\Xero\AccountingSdk\Model\JournalLine[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'journalID' => 'uuid',
        'journalDate' => 'date',
        'journalNumber' => null,
        'createdDateUTC' => 'date-time',
        'reference' => null,
        'sourceID' => 'uuid',
        'sourceType' => null,
        'journalLines' => null
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
        'journalID' => 'JournalID',
        'journalDate' => 'JournalDate',
        'journalNumber' => 'JournalNumber',
        'createdDateUTC' => 'CreatedDateUTC',
        'reference' => 'Reference',
        'sourceID' => 'SourceID',
        'sourceType' => 'SourceType',
        'journalLines' => 'JournalLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'journalID' => 'setJournalID',
        'journalDate' => 'setJournalDate',
        'journalNumber' => 'setJournalNumber',
        'createdDateUTC' => 'setCreatedDateUTC',
        'reference' => 'setReference',
        'sourceID' => 'setSourceID',
        'sourceType' => 'setSourceType',
        'journalLines' => 'setJournalLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'journalID' => 'getJournalID',
        'journalDate' => 'getJournalDate',
        'journalNumber' => 'getJournalNumber',
        'createdDateUTC' => 'getCreatedDateUTC',
        'reference' => 'getReference',
        'sourceID' => 'getSourceID',
        'sourceType' => 'getSourceType',
        'journalLines' => 'getJournalLines'
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

    const SOURCE_TYPE_ACCREC = 'ACCREC';
    const SOURCE_TYPE_ACCPAY = 'ACCPAY';
    const SOURCE_TYPE_ACCRECCREDIT = 'ACCRECCREDIT';
    const SOURCE_TYPE_ACCPAYCREDIT = 'ACCPAYCREDIT';
    const SOURCE_TYPE_ACCRECPAYMENT = 'ACCRECPAYMENT';
    const SOURCE_TYPE_ACCPAYPAYMENT = 'ACCPAYPAYMENT';
    const SOURCE_TYPE_ARCREDITPAYMENT = 'ARCREDITPAYMENT';
    const SOURCE_TYPE_APCREDITPAYMENT = 'APCREDITPAYMENT';
    const SOURCE_TYPE_CASHREC = 'CASHREC';
    const SOURCE_TYPE_CASHPAID = 'CASHPAID';
    const SOURCE_TYPE_TRANSFER = 'TRANSFER';
    const SOURCE_TYPE_ARPREPAYMENT = 'ARPREPAYMENT';
    const SOURCE_TYPE_APPREPAYMENT = 'APPREPAYMENT';
    const SOURCE_TYPE_AROVERPAYMENT = 'AROVERPAYMENT';
    const SOURCE_TYPE_APOVERPAYMENT = 'APOVERPAYMENT';
    const SOURCE_TYPE_EXPCLAIM = 'EXPCLAIM';
    const SOURCE_TYPE_EXPPAYMENT = 'EXPPAYMENT';
    const SOURCE_TYPE_MANJOURNAL = 'MANJOURNAL';
    const SOURCE_TYPE_PAYSLIP = 'PAYSLIP';
    const SOURCE_TYPE_WAGEPAYABLE = 'WAGEPAYABLE';
    const SOURCE_TYPE_INTEGRATEDPAYROLLPE = 'INTEGRATEDPAYROLLPE';
    const SOURCE_TYPE_INTEGRATEDPAYROLLPT = 'INTEGRATEDPAYROLLPT';
    const SOURCE_TYPE_EXTERNALSPENDMONEY = 'EXTERNALSPENDMONEY';
    const SOURCE_TYPE_INTEGRATEDPAYROLLPTPAYMENT = 'INTEGRATEDPAYROLLPTPAYMENT';
    const SOURCE_TYPE_INTEGRATEDPAYROLLCN = 'INTEGRATEDPAYROLLCN';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceTypeAllowableValues()
    {
        return [
            self::SOURCE_TYPE_ACCREC,
            self::SOURCE_TYPE_ACCPAY,
            self::SOURCE_TYPE_ACCRECCREDIT,
            self::SOURCE_TYPE_ACCPAYCREDIT,
            self::SOURCE_TYPE_ACCRECPAYMENT,
            self::SOURCE_TYPE_ACCPAYPAYMENT,
            self::SOURCE_TYPE_ARCREDITPAYMENT,
            self::SOURCE_TYPE_APCREDITPAYMENT,
            self::SOURCE_TYPE_CASHREC,
            self::SOURCE_TYPE_CASHPAID,
            self::SOURCE_TYPE_TRANSFER,
            self::SOURCE_TYPE_ARPREPAYMENT,
            self::SOURCE_TYPE_APPREPAYMENT,
            self::SOURCE_TYPE_AROVERPAYMENT,
            self::SOURCE_TYPE_APOVERPAYMENT,
            self::SOURCE_TYPE_EXPCLAIM,
            self::SOURCE_TYPE_EXPPAYMENT,
            self::SOURCE_TYPE_MANJOURNAL,
            self::SOURCE_TYPE_PAYSLIP,
            self::SOURCE_TYPE_WAGEPAYABLE,
            self::SOURCE_TYPE_INTEGRATEDPAYROLLPE,
            self::SOURCE_TYPE_INTEGRATEDPAYROLLPT,
            self::SOURCE_TYPE_EXTERNALSPENDMONEY,
            self::SOURCE_TYPE_INTEGRATEDPAYROLLPTPAYMENT,
            self::SOURCE_TYPE_INTEGRATEDPAYROLLCN,
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
        $this->container['journalID'] = isset($data['journalID']) ? $data['journalID'] : null;
        $this->container['journalDate'] = isset($data['journalDate']) ? $data['journalDate'] : null;
        $this->container['journalNumber'] = isset($data['journalNumber']) ? $data['journalNumber'] : null;
        $this->container['createdDateUTC'] = isset($data['createdDateUTC']) ? $data['createdDateUTC'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['sourceID'] = isset($data['sourceID']) ? $data['sourceID'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['journalLines'] = isset($data['journalLines']) ? $data['journalLines'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSourceTypeAllowableValues();
        if (!is_null($this->container['sourceType']) && !in_array($this->container['sourceType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sourceType', must be one of '%s'",
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
     * Gets journalID
     *
     * @return string|null
     */
    public function getJournalID()
    {
        return $this->container['journalID'];
    }

    /**
     * Sets journalID
     *
     * @param string|null $journalID Xero identifier
     *
     * @return $this
     */
    public function setJournalID($journalID)
    {
        $this->container['journalID'] = $journalID;

        return $this;
    }

    /**
     * Gets journalDate
     *
     * @return \DateTime|null
     */
    public function getJournalDate()
    {
        return $this->container['journalDate'];
    }

    /**
     * Sets journalDate
     *
     * @param \DateTime|null $journalDate Date the journal was posted
     *
     * @return $this
     */
    public function setJournalDate($journalDate)
    {
        $this->container['journalDate'] = $journalDate;

        return $this;
    }

    /**
     * Gets journalNumber
     *
     * @return string|null
     */
    public function getJournalNumber()
    {
        return $this->container['journalNumber'];
    }

    /**
     * Sets journalNumber
     *
     * @param string|null $journalNumber Xero generated journal number
     *
     * @return $this
     */
    public function setJournalNumber($journalNumber)
    {
        $this->container['journalNumber'] = $journalNumber;

        return $this;
    }

    /**
     * Gets createdDateUTC
     *
     * @return \DateTime|null
     */
    public function getCreatedDateUTC()
    {
        return $this->container['createdDateUTC'];
    }

    /**
     * Sets createdDateUTC
     *
     * @param \DateTime|null $createdDateUTC Created date UTC format
     *
     * @return $this
     */
    public function setCreatedDateUTC($createdDateUTC)
    {
        $this->container['createdDateUTC'] = $createdDateUTC;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference reference field for additional indetifying information
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets sourceID
     *
     * @return string|null
     */
    public function getSourceID()
    {
        return $this->container['sourceID'];
    }

    /**
     * Sets sourceID
     *
     * @param string|null $sourceID The identifier for the source transaction (e.g. InvoiceID)
     *
     * @return $this
     */
    public function setSourceID($sourceID)
    {
        $this->container['sourceID'] = $sourceID;

        return $this;
    }

    /**
     * Gets sourceType
     *
     * @return string|null
     */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
     * Sets sourceType
     *
     * @param string|null $sourceType The journal source type. The type of transaction that created the journal
     *
     * @return $this
     */
    public function setSourceType($sourceType)
    {
        $allowedValues = $this->getSourceTypeAllowableValues();
        if (!is_null($sourceType) && !in_array($sourceType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sourceType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sourceType'] = $sourceType;

        return $this;
    }

    /**
     * Gets journalLines
     *
     * @return \Consilience\Xero\AccountingSdk\Model\JournalLine[]|null
     */
    public function getJournalLines()
    {
        return $this->container['journalLines'];
    }

    /**
     * Sets journalLines
     *
     * @param \Consilience\Xero\AccountingSdk\Model\JournalLine[]|null $journalLines See JournalLines
     *
     * @return $this
     */
    public function setJournalLines($journalLines)
    {
        $this->container['journalLines'] = $journalLines;

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
