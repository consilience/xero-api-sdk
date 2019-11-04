<?php

namespace Consilience\Xero\AccountingSdk\Model;

/**
 * Quote
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Consilience\Xero\AccountingSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
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
use Consilience\Xero\AccountingSdk\ObjectSerializer;

/**
 * Quote Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\AccountingSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class Quote implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Quote';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'quoteID' => 'string',
        'quoteNumber' => 'string',
        'reference' => 'string',
        'terms' => 'string',
        'contact' => '\Consilience\Xero\AccountingSdk\Model\Contact',
        'lineItems' => '\Consilience\Xero\AccountingSdk\Model\LineItem[]',
        'date' => '\DateTime',
        'dateString' => 'string',
        'expiryDate' => '\DateTime',
        'expiryDateString' => 'string',
        'status' => '\Consilience\Xero\AccountingSdk\Model\QuoteStatusCodes',
        'currencyCode' => '\Consilience\Xero\AccountingSdk\Model\CurrencyCode',
        'currencyRate' => 'double',
        'subTotal' => 'double',
        'totalTax' => 'double',
        'total' => 'double',
        'totalDiscount' => 'double',
        'title' => 'string',
        'summary' => 'string',
        'brandingThemeID' => 'string',
        'updatedDateUTC' => '\DateTime',
        'lineAmountTypes' => '\Consilience\Xero\AccountingSdk\Model\LineAmountTypes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'quoteID' => 'uuid',
        'quoteNumber' => null,
        'reference' => null,
        'terms' => null,
        'contact' => null,
        'lineItems' => null,
        'date' => 'date',
        'dateString' => null,
        'expiryDate' => 'date',
        'expiryDateString' => null,
        'status' => null,
        'currencyCode' => null,
        'currencyRate' => 'double',
        'subTotal' => 'double',
        'totalTax' => 'double',
        'total' => 'double',
        'totalDiscount' => 'double',
        'title' => null,
        'summary' => null,
        'brandingThemeID' => 'uuid',
        'updatedDateUTC' => 'date-time',
        'lineAmountTypes' => null
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
        'quoteID' => 'QuoteID',
        'quoteNumber' => 'QuoteNumber',
        'reference' => 'Reference',
        'terms' => 'Terms',
        'contact' => 'Contact',
        'lineItems' => 'LineItems',
        'date' => 'Date',
        'dateString' => 'DateString',
        'expiryDate' => 'ExpiryDate',
        'expiryDateString' => 'ExpiryDateString',
        'status' => 'Status',
        'currencyCode' => 'CurrencyCode',
        'currencyRate' => 'CurrencyRate',
        'subTotal' => 'SubTotal',
        'totalTax' => 'TotalTax',
        'total' => 'Total',
        'totalDiscount' => 'TotalDiscount',
        'title' => 'Title',
        'summary' => 'Summary',
        'brandingThemeID' => 'BrandingThemeID',
        'updatedDateUTC' => 'UpdatedDateUTC',
        'lineAmountTypes' => 'LineAmountTypes'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'quoteID' => 'setQuoteID',
        'quoteNumber' => 'setQuoteNumber',
        'reference' => 'setReference',
        'terms' => 'setTerms',
        'contact' => 'setContact',
        'lineItems' => 'setLineItems',
        'date' => 'setDate',
        'dateString' => 'setDateString',
        'expiryDate' => 'setExpiryDate',
        'expiryDateString' => 'setExpiryDateString',
        'status' => 'setStatus',
        'currencyCode' => 'setCurrencyCode',
        'currencyRate' => 'setCurrencyRate',
        'subTotal' => 'setSubTotal',
        'totalTax' => 'setTotalTax',
        'total' => 'setTotal',
        'totalDiscount' => 'setTotalDiscount',
        'title' => 'setTitle',
        'summary' => 'setSummary',
        'brandingThemeID' => 'setBrandingThemeID',
        'updatedDateUTC' => 'setUpdatedDateUTC',
        'lineAmountTypes' => 'setLineAmountTypes'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'quoteID' => 'getQuoteID',
        'quoteNumber' => 'getQuoteNumber',
        'reference' => 'getReference',
        'terms' => 'getTerms',
        'contact' => 'getContact',
        'lineItems' => 'getLineItems',
        'date' => 'getDate',
        'dateString' => 'getDateString',
        'expiryDate' => 'getExpiryDate',
        'expiryDateString' => 'getExpiryDateString',
        'status' => 'getStatus',
        'currencyCode' => 'getCurrencyCode',
        'currencyRate' => 'getCurrencyRate',
        'subTotal' => 'getSubTotal',
        'totalTax' => 'getTotalTax',
        'total' => 'getTotal',
        'totalDiscount' => 'getTotalDiscount',
        'title' => 'getTitle',
        'summary' => 'getSummary',
        'brandingThemeID' => 'getBrandingThemeID',
        'updatedDateUTC' => 'getUpdatedDateUTC',
        'lineAmountTypes' => 'getLineAmountTypes'
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
        $this->container['quoteID'] = $data['quoteID'] ?? null;
        $this->container['quoteNumber'] = $data['quoteNumber'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['terms'] = $data['terms'] ?? null;
        $this->container['contact'] = $data['contact'] ?? null;
        $this->container['lineItems'] = $data['lineItems'] ?? null;
        $this->container['date'] = $data['date'] ?? null;
        $this->container['dateString'] = $data['dateString'] ?? null;
        $this->container['expiryDate'] = $data['expiryDate'] ?? null;
        $this->container['expiryDateString'] = $data['expiryDateString'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['currencyCode'] = $data['currencyCode'] ?? null;
        $this->container['currencyRate'] = $data['currencyRate'] ?? null;
        $this->container['subTotal'] = $data['subTotal'] ?? null;
        $this->container['totalTax'] = $data['totalTax'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
        $this->container['totalDiscount'] = $data['totalDiscount'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['summary'] = $data['summary'] ?? null;
        $this->container['brandingThemeID'] = $data['brandingThemeID'] ?? null;
        $this->container['updatedDateUTC'] = $data['updatedDateUTC'] ?? null;
        $this->container['lineAmountTypes'] = $data['lineAmountTypes'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (! is_null($this->container['quoteNumber']) && (mb_strlen($this->container['quoteNumber']) > 255)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'quoteNumber',
                255
            );
        }

        if (! is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 4000)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'reference',
                4000
            );
        }

        if (! is_null($this->container['terms']) && (mb_strlen($this->container['terms']) > 4000)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'terms',
                4000
            );
        }

        if ($this->container['contact'] === null) {
            $invalidProperties[] = sprintf('"%s" can\'t be null', 'contact');
        }
        if (! is_null($this->container['title']) && (mb_strlen($this->container['title']) > 100)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'title',
                100
            );
        }

        if (! is_null($this->container['summary']) && (mb_strlen($this->container['summary']) > 4000)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'summary',
                4000
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
     * Gets quoteID
     *
     * @return string|null
     */
    public function getQuoteID()
    {
        return $this->get('quoteID');
    }

    /**
     * Sets quoteID
     *
     * @param string|null $quoteID Xero generated unique identifier for quote
     *
     * @return $this
     */
    public function setQuoteID($quoteID)
    {
        $this->container['quoteID'] = $quoteID;

        return $this;
    }

    /**
     * Gets quoteNumber
     *
     * @return string|null
     */
    public function getQuoteNumber()
    {
        return $this->get('quoteNumber');
    }

    /**
     * Sets quoteNumber
     *
     * @param string|null $quoteNumber Unique alpha numeric code identifying quote (when missing will auto-generate from your Organisation Invoice Settings)
     *
     * @return $this
     */
    public function setQuoteNumber($quoteNumber)
    {
        if (! is_null($quoteNumber) && (mb_strlen($quoteNumber) > 255)) {
            throw new \InvalidArgumentException('invalid length for $quoteNumber when calling Quote., must be smaller than or equal to 255.');
        }

        $this->container['quoteNumber'] = $quoteNumber;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->get('reference');
    }

    /**
     * Sets reference
     *
     * @param string|null $reference Additional reference number
     *
     * @return $this
     */
    public function setReference($reference)
    {
        if (! is_null($reference) && (mb_strlen($reference) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling Quote., must be smaller than or equal to 4000.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets terms
     *
     * @return string|null
     */
    public function getTerms()
    {
        return $this->get('terms');
    }

    /**
     * Sets terms
     *
     * @param string|null $terms Terms of the quote
     *
     * @return $this
     */
    public function setTerms($terms)
    {
        if (! is_null($terms) && (mb_strlen($terms) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $terms when calling Quote., must be smaller than or equal to 4000.');
        }

        $this->container['terms'] = $terms;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \Consilience\Xero\AccountingSdk\Model\Contact
     */
    public function getContact()
    {
        return $this->get('contact');
    }

    /**
     * Sets contact
     *
     * @param \Consilience\Xero\AccountingSdk\Model\Contact $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets lineItems
     *
     * @return \Consilience\Xero\AccountingSdk\Model\LineItem[]|null
     */
    public function getLineItems()
    {
        return $this->get('lineItems');
    }

    /**
     * Sets lineItems
     *
     * @param \Consilience\Xero\AccountingSdk\Model\LineItem[]|null $lineItems See LineItems
     *
     * @return $this
     */
    public function setLineItems($lineItems)
    {
        $this->container['lineItems'] = $lineItems;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->get('date');
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date Date quote was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets dateString
     *
     * @return string|null
     */
    public function getDateString()
    {
        return $this->get('dateString');
    }

    /**
     * Sets dateString
     *
     * @param string|null $dateString Date the quote was issued (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setDateString($dateString)
    {
        $this->container['dateString'] = $dateString;

        return $this;
    }

    /**
     * Gets expiryDate
     *
     * @return \DateTime|null
     */
    public function getExpiryDate()
    {
        return $this->get('expiryDate');
    }

    /**
     * Sets expiryDate
     *
     * @param \DateTime|null $expiryDate Date the quote expires – YYYY-MM-DD.
     *
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;

        return $this;
    }

    /**
     * Gets expiryDateString
     *
     * @return string|null
     */
    public function getExpiryDateString()
    {
        return $this->get('expiryDateString');
    }

    /**
     * Sets expiryDateString
     *
     * @param string|null $expiryDateString Date the quote expires – YYYY-MM-DD.
     *
     * @return $this
     */
    public function setExpiryDateString($expiryDateString)
    {
        $this->container['expiryDateString'] = $expiryDateString;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Consilience\Xero\AccountingSdk\Model\QuoteStatusCodes|null
     */
    public function getStatus()
    {
        return $this->get('status');
    }

    /**
     * Sets status
     *
     * @param \Consilience\Xero\AccountingSdk\Model\QuoteStatusCodes|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets currencyCode
     *
     * @return \Consilience\Xero\AccountingSdk\Model\CurrencyCode|null
     */
    public function getCurrencyCode()
    {
        return $this->get('currencyCode');
    }

    /**
     * Sets currencyCode
     *
     * @param \Consilience\Xero\AccountingSdk\Model\CurrencyCode|null $currencyCode currencyCode
     *
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets currencyRate
     *
     * @return double|null
     */
    public function getCurrencyRate()
    {
        return $this->get('currencyRate');
    }

    /**
     * Sets currencyRate
     *
     * @param double|null $currencyRate The currency rate for a multicurrency quote. If no rate is specified, the XE.com day rate is used.
     *
     * @return $this
     */
    public function setCurrencyRate($currencyRate)
    {
        $this->container['currencyRate'] = $currencyRate;

        return $this;
    }

    /**
     * Gets subTotal
     *
     * @return double|null
     */
    public function getSubTotal()
    {
        return $this->get('subTotal');
    }

    /**
     * Sets subTotal
     *
     * @param double|null $subTotal Total of quote excluding taxes.
     *
     * @return $this
     */
    public function setSubTotal($subTotal)
    {
        $this->container['subTotal'] = $subTotal;

        return $this;
    }

    /**
     * Gets totalTax
     *
     * @return double|null
     */
    public function getTotalTax()
    {
        return $this->get('totalTax');
    }

    /**
     * Sets totalTax
     *
     * @param double|null $totalTax Total tax on quote
     *
     * @return $this
     */
    public function setTotalTax($totalTax)
    {
        $this->container['totalTax'] = $totalTax;

        return $this;
    }

    /**
     * Gets total
     *
     * @return double|null
     */
    public function getTotal()
    {
        return $this->get('total');
    }

    /**
     * Sets total
     *
     * @param double|null $total Total of Quote tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets totalDiscount
     *
     * @return double|null
     */
    public function getTotalDiscount()
    {
        return $this->get('totalDiscount');
    }

    /**
     * Sets totalDiscount
     *
     * @param double|null $totalDiscount Total of discounts applied on the quote line items
     *
     * @return $this
     */
    public function setTotalDiscount($totalDiscount)
    {
        $this->container['totalDiscount'] = $totalDiscount;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->get('title');
    }

    /**
     * Sets title
     *
     * @param string|null $title Title text for the quote
     *
     * @return $this
     */
    public function setTitle($title)
    {
        if (! is_null($title) && (mb_strlen($title) > 100)) {
            throw new \InvalidArgumentException('invalid length for $title when calling Quote., must be smaller than or equal to 100.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string|null
     */
    public function getSummary()
    {
        return $this->get('summary');
    }

    /**
     * Sets summary
     *
     * @param string|null $summary Summary text for the quote
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        if (! is_null($summary) && (mb_strlen($summary) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $summary when calling Quote., must be smaller than or equal to 4000.');
        }

        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets brandingThemeID
     *
     * @return string|null
     */
    public function getBrandingThemeID()
    {
        return $this->get('brandingThemeID');
    }

    /**
     * Sets brandingThemeID
     *
     * @param string|null $brandingThemeID See BrandingThemes
     *
     * @return $this
     */
    public function setBrandingThemeID($brandingThemeID)
    {
        $this->container['brandingThemeID'] = $brandingThemeID;

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
     * @param \DateTime|null $updatedDateUTC Last modified date UTC format
     *
     * @return $this
     */
    public function setUpdatedDateUTC($updatedDateUTC)
    {
        $this->container['updatedDateUTC'] = $updatedDateUTC;

        return $this;
    }

    /**
     * Gets lineAmountTypes
     *
     * @return \Consilience\Xero\AccountingSdk\Model\LineAmountTypes|null
     */
    public function getLineAmountTypes()
    {
        return $this->get('lineAmountTypes');
    }

    /**
     * Sets lineAmountTypes
     *
     * @param \Consilience\Xero\AccountingSdk\Model\LineAmountTypes|null $lineAmountTypes lineAmountTypes
     *
     * @return $this
     */
    public function setLineAmountTypes($lineAmountTypes)
    {
        $this->container['lineAmountTypes'] = $lineAmountTypes;

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
