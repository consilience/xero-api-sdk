# Consilience\Xero\AssetsSdk\AssetApi

All URIs are relative to *https://api.xero.com/assets.xro/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAsset**](AssetApi.md#createAsset) | **POST** /Assets | adds a fixed asset
[**createAssetType**](AssetApi.md#createAssetType) | **POST** /AssetTypes | adds a fixed asset type
[**getAssetById**](AssetApi.md#getAssetById) | **GET** /Assets/{id} | retrieves fixed asset by id
[**getAssetSettings**](AssetApi.md#getAssetSettings) | **GET** /Settings | searches fixed asset settings
[**getAssetTypes**](AssetApi.md#getAssetTypes) | **GET** /AssetTypes | searches fixed asset types
[**getAssets**](AssetApi.md#getAssets) | **GET** /Assets | searches fixed asset



## createAsset

> \Consilience\Xero\AssetsSdk\Model\Asset createAsset($asset)

adds a fixed asset

Adds an asset to the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\AssetsSdk\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = new \Consilience\Xero\AssetsSdk\Model\Asset(); // \Consilience\Xero\AssetsSdk\Model\Asset | Fixed asset to add

try {
    $result = $apiInstance->createAsset($asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->createAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset** | [**\Consilience\Xero\AssetsSdk\Model\Asset**](../Model/Asset.md)| Fixed asset to add |

### Return type

[**\Consilience\Xero\AssetsSdk\Model\Asset**](../Model/Asset.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAssetType

> \Consilience\Xero\AssetsSdk\Model\AssetType createAssetType($assetType)

adds a fixed asset type

Adds an fixed asset type to the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\AssetsSdk\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assetType = new \Consilience\Xero\AssetsSdk\Model\AssetType(); // \Consilience\Xero\AssetsSdk\Model\AssetType | Asset type to add

try {
    $result = $apiInstance->createAssetType($assetType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->createAssetType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetType** | [**\Consilience\Xero\AssetsSdk\Model\AssetType**](../Model/AssetType.md)| Asset type to add | [optional]

### Return type

[**\Consilience\Xero\AssetsSdk\Model\AssetType**](../Model/AssetType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAssetById

> \Consilience\Xero\AssetsSdk\Model\Asset getAssetById($id)

retrieves fixed asset by id

By passing in the appropriate asset id, you can search for a specific fixed asset in the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\AssetsSdk\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 4f7bcdcb-5ec1-4258-9558-19f662fccdfe; // string | fixed asset id for single object

try {
    $result = $apiInstance->getAssetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getAssetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| fixed asset id for single object |

### Return type

[**\Consilience\Xero\AssetsSdk\Model\Asset**](../Model/Asset.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAssetSettings

> \Consilience\Xero\AssetsSdk\Model\Setting getAssetSettings()

searches fixed asset settings

By passing in the appropriate options, you can search for available fixed asset types in the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\AssetsSdk\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAssetSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getAssetSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Consilience\Xero\AssetsSdk\Model\Setting**](../Model/Setting.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAssetTypes

> \Consilience\Xero\AssetsSdk\Model\AssetType[] getAssetTypes()

searches fixed asset types

By passing in the appropriate options, you can search for available fixed asset types in the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\AssetsSdk\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAssetTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getAssetTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Consilience\Xero\AssetsSdk\Model\AssetType[]**](../Model/AssetType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAssets

> \Consilience\Xero\AssetsSdk\Model\Assets getAssets($status, $page, $pageSize, $orderBy, $sortDirection, $filterBy)

searches fixed asset

By passing in the appropriate options, you can search for available fixed asset in the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\AssetsSdk\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = Draft; // string | Required when retrieving a collection of assets. See Asset Status Codes
$page = 1; // int | Results are paged. This specifies which page of the results to return. The default page is 1.
$pageSize = 5; // int | The number of records returned per page. By default the number of records returned is 10.
$orderBy = AssetName; // string | Requests can be ordered by AssetType, AssetName, AssetNumber, PurchaseDate and PurchasePrice. If the asset status is DISPOSED it also allows DisposalDate and DisposalPrice.
$sortDirection = ASC; // string | ASC or DESC
$filterBy = Draft; // string | A string that can be used to filter the list to only return assets containing the text. Checks it against the AssetName, AssetNumber, Description and AssetTypeName fields.

try {
    $result = $apiInstance->getAssets($status, $page, $pageSize, $orderBy, $sortDirection, $filterBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Required when retrieving a collection of assets. See Asset Status Codes |
 **page** | **int**| Results are paged. This specifies which page of the results to return. The default page is 1. | [optional]
 **pageSize** | **int**| The number of records returned per page. By default the number of records returned is 10. | [optional]
 **orderBy** | **string**| Requests can be ordered by AssetType, AssetName, AssetNumber, PurchaseDate and PurchasePrice. If the asset status is DISPOSED it also allows DisposalDate and DisposalPrice. | [optional]
 **sortDirection** | **string**| ASC or DESC | [optional]
 **filterBy** | **string**| A string that can be used to filter the list to only return assets containing the text. Checks it against the AssetName, AssetNumber, Description and AssetTypeName fields. | [optional]

### Return type

[**\Consilience\Xero\AssetsSdk\Model\Assets**](../Model/Assets.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

