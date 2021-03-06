<?php

namespace Consilience\Xero\PayrollAuSdk\Model;

/**
 * PayslipSummary
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Consilience\Xero\PayrollAuSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU
 *
 * This is the Xero Payroll API for orgs in Australia region.
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
use Consilience\Xero\PayrollAuSdk\ObjectSerializer;

/**
 * PayslipSummary Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\PayrollAuSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class PayslipSummary implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayslipSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employeeID' => 'object',
        'payslipID' => 'object',
        'firstName' => 'string',
        'lastName' => 'string',
        'wages' => 'float',
        'deductions' => 'float',
        'tax' => 'float',
        'super' => 'float',
        'reimbursements' => 'float',
        'netPay' => 'float',
        'updatedDateUTC' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'employeeID' => 'uuid',
        'payslipID' => 'uuid',
        'firstName' => null,
        'lastName' => null,
        'wages' => 'float',
        'deductions' => 'float',
        'tax' => 'float',
        'super' => 'float',
        'reimbursements' => 'float',
        'netPay' => 'float',
        'updatedDateUTC' => 'date-time'
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
        'employeeID' => 'EmployeeID',
        'payslipID' => 'PayslipID',
        'firstName' => 'FirstName',
        'lastName' => 'LastName',
        'wages' => 'Wages',
        'deductions' => 'Deductions',
        'tax' => 'Tax',
        'super' => 'Super',
        'reimbursements' => 'Reimbursements',
        'netPay' => 'NetPay',
        'updatedDateUTC' => 'UpdatedDateUTC'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'employeeID' => 'setEmployeeID',
        'payslipID' => 'setPayslipID',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'wages' => 'setWages',
        'deductions' => 'setDeductions',
        'tax' => 'setTax',
        'super' => 'setSuper',
        'reimbursements' => 'setReimbursements',
        'netPay' => 'setNetPay',
        'updatedDateUTC' => 'setUpdatedDateUTC'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'employeeID' => 'getEmployeeID',
        'payslipID' => 'getPayslipID',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'wages' => 'getWages',
        'deductions' => 'getDeductions',
        'tax' => 'getTax',
        'super' => 'getSuper',
        'reimbursements' => 'getReimbursements',
        'netPay' => 'getNetPay',
        'updatedDateUTC' => 'getUpdatedDateUTC'
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
        $this->container['employeeID'] = $data['employeeID'] ?? null;
        $this->container['payslipID'] = $data['payslipID'] ?? null;
        $this->container['firstName'] = $data['firstName'] ?? null;
        $this->container['lastName'] = $data['lastName'] ?? null;
        $this->container['wages'] = $data['wages'] ?? null;
        $this->container['deductions'] = $data['deductions'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
        $this->container['super'] = $data['super'] ?? null;
        $this->container['reimbursements'] = $data['reimbursements'] ?? null;
        $this->container['netPay'] = $data['netPay'] ?? null;
        $this->container['updatedDateUTC'] = $data['updatedDateUTC'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets employeeID
     *
     * @return object|null
     */
    public function getEmployeeID()
    {
        return $this->get('employeeID');
    }

    /**
     * Sets employeeID
     *
     * @param object|null $employeeID The Xero identifier for an employee
     *
     * @return $this
     */
    public function setEmployeeID($employeeID)
    {
        $this->container['employeeID'] = $employeeID;

        return $this;
    }

    /**
     * Gets payslipID
     *
     * @return object|null
     */
    public function getPayslipID()
    {
        return $this->get('payslipID');
    }

    /**
     * Sets payslipID
     *
     * @param object|null $payslipID Xero identifier for the payslip
     *
     * @return $this
     */
    public function setPayslipID($payslipID)
    {
        $this->container['payslipID'] = $payslipID;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->get('firstName');
    }

    /**
     * Sets firstName
     *
     * @param string|null $firstName First name of employee
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->get('lastName');
    }

    /**
     * Sets lastName
     *
     * @param string|null $lastName Last name of employee
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets wages
     *
     * @return float|null
     */
    public function getWages()
    {
        return $this->get('wages');
    }

    /**
     * Sets wages
     *
     * @param float|null $wages The Wages for the Payslip
     *
     * @return $this
     */
    public function setWages($wages)
    {
        $this->container['wages'] = $wages;

        return $this;
    }

    /**
     * Gets deductions
     *
     * @return float|null
     */
    public function getDeductions()
    {
        return $this->get('deductions');
    }

    /**
     * Sets deductions
     *
     * @param float|null $deductions The Deductions for the Payslip
     *
     * @return $this
     */
    public function setDeductions($deductions)
    {
        $this->container['deductions'] = $deductions;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return float|null
     */
    public function getTax()
    {
        return $this->get('tax');
    }

    /**
     * Sets tax
     *
     * @param float|null $tax The Tax for the Payslip
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets super
     *
     * @return float|null
     */
    public function getSuper()
    {
        return $this->get('super');
    }

    /**
     * Sets super
     *
     * @param float|null $super The Super for the Payslip
     *
     * @return $this
     */
    public function setSuper($super)
    {
        $this->container['super'] = $super;

        return $this;
    }

    /**
     * Gets reimbursements
     *
     * @return float|null
     */
    public function getReimbursements()
    {
        return $this->get('reimbursements');
    }

    /**
     * Sets reimbursements
     *
     * @param float|null $reimbursements The Reimbursements for the Payslip
     *
     * @return $this
     */
    public function setReimbursements($reimbursements)
    {
        $this->container['reimbursements'] = $reimbursements;

        return $this;
    }

    /**
     * Gets netPay
     *
     * @return float|null
     */
    public function getNetPay()
    {
        return $this->get('netPay');
    }

    /**
     * Sets netPay
     *
     * @param float|null $netPay The NetPay for the Payslip
     *
     * @return $this
     */
    public function setNetPay($netPay)
    {
        $this->container['netPay'] = $netPay;

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
     * @param \DateTime|null $updatedDateUTC Last modified timestamp
     *
     * @return $this
     */
    public function setUpdatedDateUTC($updatedDateUTC)
    {
        $this->container['updatedDateUTC'] = $updatedDateUTC;

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
