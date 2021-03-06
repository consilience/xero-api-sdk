<?php

namespace Consilience\Xero\AssetsSdk;

/**
 * ApiException
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
 * OpenAPI Generator version: 4.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

use Psr\Http\Message\MessageInterface;
use Psr\Http\Message\RequestInterface;
use \Exception;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 * @package  Consilience\Xero\AssetsSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApiException extends Exception
{

    /**
     * The PSR-7 request.
     *
     * @var RequestInterface
     */
    protected $request;

    /**
     * The PSR-7 response.
     *
     * @var MessageInterface
     */
    protected $response;

    /**
     * The deserialized response object
     *
     * @var $responseObject;
     */
    protected $responseObject;

    /**
     * Constructor
     *
     * @param string            $message        Error message
     * @param int               $code           HTTP status code
     * @param RequestInterface  $request        PSR-7 Request
     * @param MessageInterface  $response       PSR-7 Response or ServerRequest
     * @param mixed             $responseObject The deserialised model payload, scalar StreamInterface or null
     */
    public function __construct(
        $message = '',
        $code = 0,
        ?RequestInterface $request = null,
        ?MessageInterface $response = null,
        $responseObject = null
    ) {
        parent::__construct($message, $code);

        $this->request = $request;
        $this->response = $response;
        $this->responseObject = $responseObject;
    }

    /**
     * Sets the HTTP request
     *
     * @paraem RequestInterface HTTP response header
     * @return $this
     */
    public function setRequest(RequestInterface $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Gets the request.
     *
     * @return RequestInterface The PSR-7 request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets the HTTP response
     *
     * @paraem MessageInterface HTTP response header
     * @return $this
     */
    public function setResponse(MessageInterface $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Gets the response payload, deserialised as well as possible.
     *
     * @return mixed The deserialised model payload, scalar or null
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets the deseralized response object (during deserialization)
     *
     * @param mixed $obj Deserialized response object
     *
     * @return $this
     */
    public function setResponseObject($obj)
    {
        $this->responseObject = $obj;
        return $this;
    }

    /**
     * Gets the deseralized response object (during deserialization)
     *
     * @return mixed the deserialized response object
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }
}
