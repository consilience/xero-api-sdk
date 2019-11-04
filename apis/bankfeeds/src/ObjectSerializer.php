<?php

namespace Consilience\Xero\BankfeedsSdk;

/**
 * ObjectSerializer
 *
 * PHP version 5
 *
 * @category Class
 * @package  Consilience\Xero\BankfeedsSdk
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
 * OpenAPI Generator version: 4.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

use Psr\Http\Message\MessageInterface;
use Consilience\Xero\BankfeedsSdk\Model\ModelInterface;

use DateTimeInterface;
use DateTimeImmutable;
use DateTimeZone;
use DateTime;

/**
 * ObjectSerializer Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\BankfeedsSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjectSerializer
{
    /**
     * Serialize data
     *
     * @param mixed  $data   the data to serialize
     * @param string $type   the OpenAPIToolsType of the data
     * @param string $format the format of the OpenAPITools type of the data
     *
     * @return string|object serialized form of $data
     */
    public static function sanitizeForSerialization($data, string $type = null, string $format = null)
    {
        if (is_scalar($data) || null === $data) {
            return $data;
        } elseif ($data instanceof DateTimeInterface) {
            return ($format === 'date') ? $data->format('Y-m-d') : $data->format(DateTimeInterface::ATOM);
        } elseif (is_array($data)) {
            foreach ($data as $property => $value) {
                $data[$property] = static::sanitizeForSerialization($value);
            }
            return $data;
        } elseif (is_object($data)) {
            $values = [];
            if ($data instanceof ModelInterface) {
                $formats = $data::openAPIFormats();
                foreach ($data::openAPITypes() as $property => $openAPIType) {
                    $getter = $data::getters()[$property];
                    $value = $data->$getter();
                    if ($value !== null
                        && !in_array($openAPIType, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)
                        && method_exists($openAPIType, 'getAllowableEnumValues')
                        && !in_array($value, $openAPIType::getAllowableEnumValues(), true)
                    ) {
                        $imploded = implode("', '", $openAPIType::getAllowableEnumValues());

                        throw new \InvalidArgumentException(sprintf(
                            'Invalid value for enum "%s", must be one of: "%s"',
                            $openAPIType,
                            $imploded
                        ));
                    }

                    if ($value !== null) {
                        $values[$data::attributeMap()[$property]] = static::sanitizeForSerialization(
                            $value,
                            $openAPIType,
                            $formats[$property]
                        );
                    }
                }
            } else {
                foreach($data as $property => $value) {
                    $values[$property] = static::sanitizeForSerialization($value);
                }
            }
            return (object)$values;
        } else {
            return (string)$data;
        }
    }

    /**
     * Sanitize filename by removing path.
     * e.g. ../../sun.gif becomes sun.gif
     *
     * @param string $filename filename to be sanitized
     *
     * @return string the sanitized filename
     */
    public static function sanitizeFilename($filename)
    {
        if (preg_match("/.*[\/\\\\](.*)$/", $filename, $match)) {
            return $match[1];
        } else {
            return $filename;
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the path, by url-encoding.
     *
     * @param string $value a string which will be part of the path
     *
     * @return string the serialized object
     */
    public static function toPathValue($value)
    {
        return rawurlencode(static::toString($value));
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the query, by imploding comma-separated if it's an object.
     * If it's a string, pass through unchanged. It will be url-encoded
     * later.
     *
     * @param string[]|string|DateTimeInterface $object an object to be serialized to a string
     *
     * @return string the serialized object
     */
    public static function toQueryValue($object)
    {
        if (is_array($object)) {
            return implode(',', $object);
        } else {
            return static::toString($object);
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the header. If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601
     *
     * @param string $value a string which will be part of the header
     *
     * @return string the header string
     */
    public static function toHeaderValue($value)
    {
        return static::toString($value);
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the http body (form parameter). If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601
     *
     * @param string|\SplFileObject $value the value of the form parameter
     *
     * @return string the form string
     */
    public static function toFormValue($value)
    {
        if ($value instanceof \SplFileObject) {
            return $value->getRealPath();
        } else {
            return static::toString($value);
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the parameter. If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601
     * If it's a boolean, convert it to "true" or "false".
     *
     * @param string|bool|DateTimeInterface $value the value of the parameter
     *
     * @return string the header string
     */
    public static function toString($value)
    {
        if ($value instanceof DateTimeInterface) {
            // datetime in ISO8601 format
            return $value->format(DateTimeInterface::ATOM);
        } else if (is_bool($value)) {
            return $value ? 'true' : 'false';
        } else {
            return $value;
        }
    }

    /**
     * Serialize an array to a string.
     *
     * @param array  $collection                 collection to serialize to a string
     * @param string $collectionFormat           the format use for serialization (csv,
     * ssv, tsv, pipes, multi)
     * @param bool   $allowCollectionFormatMulti allow collection format to be a multidimensional array
     *
     * @return string
     */
    public static function serializeCollection(array $collection, $collectionFormat, $allowCollectionFormatMulti = false)
    {
        if ($allowCollectionFormatMulti && $collectionFormat === 'multi') {
            // http_build_query() almost does the job for us. We just
            // need to fix the result of multidimensional arrays.
            return preg_replace(
                '/%5B[0-9]+%5D=/',
                '=',
                http_build_query($collection, '', '&')
            );
        }

        switch ($collectionFormat) {
            case 'pipes':
                return implode('|', $collection);

            case 'tsv':
                return implode("\t", $collection);

            case 'ssv':
                return implode(' ', $collection);

            case 'csv':
                // Deliberate fall through. CSV is default format.
            default:
                return implode(',', $collection);
        }
    }

    /**
     * Deserialize a JSON string into an object
     *
     * @param mixed    $data          object, array or primitive to be deserialized
     * @param string   $class         class name is passed as a string
     * @param string[] $httpHeaders   HTTP headers
     * @param string   $discriminator discriminator if polymorphism is used
     *
     * @return object|array|null a single or an array of $class instances
     */
    public static function deserialize($data, $class, $httpHeaders = null)
    {
        if ($data === null) {
            return null;
        }

        if ($data instanceof MessageInterface) {
            // If a PSR-7 message, then unwrap the message.

            // The body at this point is a stream.
            // We can decode it depending on the headers.

            $body = $data->getBody();

            $contentType = $data->getHeaderLine('Content-Type');

            if (preg_match('#^application/.*json#', $contentType)) {
                // "application/json" or "application/error+json" with optional ";utf-8" suffix.

                $body = json_decode((string)$body);
            }

            return static::deserialize($body, $class, $data->getHeaders());
        }

        if ($class !== '\SplFileObject' && $data instanceof StreamInterface) {
            // A PSR-7 stream provided, but the datatype is not expected to be a
            // stream, so solidify it to a string.

            $data = (string)$data;
        }

        if (substr($class, 0, 4) === 'map[') {
            // For associative array e.g. map[string,int]

            $data = is_string($data) ? json_decode($data) : $data;

            settype($data, 'array');

            $inner = substr($class, 4, -1);
            $deserialized = [];

            if (strrpos($inner, ',') !== false) {
                $subClass_array = explode(',', $inner, 2);
                $subClass = $subClass_array[1];

                foreach ($data as $key => $value) {
                    $deserialized[$key] = static::deserialize($value, $subClass);
                }
            }

            return $deserialized;
        }

        if (strcasecmp(substr($class, -2), '[]') === 0) {
            $data = is_string($data) ? json_decode($data) : $data;

            $subClass = substr($class, 0, -2);
            $values = [];

            foreach ($data as $key => $value) {
                $values[] = static::deserialize($value, $subClass);
            }

            return $values;
        }

        if ($class === 'object') {
            settype($data, 'array');

            return $data;
        }

        // '\DateTime' is the string generated in the generator logic, though we
        // actually want to create an immutable datetime object.

        if ($class === '\DateTime') {
            // Some API's return an invalid, empty string as a
            // date-time property. DateTime::__construct() will return
            // the current time for empty input which is probably not
            // what is meant. The invalid empty string is probably to
            // be interpreted as a missing field/value. Let's handle
            // this graceful.
            // FIXME: handle timestamps before the epoch.

            if (! empty($data)) {
                // Handle Xero API DateTime formats. Examples:
                // "/Date(1436961673000)/" - unix timestamp with milliseconds
                // "/Date(1436961673000+0100)/" - with an additional timezone correction
                // "/Date(-1436961673000-0530)/" - before the epoch, 1924 here
                //
                // RE matches for "/Date(1436961673090+0100)/":
                // [1] = (/Date\()          "/Date("
                // [2] = ([-]?[0-9]+)       "1436961673"    epoch seconds
                // [3] = ([0-9]{3})         "090"           milliseconds
                // [4] = ([+-][0-9]{4})?    "+0100" or ""   optional timezone
                // [5] = (\)/)              ")"
                //
                // The substr check is just for speed.

                if (substr($data, 0, 5) === '/Date'
                    && preg_match('#^(/Date\()([-]?[0-9]+)([0-9]{3})([+-][0-9]{4})?(\)/)$#', $data, $matches
                )) {
                    return DateTimeImmutable::createFromFormat('U u', $matches[2] . ' ' . $matches[3] . '000')
                        ->setTimezone(new DateTimeZone($matches[4] ?: '+0000'));
                }

                return new DateTimeImmutable($data);
            } else {
                return null;
            }
        }

        if (in_array($class, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)) {
            settype($data, $class);
            return $data;
        }

        if ($class === '\SplFileObject') {
            /** @var \Psr\Http\Message\StreamInterface $data */

            // determine file name

            if (array_key_exists('Content-Disposition', $httpHeaders)
                && preg_match('/inline; filename=[\'"]?([^\'"\s]+)[\'"]?$/i', $httpHeaders['Content-Disposition'], $match)
            ) {
                $filename = Configuration::getDefaultConfiguration()->getTempFolderPath() . DIRECTORY_SEPARATOR . static::sanitizeFilename($match[1]);
            } else {
                $filename = tempnam(Configuration::getDefaultConfiguration()->getTempFolderPath(), '');
            }

            $file = fopen($filename, 'w');

            while ($chunk = $data->read(200)) {
                fwrite($file, $chunk);
            }

            fclose($file);

            return new \SplFileObject($filename, 'r');
        }

        if (method_exists($class, 'getAllowableEnumValues')) {
            if (! in_array($data, $class::getAllowableEnumValues(), true)) {
                throw new \InvalidArgumentException(sprintf(
                    'Invalid value for enum "%s", must be one of: "%s"',
                    $class,
                    implode('", "', $class::getAllowableEnumValues())
                ));
            }

            return $data;
        }

        $data = is_string($data) ? json_decode($data) : $data;

        // If a discriminator is defined and points to a valid subclass, use it.

        if (! empty($class::DISCRIMINATOR)) {
            $discriminatorName = static::dataElement($data, $class::DISCRIMINATOR);

            if (is_string($discriminatorName)) {
                $subclass = '\Consilience\Xero\BankfeedsSdk\Model\\' . $discriminatorName;

                if (is_subclass_of($subclass, $class)) {
                    $class = $subclass;
                }
            }
        }

        $instance = new $class();

        foreach ($instance::openAPITypes() as $property => $type) {
            $propertySetter = $instance::setters()[$property];

            $propertyValue = static::dataElement($data, $instance::attributeMap()[$property]);

            if (! isset($propertySetter) || !isset($propertyValue)) {
                continue;
            }

            if (isset($propertyValue)) {
                $instance->$propertySetter(static::deserialize($propertyValue, $type));
            }
        }

        return $instance;
    }

    /**
     * Return an element from an array or a property from an object.
     *
     * @param mixed $data
     * @param string $name the property name or element key
     */
    protected static function dataElement($data, string $name, $default = null)
    {
        if (is_array($data)) {
            return $data[$name] ?? $default;
        }

        if (is_object($data)) {
            // Try a property directly first.

            if (property_exists($data, $name)) {
                return $data->{$name};
            }

            // Try a getter.

            $getterName = 'get' . ucfirst($name);

            if (method_exists($data, $getterName)) {
                return $data->{$getterName};
            }
        }

        return $default;
    }
}
