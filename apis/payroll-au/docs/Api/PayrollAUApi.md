# Consilience\Xero\PayrollAuSdk\PayrollAUApi

All URIs are relative to *https://api.xero.com/payroll.xro/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEmployee**](PayrollAUApi.md#createEmployee) | **POST** /Employees | Use this method to create a payroll employee
[**createLeaveApplication**](PayrollAUApi.md#createLeaveApplication) | **POST** /LeaveApplications | Use this method to create a Leave Application
[**createPayItem**](PayrollAUApi.md#createPayItem) | **POST** /PayItems | Use this method to create a Pay Item
[**createPayrollCalendar**](PayrollAUApi.md#createPayrollCalendar) | **POST** /PayrollCalendars | Use this method to create a Payroll Calendars
[**createPayrun**](PayrollAUApi.md#createPayrun) | **POST** /Payruns | Use this method to create a payrun
[**createSuperfund**](PayrollAUApi.md#createSuperfund) | **POST** /Superfunds | Use this method to create a super fund
[**createTimesheet**](PayrollAUApi.md#createTimesheet) | **POST** /Timesheets | Use this method to create a timesheet
[**getEmployee**](PayrollAUApi.md#getEmployee) | **GET** /Employees/{EmployeeId} | searches for an employee by unique id
[**getEmployees**](PayrollAUApi.md#getEmployees) | **GET** /Employees | searches employees
[**getLeaveApplication**](PayrollAUApi.md#getLeaveApplication) | **GET** /LeaveApplications/{LeaveApplicationId} | searches for an Leave Application by unique id
[**getLeaveApplications**](PayrollAUApi.md#getLeaveApplications) | **GET** /LeaveApplications | searches Leave Applications
[**getPayItems**](PayrollAUApi.md#getPayItems) | **GET** /PayItems | searches Pay Items
[**getPayrollCalendar**](PayrollAUApi.md#getPayrollCalendar) | **GET** /PayrollCalendars/{PayrollCalendarID} | searches Payroll Calendars
[**getPayrollCalendars**](PayrollAUApi.md#getPayrollCalendars) | **GET** /PayrollCalendars | searches Payroll Calendars
[**getPayrun**](PayrollAUApi.md#getPayrun) | **GET** /Payruns/{PayrunID} | searches for an payrun by unique id
[**getPayruns**](PayrollAUApi.md#getPayruns) | **GET** /Payruns | searches payruns
[**getPayslip**](PayrollAUApi.md#getPayslip) | **GET** /Payslip/{PayslipID} | searches for an payslip by unique id
[**getSettings**](PayrollAUApi.md#getSettings) | **GET** /Settings | retrieve settings
[**getSuperfund**](PayrollAUApi.md#getSuperfund) | **GET** /Superfunds/{SuperfundID} | searches for an Superfund by unique id
[**getSuperfundProducts**](PayrollAUApi.md#getSuperfundProducts) | **GET** /SuperfundProducts | searches SuperfundProducts
[**getSuperfunds**](PayrollAUApi.md#getSuperfunds) | **GET** /Superfunds | searches Superfunds
[**getTimesheet**](PayrollAUApi.md#getTimesheet) | **GET** /Timesheets/{TimesheetID} | searches for an timesheet by unique id
[**getTimesheets**](PayrollAUApi.md#getTimesheets) | **GET** /Timesheets | searches timesheets
[**updateEmployee**](PayrollAUApi.md#updateEmployee) | **POST** /Employees/{EmployeeId} | Update an Employee
[**updateLeaveApplication**](PayrollAUApi.md#updateLeaveApplication) | **POST** /LeaveApplications/{LeaveApplicationId} | Use this method to create a Leave Application
[**updatePayrun**](PayrollAUApi.md#updatePayrun) | **POST** /Payruns/{PayrunID} | Update a Payrun
[**updatePayslip**](PayrollAUApi.md#updatePayslip) | **POST** /Payslip | Use this add, update or delete one or more payslip line items
[**updatePayslipByID**](PayrollAUApi.md#updatePayslipByID) | **POST** /Payslip/{PayslipID} | Update a Payslip
[**updateSuperfund**](PayrollAUApi.md#updateSuperfund) | **POST** /Superfunds/{SuperfundID} | Update a Superfund
[**updateTimesheet**](PayrollAUApi.md#updateTimesheet) | **POST** /Timesheets/{TimesheetID} | Update a Timesheet



## createEmployee

> \Consilience\Xero\PayrollAuSdk\Model\Employees createEmployee($xeroTenantId, $employee)

Use this method to create a payroll employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$employee = array(new \Consilience\Xero\PayrollAuSdk\Model\Employee()); // \Consilience\Xero\PayrollAuSdk\Model\Employee[] | 

try {
    $result = $apiInstance->createEmployee($xeroTenantId, $employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->createEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **employee** | [**\Consilience\Xero\PayrollAuSdk\Model\Employee[]**](../Model/Employee.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Employees**](../Model/Employees.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createLeaveApplication

> \Consilience\Xero\PayrollAuSdk\Model\LeaveApplications createLeaveApplication($xeroTenantId, $leaveApplication)

Use this method to create a Leave Application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$leaveApplication = array(new \Consilience\Xero\PayrollAuSdk\Model\LeaveApplication()); // \Consilience\Xero\PayrollAuSdk\Model\LeaveApplication[] | 

try {
    $result = $apiInstance->createLeaveApplication($xeroTenantId, $leaveApplication);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->createLeaveApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **leaveApplication** | [**\Consilience\Xero\PayrollAuSdk\Model\LeaveApplication[]**](../Model/LeaveApplication.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\LeaveApplications**](../Model/LeaveApplications.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPayItem

> \Consilience\Xero\PayrollAuSdk\Model\PayItems createPayItem($xeroTenantId, $payItems)

Use this method to create a Pay Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$payItems = array(new \Consilience\Xero\PayrollAuSdk\Model\PayItems()); // \Consilience\Xero\PayrollAuSdk\Model\PayItems[] | 

try {
    $result = $apiInstance->createPayItem($xeroTenantId, $payItems);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->createPayItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **payItems** | [**\Consilience\Xero\PayrollAuSdk\Model\PayItems[]**](../Model/PayItems.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\PayItems**](../Model/PayItems.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPayrollCalendar

> \Consilience\Xero\PayrollAuSdk\Model\PayrollCalendars createPayrollCalendar($xeroTenantId, $payrollCalendars)

Use this method to create a Payroll Calendars

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$payrollCalendars = array(new \Consilience\Xero\PayrollAuSdk\Model\PayrollCalendars()); // \Consilience\Xero\PayrollAuSdk\Model\PayrollCalendars[] | 

try {
    $result = $apiInstance->createPayrollCalendar($xeroTenantId, $payrollCalendars);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->createPayrollCalendar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **payrollCalendars** | [**\Consilience\Xero\PayrollAuSdk\Model\PayrollCalendars[]**](../Model/PayrollCalendars.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\PayrollCalendars**](../Model/PayrollCalendars.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPayrun

> \Consilience\Xero\PayrollAuSdk\Model\Payruns createPayrun($xeroTenantId, $payruns)

Use this method to create a payrun

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$payruns = array(new \Consilience\Xero\PayrollAuSdk\Model\Payruns()); // \Consilience\Xero\PayrollAuSdk\Model\Payruns[] | 

try {
    $result = $apiInstance->createPayrun($xeroTenantId, $payruns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->createPayrun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **payruns** | [**\Consilience\Xero\PayrollAuSdk\Model\Payruns[]**](../Model/Payruns.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Payruns**](../Model/Payruns.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createSuperfund

> \Consilience\Xero\PayrollAuSdk\Model\Superfunds createSuperfund($xeroTenantId, $superfunds)

Use this method to create a super fund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$superfunds = array(new \Consilience\Xero\PayrollAuSdk\Model\Superfunds()); // \Consilience\Xero\PayrollAuSdk\Model\Superfunds[] | 

try {
    $result = $apiInstance->createSuperfund($xeroTenantId, $superfunds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->createSuperfund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **superfunds** | [**\Consilience\Xero\PayrollAuSdk\Model\Superfunds[]**](../Model/Superfunds.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Superfunds**](../Model/Superfunds.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createTimesheet

> \Consilience\Xero\PayrollAuSdk\Model\Timesheets createTimesheet($xeroTenantId, $timesheets)

Use this method to create a timesheet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$timesheets = new \Consilience\Xero\PayrollAuSdk\Model\Timesheets(); // \Consilience\Xero\PayrollAuSdk\Model\Timesheets | 

try {
    $result = $apiInstance->createTimesheet($xeroTenantId, $timesheets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->createTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **timesheets** | [**\Consilience\Xero\PayrollAuSdk\Model\Timesheets**](../Model/Timesheets.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Timesheets**](../Model/Timesheets.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEmployee

> \Consilience\Xero\PayrollAuSdk\Model\Employees getEmployee($xeroTenantId, $employeeId)

searches for an employee by unique id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$employeeId = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object

try {
    $result = $apiInstance->getEmployee($xeroTenantId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **employeeId** | [**string**](../Model/.md)| Employee id for single object |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Employees**](../Model/Employees.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEmployees

> \Consilience\Xero\PayrollAuSdk\Model\Employees getEmployees($xeroTenantId, $ifModifiedSince, $where, $order, $page)

searches employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = Status=="ACTIVE"; // string | Filter by an any element
$order = EmailAddress%20DESC; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 employees will be returned in a single API call

try {
    $result = $apiInstance->getEmployees($xeroTenantId, $ifModifiedSince, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getEmployees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 employees will be returned in a single API call | [optional]

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Employees**](../Model/Employees.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLeaveApplication

> \Consilience\Xero\PayrollAuSdk\Model\LeaveApplications getLeaveApplication($xeroTenantId, $leaveApplicationId)

searches for an Leave Application by unique id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$leaveApplicationId = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Leave Application id for single object

try {
    $result = $apiInstance->getLeaveApplication($xeroTenantId, $leaveApplicationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getLeaveApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **leaveApplicationId** | [**string**](../Model/.md)| Leave Application id for single object |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\LeaveApplications**](../Model/LeaveApplications.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLeaveApplications

> \Consilience\Xero\PayrollAuSdk\Model\LeaveApplications getLeaveApplications($xeroTenantId, $ifModifiedSince, $where, $order, $page)

searches Leave Applications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = Status=="ACTIVE"; // string | Filter by an any element
$order = EmailAddress%20DESC; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 objects will be returned in a single API call

try {
    $result = $apiInstance->getLeaveApplications($xeroTenantId, $ifModifiedSince, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getLeaveApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 objects will be returned in a single API call | [optional]

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\LeaveApplications**](../Model/LeaveApplications.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPayItems

> \Consilience\Xero\PayrollAuSdk\Model\PayItems getPayItems($xeroTenantId, $ifModifiedSince, $where, $order, $page)

searches Pay Items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = Status=="ACTIVE"; // string | Filter by an any element
$order = EmailAddress%20DESC; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 objects will be returned in a single API call

try {
    $result = $apiInstance->getPayItems($xeroTenantId, $ifModifiedSince, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getPayItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 objects will be returned in a single API call | [optional]

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\PayItems**](../Model/PayItems.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPayrollCalendar

> \Consilience\Xero\PayrollAuSdk\Model\PayrollCalendars getPayrollCalendar($xeroTenantId, $payrollCalendarID)

searches Payroll Calendars

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$payrollCalendarID = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Payroll Calendar id for single object

try {
    $result = $apiInstance->getPayrollCalendar($xeroTenantId, $payrollCalendarID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getPayrollCalendar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **payrollCalendarID** | [**string**](../Model/.md)| Payroll Calendar id for single object |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\PayrollCalendars**](../Model/PayrollCalendars.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPayrollCalendars

> \Consilience\Xero\PayrollAuSdk\Model\PayrollCalendars getPayrollCalendars($xeroTenantId, $ifModifiedSince, $where, $order, $page)

searches Payroll Calendars

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = Status=="ACTIVE"; // string | Filter by an any element
$order = EmailAddress%20DESC; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 objects will be returned in a single API call

try {
    $result = $apiInstance->getPayrollCalendars($xeroTenantId, $ifModifiedSince, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getPayrollCalendars: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 objects will be returned in a single API call | [optional]

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\PayrollCalendars**](../Model/PayrollCalendars.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPayrun

> \Consilience\Xero\PayrollAuSdk\Model\Payruns getPayrun($xeroTenantId, $payrunID)

searches for an payrun by unique id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$payrunID = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Payrun id for single object

try {
    $result = $apiInstance->getPayrun($xeroTenantId, $payrunID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getPayrun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **payrunID** | [**string**](../Model/.md)| Payrun id for single object |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Payruns**](../Model/Payruns.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPayruns

> \Consilience\Xero\PayrollAuSdk\Model\Payruns getPayruns($xeroTenantId, $ifModifiedSince, $where, $order, $page)

searches payruns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = Status=="ACTIVE"; // string | Filter by an any element
$order = EmailAddress%20DESC; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 payruns will be returned in a single API call

try {
    $result = $apiInstance->getPayruns($xeroTenantId, $ifModifiedSince, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getPayruns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 payruns will be returned in a single API call | [optional]

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Payruns**](../Model/Payruns.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPayslip

> \Consilience\Xero\PayrollAuSdk\Model\Payslip getPayslip($xeroTenantId, $payslipID)

searches for an payslip by unique id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$payslipID = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Payslip id for single object

try {
    $result = $apiInstance->getPayslip($xeroTenantId, $payslipID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getPayslip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **payslipID** | [**string**](../Model/.md)| Payslip id for single object |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Payslip**](../Model/Payslip.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSettings

> \Consilience\Xero\PayrollAuSdk\Model\Settings getSettings($xeroTenantId)

retrieve settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant

try {
    $result = $apiInstance->getSettings($xeroTenantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Settings**](../Model/Settings.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSuperfund

> \Consilience\Xero\PayrollAuSdk\Model\Superfunds getSuperfund($xeroTenantId, $superfundID)

searches for an Superfund by unique id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$superfundID = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Superfund id for single object

try {
    $result = $apiInstance->getSuperfund($xeroTenantId, $superfundID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getSuperfund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **superfundID** | [**string**](../Model/.md)| Superfund id for single object |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Superfunds**](../Model/Superfunds.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSuperfundProducts

> \Consilience\Xero\PayrollAuSdk\Model\SuperfundProducts getSuperfundProducts($xeroTenantId, $aBN, $uSI)

searches SuperfundProducts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$aBN = 40022701955; // string | The ABN of the Regulated SuperFund
$uSI = 40022701955001; // string | The USI of the Regulated SuperFund

try {
    $result = $apiInstance->getSuperfundProducts($xeroTenantId, $aBN, $uSI);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getSuperfundProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **aBN** | **string**| The ABN of the Regulated SuperFund | [optional]
 **uSI** | **string**| The USI of the Regulated SuperFund | [optional]

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\SuperfundProducts**](../Model/SuperfundProducts.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSuperfunds

> \Consilience\Xero\PayrollAuSdk\Model\Superfunds getSuperfunds($xeroTenantId, $ifModifiedSince, $where, $order, $page)

searches Superfunds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = Status=="ACTIVE"; // string | Filter by an any element
$order = EmailAddress%20DESC; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 Superfunds will be returned in a single API call

try {
    $result = $apiInstance->getSuperfunds($xeroTenantId, $ifModifiedSince, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getSuperfunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 Superfunds will be returned in a single API call | [optional]

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Superfunds**](../Model/Superfunds.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTimesheet

> \Consilience\Xero\PayrollAuSdk\Model\Timesheets getTimesheet($xeroTenantId, $timesheetID)

searches for an timesheet by unique id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$timesheetID = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Timesheet id for single object

try {
    $result = $apiInstance->getTimesheet($xeroTenantId, $timesheetID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **timesheetID** | [**string**](../Model/.md)| Timesheet id for single object |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Timesheets**](../Model/Timesheets.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTimesheets

> \Consilience\Xero\PayrollAuSdk\Model\Timesheets getTimesheets($xeroTenantId, $ifModifiedSince, $where, $order, $page)

searches timesheets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = Status=="ACTIVE"; // string | Filter by an any element
$order = EmailAddress%20DESC; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 timesheets will be returned in a single API call

try {
    $result = $apiInstance->getTimesheets($xeroTenantId, $ifModifiedSince, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->getTimesheets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 timesheets will be returned in a single API call | [optional]

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Timesheets**](../Model/Timesheets.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateEmployee

> \Consilience\Xero\PayrollAuSdk\Model\Employees updateEmployee($xeroTenantId, $employeeId, $employee)

Update an Employee

Update properties on a single employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$employeeId = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Employee id for single object
$employee = array(new \Consilience\Xero\PayrollAuSdk\Model\Employee()); // \Consilience\Xero\PayrollAuSdk\Model\Employee[] | 

try {
    $result = $apiInstance->updateEmployee($xeroTenantId, $employeeId, $employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->updateEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **employeeId** | [**string**](../Model/.md)| Employee id for single object |
 **employee** | [**\Consilience\Xero\PayrollAuSdk\Model\Employee[]**](../Model/Employee.md)|  | [optional]

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Employees**](../Model/Employees.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateLeaveApplication

> \Consilience\Xero\PayrollAuSdk\Model\LeaveApplications updateLeaveApplication($xeroTenantId, $leaveApplicationId, $leaveApplication)

Use this method to create a Leave Application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$leaveApplicationId = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Leave Application id for single object
$leaveApplication = array(new \Consilience\Xero\PayrollAuSdk\Model\LeaveApplication()); // \Consilience\Xero\PayrollAuSdk\Model\LeaveApplication[] | 

try {
    $result = $apiInstance->updateLeaveApplication($xeroTenantId, $leaveApplicationId, $leaveApplication);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->updateLeaveApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **leaveApplicationId** | [**string**](../Model/.md)| Leave Application id for single object |
 **leaveApplication** | [**\Consilience\Xero\PayrollAuSdk\Model\LeaveApplication[]**](../Model/LeaveApplication.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\LeaveApplications**](../Model/LeaveApplications.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePayrun

> \Consilience\Xero\PayrollAuSdk\Model\Payruns updatePayrun($xeroTenantId, $payrunID, $payruns)

Update a Payrun

Update properties on a single payrun

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$payrunID = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Payrun id for single object
$payruns = array(new \Consilience\Xero\PayrollAuSdk\Model\Payruns()); // \Consilience\Xero\PayrollAuSdk\Model\Payruns[] | 

try {
    $result = $apiInstance->updatePayrun($xeroTenantId, $payrunID, $payruns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->updatePayrun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **payrunID** | [**string**](../Model/.md)| Payrun id for single object |
 **payruns** | [**\Consilience\Xero\PayrollAuSdk\Model\Payruns[]**](../Model/Payruns.md)|  | [optional]

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Payruns**](../Model/Payruns.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePayslip

> \Consilience\Xero\PayrollAuSdk\Model\Payslip updatePayslip($xeroTenantId, $payslip)

Use this add, update or delete one or more payslip line items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$payslip = array(new \Consilience\Xero\PayrollAuSdk\Model\Payslip()); // \Consilience\Xero\PayrollAuSdk\Model\Payslip[] | 

try {
    $result = $apiInstance->updatePayslip($xeroTenantId, $payslip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->updatePayslip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **payslip** | [**\Consilience\Xero\PayrollAuSdk\Model\Payslip[]**](../Model/Payslip.md)|  |

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Payslip**](../Model/Payslip.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePayslipByID

> \Consilience\Xero\PayrollAuSdk\Model\Payslip updatePayslipByID($xeroTenantId, $payslipID, $payslip)

Update a Payslip

Update lines on a single payslip

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$payslipID = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Payslip id for single object
$payslip = array(new \Consilience\Xero\PayrollAuSdk\Model\Payslip()); // \Consilience\Xero\PayrollAuSdk\Model\Payslip[] | 

try {
    $result = $apiInstance->updatePayslipByID($xeroTenantId, $payslipID, $payslip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->updatePayslipByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **payslipID** | [**string**](../Model/.md)| Payslip id for single object |
 **payslip** | [**\Consilience\Xero\PayrollAuSdk\Model\Payslip[]**](../Model/Payslip.md)|  | [optional]

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Payslip**](../Model/Payslip.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateSuperfund

> \Consilience\Xero\PayrollAuSdk\Model\Superfunds updateSuperfund($xeroTenantId, $superfundID, $superfunds)

Update a Superfund

Update properties on a single Superfund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$superfundID = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Superfund id for single object
$superfunds = new \Consilience\Xero\PayrollAuSdk\Model\Superfunds(); // \Consilience\Xero\PayrollAuSdk\Model\Superfunds | 

try {
    $result = $apiInstance->updateSuperfund($xeroTenantId, $superfundID, $superfunds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->updateSuperfund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **superfundID** | [**string**](../Model/.md)| Superfund id for single object |
 **superfunds** | [**\Consilience\Xero\PayrollAuSdk\Model\Superfunds**](../Model/Superfunds.md)|  | [optional]

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Superfunds**](../Model/Superfunds.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateTimesheet

> \Consilience\Xero\PayrollAuSdk\Model\Timesheets updateTimesheet($xeroTenantId, $timesheetID, $timesheets)

Update a Timesheet

Update properties on a single timesheet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Consilience\Xero\PayrollAuSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Consilience\Xero\PayrollAuSdk\Api\PayrollAUApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xeroTenantId = 'xeroTenantId_example'; // string | Xero identifier for Tenant
$timesheetID = 4ff1e5cc-9835-40d5-bb18-09fdb118db9c; // string | Timesheet id for single object
$timesheets = new \Consilience\Xero\PayrollAuSdk\Model\Timesheets(); // \Consilience\Xero\PayrollAuSdk\Model\Timesheets | 

try {
    $result = $apiInstance->updateTimesheet($xeroTenantId, $timesheetID, $timesheets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAUApi->updateTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xeroTenantId** | **string**| Xero identifier for Tenant |
 **timesheetID** | [**string**](../Model/.md)| Timesheet id for single object |
 **timesheets** | [**\Consilience\Xero\PayrollAuSdk\Model\Timesheets**](../Model/Timesheets.md)|  | [optional]

### Return type

[**\Consilience\Xero\PayrollAuSdk\Model\Timesheets**](../Model/Timesheets.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

