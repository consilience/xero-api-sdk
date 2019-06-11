<?php

namespace Consilience\XeroAccounting\Sdk\Model;

/**
 * Statement
 *
 * PHP version 5
 *
 * @category Class
 * @package  Consilience\XeroAccounting\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Bank Feeds API
 *
 * The Xero Bank Feeds API
 *
 * The version of the OpenAPI document: 1.0.0
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
 * Statement Class Doc Comment
 *
 * @category Class
 * @package  Consilience\XeroAccounting\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Statement implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Statement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'feedConnectionId' => 'string',
        'status' => 'string',
        'startDate' => '\DateTime',
        'endDate' => '\DateTime',
        'startBalance' => '\Consilience\XeroAccounting\Sdk\Model\StartBalance',
        'endBalance' => '\Consilience\XeroAccounting\Sdk\Model\EndBalance',
        'statementLines' => '\Consilience\XeroAccounting\Sdk\Model\StatementLine[]',
        'errors' => '\Consilience\XeroAccounting\Sdk\Model\Error[]',
        'statementLineCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'feedConnectionId' => null,
        'status' => null,
        'startDate' => 'date',
        'endDate' => 'date',
        'startBalance' => null,
        'endBalance' => null,
        'statementLines' => null,
        'errors' => null,
        'statementLineCount' => null
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
        'id' => 'id',
        'feedConnectionId' => 'feedConnectionId',
        'status' => 'status',
        'startDate' => 'startDate',
        'endDate' => 'endDate',
        'startBalance' => 'startBalance',
        'endBalance' => 'endBalance',
        'statementLines' => 'statementLines',
        'errors' => 'errors',
        'statementLineCount' => 'statementLineCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'feedConnectionId' => 'setFeedConnectionId',
        'status' => 'setStatus',
        'startDate' => 'setStartDate',
        'endDate' => 'setEndDate',
        'startBalance' => 'setStartBalance',
        'endBalance' => 'setEndBalance',
        'statementLines' => 'setStatementLines',
        'errors' => 'setErrors',
        'statementLineCount' => 'setStatementLineCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'feedConnectionId' => 'getFeedConnectionId',
        'status' => 'getStatus',
        'startDate' => 'getStartDate',
        'endDate' => 'getEndDate',
        'startBalance' => 'getStartBalance',
        'endBalance' => 'getEndBalance',
        'statementLines' => 'getStatementLines',
        'errors' => 'getErrors',
        'statementLineCount' => 'getStatementLineCount'
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

    const STATUS_PENDING = 'PENDING';
    const STATUS_REJECTED = 'REJECTED';
    const STATUS_DELIVERED = 'DELIVERED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_REJECTED,
            self::STATUS_DELIVERED,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['feedConnectionId'] = isset($data['feedConnectionId']) ? $data['feedConnectionId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['startBalance'] = isset($data['startBalance']) ? $data['startBalance'] : null;
        $this->container['endBalance'] = isset($data['endBalance']) ? $data['endBalance'] : null;
        $this->container['statementLines'] = isset($data['statementLines']) ? $data['statementLines'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['statementLineCount'] = isset($data['statementLineCount']) ? $data['statementLineCount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets feedConnectionId
     *
     * @return string|null
     */
    public function getFeedConnectionId()
    {
        return $this->container['feedConnectionId'];
    }

    /**
     * Sets feedConnectionId
     *
     * @param string|null $feedConnectionId feedConnectionId
     *
     * @return $this
     */
    public function setFeedConnectionId($feedConnectionId)
    {
        $this->container['feedConnectionId'] = $feedConnectionId;

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
     * @param string|null $status status
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
     * Gets startDate
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime|null $startDate startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime|null $endDate endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets startBalance
     *
     * @return \Consilience\XeroAccounting\Sdk\Model\StartBalance|null
     */
    public function getStartBalance()
    {
        return $this->container['startBalance'];
    }

    /**
     * Sets startBalance
     *
     * @param \Consilience\XeroAccounting\Sdk\Model\StartBalance|null $startBalance startBalance
     *
     * @return $this
     */
    public function setStartBalance($startBalance)
    {
        $this->container['startBalance'] = $startBalance;

        return $this;
    }

    /**
     * Gets endBalance
     *
     * @return \Consilience\XeroAccounting\Sdk\Model\EndBalance|null
     */
    public function getEndBalance()
    {
        return $this->container['endBalance'];
    }

    /**
     * Sets endBalance
     *
     * @param \Consilience\XeroAccounting\Sdk\Model\EndBalance|null $endBalance endBalance
     *
     * @return $this
     */
    public function setEndBalance($endBalance)
    {
        $this->container['endBalance'] = $endBalance;

        return $this;
    }

    /**
     * Gets statementLines
     *
     * @return \Consilience\XeroAccounting\Sdk\Model\StatementLine[]|null
     */
    public function getStatementLines()
    {
        return $this->container['statementLines'];
    }

    /**
     * Sets statementLines
     *
     * @param \Consilience\XeroAccounting\Sdk\Model\StatementLine[]|null $statementLines statementLines
     *
     * @return $this
     */
    public function setStatementLines($statementLines)
    {
        $this->container['statementLines'] = $statementLines;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \Consilience\XeroAccounting\Sdk\Model\Error[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Consilience\XeroAccounting\Sdk\Model\Error[]|null $errors errors
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets statementLineCount
     *
     * @return int|null
     */
    public function getStatementLineCount()
    {
        return $this->container['statementLineCount'];
    }

    /**
     * Sets statementLineCount
     *
     * @param int|null $statementLineCount statementLineCount
     *
     * @return $this
     */
    public function setStatementLineCount($statementLineCount)
    {
        $this->container['statementLineCount'] = $statementLineCount;

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
