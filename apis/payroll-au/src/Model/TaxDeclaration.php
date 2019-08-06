<?php

namespace Consilience\Xero\PayrollAuSdk\Model;

/**
 * TaxDeclaration
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
 * OpenAPI Generator version: 4.0.3
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
 * TaxDeclaration Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\PayrollAuSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class TaxDeclaration implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaxDeclaration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employeeID' => 'string',
        'employmentBasis' => 'string',
        'tFNExemptionType' => 'string',
        'taxFileNumber' => 'string',
        'australianResidentForTaxPurposes' => 'string',
        'taxFreeThresholdClaimed' => 'string',
        'taxOffsetEstimatedAmount' => 'float',
        'hasHELPDebt' => 'bool',
        'hasSFSSDebt' => 'bool',
        'hasTradeSupportLoanDebt' => 'bool',
        'upwardVariationTaxWithholdingAmount' => 'string',
        'eligibleToReceiveLeaveLoading' => 'string',
        'approvedWithholdingVariationPercentage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'employeeID' => 'uuid',
        'employmentBasis' => null,
        'tFNExemptionType' => null,
        'taxFileNumber' => null,
        'australianResidentForTaxPurposes' => null,
        'taxFreeThresholdClaimed' => null,
        'taxOffsetEstimatedAmount' => 'float',
        'hasHELPDebt' => null,
        'hasSFSSDebt' => null,
        'hasTradeSupportLoanDebt' => null,
        'upwardVariationTaxWithholdingAmount' => null,
        'eligibleToReceiveLeaveLoading' => null,
        'approvedWithholdingVariationPercentage' => null
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
        'employmentBasis' => 'EmploymentBasis',
        'tFNExemptionType' => 'TFNExemptionType',
        'taxFileNumber' => 'TaxFileNumber',
        'australianResidentForTaxPurposes' => 'AustralianResidentForTaxPurposes',
        'taxFreeThresholdClaimed' => 'TaxFreeThresholdClaimed',
        'taxOffsetEstimatedAmount' => 'TaxOffsetEstimatedAmount',
        'hasHELPDebt' => 'HasHELPDebt',
        'hasSFSSDebt' => 'HasSFSSDebt',
        'hasTradeSupportLoanDebt' => 'HasTradeSupportLoanDebt',
        'upwardVariationTaxWithholdingAmount' => 'UpwardVariationTaxWithholdingAmount',
        'eligibleToReceiveLeaveLoading' => 'EligibleToReceiveLeaveLoading',
        'approvedWithholdingVariationPercentage' => 'ApprovedWithholdingVariationPercentage'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'employeeID' => 'setEmployeeID',
        'employmentBasis' => 'setEmploymentBasis',
        'tFNExemptionType' => 'setTFNExemptionType',
        'taxFileNumber' => 'setTaxFileNumber',
        'australianResidentForTaxPurposes' => 'setAustralianResidentForTaxPurposes',
        'taxFreeThresholdClaimed' => 'setTaxFreeThresholdClaimed',
        'taxOffsetEstimatedAmount' => 'setTaxOffsetEstimatedAmount',
        'hasHELPDebt' => 'setHasHELPDebt',
        'hasSFSSDebt' => 'setHasSFSSDebt',
        'hasTradeSupportLoanDebt' => 'setHasTradeSupportLoanDebt',
        'upwardVariationTaxWithholdingAmount' => 'setUpwardVariationTaxWithholdingAmount',
        'eligibleToReceiveLeaveLoading' => 'setEligibleToReceiveLeaveLoading',
        'approvedWithholdingVariationPercentage' => 'setApprovedWithholdingVariationPercentage'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'employeeID' => 'getEmployeeID',
        'employmentBasis' => 'getEmploymentBasis',
        'tFNExemptionType' => 'getTFNExemptionType',
        'taxFileNumber' => 'getTaxFileNumber',
        'australianResidentForTaxPurposes' => 'getAustralianResidentForTaxPurposes',
        'taxFreeThresholdClaimed' => 'getTaxFreeThresholdClaimed',
        'taxOffsetEstimatedAmount' => 'getTaxOffsetEstimatedAmount',
        'hasHELPDebt' => 'getHasHELPDebt',
        'hasSFSSDebt' => 'getHasSFSSDebt',
        'hasTradeSupportLoanDebt' => 'getHasTradeSupportLoanDebt',
        'upwardVariationTaxWithholdingAmount' => 'getUpwardVariationTaxWithholdingAmount',
        'eligibleToReceiveLeaveLoading' => 'getEligibleToReceiveLeaveLoading',
        'approvedWithholdingVariationPercentage' => 'getApprovedWithholdingVariationPercentage'
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

    const EMPLOYMENT_BASIS_FULLTIME = 'FULLTIME';
    const EMPLOYMENT_BASIS_PARTTIME = 'PARTTIME';
    const EMPLOYMENT_BASIS_CASUAL = 'CASUAL';
    const EMPLOYMENT_BASIS_LABOURHIRE = 'LABOURHIRE';
    const EMPLOYMENT_BASIS_SUPERINCOMESTREAM = 'SUPERINCOMESTREAM';const TFN_EXEMPTION_TYPE_NOTQUOTED = 'NOTQUOTED';
    const TFN_EXEMPTION_TYPE_PENDING = 'PENDING';
    const TFN_EXEMPTION_TYPE_PENSIONER = 'PENSIONER';
    const TFN_EXEMPTION_TYPE_UNDER18 = 'UNDER18';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEmploymentBasisAllowableValues()
    {
        return [
            self::EMPLOYMENT_BASIS_FULLTIME,
            self::EMPLOYMENT_BASIS_PARTTIME,
            self::EMPLOYMENT_BASIS_CASUAL,
            self::EMPLOYMENT_BASIS_LABOURHIRE,
            self::EMPLOYMENT_BASIS_SUPERINCOMESTREAM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTFNExemptionTypeAllowableValues()
    {
        return [
            self::TFN_EXEMPTION_TYPE_NOTQUOTED,
            self::TFN_EXEMPTION_TYPE_PENDING,
            self::TFN_EXEMPTION_TYPE_PENSIONER,
            self::TFN_EXEMPTION_TYPE_UNDER18,
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
        $this->container['employeeID'] = $data['employeeID'] ?? null;
        $this->container['employmentBasis'] = $data['employmentBasis'] ?? null;
        $this->container['tFNExemptionType'] = $data['tFNExemptionType'] ?? null;
        $this->container['taxFileNumber'] = $data['taxFileNumber'] ?? null;
        $this->container['australianResidentForTaxPurposes'] = $data['australianResidentForTaxPurposes'] ?? null;
        $this->container['taxFreeThresholdClaimed'] = $data['taxFreeThresholdClaimed'] ?? null;
        $this->container['taxOffsetEstimatedAmount'] = $data['taxOffsetEstimatedAmount'] ?? null;
        $this->container['hasHELPDebt'] = $data['hasHELPDebt'] ?? null;
        $this->container['hasSFSSDebt'] = $data['hasSFSSDebt'] ?? null;
        $this->container['hasTradeSupportLoanDebt'] = $data['hasTradeSupportLoanDebt'] ?? null;
        $this->container['upwardVariationTaxWithholdingAmount'] = $data['upwardVariationTaxWithholdingAmount'] ?? null;
        $this->container['eligibleToReceiveLeaveLoading'] = $data['eligibleToReceiveLeaveLoading'] ?? null;
        $this->container['approvedWithholdingVariationPercentage'] = $data['approvedWithholdingVariationPercentage'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['employeeID'] === null) {
            $invalidProperties[] = sprintf('"%s" can\'t be null', 'employeeID');
        }
        if ($this->container['employmentBasis'] === null) {
            $invalidProperties[] = sprintf('"%s" can\'t be null', 'employmentBasis');
        }
        $allowedValues = $this->getEmploymentBasisAllowableValues();
        if (!is_null($this->container['employmentBasis']) && !in_array($this->container['employmentBasis'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be one of "%s"',
                'employmentBasis',
                implode('", "', $allowedValues)
            );
        }

        $allowedValues = $this->getTFNExemptionTypeAllowableValues();
        if (!is_null($this->container['tFNExemptionType']) && !in_array($this->container['tFNExemptionType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be one of "%s"',
                'tFNExemptionType',
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
     * Gets employeeID
     *
     * @return string
     */
    public function getEmployeeID()
    {
        return $this->get('employeeID');
    }

    /**
     * Sets employeeID
     *
     * @param string $employeeID Xero employee identifier. e.g c56b19ef-75bf-45e8-98a4-e699a96609f7
     *
     * @return $this
     */
    public function setEmployeeID($employeeID)
    {
        $this->container['employeeID'] = $employeeID;

        return $this;
    }

    /**
     * Gets employmentBasis
     *
     * @return string
     */
    public function getEmploymentBasis()
    {
        return $this->get('employmentBasis');
    }

    /**
     * Sets employmentBasis
     *
     * @param string $employmentBasis See Employment Basis Types
     *
     * @return $this
     */
    public function setEmploymentBasis($employmentBasis)
    {
        $allowedValues = $this->getEmploymentBasisAllowableValues();
        if (!in_array($employmentBasis, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Invalid value for "%s", must be one of "%s"',
                    'employmentBasis',
                    implode('", "', $allowedValues)
                )
            );
        }
        $this->container['employmentBasis'] = $employmentBasis;

        return $this;
    }

    /**
     * Gets tFNExemptionType
     *
     * @return string|null
     */
    public function getTFNExemptionType()
    {
        return $this->get('tFNExemptionType');
    }

    /**
     * Sets tFNExemptionType
     *
     * @param string|null $tFNExemptionType See TFN Exemption Types
     *
     * @return $this
     */
    public function setTFNExemptionType($tFNExemptionType)
    {
        $allowedValues = $this->getTFNExemptionTypeAllowableValues();
        if (! is_null($tFNExemptionType) && !in_array($tFNExemptionType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Invalid value for "%s", must be one of "%s"',
                    'tFNExemptionType',
                    implode('", "', $allowedValues)
                )
            );
        }
        $this->container['tFNExemptionType'] = $tFNExemptionType;

        return $this;
    }

    /**
     * Gets taxFileNumber
     *
     * @return string|null
     */
    public function getTaxFileNumber()
    {
        return $this->get('taxFileNumber');
    }

    /**
     * Sets taxFileNumber
     *
     * @param string|null $taxFileNumber The tax file number e.g 123123123
     *
     * @return $this
     */
    public function setTaxFileNumber($taxFileNumber)
    {
        $this->container['taxFileNumber'] = $taxFileNumber;

        return $this;
    }

    /**
     * Gets australianResidentForTaxPurposes
     *
     * @return string|null
     */
    public function getAustralianResidentForTaxPurposes()
    {
        return $this->get('australianResidentForTaxPurposes');
    }

    /**
     * Sets australianResidentForTaxPurposes
     *
     * @param string|null $australianResidentForTaxPurposes If the employee is Australian resident for tax purposes. e.g true or false
     *
     * @return $this
     */
    public function setAustralianResidentForTaxPurposes($australianResidentForTaxPurposes)
    {
        $this->container['australianResidentForTaxPurposes'] = $australianResidentForTaxPurposes;

        return $this;
    }

    /**
     * Gets taxFreeThresholdClaimed
     *
     * @return string|null
     */
    public function getTaxFreeThresholdClaimed()
    {
        return $this->get('taxFreeThresholdClaimed');
    }

    /**
     * Sets taxFreeThresholdClaimed
     *
     * @param string|null $taxFreeThresholdClaimed If tax free threshold claimed. e.g true or false
     *
     * @return $this
     */
    public function setTaxFreeThresholdClaimed($taxFreeThresholdClaimed)
    {
        $this->container['taxFreeThresholdClaimed'] = $taxFreeThresholdClaimed;

        return $this;
    }

    /**
     * Gets taxOffsetEstimatedAmount
     *
     * @return float|null
     */
    public function getTaxOffsetEstimatedAmount()
    {
        return $this->get('taxOffsetEstimatedAmount');
    }

    /**
     * Sets taxOffsetEstimatedAmount
     *
     * @param float|null $taxOffsetEstimatedAmount If has tax offset estimated then the tax offset estimated amount. e.g 100
     *
     * @return $this
     */
    public function setTaxOffsetEstimatedAmount($taxOffsetEstimatedAmount)
    {
        $this->container['taxOffsetEstimatedAmount'] = $taxOffsetEstimatedAmount;

        return $this;
    }

    /**
     * Gets hasHELPDebt
     *
     * @return bool|null
     */
    public function getHasHELPDebt()
    {
        return $this->get('hasHELPDebt');
    }

    /**
     * Sets hasHELPDebt
     *
     * @param bool|null $hasHELPDebt If employee has HECS or HELP dept. e.g true or false
     *
     * @return $this
     */
    public function setHasHELPDebt($hasHELPDebt)
    {
        $this->container['hasHELPDebt'] = $hasHELPDebt;

        return $this;
    }

    /**
     * Gets hasSFSSDebt
     *
     * @return bool|null
     */
    public function getHasSFSSDebt()
    {
        return $this->get('hasSFSSDebt');
    }

    /**
     * Sets hasSFSSDebt
     *
     * @param bool|null $hasSFSSDebt If employee has financial supplement dept. e.g true or false
     *
     * @return $this
     */
    public function setHasSFSSDebt($hasSFSSDebt)
    {
        $this->container['hasSFSSDebt'] = $hasSFSSDebt;

        return $this;
    }

    /**
     * Gets hasTradeSupportLoanDebt
     *
     * @return bool|null
     */
    public function getHasTradeSupportLoanDebt()
    {
        return $this->get('hasTradeSupportLoanDebt');
    }

    /**
     * Sets hasTradeSupportLoanDebt
     *
     * @param bool|null $hasTradeSupportLoanDebt If employee has trade support loan. e.g true or false
     *
     * @return $this
     */
    public function setHasTradeSupportLoanDebt($hasTradeSupportLoanDebt)
    {
        $this->container['hasTradeSupportLoanDebt'] = $hasTradeSupportLoanDebt;

        return $this;
    }

    /**
     * Gets upwardVariationTaxWithholdingAmount
     *
     * @return string|null
     */
    public function getUpwardVariationTaxWithholdingAmount()
    {
        return $this->get('upwardVariationTaxWithholdingAmount');
    }

    /**
     * Sets upwardVariationTaxWithholdingAmount
     *
     * @param string|null $upwardVariationTaxWithholdingAmount If the employee has requested that additional tax be withheld each pay run. e.g 50
     *
     * @return $this
     */
    public function setUpwardVariationTaxWithholdingAmount($upwardVariationTaxWithholdingAmount)
    {
        $this->container['upwardVariationTaxWithholdingAmount'] = $upwardVariationTaxWithholdingAmount;

        return $this;
    }

    /**
     * Gets eligibleToReceiveLeaveLoading
     *
     * @return string|null
     */
    public function getEligibleToReceiveLeaveLoading()
    {
        return $this->get('eligibleToReceiveLeaveLoading');
    }

    /**
     * Sets eligibleToReceiveLeaveLoading
     *
     * @param string|null $eligibleToReceiveLeaveLoading If the employee is eligible to receive an additional percentage on top of ordinary earnings when they take leave (typically 17.5%). e.g true or false
     *
     * @return $this
     */
    public function setEligibleToReceiveLeaveLoading($eligibleToReceiveLeaveLoading)
    {
        $this->container['eligibleToReceiveLeaveLoading'] = $eligibleToReceiveLeaveLoading;

        return $this;
    }

    /**
     * Gets approvedWithholdingVariationPercentage
     *
     * @return string|null
     */
    public function getApprovedWithholdingVariationPercentage()
    {
        return $this->get('approvedWithholdingVariationPercentage');
    }

    /**
     * Sets approvedWithholdingVariationPercentage
     *
     * @param string|null $approvedWithholdingVariationPercentage If the employee has approved withholding variation. e.g (0 – 100)
     *
     * @return $this
     */
    public function setApprovedWithholdingVariationPercentage($approvedWithholdingVariationPercentage)
    {
        $this->container['approvedWithholdingVariationPercentage'] = $approvedWithholdingVariationPercentage;

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
