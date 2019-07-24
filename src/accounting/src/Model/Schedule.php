<?php

namespace Consilience\Xero\AccountingSdk\Model;

/**
 * Schedule
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
 * Schedule Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\AccountingSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Schedule implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Schedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'period' => 'int',
        'unit' => 'string',
        'dueDate' => 'int',
        'dueDateType' => 'string',
        'startDate' => '\DateTime',
        'nextScheduledDate' => '\DateTime',
        'endDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'period' => null,
        'unit' => null,
        'dueDate' => null,
        'dueDateType' => null,
        'startDate' => 'date',
        'nextScheduledDate' => 'date',
        'endDate' => 'date'
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
        'period' => 'Period',
        'unit' => 'Unit',
        'dueDate' => 'DueDate',
        'dueDateType' => 'DueDateType',
        'startDate' => 'StartDate',
        'nextScheduledDate' => 'NextScheduledDate',
        'endDate' => 'EndDate'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'period' => 'setPeriod',
        'unit' => 'setUnit',
        'dueDate' => 'setDueDate',
        'dueDateType' => 'setDueDateType',
        'startDate' => 'setStartDate',
        'nextScheduledDate' => 'setNextScheduledDate',
        'endDate' => 'setEndDate'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'period' => 'getPeriod',
        'unit' => 'getUnit',
        'dueDate' => 'getDueDate',
        'dueDateType' => 'getDueDateType',
        'startDate' => 'getStartDate',
        'nextScheduledDate' => 'getNextScheduledDate',
        'endDate' => 'getEndDate'
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

    const UNIT_WEEKLY = 'WEEKLY';
    const UNIT_MONTHLY = 'MONTHLY';const DUE_DATE_TYPE_DAYSAFTERBILLDATE = 'DAYSAFTERBILLDATE';
    const DUE_DATE_TYPE_DAYSAFTERBILLMONTH = 'DAYSAFTERBILLMONTH';
    const DUE_DATE_TYPE_OFCURRENTMONTH = 'OFCURRENTMONTH';
    const DUE_DATE_TYPE_OFFOLLOWINGMONTH = 'OFFOLLOWINGMONTH';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitAllowableValues()
    {
        return [
            self::UNIT_WEEKLY,
            self::UNIT_MONTHLY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDueDateTypeAllowableValues()
    {
        return [
            self::DUE_DATE_TYPE_DAYSAFTERBILLDATE,
            self::DUE_DATE_TYPE_DAYSAFTERBILLMONTH,
            self::DUE_DATE_TYPE_OFCURRENTMONTH,
            self::DUE_DATE_TYPE_OFFOLLOWINGMONTH,
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
        $this->container['period'] = $data['period'] ?? null;
        $this->container['unit'] = $data['unit'] ?? null;
        $this->container['dueDate'] = $data['dueDate'] ?? null;
        $this->container['dueDateType'] = $data['dueDateType'] ?? null;
        $this->container['startDate'] = $data['startDate'] ?? null;
        $this->container['nextScheduledDate'] = $data['nextScheduledDate'] ?? null;
        $this->container['endDate'] = $data['endDate'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getUnitAllowableValues();
        if (!is_null($this->container['unit']) && !in_array($this->container['unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be one of "%s"',
                'unit',
                implode('", "', $allowedValues)
            );
        }

        $allowedValues = $this->getDueDateTypeAllowableValues();
        if (!is_null($this->container['dueDateType']) && !in_array($this->container['dueDateType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be one of "%s"',
                'dueDateType',
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
     * Gets period
     *
     * @return int|null
     */
    public function getPeriod()
    {
        return $this->get('period');
    }

    /**
     * Sets period
     *
     * @param int|null $period Integer used with the unit e.g. 1 (every 1 week), 2 (every 2 months)
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->get('unit');
    }

    /**
     * Sets unit
     *
     * @param string|null $unit One of the following - WEEKLY or MONTHLY
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $allowedValues = $this->getUnitAllowableValues();
        if (! is_null($unit) && !in_array($unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Invalid value for "%s", must be one of "%s"',
                    'unit',
                    implode('", "', $allowedValues)
                )
            );
        }
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets dueDate
     *
     * @return int|null
     */
    public function getDueDate()
    {
        return $this->get('dueDate');
    }

    /**
     * Sets dueDate
     *
     * @param int|null $dueDate Integer used with due date type e.g 20 (of following month), 31 (of current month)
     *
     * @return $this
     */
    public function setDueDate($dueDate)
    {
        $this->container['dueDate'] = $dueDate;

        return $this;
    }

    /**
     * Gets dueDateType
     *
     * @return string|null
     */
    public function getDueDateType()
    {
        return $this->get('dueDateType');
    }

    /**
     * Sets dueDateType
     *
     * @param string|null $dueDateType the payment terms
     *
     * @return $this
     */
    public function setDueDateType($dueDateType)
    {
        $allowedValues = $this->getDueDateTypeAllowableValues();
        if (! is_null($dueDateType) && !in_array($dueDateType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Invalid value for "%s", must be one of "%s"',
                    'dueDateType',
                    implode('", "', $allowedValues)
                )
            );
        }
        $this->container['dueDateType'] = $dueDateType;

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
     * @param \DateTime|null $startDate Date the first invoice of the current version of the repeating schedule was generated (changes when repeating invoice is edited)
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets nextScheduledDate
     *
     * @return \DateTime|null
     */
    public function getNextScheduledDate()
    {
        return $this->get('nextScheduledDate');
    }

    /**
     * Sets nextScheduledDate
     *
     * @param \DateTime|null $nextScheduledDate The calendar date of the next invoice in the schedule to be generated
     *
     * @return $this
     */
    public function setNextScheduledDate($nextScheduledDate)
    {
        $this->container['nextScheduledDate'] = $nextScheduledDate;

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
     * @param \DateTime|null $endDate Invoice end date – only returned if the template has an end date set
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

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
