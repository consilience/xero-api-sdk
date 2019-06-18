<?php

namespace Consilience\Xero\FilesSdk;

/**
 * Configuration
 * PHP version 5
 *
 * @category Class
 * @package  Consilience\Xero\FilesSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Files API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
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

// PSR-18 client
use Psr\Http\Client\ClientInterface;

// Guzzle client
use GuzzleHttp\ClientInterface as GuzzleClientInterface;

// PSR-7
use Psr\Http\Message\StreamInterface;

// PSR-17
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;

// HTTPlug discovery (php-http/discovery + adapters)
use Http\Discovery\Psr17FactoryDiscovery as HttplugFactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery as HttplugClientDiscovery;

// HTTP Interop discovery http-interop/http-factory-discovery + adapters
use Http\Factory\Discovery\HttpFactory as HttpInteropFactoryDiscovery;
use Http\Factory\Discovery\HttpClient as HttpInteropClientDiscovery;

/**
 * Configuration Class Doc Comment
 * PHP version 5
 *
 * @category Class
 * @package  Consilience\Xero\FilesSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Configuration
{
    private static $defaultConfiguration;

    /**
     * Associate array to store API key(s)
     *
     * @var string[]
     */
    protected $apiKeys = [];

    /**
     * Associate array to store API prefix (e.g. Bearer)
     *
     * @var string[]
     */
    protected $apiKeyPrefixes = [];

    /**
     * Access token for OAuth/Bearer authentication
     *
     * @var string
     */
    protected $accessToken;

    /**
     * Username for HTTP basic authentication
     *
     * @var string
     */
    protected $username;

    /**
     * Password for HTTP basic authentication
     *
     * @var string
     */
    protected $password;

    /**
     * The host
     *
     * @var string
     */
    protected $host = 'https://api.xero.com/files.xro/1.0';

    /**
     * User agent of the HTTP request, set to "OpenAPI-Generator/{version}/PHP" by default
     *
     * @var string
     */
    protected $userAgent = 'OpenAPI-Generator/1.0.0/PHP';

    /**
     * The URI factory passed in or auto-discovered
     *
     * @var UriFactoryInterface
     */
    protected $uriFactory;

    /**
     * The Request factory passed in or auto-discovered
     *
     * @var RequestFactoryInterface
     */
    protected $requestFactory;

    /**
     * The Stream factory passed in or auto-discovered
     *
     * @var StreamFactoryInterface
     */
    protected $streamFactory;

    /**
     * The synchronous PSR-18 client.
     *
     * @var ClientInterface
     */
    protected $syncClient;

    /**
     * The asynchronous Guzzle client.
     *
     * @var GuzzleClientInterface
     */
    protected $asyncClient;

    /**
     * Constructor
     */
    public function __construct(array $options = [])
    {
        foreach ($options as $name => $value) {
            $this->set($name, $value);
        }

        // Try some discovery of the URI factory.

        if ($this->uriFactory === null && class_exists(HttplugFactoryDiscovery::class)) {
            $this->uriFactory = HttplugFactoryDiscovery::findUrlFactory();
        }

        if ($this->uriFactory === null && class_exists(HttpInteropFactoryDiscovery::class)) {
            $this->uriFactory = HttpInteropFactoryDiscovery::uriFactory();
        }

        // Try discovery of the Request factory.

        if ($this->requestFactory === null && class_exists(HttplugFactoryDiscovery::class)) {
            $this->requestFactory = HttplugFactoryDiscovery::findRequestFactory();
        }

        if ($this->requestFactory === null && class_exists(HttpInteropFactoryDiscovery::class)) {
            $this->requestFactory = HttpInteropFactoryDiscovery::requestFactory();
        }

        // Try discovery of the Stream factory.

        if ($this->streamFactory === null && class_exists(HttplugFactoryDiscovery::class)) {
            $this->streamFactory = HttplugFactoryDiscovery::findStreamFactory();
        }

        if ($this->streamFactory === null && class_exists(HttpInteropFactoryDiscovery::class)) {
            $this->streamFactory = HttpInteropFactoryDiscovery::streamFactory();
        }
    }

    /**
     * FIXME: support two-part (key/value) options
     *
     * @param string $name name of the configuration option as lowerSnakeCase
     * @param mixed $value value to store
     *
     * @return $this
     */
    protected function set($name, $value)
    {
        $setterName = 'set' . ucfirst($name);

        if (method_exists($this, $setterName)) {
            $this->{$setterName}($value);
        }

        return $this;
    }

    /**
     * FIXME: support two-part (key/value) options
     *
     * @param string $name name of the configuration option as lowerSnakeCase
     * @param mixed $value value to store
     *
     * @return $this new instance
     */
    public function with($name, $value)
    {
        $clone = clone $this;
        return $clone->set($name, $value);
    }

    /**
     * FIXME: support two-part (key/value) options
     *
     * @param string $name name of the configuration option as lowerSnakeCase
     * @param mixed $default value to return on no getter
     *
     * @return $mixed
     */
    public function get($name, $default = null)
    {
        $setterName = 'get' . ucfirst($name);

        if (method_exists($this, $getterName)) {
            $this->{$getterName}();
        }

        return $default;
    }

    /**
     * Sets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $key              API key or token
     *
     * @return $this
     */
    protected function setApiKey($apiKeyIdentifier, $key)
    {
        $this->apiKeys[$apiKeyIdentifier] = $key;
        return $this;
    }

    /**
     * Sets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $key              API key or token
     *
     * @return $this
     */
    public function withApiKey($apiKeyIdentifier, $key)
    {
        $clone = clone $this;
        $clone->apiKeys[$apiKeyIdentifier] = $key;
        return $clone;
    }

    /**
     * Gets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return string API key or token
     */
    public function getApiKey($apiKeyIdentifier)
    {
        return isset($this->apiKeys[$apiKeyIdentifier]) ? $this->apiKeys[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the prefix for API key (e.g. Bearer)
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $prefix           API key prefix, e.g. Bearer
     *
     * @return $this
     */
    protected function setApiKeyPrefix($apiKeyIdentifier, $prefix)
    {
        $this->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;
        return $this;
    }

    /**
     * Sets the prefix for API key (e.g. Bearer)
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $prefix           API key prefix, e.g. Bearer
     *
     * @return $this new instance
     */
    public function withApiKeyPrefix($apiKeyIdentifier, $prefix)
    {
        $clone = clone $this;
        $clone->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;
        return $clone;
    }

    /**
     * Gets API key prefix
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return string
     */
    public function getApiKeyPrefix($apiKeyIdentifier)
    {
        return isset($this->apiKeyPrefixes[$apiKeyIdentifier]) ? $this->apiKeyPrefixes[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the access token for OAuth
     *
     * @param string $accessToken Token for OAuth
     *
     * @return $this
     */
    protected function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * Sets the access token for OAuth
     *
     * @param string $accessToken Token for OAuth
     *
     * @return $this
     */
    public function withAccessToken($accessToken)
    {
        return $this->with('accessToken', $accessToken);
    }

    /**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Sets the username for HTTP basic authentication
     *
     * @param string $username Username for HTTP basic authentication
     *
     * @return $this
     */
    protected function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Sets the username for HTTP basic authentication
     *
     * @param string $username Username for HTTP basic authentication
     *
     * @return $this new instance
     */
    public function withUsername($username)
    {
        return $this->with('username', $username);
    }

    /**
     * Gets the username for HTTP basic authentication
     *
     * @return string Username for HTTP basic authentication
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the password for HTTP basic authentication
     *
     * @param string $password Password for HTTP basic authentication
     *
     * @return $this
     */
    protected function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Sets the password for HTTP basic authentication
     *
     * @param string $password Password for HTTP basic authentication
     *
     * @return $this new instance
     */
    public function withPassword($password)
    {
        return $this->with('password', $password);
    }

    /**
     * Gets the password for HTTP basic authentication
     *
     * @return string Password for HTTP basic authentication
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the host
     *
     * @param string $host Host
     *
     * @return $this
     */
    protected function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Sets the host
     *
     * @param string $host Host
     *
     * @return $this new instance
     */
    public function withHost($host)
    {
        return $this->with('host', $host);
    }

    /**
     * Gets the host
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    protected function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     * @return $this new instance
     */
    public function withUserAgent($userAgent)
    {
        return $this->with('userAgent', $userAgent);
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets the Request factory
     *
     * @param RequestFactoryInterface $requestFactory
     *
     * @return $this
     */
    protected function setRequestFactory(RequestFactoryInterface $requestFactory)
    {
        $this->requestFactory = $requestFactory;
        return $this;
    }

    /**
     * Sets Request factory
     *
     * @param RequestFactoryInterface $requestFactory
     *
     * @return $this new instance
     */
    public function withRequestFactory(RequestFactoryInterface $requestFactory)
    {
        return $this->with('requestFactory', $requestFactory);
    }

    /**
     * Gets Request factory
     *
     * @return RequestFactoryInterface
     */
    public function getRequestFactory()
    {
        return $this->requestFactory;
    }

    /**
     * Sets the URI factory
     *
     * @param UriFactoryInterface $uriFactory
     *
     * @return $this
     */
    protected function setUriFactory(UriFactoryInterface $uriFactory)
    {
        $this->uriFactory = $uriFactory;
        return $this;
    }

    /**
     * Sets URI factory
     *
     * @param UriFactoryInterface $uriFactory
     *
     * @return $this new instance
     */
    public function withUriFactory(UriFactoryInterface $uriFactory)
    {
        return $this->with('uriFactory', $uriFactory);
    }

    /**
     * Gets URI factory
     *
     * @return UriFactoryInterface
     */
    public function getUriFactory()
    {
        return $this->uriFactory;
    }

    /**
     * Sets the Synchronous http client
     *
     * @param ClientInterface $syncClient
     *
     * @return $this
     */
    protected function setSyncClient(ClientInterface $syncClient)
    {
        $this->syncClient = $syncClient;
        return $this;
    }

    /**
     * Sets Synchronous http client
     *
     * @param ClientInterface $syncClient
     *
     * @return $this new instance
     */
    public function withSyncClient(ClientInterface $syncClient)
    {
        return $this->with('syncClient', $syncClient);
    }

    /**
     * Gets Synchronous http client
     *
     * @return ClientInterface
     */
    public function getSyncClient(): ClientInterface
    {
        return $this->syncClient;
    }



    /**
     * Sets the Asynchronous http client
     *
     * @param GuzzleClientInterface $syncClient
     *
     * @return $this
     */
    protected function setAsyncClient(GuzzleClientInterface $asyncClient)
    {
        $this->asyncClient = $asyncClient;
        return $this;
    }

    /**
     * Sets Asynchronous http client
     *
     * @param GuzzleClientInterface $asyncClient
     *
     * @return $this new instance
     */
    public function withAsyncClient(GuzzleClientInterface $asyncClient)
    {
        return $this->with('asyncClient', $asyncClient);
    }

    /**
     * Gets Asynchronous http client
     *
     * @return GuzzleClientInterface
     */
    public function getAsyncClient(): GuzzleClientInterface
    {
        return $this->asyncClient;
    }


    /**
     * Sets the Stream factory
     *
     * @param StreamFactoryInterface $streamFactory
     *
     * @return $this
     */
    protected function setStreamFactory(StreamFactoryInterface $streamFactory)
    {
        $this->streamFactory = $streamFactory;
        return $this;
    }

    /**
     * Sets Stream factory
     *
     * @param StreamFactoryInterface $streamFactory
     *
     * @return $this new instance
     */
    public function withStreamFactory(StreamFactoryInterface $streamFactory)
    {
        return $this->with('streamFactory', $streamFactory);
    }

    /**
     * Gets Stream factory
     *
     * @return StreamFactoryInterface
     */
    public function getStreamFactory()
    {
        return $this->streamFactory;
    }

    /**
     * Gets the default configuration instance
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration()
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    /**
     * Sets the default configuration instance
     *
     * @param Configuration $config An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$defaultConfiguration = $config;
    }

    /**
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report  = 'PHP SDK (Consilience\Xero\FilesSdk) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    The version of the OpenAPI document: 1.0.0' . PHP_EOL;
        $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }

    /**
     * Get API key (with prefix if set)
     *
     * @param  string $apiKeyIdentifier name of apikey
     *
     * @return string API key with the prefix
     */
    public function getApiKeyWithPrefix($apiKeyIdentifier)
    {
        $prefix = $this->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->getApiKey($apiKeyIdentifier);

        if ($apiKey === null) {
            return null;
        }

        if ($prefix === null) {
            $keyWithPrefix = $apiKey;
        } else {
            $keyWithPrefix = $prefix . ' ' . $apiKey;
        }

        return $keyWithPrefix;
    }

    /**
     * Returns an array of host settings
     *
     * @return an array of host settings
     */
    public function getHostSettings()
    {
        return [
          [
            "url" => "https://api.xero.com/files.xro/1.0/",
            "description" => "Xero Files API",
          ]
        ];
    }

    /**
     * Returns URL based on the index and variables
     *
     * @param index array index of the host settings
     * @param variables hash of variable and the corresponding value (optional)
     * @return URL based on host settings
     */
    public function getHostFromSettings($index, $variables = null)
    {
        if (null === $variables) {
            $variables = [];
        }

        $hosts = $this->getHostSettings();

        // check array index out of bound
        if ($index < 0 || $index >= sizeof($hosts)) {
            throw new \InvalidArgumentException("Invalid index $index when selecting the host. Must be less than ".sizeof($hosts));
        }

        $host = $hosts[$index];
        $url = $host["url"];

        // go through variable and assign a value
        foreach ($host["variables"] as $name => $variable) {
            if (array_key_exists($name, $variables)) { // check to see if it's in the variables provided by the user
                if (in_array($variables[$name], $variable["enum_values"])) { // check to see if the value is in the enum
                    $url = str_replace("{".$name."}", $variables[$name], $url);
                } else {
                    throw new \InvalidArgumentException("The variable `$name` in the host URL has invalid value ".$variables[$name].". Must be ".join(',', $variable["enum_values"]).".");
                }
            } else {
                // use default value
                $url = str_replace("{".$name."}", $variable["default_value"], $url);
            }
        }

        return $url;
    }
}
