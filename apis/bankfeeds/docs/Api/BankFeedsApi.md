# Consilience\Xero\BankfeedsSdk\BankFeedsApi

All URIs are relative to *https://api.xero.com/bankfeeds.xro/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFeedConnections**](BankFeedsApi.md#createFeedConnections) | **POST** /FeedConnections | create one or more new feed connection
[**createStatements**](BankFeedsApi.md#createStatements) | **POST** /Statements | 
[**deleteFeedConnections**](BankFeedsApi.md#deleteFeedConnections) | **POST** /FeedConnections/DeleteRequests | delete an exsiting feed connection
[**getFeedConnection**](BankFeedsApi.md#getFeedConnection) | **GET** /FeedConnections/{id} | get single feed connection by id
[**getFeedConnections**](BankFeedsApi.md#getFeedConnections) | **GET** /FeedConnections | searches feed connections
[**getStatement**](BankFeedsApi.md#getStatement) | **GET** /Statements/{statementId} | 
[**getStatements**](BankFeedsApi.md#getStatements) | **GET** /Statements | 



## createFeedConnections

> \Consilience\Xero\BankfeedsSdk\Model\FeedConnections createFeedConnections($feedConnections)

create one or more new feed connection

By passing in the appropriate body, you can create one or more new feed connections in the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Consilience\Xero\BankfeedsSdk\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Consilience\Xero\BankfeedsSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Consilience\Xero\BankfeedsSdk\Api\BankFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedConnections = {"items":[{"AccountToken":"10058695","AccountNumber":"3809058454321500","AccountName":"Mike's Savings Account","AccountType":"BANK","Currency":"GBP"},{"AccountToken":"10045844","AccountNumber":"3809058887441500","AccountName":"Gee's Saving's Account","AccountType":"BANK","Currency":"GBP","Country":"GB"}]}; // \Consilience\Xero\BankfeedsSdk\Model\FeedConnections | Feed Connection(s) to add

try {
    $result = $apiInstance->createFeedConnections($feedConnections);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankFeedsApi->createFeedConnections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feedConnections** | [**\Consilience\Xero\BankfeedsSdk\Model\FeedConnections**](../Model/FeedConnections.md)| Feed Connection(s) to add |

### Return type

[**\Consilience\Xero\BankfeedsSdk\Model\FeedConnections**](../Model/FeedConnections.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createStatements

> \Consilience\Xero\BankfeedsSdk\Model\Statements createStatements($statements)



Create bank statements for one or more feed connections

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\BankfeedsSdk\Api\BankFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$statements = {"items":[{"feedConnectionId":"5a896e9e-7dce-4b64-b2c5-2a51abedcac0","startDate":"2018-06-10","endDate":"2018-06-11","startBalance":{"amount":100.0,"creditDebitIndicator":"DEBIT"},"endBalance":{"amount":110.0,"creditDebitIndicator":"DEBIT"},"statementLines":[{"postedDate":"2018-06-10","description":"Description for statement line 1","amount":5.0,"creditDebitIndicator":"CREDIT","transactionId":"transaction-id-1"},{"postedDate":"2018-06-10","description":"Description for statement line 2","amount":5.0,"creditDebitIndicator":"CREDIT","transactionId":"transaction-id-2","payeeName":"Payee name for statement line 2","reference":"Reference for statement line 2","chequeNumber":"021"}]},{"feedConnectionId":"746f347a-e58d-4906-98ab-9dfaa04f3cf2","startDate":"2018-06-10","endDate":"2018-06-11","startBalance":{"amount":200.0,"creditDebitIndicator":"DEBIT"},"endBalance":{"amount":215.5,"creditDebitIndicator":"DEBIT"},"statementLines":[{"postedDate":"2018-06-10","description":"Description for statement line 1","amount":5.5,"creditDebitIndicator":"CREDIT","transactionId":"transaction-id-10"},{"postedDate":"2018-06-10","description":"Description for statement line 2","amount":10.0,"creditDebitIndicator":"CREDIT","transactionId":"transaction-id-11","payeeName":"Payee name for statement line 2","reference":"Reference for statement line 2","chequeNumber":"031"}]}]}; // \Consilience\Xero\BankfeedsSdk\Model\Statements | Feed Connection(s) to add

try {
    $result = $apiInstance->createStatements($statements);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankFeedsApi->createStatements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **statements** | [**\Consilience\Xero\BankfeedsSdk\Model\Statements**](../Model/Statements.md)| Feed Connection(s) to add | [optional]

### Return type

[**\Consilience\Xero\BankfeedsSdk\Model\Statements**](../Model/Statements.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteFeedConnections

> \Consilience\Xero\BankfeedsSdk\Model\FeedConnections deleteFeedConnections($feedConnections)

delete an exsiting feed connection

By passing in the appropriate body, you can create a new feed connections in the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Consilience\Xero\BankfeedsSdk\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Consilience\Xero\BankfeedsSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Consilience\Xero\BankfeedsSdk\Api\BankFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedConnections = {"items":[{"id":"50d3cf8d-95dc-4466-8dc0-47e6d1197e28"},{"accountToken":"10000123"}]}; // \Consilience\Xero\BankfeedsSdk\Model\FeedConnections | Feed Connections to delete

try {
    $result = $apiInstance->deleteFeedConnections($feedConnections);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankFeedsApi->deleteFeedConnections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feedConnections** | [**\Consilience\Xero\BankfeedsSdk\Model\FeedConnections**](../Model/FeedConnections.md)| Feed Connections to delete |

### Return type

[**\Consilience\Xero\BankfeedsSdk\Model\FeedConnections**](../Model/FeedConnections.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFeedConnection

> \Consilience\Xero\BankfeedsSdk\Model\FeedConnection getFeedConnection($id)

get single feed connection by id

By passing in a FeedConnection Id options, you can search for available feed connections in the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Consilience\Xero\BankfeedsSdk\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Consilience\Xero\BankfeedsSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Consilience\Xero\BankfeedsSdk\Api\BankFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = xxxx; // string | feed connection id for single object

try {
    $result = $apiInstance->getFeedConnection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankFeedsApi->getFeedConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| feed connection id for single object |

### Return type

[**\Consilience\Xero\BankfeedsSdk\Model\FeedConnection**](../Model/FeedConnection.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFeedConnections

> \Consilience\Xero\BankfeedsSdk\Model\FeedConnections getFeedConnections($page, $pageSize)

searches feed connections

By passing in the appropriate options, you can search for available feed connections in the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Consilience\Xero\BankfeedsSdk\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Consilience\Xero\BankfeedsSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Consilience\Xero\BankfeedsSdk\Api\BankFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number which specifies the set of records to retrieve. By default the number of the records per set is 10. Example - https://api.xero.com/bankfeeds.xro/1.0/FeedConnections?page=1 to get the second set of the records. When page value is not a number or a negative number, by default, the first set of records is returned.
$pageSize = 100; // int | Page size which specifies how many records per page will be returned (default 10). Example - https://api.xero.com/bankfeeds.xro/1.0/FeedConnections?pageSize=100 to specify page size of 100.

try {
    $result = $apiInstance->getFeedConnections($page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankFeedsApi->getFeedConnections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number which specifies the set of records to retrieve. By default the number of the records per set is 10. Example - https://api.xero.com/bankfeeds.xro/1.0/FeedConnections?page&#x3D;1 to get the second set of the records. When page value is not a number or a negative number, by default, the first set of records is returned. | [optional]
 **pageSize** | **int**| Page size which specifies how many records per page will be returned (default 10). Example - https://api.xero.com/bankfeeds.xro/1.0/FeedConnections?pageSize&#x3D;100 to specify page size of 100. | [optional]

### Return type

[**\Consilience\Xero\BankfeedsSdk\Model\FeedConnections**](../Model/FeedConnections.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getStatement

> \Consilience\Xero\BankfeedsSdk\Model\Statement getStatement($statementId)



Retrieve a single Statement by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\BankfeedsSdk\Api\BankFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$statementId = 'statementId_example'; // string | 

try {
    $result = $apiInstance->getStatement($statementId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankFeedsApi->getStatement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **statementId** | **string**|  |

### Return type

[**\Consilience\Xero\BankfeedsSdk\Model\Statement**](../Model/Statement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getStatements

> \Consilience\Xero\BankfeedsSdk\Model\Statements getStatements($page, $pageSize, $xeroApplicationId, $xeroTenantId, $xeroUserId)



Retrieve all statements for an organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\BankfeedsSdk\Api\BankFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | 
$pageSize = 56; // int | 
$xeroApplicationId = '00000000-0000-0000-0000-0000000010000'; // string | 
$xeroTenantId = '00000000-0000-0000-0000-0000020000000'; // string | 
$xeroUserId = '00000000-0000-0000-0000-0000030000000'; // string | 

try {
    $result = $apiInstance->getStatements($page, $pageSize, $xeroApplicationId, $xeroTenantId, $xeroUserId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankFeedsApi->getStatements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **pageSize** | **int**|  | [optional]
 **xeroApplicationId** | **string**|  | [optional] [default to &#39;00000000-0000-0000-0000-0000000010000&#39;]
 **xeroTenantId** | **string**|  | [optional] [default to &#39;00000000-0000-0000-0000-0000020000000&#39;]
 **xeroUserId** | **string**|  | [optional] [default to &#39;00000000-0000-0000-0000-0000030000000&#39;]

### Return type

[**\Consilience\Xero\BankfeedsSdk\Model\Statements**](../Model/Statements.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

