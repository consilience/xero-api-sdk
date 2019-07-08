# Xero API SDK

**Note: for the immediate future, the suite of packages described here are still
in alpha. They will change, will be refined, so expect things to break.
Please feel free to try them out, get involved, raise issues and PRs
(even if it is just to fill gaps in the documentation).**

This package is generated from the
[Xero OpenAPI descriptions](https://github.com/XeroAPI/Xero-OpenAPI)
and provides:

* Support for the Accounting, Fixed Assets, Bank Feeds and Files APIs.
* Models for all schemas in the OpenAPI description.
* A PSR-18 client decorator for senting requests and constructing response objects.

The root namespace is `Consilience\Xero` with extended namespaces for each API:

* Consilience\Xero\AccountingSdk\
* Consilience\Xero\BankfeedsSdk\
* Consilience\Xero\AssetsSdk\
* Consilience\Xero\FilesSdk\

## PSR-18 Client

This package needs a [PSR-18](https://www.php-fig.org/psr/psr-18/) to send and
receive requests.
It also requires a [PSR-17](https://www.php-fig.org/psr/psr-17/) HTTP factory for
construcing request messages.

For *Partner* applications, a PSR-18 client with automatic token refresh can be found
here: [consilience/xero-api-client](https://github.com/consilience/xero-api-client).
There is a Laravel/Lumen wrapper for this client here:
[consilience/laravel-xero-api-client](https://github.com/consilience/laravel-xero-api-client).
For *Private* and *Public* applications, you will need to create your own `PSR-18` client,
or extend the `consilience/xero-api-client` and perhaps provide a PR.

The examples below assume you have a `PSR-18` client named `$psr18client` with access to your
Xero application of whatever type.

## Calling Operations

The Xero OpenAPI Description gives each operation a name.
These operations each have a method created.
For example, the Account API has an operation `getAccounts`.
This gives us the method:

    public function getAccounts($ifModifiedSince = null, $where = null, $order = null)
    {
        ...
    }

which can be found in [Consilience\Xero\AccountingSdk\Api\AccountingApi](https://github.com/consilience/xero-api-sdk/blob/master/apis/accounting/src/Api/AccountingApi.php)
(warning: it's a big class).
It takes three parameters, all optional, and some further details are given below.
First let's create the API object to call this operation.

```php
use Consilience\Xero\AccountingSdk\Configuration as accountingConfiguration;
use Consilience\Xero\AccountingSdk\Api\AccountingApi;

// You can pass in the PSR-17 factories, or leave them out for auto-discovery.

$accountingConfiguration = new accountingConfiguration([
    'syncClient' => $psr18client,
    'uriFactory' => // your PSR-17 URI factory
    'requestFactory' => // your PSR-17 request factory
    'streamFactory' => // your PSR-17 stream factory
]);

$accountingApi = new AccountingApi($accountingConfiguration);
```

Given that, you can request a list of Accounts:

```php
$accounts = $accountingApi->getAccounts();
```

That will return a `Consilience\Xero\AccountingSdk\Model\Accounts` model,
containing a list of zero or more `Consilience\Xero\AccountingSdk\Model\Account` models.

If there is an error in the response, then `Consilience\Xero\AccountingSdk\ApiException`
will be thrown.
This exception will give access to the parsed payload (if there is one, which this endpoint
does *not* provide), the `PSR-7` request, and the `PSR-7` response:

```php
use Consilience\Xero\AccountingSdk\ApiException;

try {
    $accounts = $accountingApi->getAccounts();
} catch (ApiException $e) {
    // Original PSR-7 request.
    $e->getRequest();
    // PSR-7 response.
    $e->getResponse();
    // Parsed payload or null if none.
    $e->getResponseObject();
}
```

Some Xero APIs will provide an error moel payload, with details of the error,
which may include individual validation messages for parameters that fail validation.
Sometimes it's just a `404` with no meaningful payload.

This operation takes three parameters:

```php
    /**
     * Operation getAccounts
     *
     * Allows you to retrieve the full chart of accounts
     *
     * @param  \DateTime $ifModifiedSince Only records created or modified since this timestamp will be returned (optional)
     * @param  string $where Filter by an any element (optional)
     * @param  string $order Order by an any element (optional)
     *
     * @throws \Consilience\Xero\AccountingSdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \Consilience\Xero\AccountingSdk\Model\Accounts
     */
```

The `$ifModifiedSince` parameter is straightforward.
It takes a PHP `DateTime` object,
or any string that [strtotime()](https://www.php.net/manual/en/function.strtotime.php) can parse,
and goes to milli-second resolution.

The `$where` and `$order` parameters are a little more structured, but still srings.

Details for setting up a `where` filter can be found here:

https://developer.xero.com/documentation/api/requests-and-responses#get-explicit

You do not need to escape any of the where-parameter - just create the string and pass it in.
Examples:

```php
// All accounts modified since 2016, that are still active, have the word "test"
// in their name, then order by last updated time, then (uselessly) the currency
// code descending.

$accounts = $accountingApi->getAccounts(
    '2016-01-01',
    'Status=="ACTIVE" && name.contains("test"),
    'updatedDateUTC asc, currencyCode desc'
);
```

Any errors in these parameters will result in an exception.
The API description for this operation does not specify any payload, so none is parsed.
However, the raw response `$e->getResponse()` is available to inspect.
This is a `PSR-7` response, so the payload, status code and body is available.

Other APIs and operations have a well-defined error response payload,
and that will be parsed.

If you want to run an operation without handling exceptions, append "WithHttpInfo" to the
end of the action:

```php
$accounts = $accountingApi->getAccountsWithHttpInfo();

// Returns an array:
// {
//     'model' => // The parsed payload
//     'request' => // The PSR-7 request
//     'response' => // The PSR-7 response
// }
```

## Creating Models

There are a number of places you may need to create models in relation to the API:

* When passing a parameter to an operation that expects a model.
* When parsing a `PSR-7` `ServerRequest` to a model, for inbound requests
  (running as a server).

TODO...from PSR-7 ServerRequest or Response, from array, or built by hand from data or nested models.

## Regenerating the Code

The code is generated using the `consilience/openapi-generator-psr18` package
at present. The steps to do this from a bash shell are:

1. From the root directory of this package, install the root dependencies
   (`consilience/openapi-generator-psr18` and `XeroAPI/Xero-OpenAPI`):  
   
   `composer install`
2. Run the bash script: `bin/generate.sh`

That's it. `generate.sh` will run the generator against the custom templates
for each of the Xero API descriptions, with the code going into the `apis`
directory.

## TODO:

* The file streaming generation functionality has not been worked on.
* The generation of asynchrnous requests are disabled at present.
* Request and response schema objects are not immutable.
  I would like to implmenent that, but work needs to be done learning how
  to customise the generataor code (Java) and developing the custmisation
  as an extension or plugin.
* Each API is generated with its own set of configuration and serialisation
  classes.
  Using an interface, it should be possible to use just one, shared between
  the APIs.
* Creation of some general helper methods for construction where-conditions
  and perhaps date-based queries.
