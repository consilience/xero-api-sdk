<?php

namespace Consilience\Xero\BankfeedsSdk\Model;

/**
 * Statement
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Consilience\Xero\BankfeedsSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
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
use Consilience\Xero\BankfeedsSdk\ObjectSerializer;

/**
 * Statement Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\BankfeedsSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
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
        'startBalance' => '\Consilience\Xero\BankfeedsSdk\Model\StartBalance',
        'endBalance' => '\Consilience\Xero\BankfeedsSdk\Model\EndBalance',
        'statementLines' => '\Consilience\Xero\BankfeedsSdk\Model\StatementLine[]',
        'errors' => '\Consilience\Xero\BankfeedsSdk\Model\Error[]',
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
     * Attributes of form: local name => original name
     * Local name is camelCase, original name is as per API description
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
     * Attributes to setter functions
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
     * Array of attributes to getter functions
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['feedConnectionId'] = $data['feedConnectionId'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['startDate'] = $data['startDate'] ?? null;
        $this->container['endDate'] = $data['endDate'] ?? null;
        $this->container['startBalance'] = $data['startBalance'] ?? null;
        $this->container['endBalance'] = $data['endBalance'] ?? null;
        $this->container['statementLines'] = $data['statementLines'] ?? null;
        $this->container['errors'] = $data['errors'] ?? null;
        $this->container['statementLineCount'] = $data['statementLineCount'] ?? null;
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
            $invalidProperties[] = sprintf('"%s" can\'t be null', 'id');
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->get('id');
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
        return $this->get('feedConnectionId');
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
        return $this->get('status');
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
     * Gets startDate
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->get('startDate');
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
        return $this->get('endDate');
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
     * @return \Consilience\Xero\BankfeedsSdk\Model\StartBalance|null
     */
    public function getStartBalance()
    {
        return $this->get('startBalance');
    }

    /**
     * Sets startBalance
     *
     * @param \Consilience\Xero\BankfeedsSdk\Model\StartBalance|null $startBalance startBalance
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
     * @return \Consilience\Xero\BankfeedsSdk\Model\EndBalance|null
     */
    public function getEndBalance()
    {
        return $this->get('endBalance');
    }

    /**
     * Sets endBalance
     *
     * @param \Consilience\Xero\BankfeedsSdk\Model\EndBalance|null $endBalance endBalance
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
     * @return \Consilience\Xero\BankfeedsSdk\Model\StatementLine[]|null
     */
    public function getStatementLines()
    {
        return $this->get('statementLines');
    }

    /**
     * Sets statementLines
     *
     * @param \Consilience\Xero\BankfeedsSdk\Model\StatementLine[]|null $statementLines statementLines
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
     * @return \Consilience\Xero\BankfeedsSdk\Model\Error[]|null
     */
    public function getErrors()
    {
        return $this->get('errors');
    }

    /**
     * Sets errors
     *
     * @param \Consilience\Xero\BankfeedsSdk\Model\Error[]|null $errors errors
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
        return $this->get('statementLineCount');
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
