# Consilience\Xero\FilesSdk\FilesApi

All URIs are relative to *https://api.xero.com/files.xro/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFileAssociation**](FilesApi.md#createFileAssociation) | **POST** /Files/{FileId}/Associations | create a new association
[**createFolder**](FilesApi.md#createFolder) | **POST** /Folders | create a new folder
[**deleteFile**](FilesApi.md#deleteFile) | **DELETE** /Files/{FileId} | delete a file
[**deleteFileAssociation**](FilesApi.md#deleteFileAssociation) | **DELETE** /Files/{FileId}/Associations/{ObjectId} | create a new association
[**deleteFolder**](FilesApi.md#deleteFolder) | **DELETE** /Folders/{FolderId} | delete a folder
[**getAssociationsByObject**](FilesApi.md#getAssociationsByObject) | **GET** /Associations/{ObjectId} | searches files
[**getFile**](FilesApi.md#getFile) | **GET** /Files/{FileId} | searches for file by unique id
[**getFileAssociations**](FilesApi.md#getFileAssociations) | **GET** /Files/{FileId}/Associations | searches files
[**getFileContent**](FilesApi.md#getFileContent) | **GET** /Files/{FileId}/Content | searches files to retrieve the data
[**getFiles**](FilesApi.md#getFiles) | **GET** /Files | searches files
[**getFolder**](FilesApi.md#getFolder) | **GET** /Folders/{FolderId} | searches specific folder by id
[**getFolders**](FilesApi.md#getFolders) | **GET** /Folders | searches folder
[**getInbox**](FilesApi.md#getInbox) | **GET** /Inbox | searches inbox folder
[**updateFile**](FilesApi.md#updateFile) | **PUT** /Files/{FileId} | Update a file
[**updateFolder**](FilesApi.md#updateFolder) | **PUT** /Folders/{FolderId} | update folder
[**uploadFile**](FilesApi.md#uploadFile) | **POST** /Files | upload an File



## createFileAssociation

> \Consilience\Xero\FilesSdk\Model\Association createFileAssociation($fileId, $association)

create a new association

By passing in the appropriate options, you can create a new folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\FilesSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fileId = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | File id for single object
$association = new \Consilience\Xero\FilesSdk\Model\Association(); // \Consilience\Xero\FilesSdk\Model\Association | 

try {
    $result = $apiInstance->createFileAssociation($fileId, $association);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createFileAssociation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileId** | [**string**](../Model/.md)| File id for single object |
 **association** | [**\Consilience\Xero\FilesSdk\Model\Association**](../Model/Association.md)|  | [optional]

### Return type

[**\Consilience\Xero\FilesSdk\Model\Association**](../Model/Association.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createFolder

> \Consilience\Xero\FilesSdk\Model\Folder createFolder($folder)

create a new folder

By passing in the appropriate properties, you can create a new folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\FilesSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder = new \Consilience\Xero\FilesSdk\Model\Folder(); // \Consilience\Xero\FilesSdk\Model\Folder | 

try {
    $result = $apiInstance->createFolder($folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | [**\Consilience\Xero\FilesSdk\Model\Folder**](../Model/Folder.md)|  | [optional]

### Return type

[**\Consilience\Xero\FilesSdk\Model\Folder**](../Model/Folder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteFile

> \Consilience\Xero\FilesSdk\Model\FileResponse204 deleteFile($fileId)

delete a file

Delete a specific file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\FilesSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fileId = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | File id for single object

try {
    $result = $apiInstance->deleteFile($fileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileId** | [**string**](../Model/.md)| File id for single object |

### Return type

[**\Consilience\Xero\FilesSdk\Model\FileResponse204**](../Model/FileResponse204.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteFileAssociation

> \Consilience\Xero\FilesSdk\Model\FileResponse204 deleteFileAssociation($fileId, $objectId)

create a new association

By passing in the appropriate options, you can create a new folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\FilesSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fileId = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | File id for single object
$objectId = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Object id for single object

try {
    $result = $apiInstance->deleteFileAssociation($fileId, $objectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteFileAssociation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileId** | [**string**](../Model/.md)| File id for single object |
 **objectId** | [**string**](../Model/.md)| Object id for single object |

### Return type

[**\Consilience\Xero\FilesSdk\Model\FileResponse204**](../Model/FileResponse204.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteFolder

> \Consilience\Xero\FilesSdk\Model\FileResponse204 deleteFolder($folderId)

delete a folder

By passing in the appropriate ID, you can delete a folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\FilesSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folderId = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Folder id for single object

try {
    $result = $apiInstance->deleteFolder($folderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folderId** | [**string**](../Model/.md)| Folder id for single object |

### Return type

[**\Consilience\Xero\FilesSdk\Model\FileResponse204**](../Model/FileResponse204.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAssociationsByObject

> \Consilience\Xero\FilesSdk\Model\Association[] getAssociationsByObject($objectId)

searches files

By passing in the appropriate options,

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\FilesSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$objectId = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Object id for single object

try {
    $result = $apiInstance->getAssociationsByObject($objectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getAssociationsByObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **objectId** | [**string**](../Model/.md)| Object id for single object |

### Return type

[**\Consilience\Xero\FilesSdk\Model\Association[]**](../Model/Association.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFile

> \Consilience\Xero\FilesSdk\Model\FileObject getFile($fileId)

searches for file by unique id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\FilesSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fileId = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | File id for single object

try {
    $result = $apiInstance->getFile($fileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileId** | [**string**](../Model/.md)| File id for single object |

### Return type

[**\Consilience\Xero\FilesSdk\Model\FileObject**](../Model/FileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFileAssociations

> \Consilience\Xero\FilesSdk\Model\Association[] getFileAssociations($fileId)

searches files

By passing in the appropriate options,

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\FilesSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fileId = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | File id for single object

try {
    $result = $apiInstance->getFileAssociations($fileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileAssociations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileId** | [**string**](../Model/.md)| File id for single object |

### Return type

[**\Consilience\Xero\FilesSdk\Model\Association[]**](../Model/Association.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFileContent

> \SplFileObject getFileContent($fileId)

searches files to retrieve the data

By passing in the appropriate options, retrieve data for specific file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\FilesSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fileId = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | File id for single object

try {
    $result = $apiInstance->getFileContent($fileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileId** | [**string**](../Model/.md)| File id for single object |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFiles

> \Consilience\Xero\FilesSdk\Model\Files getFiles($pagesize, $page, $sort)

searches files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\FilesSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pagesize = 50; // int | pass an optional page size value
$page = 2; // int | number of records to skip for pagination
$sort = CreatedDateUTC DESC; // string | values to sort by

try {
    $result = $apiInstance->getFiles($pagesize, $page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pagesize** | **int**| pass an optional page size value | [optional]
 **page** | **int**| number of records to skip for pagination | [optional]
 **sort** | **string**| values to sort by | [optional]

### Return type

[**\Consilience\Xero\FilesSdk\Model\Files**](../Model/Files.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFolder

> \Consilience\Xero\FilesSdk\Model\Folder getFolder($folderId)

searches specific folder by id

By passing in the appropriate ID, you can search for specific folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\FilesSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folderId = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Folder id for single object

try {
    $result = $apiInstance->getFolder($folderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folderId** | [**string**](../Model/.md)| Folder id for single object |

### Return type

[**\Consilience\Xero\FilesSdk\Model\Folder**](../Model/Folder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFolders

> \Consilience\Xero\FilesSdk\Model\Folder[] getFolders($sort)

searches folder

By passing in the appropriate options, you can search for available folders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\FilesSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sort = CreatedDateUTC DESC; // string | values to sort by

try {
    $result = $apiInstance->getFolders($sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFolders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| values to sort by | [optional]

### Return type

[**\Consilience\Xero\FilesSdk\Model\Folder[]**](../Model/Folder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getInbox

> \Consilience\Xero\FilesSdk\Model\Folder getInbox()

searches inbox folder

Search for the user inbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\FilesSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getInbox();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getInbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Consilience\Xero\FilesSdk\Model\Folder**](../Model/Folder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateFile

> \Consilience\Xero\FilesSdk\Model\FileObject updateFile($fileId, $fileObject)

Update a file

Update properties on a single file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\FilesSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fileId = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | File id for single object
$fileObject = new \Consilience\Xero\FilesSdk\Model\FileObject(); // \Consilience\Xero\FilesSdk\Model\FileObject | 

try {
    $result = $apiInstance->updateFile($fileId, $fileObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->updateFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileId** | [**string**](../Model/.md)| File id for single object |
 **fileObject** | [**\Consilience\Xero\FilesSdk\Model\FileObject**](../Model/FileObject.md)|  | [optional]

### Return type

[**\Consilience\Xero\FilesSdk\Model\FileObject**](../Model/FileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateFolder

> \Consilience\Xero\FilesSdk\Model\Folder updateFolder($folderId, $folder)

update folder

By passing in the appropriate ID and properties, you can update a folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\FilesSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folderId = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Folder id for single object
$folder = new \Consilience\Xero\FilesSdk\Model\Folder(); // \Consilience\Xero\FilesSdk\Model\Folder | 

try {
    $result = $apiInstance->updateFolder($folderId, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->updateFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folderId** | [**string**](../Model/.md)| Folder id for single object |
 **folder** | [**\Consilience\Xero\FilesSdk\Model\Folder**](../Model/Folder.md)|  |

### Return type

[**\Consilience\Xero\FilesSdk\Model\Folder**](../Model/Folder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## uploadFile

> \Consilience\Xero\FilesSdk\Model\FileObject uploadFile($folderId, $body, $name, $filename, $mimeType)

upload an File

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\FilesSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folderId = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | pass an optional folder id to save file to specific folder
$body = 'body_example'; // string | 
$name = 'name_example'; // string | exact name of the file you are uploading
$filename = 'filename_example'; // string | 
$mimeType = 'mimeType_example'; // string | 

try {
    $result = $apiInstance->uploadFile($folderId, $body, $name, $filename, $mimeType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folderId** | [**string**](../Model/.md)| pass an optional folder id to save file to specific folder | [optional]
 **body** | **string**|  | [optional]
 **name** | **string**| exact name of the file you are uploading | [optional]
 **filename** | **string**|  | [optional]
 **mimeType** | **string**|  | [optional]

### Return type

[**\Consilience\Xero\FilesSdk\Model\FileObject**](../Model/FileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

