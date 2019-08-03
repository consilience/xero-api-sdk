# Consilience\Xero\PayrollAuSdk\DefaultApi

All URIs are relative to *https://api.xero.com/payroll.xro*

Method | HTTP request | Description
------------- | ------------- | -------------
[**employeesEmployeeIDGet**](DefaultApi.md#employeesEmployeeIDGet) | **GET** /Employees/{EmployeeID} | Allows you to retrieve, add and update payroll employees in a Xero organisation
[**employeesEmployeeIDPost**](DefaultApi.md#employeesEmployeeIDPost) | **POST** /Employees/{EmployeeID} | 
[**employeesGet**](DefaultApi.md#employeesGet) | **GET** /Employees | Allows you to retrieve, add and update payroll employees in a Xero organisation
[**employeesPost**](DefaultApi.md#employeesPost) | **POST** /Employees | 
[**leaveApplicationsGet**](DefaultApi.md#leaveApplicationsGet) | **GET** /LeaveApplications | Allows you to retrieve, add and update Payroll leave applications in a Xero organisation
[**leaveApplicationsPost**](DefaultApi.md#leaveApplicationsPost) | **POST** /LeaveApplications | 
[**payItemsGet**](DefaultApi.md#payItemsGet) | **GET** /PayItems | Allows you to retrieve, add, update and delete Payroll Items in a Xero organisation
[**payItemsPost**](DefaultApi.md#payItemsPost) | **POST** /PayItems | 
[**payRunsGet**](DefaultApi.md#payRunsGet) | **GET** /PayRuns | Allows you to retrieve, add and update pay runs in a Xero organisation
[**payRunsPayRunIDGet**](DefaultApi.md#payRunsPayRunIDGet) | **GET** /PayRuns/{PayRunID} | Allows you to retrieve, add and update pay runs in a Xero organisation
[**payRunsPayRunIDPost**](DefaultApi.md#payRunsPayRunIDPost) | **POST** /PayRuns/{PayRunID} | 
[**payRunsPost**](DefaultApi.md#payRunsPost) | **POST** /PayRuns | 
[**payrollCalendarsGet**](DefaultApi.md#payrollCalendarsGet) | **GET** /PayrollCalendars | Allows you to retrieve and add Payroll Calendars in a Xero organisation
[**payrollCalendarsPost**](DefaultApi.md#payrollCalendarsPost) | **POST** /PayrollCalendars | 
[**payslipGet**](DefaultApi.md#payslipGet) | **GET** /Payslip | Allows you to retrieve and update payslips in a Xero organisation
[**payslipPayslipIDGet**](DefaultApi.md#payslipPayslipIDGet) | **GET** /Payslip/{PayslipID} | Allows you to retrieve and update payslips in a Xero organisation
[**payslipPayslipIDPost**](DefaultApi.md#payslipPayslipIDPost) | **POST** /Payslip/{PayslipID} | 
[**payslipPost**](DefaultApi.md#payslipPost) | **POST** /Payslip | 
[**settingsGet**](DefaultApi.md#settingsGet) | **GET** /Settings | Allows you to retrieve the Payroll settings of a Xero organisation
[**superFundProductsGet**](DefaultApi.md#superFundProductsGet) | **GET** /SuperFundProducts | GET a SuperFundProduct
[**superFundsGet**](DefaultApi.md#superFundsGet) | **GET** /SuperFunds | Allows you to retrieve, add and update Payroll Super Funds in a Xero organisation
[**superFundsPost**](DefaultApi.md#superFundsPost) | **POST** /SuperFunds | 
[**superFundsSuperFundIDGet**](DefaultApi.md#superFundsSuperFundIDGet) | **GET** /SuperFunds/{SuperFundID} | Allows you to retrieve, add and update Payroll Super Funds in a Xero organisation
[**superFundsSuperFundIDPost**](DefaultApi.md#superFundsSuperFundIDPost) | **POST** /SuperFunds/{SuperFundID} | 
[**timesheetsGet**](DefaultApi.md#timesheetsGet) | **GET** /Timesheets | Allows you to retrieve, add and update Payroll Timesheet in a Xero organisation
[**timesheetsPost**](DefaultApi.md#timesheetsPost) | **POST** /Timesheets | 
[**timesheetsTimesheetIDGet**](DefaultApi.md#timesheetsTimesheetIDGet) | **GET** /Timesheets/{TimesheetID} | Allows you to retrieve, add and update Payroll Timesheet in a Xero organisation
[**timesheetsTimesheetIDPost**](DefaultApi.md#timesheetsTimesheetIDPost) | **POST** /Timesheets/{TimesheetID} | 



## employeesEmployeeIDGet

> \Consilience\Xero\PayrollAuSdk\Model\Employee employeesEmployeeIDGet($employeeID)

Allows you to retrieve, add and update payroll employees in a Xero organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employeeID = 'employeeID_example'; // string | 

try {
    $result = $apiInstance->employeesEmployeeIDGet($employeeID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeesEmployeeIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employeeID** | [**string**](../Model/.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Employee**](../Model/Employee.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## employeesEmployeeIDPost

> \Consilience\Xero\PayrollAuSdk\Model\Employee employeesEmployeeIDPost($employeeID, $employee)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employeeID = 'employeeID_example'; // string | 
$employee = new \Consilience\Xero\PayrollAuSdk\Model\Employee(); // \Consilience\Xero\PayrollAuSdk\Model\Employee | 

try {
    $result = $apiInstance->employeesEmployeeIDPost($employeeID, $employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeesEmployeeIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employeeID** | [**string**](../Model/.md)|  |
 **employee** | [**\Consilience\Xero\PayrollAuSdk\Model\Employee**](../Model/Employee.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Employee**](../Model/Employee.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: text/xml, application/json
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## employeesGet

> \Consilience\Xero\PayrollAuSdk\Model\Employee[] employeesGet()

Allows you to retrieve, add and update payroll employees in a Xero organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->employeesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Employee[]**](../Model/Employee.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## employeesPost

> \Consilience\Xero\PayrollAuSdk\Model\Employee employeesPost($employee)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employee = new \Consilience\Xero\PayrollAuSdk\Model\Employee(); // \Consilience\Xero\PayrollAuSdk\Model\Employee | 

try {
    $result = $apiInstance->employeesPost($employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee** | [**\Consilience\Xero\PayrollAuSdk\Model\Employee**](../Model/Employee.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Employee**](../Model/Employee.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: text/xml, application/json
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leaveApplicationsGet

> \Consilience\Xero\PayrollAuSdk\Model\LeaveApplication[] leaveApplicationsGet()

Allows you to retrieve, add and update Payroll leave applications in a Xero organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->leaveApplicationsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->leaveApplicationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\LeaveApplication[]**](../Model/LeaveApplication.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leaveApplicationsPost

> \Consilience\Xero\PayrollAuSdk\Model\LeaveApplication leaveApplicationsPost($leaveApplication)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$leaveApplication = new \Consilience\Xero\PayrollAuSdk\Model\LeaveApplication(); // \Consilience\Xero\PayrollAuSdk\Model\LeaveApplication | 

try {
    $result = $apiInstance->leaveApplicationsPost($leaveApplication);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->leaveApplicationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leaveApplication** | [**\Consilience\Xero\PayrollAuSdk\Model\LeaveApplication**](../Model/LeaveApplication.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\LeaveApplication**](../Model/LeaveApplication.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: text/xml, application/json
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## payItemsGet

> \Consilience\Xero\PayrollAuSdk\Model\PayItem[] payItemsGet()

Allows you to retrieve, add, update and delete Payroll Items in a Xero organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->payItemsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->payItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\PayItem[]**](../Model/PayItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## payItemsPost

> \Consilience\Xero\PayrollAuSdk\Model\PayItem payItemsPost($payItem)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payItem = new \Consilience\Xero\PayrollAuSdk\Model\PayItem(); // \Consilience\Xero\PayrollAuSdk\Model\PayItem | 

try {
    $result = $apiInstance->payItemsPost($payItem);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->payItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payItem** | [**\Consilience\Xero\PayrollAuSdk\Model\PayItem**](../Model/PayItem.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\PayItem**](../Model/PayItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: text/xml, application/json
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## payRunsGet

> \Consilience\Xero\PayrollAuSdk\Model\PayRun[] payRunsGet($ifModifiedSince, $page, $where, $order)

Allows you to retrieve, add and update pay runs in a Xero organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$page = 3.4; // float | e.g. page=1 – Up to 100 records will be returned in a single API call
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->payRunsGet($ifModifiedSince, $page, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->payRunsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **page** | **float**| e.g. page&#x3D;1 – Up to 100 records will be returned in a single API call | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\PayRun[]**](../Model/PayRun.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## payRunsPayRunIDGet

> \Consilience\Xero\PayrollAuSdk\Model\PayRun payRunsPayRunIDGet($payRunID)

Allows you to retrieve, add and update pay runs in a Xero organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payRunID = 'payRunID_example'; // string | 

try {
    $result = $apiInstance->payRunsPayRunIDGet($payRunID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->payRunsPayRunIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payRunID** | [**string**](../Model/.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\PayRun**](../Model/PayRun.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## payRunsPayRunIDPost

> \Consilience\Xero\PayrollAuSdk\Model\PayRun payRunsPayRunIDPost($payRunID, $payRun)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payRunID = 'payRunID_example'; // string | 
$payRun = new \Consilience\Xero\PayrollAuSdk\Model\PayRun(); // \Consilience\Xero\PayrollAuSdk\Model\PayRun | 

try {
    $result = $apiInstance->payRunsPayRunIDPost($payRunID, $payRun);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->payRunsPayRunIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payRunID** | [**string**](../Model/.md)|  |
 **payRun** | [**\Consilience\Xero\PayrollAuSdk\Model\PayRun**](../Model/PayRun.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\PayRun**](../Model/PayRun.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: text/xml, application/json
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## payRunsPost

> \Consilience\Xero\PayrollAuSdk\Model\PayRun payRunsPost($payRun)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payRun = new \Consilience\Xero\PayrollAuSdk\Model\PayRun(); // \Consilience\Xero\PayrollAuSdk\Model\PayRun | 

try {
    $result = $apiInstance->payRunsPost($payRun);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->payRunsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payRun** | [**\Consilience\Xero\PayrollAuSdk\Model\PayRun**](../Model/PayRun.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\PayRun**](../Model/PayRun.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: text/xml, application/json
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## payrollCalendarsGet

> \Consilience\Xero\PayrollAuSdk\Model\PayrollCalendar[] payrollCalendarsGet($ifModifiedSince, $page, $where, $order)

Allows you to retrieve and add Payroll Calendars in a Xero organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$page = 3.4; // float | e.g. page=1 – Up to 100 records will be returned in a single API call
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->payrollCalendarsGet($ifModifiedSince, $page, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->payrollCalendarsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **page** | **float**| e.g. page&#x3D;1 – Up to 100 records will be returned in a single API call | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\PayrollCalendar[]**](../Model/PayrollCalendar.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## payrollCalendarsPost

> \Consilience\Xero\PayrollAuSdk\Model\PayrollCalendar payrollCalendarsPost($payrollCalendar)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payrollCalendar = new \Consilience\Xero\PayrollAuSdk\Model\PayrollCalendar(); // \Consilience\Xero\PayrollAuSdk\Model\PayrollCalendar | 

try {
    $result = $apiInstance->payrollCalendarsPost($payrollCalendar);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->payrollCalendarsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payrollCalendar** | [**\Consilience\Xero\PayrollAuSdk\Model\PayrollCalendar**](../Model/PayrollCalendar.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\PayrollCalendar**](../Model/PayrollCalendar.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: text/xml, application/json
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## payslipGet

> \Consilience\Xero\PayrollAuSdk\Model\Payslip[] payslipGet()

Allows you to retrieve and update payslips in a Xero organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->payslipGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->payslipGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Payslip[]**](../Model/Payslip.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## payslipPayslipIDGet

> \Consilience\Xero\PayrollAuSdk\Model\Payslip payslipPayslipIDGet($payslipID)

Allows you to retrieve and update payslips in a Xero organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payslipID = 'payslipID_example'; // string | 

try {
    $result = $apiInstance->payslipPayslipIDGet($payslipID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->payslipPayslipIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payslipID** | [**string**](../Model/.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Payslip**](../Model/Payslip.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## payslipPayslipIDPost

> \Consilience\Xero\PayrollAuSdk\Model\Payslip payslipPayslipIDPost($payslipID, $payslip)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payslipID = 'payslipID_example'; // string | 
$payslip = new \Consilience\Xero\PayrollAuSdk\Model\Payslip(); // \Consilience\Xero\PayrollAuSdk\Model\Payslip | 

try {
    $result = $apiInstance->payslipPayslipIDPost($payslipID, $payslip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->payslipPayslipIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payslipID** | [**string**](../Model/.md)|  |
 **payslip** | [**\Consilience\Xero\PayrollAuSdk\Model\Payslip**](../Model/Payslip.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Payslip**](../Model/Payslip.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: text/xml, application/json
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## payslipPost

> \Consilience\Xero\PayrollAuSdk\Model\Payslip payslipPost($payslip)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payslip = new \Consilience\Xero\PayrollAuSdk\Model\Payslip(); // \Consilience\Xero\PayrollAuSdk\Model\Payslip | 

try {
    $result = $apiInstance->payslipPost($payslip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->payslipPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payslip** | [**\Consilience\Xero\PayrollAuSdk\Model\Payslip**](../Model/Payslip.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Payslip**](../Model/Payslip.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: text/xml, application/json
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## settingsGet

> \Consilience\Xero\PayrollAuSdk\Model\Setting[] settingsGet()

Allows you to retrieve the Payroll settings of a Xero organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->settingsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->settingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Setting[]**](../Model/Setting.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## superFundProductsGet

> \Consilience\Xero\PayrollAuSdk\Model\SuperFundProduct[] superFundProductsGet()

GET a SuperFundProduct

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->superFundProductsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->superFundProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\SuperFundProduct[]**](../Model/SuperFundProduct.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## superFundsGet

> \Consilience\Xero\PayrollAuSdk\Model\SuperFund[] superFundsGet()

Allows you to retrieve, add and update Payroll Super Funds in a Xero organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->superFundsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->superFundsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\SuperFund[]**](../Model/SuperFund.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## superFundsPost

> \Consilience\Xero\PayrollAuSdk\Model\SuperFund superFundsPost($superFund)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$superFund = new \Consilience\Xero\PayrollAuSdk\Model\SuperFund(); // \Consilience\Xero\PayrollAuSdk\Model\SuperFund | 

try {
    $result = $apiInstance->superFundsPost($superFund);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->superFundsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **superFund** | [**\Consilience\Xero\PayrollAuSdk\Model\SuperFund**](../Model/SuperFund.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\SuperFund**](../Model/SuperFund.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: text/xml, application/json
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## superFundsSuperFundIDGet

> \Consilience\Xero\PayrollAuSdk\Model\SuperFund superFundsSuperFundIDGet($superFundID)

Allows you to retrieve, add and update Payroll Super Funds in a Xero organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$superFundID = 'superFundID_example'; // string | 

try {
    $result = $apiInstance->superFundsSuperFundIDGet($superFundID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->superFundsSuperFundIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **superFundID** | [**string**](../Model/.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\SuperFund**](../Model/SuperFund.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## superFundsSuperFundIDPost

> \Consilience\Xero\PayrollAuSdk\Model\SuperFund superFundsSuperFundIDPost($superFundID, $superFund)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$superFundID = 'superFundID_example'; // string | 
$superFund = new \Consilience\Xero\PayrollAuSdk\Model\SuperFund(); // \Consilience\Xero\PayrollAuSdk\Model\SuperFund | 

try {
    $result = $apiInstance->superFundsSuperFundIDPost($superFundID, $superFund);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->superFundsSuperFundIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **superFundID** | [**string**](../Model/.md)|  |
 **superFund** | [**\Consilience\Xero\PayrollAuSdk\Model\SuperFund**](../Model/SuperFund.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\SuperFund**](../Model/SuperFund.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: text/xml, application/json
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## timesheetsGet

> \Consilience\Xero\PayrollAuSdk\Model\Timesheet[] timesheetsGet()

Allows you to retrieve, add and update Payroll Timesheet in a Xero organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->timesheetsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->timesheetsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Timesheet[]**](../Model/Timesheet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## timesheetsPost

> \Consilience\Xero\PayrollAuSdk\Model\Timesheet timesheetsPost($timesheet)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$timesheet = new \Consilience\Xero\PayrollAuSdk\Model\Timesheet(); // \Consilience\Xero\PayrollAuSdk\Model\Timesheet | 

try {
    $result = $apiInstance->timesheetsPost($timesheet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->timesheetsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timesheet** | [**\Consilience\Xero\PayrollAuSdk\Model\Timesheet**](../Model/Timesheet.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Timesheet**](../Model/Timesheet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: text/xml, application/json
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## timesheetsTimesheetIDGet

> \Consilience\Xero\PayrollAuSdk\Model\Timesheet timesheetsTimesheetIDGet($timesheetID)

Allows you to retrieve, add and update Payroll Timesheet in a Xero organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$timesheetID = 'timesheetID_example'; // string | 

try {
    $result = $apiInstance->timesheetsTimesheetIDGet($timesheetID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->timesheetsTimesheetIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timesheetID** | [**string**](../Model/.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Timesheet**](../Model/Timesheet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## timesheetsTimesheetIDPost

> \Consilience\Xero\PayrollAuSdk\Model\Timesheet timesheetsTimesheetIDPost($timesheetID, $timesheet)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$timesheetID = 'timesheetID_example'; // string | 
$timesheet = new \Consilience\Xero\PayrollAuSdk\Model\Timesheet(); // \Consilience\Xero\PayrollAuSdk\Model\Timesheet | 

try {
    $result = $apiInstance->timesheetsTimesheetIDPost($timesheetID, $timesheet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->timesheetsTimesheetIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timesheetID** | [**string**](../Model/.md)|  |
 **timesheet** | [**\Consilience\Xero\PayrollAuSdk\Model\Timesheet**](../Model/Timesheet.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Timesheet**](../Model/Timesheet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: text/xml, application/json
- **Accept**: text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

