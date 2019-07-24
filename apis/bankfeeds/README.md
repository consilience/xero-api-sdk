# OpenAPIClient-php

The Xero Bank Feeds API

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.0.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 7.2 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.xero.com/bankfeeds.xro/1.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BankFeedsApi* | [**createFeedConnections**](docs/Api/BankFeedsApi.md#createfeedconnections) | **POST** /FeedConnections | create one or more new feed connection
*BankFeedsApi* | [**createStatements**](docs/Api/BankFeedsApi.md#createstatements) | **POST** /Statements | 
*BankFeedsApi* | [**deleteFeedConnections**](docs/Api/BankFeedsApi.md#deletefeedconnections) | **POST** /FeedConnections/DeleteRequests | delete an exsiting feed connection
*BankFeedsApi* | [**getFeedConnection**](docs/Api/BankFeedsApi.md#getfeedconnection) | **GET** /FeedConnections/{id} | get single feed connection by id
*BankFeedsApi* | [**getFeedConnections**](docs/Api/BankFeedsApi.md#getfeedconnections) | **GET** /FeedConnections | searches feed connections
*BankFeedsApi* | [**getStatement**](docs/Api/BankFeedsApi.md#getstatement) | **GET** /Statements/{statementId} | 
*BankFeedsApi* | [**getStatements**](docs/Api/BankFeedsApi.md#getstatements) | **GET** /Statements | 


## Documentation For Models

 - [CreditDebitIndicator](docs/Model/CreditDebitIndicator.md)
 - [EndBalance](docs/Model/EndBalance.md)
 - [Error](docs/Model/Error.md)
 - [FeedConnection](docs/Model/FeedConnection.md)
 - [FeedConnections](docs/Model/FeedConnections.md)
 - [Pagination](docs/Model/Pagination.md)
 - [StartBalance](docs/Model/StartBalance.md)
 - [Statement](docs/Model/Statement.md)
 - [StatementLine](docs/Model/StatementLine.md)
 - [Statements](docs/Model/Statements.md)


## Documentation For Authorization



## ApiKeyAuth


- **Type**: API key
- **API key parameter name**: X-API-Key
- **Location**: HTTP header



## Author

api@xero.com
