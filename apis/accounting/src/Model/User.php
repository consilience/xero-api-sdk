<?php

namespace Consilience\Xero\AccountingSdk\Model;

/**
 * User
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
use Consilience\Xero\AccountingSdk\ObjectSerializer;

/**
 * User Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\AccountingSdk
 * @author   OpenAPI Generator team <team@openapitools.org>
 * @link     https://openapi-generator.tech
 */
class User implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'userID' => 'string',
        'emailAddress' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'updatedDateUTC' => '\DateTime',
        'isSubscriber' => 'bool',
        'organisationRole' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'userID' => 'uuid',
        'emailAddress' => null,
        'firstName' => null,
        'lastName' => null,
        'updatedDateUTC' => 'date-time',
        'isSubscriber' => null,
        'organisationRole' => null
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
        'userID' => 'UserID',
        'emailAddress' => 'EmailAddress',
        'firstName' => 'FirstName',
        'lastName' => 'LastName',
        'updatedDateUTC' => 'UpdatedDateUTC',
        'isSubscriber' => 'IsSubscriber',
        'organisationRole' => 'OrganisationRole'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'userID' => 'setUserID',
        'emailAddress' => 'setEmailAddress',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'updatedDateUTC' => 'setUpdatedDateUTC',
        'isSubscriber' => 'setIsSubscriber',
        'organisationRole' => 'setOrganisationRole'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'userID' => 'getUserID',
        'emailAddress' => 'getEmailAddress',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'updatedDateUTC' => 'getUpdatedDateUTC',
        'isSubscriber' => 'getIsSubscriber',
        'organisationRole' => 'getOrganisationRole'
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

    const ORGANISATION_ROLE_READONLY = 'READONLY';
    const ORGANISATION_ROLE_INVOICEONLY = 'INVOICEONLY';
    const ORGANISATION_ROLE_STANDARD = 'STANDARD';
    const ORGANISATION_ROLE_FINANCIALADVISER = 'FINANCIALADVISER';
    const ORGANISATION_ROLE_MANAGEDCLIENT = 'MANAGEDCLIENT';
    const ORGANISATION_ROLE_CASHBOOKCLIENT = 'CASHBOOKCLIENT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrganisationRoleAllowableValues()
    {
        return [
            self::ORGANISATION_ROLE_READONLY,
            self::ORGANISATION_ROLE_INVOICEONLY,
            self::ORGANISATION_ROLE_STANDARD,
            self::ORGANISATION_ROLE_FINANCIALADVISER,
            self::ORGANISATION_ROLE_MANAGEDCLIENT,
            self::ORGANISATION_ROLE_CASHBOOKCLIENT,
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
        $this->container['userID'] = $data['userID'] ?? null;
        $this->container['emailAddress'] = $data['emailAddress'] ?? null;
        $this->container['firstName'] = $data['firstName'] ?? null;
        $this->container['lastName'] = $data['lastName'] ?? null;
        $this->container['updatedDateUTC'] = $data['updatedDateUTC'] ?? null;
        $this->container['isSubscriber'] = $data['isSubscriber'] ?? null;
        $this->container['organisationRole'] = $data['organisationRole'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOrganisationRoleAllowableValues();
        if (!is_null($this->container['organisationRole']) && !in_array($this->container['organisationRole'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be one of "%s"',
                'organisationRole',
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
     * Gets userID
     *
     * @return string|null
     */
    public function getUserID()
    {
        return $this->get('userID');
    }

    /**
     * Sets userID
     *
     * @param string|null $userID Xero identifier
     *
     * @return $this
     */
    public function setUserID($userID)
    {
        $this->container['userID'] = $userID;

        return $this;
    }

    /**
     * Gets emailAddress
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->get('emailAddress');
    }

    /**
     * Sets emailAddress
     *
     * @param string|null $emailAddress Email address of user
     *
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->container['emailAddress'] = $emailAddress;

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
     * @param string|null $firstName First name of user
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
     * @param string|null $lastName Last name of user
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

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
     * @param \DateTime|null $updatedDateUTC Timestamp of last change to user
     *
     * @return $this
     */
    public function setUpdatedDateUTC($updatedDateUTC)
    {
        $this->container['updatedDateUTC'] = $updatedDateUTC;

        return $this;
    }

    /**
     * Gets isSubscriber
     *
     * @return bool|null
     */
    public function getIsSubscriber()
    {
        return $this->get('isSubscriber');
    }

    /**
     * Sets isSubscriber
     *
     * @param bool|null $isSubscriber Boolean to indicate if user is the subscriber
     *
     * @return $this
     */
    public function setIsSubscriber($isSubscriber)
    {
        $this->container['isSubscriber'] = $isSubscriber;

        return $this;
    }

    /**
     * Gets organisationRole
     *
     * @return string|null
     */
    public function getOrganisationRole()
    {
        return $this->get('organisationRole');
    }

    /**
     * Sets organisationRole
     *
     * @param string|null $organisationRole User role that defines permissions in Xero and via API (READONLY, INVOICEONLY, STANDARD, FINANCIALADVISER, etc)
     *
     * @return $this
     */
    public function setOrganisationRole($organisationRole)
    {
        $allowedValues = $this->getOrganisationRoleAllowableValues();
        if (! is_null($organisationRole) && !in_array($organisationRole, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Invalid value for "%s", must be one of "%s"',
                    'organisationRole',
                    implode('", "', $allowedValues)
                )
            );
        }
        $this->container['organisationRole'] = $organisationRole;

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
