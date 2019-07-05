<?php

namespace Consilience\Xero\AssetsSdk\Model;

/**
 * Asset
 *
 * PHP version 5
 *
 * @category Class
 * @package  Consilience\Xero\AssetsSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Assets API
 *
 * This the Xero Assets API
 *
 * The version of the OpenAPI document: 1.0.0
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
use Consilience\Xero\AssetsSdk\ObjectSerializer;

/**
 * Asset Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\AssetsSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Asset implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Asset';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assetId' => 'string',
        'assetName' => 'string',
        'assetNumber' => 'string',
        'purchaseDate' => '\DateTime',
        'purchasePrice' => 'int',
        'disposalPrice' => 'int',
        'assetStatus' => 'string',
        'warrantyExpiryDate' => 'string',
        'serialNumber' => 'string',
        'bookDepreciationSetting' => '\Consilience\Xero\AssetsSdk\Model\BookDepreciationSetting',
        'bookDepreciationDetail' => '\Consilience\Xero\AssetsSdk\Model\BookDepreciationDetail',
        'canRollBack' => 'bool',
        'accountingBookValue' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'assetId' => 'uuid',
        'assetName' => null,
        'assetNumber' => null,
        'purchaseDate' => 'date',
        'purchasePrice' => null,
        'disposalPrice' => null,
        'assetStatus' => null,
        'warrantyExpiryDate' => null,
        'serialNumber' => null,
        'bookDepreciationSetting' => null,
        'bookDepreciationDetail' => null,
        'canRollBack' => null,
        'accountingBookValue' => null
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
        'assetId' => 'assetId',
        'assetName' => 'assetName',
        'assetNumber' => 'assetNumber',
        'purchaseDate' => 'purchaseDate',
        'purchasePrice' => 'purchasePrice',
        'disposalPrice' => 'disposalPrice',
        'assetStatus' => 'assetStatus',
        'warrantyExpiryDate' => 'warrantyExpiryDate',
        'serialNumber' => 'serialNumber',
        'bookDepreciationSetting' => 'bookDepreciationSetting',
        'bookDepreciationDetail' => 'bookDepreciationDetail',
        'canRollBack' => 'canRollBack',
        'accountingBookValue' => 'AccountingBookValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assetId' => 'setAssetId',
        'assetName' => 'setAssetName',
        'assetNumber' => 'setAssetNumber',
        'purchaseDate' => 'setPurchaseDate',
        'purchasePrice' => 'setPurchasePrice',
        'disposalPrice' => 'setDisposalPrice',
        'assetStatus' => 'setAssetStatus',
        'warrantyExpiryDate' => 'setWarrantyExpiryDate',
        'serialNumber' => 'setSerialNumber',
        'bookDepreciationSetting' => 'setBookDepreciationSetting',
        'bookDepreciationDetail' => 'setBookDepreciationDetail',
        'canRollBack' => 'setCanRollBack',
        'accountingBookValue' => 'setAccountingBookValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assetId' => 'getAssetId',
        'assetName' => 'getAssetName',
        'assetNumber' => 'getAssetNumber',
        'purchaseDate' => 'getPurchaseDate',
        'purchasePrice' => 'getPurchasePrice',
        'disposalPrice' => 'getDisposalPrice',
        'assetStatus' => 'getAssetStatus',
        'warrantyExpiryDate' => 'getWarrantyExpiryDate',
        'serialNumber' => 'getSerialNumber',
        'bookDepreciationSetting' => 'getBookDepreciationSetting',
        'bookDepreciationDetail' => 'getBookDepreciationDetail',
        'canRollBack' => 'getCanRollBack',
        'accountingBookValue' => 'getAccountingBookValue'
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

    const ASSET_STATUS_DRAFT = 'Draft';
    const ASSET_STATUS_REGISTERED = 'Registered';
    const ASSET_STATUS_DISPOSED = 'Disposed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAssetStatusAllowableValues()
    {
        return [
            self::ASSET_STATUS_DRAFT,
            self::ASSET_STATUS_REGISTERED,
            self::ASSET_STATUS_DISPOSED,
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
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['assetNumber'] = isset($data['assetNumber']) ? $data['assetNumber'] : null;
        $this->container['purchaseDate'] = isset($data['purchaseDate']) ? $data['purchaseDate'] : null;
        $this->container['purchasePrice'] = isset($data['purchasePrice']) ? $data['purchasePrice'] : null;
        $this->container['disposalPrice'] = isset($data['disposalPrice']) ? $data['disposalPrice'] : null;
        $this->container['assetStatus'] = isset($data['assetStatus']) ? $data['assetStatus'] : null;
        $this->container['warrantyExpiryDate'] = isset($data['warrantyExpiryDate']) ? $data['warrantyExpiryDate'] : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['bookDepreciationSetting'] = isset($data['bookDepreciationSetting']) ? $data['bookDepreciationSetting'] : null;
        $this->container['bookDepreciationDetail'] = isset($data['bookDepreciationDetail']) ? $data['bookDepreciationDetail'] : null;
        $this->container['canRollBack'] = isset($data['canRollBack']) ? $data['canRollBack'] : null;
        $this->container['accountingBookValue'] = isset($data['accountingBookValue']) ? $data['accountingBookValue'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['assetId'] === null) {
            $invalidProperties[] = sprintf('"%s" can\'t be null', 'assetId');
        }
        if ($this->container['assetName'] === null) {
            $invalidProperties[] = sprintf('"%s" can\'t be null', 'assetName');
        }
        $allowedValues = $this->getAssetStatusAllowableValues();
        if (!is_null($this->container['assetStatus']) && !in_array($this->container['assetStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be one of "%s"',
                'assetStatus',
                implode('", "', $allowedValues)
            );
        }

        if ($this->container['bookDepreciationSetting'] === null) {
            $invalidProperties[] = sprintf('"%s" can\'t be null', 'bookDepreciationSetting');
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
     * Gets assetId
     *
     * @return string
     */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
     * Sets assetId
     *
     * @param string $assetId The Xero-generated Id for the asset
     *
     * @return $this
     */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;

        return $this;
    }

    /**
     * Gets assetName
     *
     * @return string
     */
    public function getAssetName()
    {
        return $this->container['assetName'];
    }

    /**
     * Sets assetName
     *
     * @param string $assetName The name of the asset
     *
     * @return $this
     */
    public function setAssetName($assetName)
    {
        $this->container['assetName'] = $assetName;

        return $this;
    }

    /**
     * Gets assetNumber
     *
     * @return string|null
     */
    public function getAssetNumber()
    {
        return $this->container['assetNumber'];
    }

    /**
     * Sets assetNumber
     *
     * @param string|null $assetNumber Must be unique.
     *
     * @return $this
     */
    public function setAssetNumber($assetNumber)
    {
        $this->container['assetNumber'] = $assetNumber;

        return $this;
    }

    /**
     * Gets purchaseDate
     *
     * @return \DateTime|null
     */
    public function getPurchaseDate()
    {
        return $this->container['purchaseDate'];
    }

    /**
     * Sets purchaseDate
     *
     * @param \DateTime|null $purchaseDate The date the asset was purchased YYYY-MM-DD
     *
     * @return $this
     */
    public function setPurchaseDate($purchaseDate)
    {
        $this->container['purchaseDate'] = $purchaseDate;

        return $this;
    }

    /**
     * Gets purchasePrice
     *
     * @return int|null
     */
    public function getPurchasePrice()
    {
        return $this->container['purchasePrice'];
    }

    /**
     * Sets purchasePrice
     *
     * @param int|null $purchasePrice The purchase price of the asset
     *
     * @return $this
     */
    public function setPurchasePrice($purchasePrice)
    {
        $this->container['purchasePrice'] = $purchasePrice;

        return $this;
    }

    /**
     * Gets disposalPrice
     *
     * @return int|null
     */
    public function getDisposalPrice()
    {
        return $this->container['disposalPrice'];
    }

    /**
     * Sets disposalPrice
     *
     * @param int|null $disposalPrice The price the asset was disposed at
     *
     * @return $this
     */
    public function setDisposalPrice($disposalPrice)
    {
        $this->container['disposalPrice'] = $disposalPrice;

        return $this;
    }

    /**
     * Gets assetStatus
     *
     * @return string|null
     */
    public function getAssetStatus()
    {
        return $this->container['assetStatus'];
    }

    /**
     * Sets assetStatus
     *
     * @param string|null $assetStatus See Asset Status Codes.
     *
     * @return $this
     */
    public function setAssetStatus($assetStatus)
    {
        $allowedValues = $this->getAssetStatusAllowableValues();
        if (! is_null($assetStatus) && !in_array($assetStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Invalid value for "%s", must be one of "%s"',
                    'assetStatus',
                    implode('", "', $allowedValues)
                )
            );
        }
        $this->container['assetStatus'] = $assetStatus;

        return $this;
    }

    /**
     * Gets warrantyExpiryDate
     *
     * @return string|null
     */
    public function getWarrantyExpiryDate()
    {
        return $this->container['warrantyExpiryDate'];
    }

    /**
     * Sets warrantyExpiryDate
     *
     * @param string|null $warrantyExpiryDate The date the asset’s warranty expires (if needed) YYYY-MM-DD
     *
     * @return $this
     */
    public function setWarrantyExpiryDate($warrantyExpiryDate)
    {
        $this->container['warrantyExpiryDate'] = $warrantyExpiryDate;

        return $this;
    }

    /**
     * Gets serialNumber
     *
     * @return string|null
     */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
     * Sets serialNumber
     *
     * @param string|null $serialNumber The asset's serial number
     *
     * @return $this
     */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;

        return $this;
    }

    /**
     * Gets bookDepreciationSetting
     *
     * @return \Consilience\Xero\AssetsSdk\Model\BookDepreciationSetting
     */
    public function getBookDepreciationSetting()
    {
        return $this->container['bookDepreciationSetting'];
    }

    /**
     * Sets bookDepreciationSetting
     *
     * @param \Consilience\Xero\AssetsSdk\Model\BookDepreciationSetting $bookDepreciationSetting bookDepreciationSetting
     *
     * @return $this
     */
    public function setBookDepreciationSetting($bookDepreciationSetting)
    {
        $this->container['bookDepreciationSetting'] = $bookDepreciationSetting;

        return $this;
    }

    /**
     * Gets bookDepreciationDetail
     *
     * @return \Consilience\Xero\AssetsSdk\Model\BookDepreciationDetail|null
     */
    public function getBookDepreciationDetail()
    {
        return $this->container['bookDepreciationDetail'];
    }

    /**
     * Sets bookDepreciationDetail
     *
     * @param \Consilience\Xero\AssetsSdk\Model\BookDepreciationDetail|null $bookDepreciationDetail bookDepreciationDetail
     *
     * @return $this
     */
    public function setBookDepreciationDetail($bookDepreciationDetail)
    {
        $this->container['bookDepreciationDetail'] = $bookDepreciationDetail;

        return $this;
    }

    /**
     * Gets canRollBack
     *
     * @return bool|null
     */
    public function getCanRollBack()
    {
        return $this->container['canRollBack'];
    }

    /**
     * Sets canRollBack
     *
     * @param bool|null $canRollBack Boolean to indicate whether depreciation can be rolled back for this asset individually. This is true if it doesn't have 'legacy' journal entries and if there is no lock period that would prevent this asset from rolling back.
     *
     * @return $this
     */
    public function setCanRollBack($canRollBack)
    {
        $this->container['canRollBack'] = $canRollBack;

        return $this;
    }

    /**
     * Gets accountingBookValue
     *
     * @return int|null
     */
    public function getAccountingBookValue()
    {
        return $this->container['accountingBookValue'];
    }

    /**
     * Sets accountingBookValue
     *
     * @param int|null $accountingBookValue The accounting value of the asset
     *
     * @return $this
     */
    public function setAccountingBookValue($accountingBookValue)
    {
        $this->container['accountingBookValue'] = $accountingBookValue;

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
