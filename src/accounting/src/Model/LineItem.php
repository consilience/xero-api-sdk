<?php

namespace Consilience\Xero\AccountingSdk\Model;

/**
 * LineItem
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
 * LineItem Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\AccountingSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LineItem implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'lineItemID' => 'string',
        'description' => 'string',
        'quantity' => 'double',
        'unitAmount' => 'double',
        'itemCode' => 'string',
        'accountCode' => 'string',
        'taxType' => 'string',
        'taxAmount' => 'double',
        'lineAmount' => 'double',
        'tracking' => '\Consilience\Xero\AccountingSdk\Model\LineItemTracking[]',
        'discountRate' => 'string',
        'repeatingInvoiceID' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'lineItemID' => 'uuid',
        'description' => null,
        'quantity' => 'double',
        'unitAmount' => 'double',
        'itemCode' => null,
        'accountCode' => null,
        'taxType' => null,
        'taxAmount' => 'double',
        'lineAmount' => 'double',
        'tracking' => null,
        'discountRate' => null,
        'repeatingInvoiceID' => 'uuid'
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
        'lineItemID' => 'LineItemID',
        'description' => 'Description',
        'quantity' => 'Quantity',
        'unitAmount' => 'UnitAmount',
        'itemCode' => 'ItemCode',
        'accountCode' => 'AccountCode',
        'taxType' => 'TaxType',
        'taxAmount' => 'TaxAmount',
        'lineAmount' => 'LineAmount',
        'tracking' => 'Tracking',
        'discountRate' => 'DiscountRate',
        'repeatingInvoiceID' => 'RepeatingInvoiceID'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'lineItemID' => 'setLineItemID',
        'description' => 'setDescription',
        'quantity' => 'setQuantity',
        'unitAmount' => 'setUnitAmount',
        'itemCode' => 'setItemCode',
        'accountCode' => 'setAccountCode',
        'taxType' => 'setTaxType',
        'taxAmount' => 'setTaxAmount',
        'lineAmount' => 'setLineAmount',
        'tracking' => 'setTracking',
        'discountRate' => 'setDiscountRate',
        'repeatingInvoiceID' => 'setRepeatingInvoiceID'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'lineItemID' => 'getLineItemID',
        'description' => 'getDescription',
        'quantity' => 'getQuantity',
        'unitAmount' => 'getUnitAmount',
        'itemCode' => 'getItemCode',
        'accountCode' => 'getAccountCode',
        'taxType' => 'getTaxType',
        'taxAmount' => 'getTaxAmount',
        'lineAmount' => 'getLineAmount',
        'tracking' => 'getTracking',
        'discountRate' => 'getDiscountRate',
        'repeatingInvoiceID' => 'getRepeatingInvoiceID'
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
        $this->container['lineItemID'] = $data['lineItemID'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['unitAmount'] = $data['unitAmount'] ?? null;
        $this->container['itemCode'] = $data['itemCode'] ?? null;
        $this->container['accountCode'] = $data['accountCode'] ?? null;
        $this->container['taxType'] = $data['taxType'] ?? null;
        $this->container['taxAmount'] = $data['taxAmount'] ?? null;
        $this->container['lineAmount'] = $data['lineAmount'] ?? null;
        $this->container['tracking'] = $data['tracking'] ?? null;
        $this->container['discountRate'] = $data['discountRate'] ?? null;
        $this->container['repeatingInvoiceID'] = $data['repeatingInvoiceID'] ?? null;
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
     * Gets lineItemID
     *
     * @return string|null
     */
    public function getLineItemID()
    {
        return $this->get('lineItemID');
    }

    /**
     * Sets lineItemID
     *
     * @param string|null $lineItemID LineItem unique ID
     *
     * @return $this
     */
    public function setLineItemID($lineItemID)
    {
        $this->container['lineItemID'] = $lineItemID;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get('description');
    }

    /**
     * Sets description
     *
     * @param string|null $description Description needs to be at least 1 char long. A line item with just a description (i.e no unit amount or quantity) can be created by specifying just a <Description> element that contains at least 1 character
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return double|null
     */
    public function getQuantity()
    {
        return $this->get('quantity');
    }

    /**
     * Sets quantity
     *
     * @param double|null $quantity LineItem Quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unitAmount
     *
     * @return double|null
     */
    public function getUnitAmount()
    {
        return $this->get('unitAmount');
    }

    /**
     * Sets unitAmount
     *
     * @param double|null $unitAmount LineItem Unit Amount
     *
     * @return $this
     */
    public function setUnitAmount($unitAmount)
    {
        $this->container['unitAmount'] = $unitAmount;

        return $this;
    }

    /**
     * Gets itemCode
     *
     * @return string|null
     */
    public function getItemCode()
    {
        return $this->get('itemCode');
    }

    /**
     * Sets itemCode
     *
     * @param string|null $itemCode See Items
     *
     * @return $this
     */
    public function setItemCode($itemCode)
    {
        $this->container['itemCode'] = $itemCode;

        return $this;
    }

    /**
     * Gets accountCode
     *
     * @return string|null
     */
    public function getAccountCode()
    {
        return $this->get('accountCode');
    }

    /**
     * Sets accountCode
     *
     * @param string|null $accountCode See Accounts
     *
     * @return $this
     */
    public function setAccountCode($accountCode)
    {
        $this->container['accountCode'] = $accountCode;

        return $this;
    }

    /**
     * Gets taxType
     *
     * @return string|null
     */
    public function getTaxType()
    {
        return $this->get('taxType');
    }

    /**
     * Sets taxType
     *
     * @param string|null $taxType The tax type from TaxRates
     *
     * @return $this
     */
    public function setTaxType($taxType)
    {
        $this->container['taxType'] = $taxType;

        return $this;
    }

    /**
     * Gets taxAmount
     *
     * @return double|null
     */
    public function getTaxAmount()
    {
        return $this->get('taxAmount');
    }

    /**
     * Sets taxAmount
     *
     * @param double|null $taxAmount The tax amount is auto calculated as a percentage of the line amount (see below) based on the tax rate. This value can be overriden if the calculated <TaxAmount> is not correct.
     *
     * @return $this
     */
    public function setTaxAmount($taxAmount)
    {
        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets lineAmount
     *
     * @return double|null
     */
    public function getLineAmount()
    {
        return $this->get('lineAmount');
    }

    /**
     * Sets lineAmount
     *
     * @param double|null $lineAmount If you wish to omit either of the <Quantity> or <UnitAmount> you can provide a LineAmount and Xero will calculate the missing amount for you. The line amount reflects the discounted price if a DiscountRate has been used . i.e LineAmount = Quantity * Unit Amount * ((100 – DiscountRate)/100)
     *
     * @return $this
     */
    public function setLineAmount($lineAmount)
    {
        $this->container['lineAmount'] = $lineAmount;

        return $this;
    }

    /**
     * Gets tracking
     *
     * @return \Consilience\Xero\AccountingSdk\Model\LineItemTracking[]|null
     */
    public function getTracking()
    {
        return $this->get('tracking');
    }

    /**
     * Sets tracking
     *
     * @param \Consilience\Xero\AccountingSdk\Model\LineItemTracking[]|null $tracking Optional Tracking Category – see Tracking.  Any LineItem can have a  maximum of 2 <TrackingCategory> elements.
     *
     * @return $this
     */
    public function setTracking($tracking)
    {
        $this->container['tracking'] = $tracking;

        return $this;
    }

    /**
     * Gets discountRate
     *
     * @return string|null
     */
    public function getDiscountRate()
    {
        return $this->get('discountRate');
    }

    /**
     * Sets discountRate
     *
     * @param string|null $discountRate Percentage discount being applied to a line item (only supported on  ACCREC invoices – ACC PAY invoices and credit notes in Xero do not support discounts
     *
     * @return $this
     */
    public function setDiscountRate($discountRate)
    {
        $this->container['discountRate'] = $discountRate;

        return $this;
    }

    /**
     * Gets repeatingInvoiceID
     *
     * @return string|null
     */
    public function getRepeatingInvoiceID()
    {
        return $this->get('repeatingInvoiceID');
    }

    /**
     * Sets repeatingInvoiceID
     *
     * @param string|null $repeatingInvoiceID The Xero identifier for a Repeating Invoicee.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     *
     * @return $this
     */
    public function setRepeatingInvoiceID($repeatingInvoiceID)
    {
        $this->container['repeatingInvoiceID'] = $repeatingInvoiceID;

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
