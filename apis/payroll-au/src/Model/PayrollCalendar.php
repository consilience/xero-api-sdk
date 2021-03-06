<?php

namespace Consilience\Xero\PayrollAuSdk\Model;

/**
 * PayrollCalendar
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Consilience\Xero\PayrollAuSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */

/**
 * Payroll - AU
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * 
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
 * PayrollCalendar Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\PayrollAuSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class PayrollCalendar implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayrollCalendar';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'calendarType' => 'string',
        'startDate' => '\DateTime',
        'paymentDate' => '\DateTime',
        'employeeID' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'calendarType' => null,
        'startDate' => 'date',
        'paymentDate' => 'date',
        'employeeID' => 'uuid'
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
        'name' => 'Name',
        'calendarType' => 'CalendarType',
        'startDate' => 'StartDate',
        'paymentDate' => 'PaymentDate',
        'employeeID' => 'EmployeeID'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'calendarType' => 'setCalendarType',
        'startDate' => 'setStartDate',
        'paymentDate' => 'setPaymentDate',
        'employeeID' => 'setEmployeeID'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'calendarType' => 'getCalendarType',
        'startDate' => 'getStartDate',
        'paymentDate' => 'getPaymentDate',
        'employeeID' => 'getEmployeeID'
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

    const CALENDAR_TYPE_WEEKLY = 'WEEKLY';
    const CALENDAR_TYPE_FORTNIGHTLY = 'FORTNIGHTLY';
    const CALENDAR_TYPE_FOURWEEKLY = 'FOURWEEKLY';
    const CALENDAR_TYPE_MONTHLY = 'MONTHLY';
    const CALENDAR_TYPE_TWICEMONTHLY = 'TWICEMONTHLY';
    const CALENDAR_TYPE_QUARTERLY = 'QUARTERLY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCalendarTypeAllowableValues()
    {
        return [
            self::CALENDAR_TYPE_WEEKLY,
            self::CALENDAR_TYPE_FORTNIGHTLY,
            self::CALENDAR_TYPE_FOURWEEKLY,
            self::CALENDAR_TYPE_MONTHLY,
            self::CALENDAR_TYPE_TWICEMONTHLY,
            self::CALENDAR_TYPE_QUARTERLY,
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['calendarType'] = $data['calendarType'] ?? null;
        $this->container['startDate'] = $data['startDate'] ?? null;
        $this->container['paymentDate'] = $data['paymentDate'] ?? null;
        $this->container['employeeID'] = $data['employeeID'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = sprintf('"%s" can\'t be null', 'name');
        }
        if ((mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'name',
                100
            );
        }

        if ($this->container['calendarType'] === null) {
            $invalidProperties[] = sprintf('"%s" can\'t be null', 'calendarType');
        }
        $allowedValues = $this->getCalendarTypeAllowableValues();
        if (!is_null($this->container['calendarType']) && !in_array($this->container['calendarType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be one of "%s"',
                'calendarType',
                implode('", "', $allowedValues)
            );
        }

        if ($this->container['startDate'] === null) {
            $invalidProperties[] = sprintf('"%s" can\'t be null', 'startDate');
        }
        if ($this->container['paymentDate'] === null) {
            $invalidProperties[] = sprintf('"%s" can\'t be null', 'paymentDate');
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->get('name');
    }

    /**
     * Sets name
     *
     * @param string $name Name of the Payroll Calendar (max length = 100)
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PayrollCalendar., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets calendarType
     *
     * @return string
     */
    public function getCalendarType()
    {
        return $this->get('calendarType');
    }

    /**
     * Sets calendarType
     *
     * @param string $calendarType See Payroll Calendar types
     *
     * @return $this
     */
    public function setCalendarType($calendarType)
    {
        $allowedValues = $this->getCalendarTypeAllowableValues();
        if (!in_array($calendarType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Invalid value for "%s", must be one of "%s"',
                    'calendarType',
                    implode('", "', $allowedValues)
                )
            );
        }
        $this->container['calendarType'] = $calendarType;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->get('startDate');
    }

    /**
     * Sets startDate
     *
     * @param \DateTime $startDate The start date of the upcoming pay period. The end date will be calculated based upon this date, and the calendar type selected (YYYY-MM-DD), more details.
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets paymentDate
     *
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->get('paymentDate');
    }

    /**
     * Sets paymentDate
     *
     * @param \DateTime $paymentDate The date on which employees will be paid for the upcoming pay period (YYYY-MM-DD), more details.
     *
     * @return $this
     */
    public function setPaymentDate($paymentDate)
    {
        $this->container['paymentDate'] = $paymentDate;

        return $this;
    }

    /**
     * Gets employeeID
     *
     * @return string|null
     */
    public function getEmployeeID()
    {
        return $this->get('employeeID');
    }

    /**
     * Sets employeeID
     *
     * @param string|null $employeeID The Xero identifier for a Payroll Calendar e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     *
     * @return $this
     */
    public function setEmployeeID($employeeID)
    {
        $this->container['employeeID'] = $employeeID;

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
