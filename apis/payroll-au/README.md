# OpenAPIClient-php

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.0
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

## Documentation for API Endpoints

All URIs are relative to *https://api.xero.com/payroll.xro*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**employeesEmployeeIDGet**](docs/Api/DefaultApi.md#employeesemployeeidget) | **GET** /Employees/{EmployeeID} | Allows you to retrieve, add and update payroll employees in a Xero organisation
*DefaultApi* | [**employeesEmployeeIDPost**](docs/Api/DefaultApi.md#employeesemployeeidpost) | **POST** /Employees/{EmployeeID} | 
*DefaultApi* | [**employeesGet**](docs/Api/DefaultApi.md#employeesget) | **GET** /Employees | Allows you to retrieve, add and update payroll employees in a Xero organisation
*DefaultApi* | [**employeesPost**](docs/Api/DefaultApi.md#employeespost) | **POST** /Employees | 
*DefaultApi* | [**leaveApplicationsGet**](docs/Api/DefaultApi.md#leaveapplicationsget) | **GET** /LeaveApplications | Allows you to retrieve, add and update Payroll leave applications in a Xero organisation
*DefaultApi* | [**leaveApplicationsPost**](docs/Api/DefaultApi.md#leaveapplicationspost) | **POST** /LeaveApplications | 
*DefaultApi* | [**payItemsGet**](docs/Api/DefaultApi.md#payitemsget) | **GET** /PayItems | Allows you to retrieve, add, update and delete Payroll Items in a Xero organisation
*DefaultApi* | [**payItemsPost**](docs/Api/DefaultApi.md#payitemspost) | **POST** /PayItems | 
*DefaultApi* | [**payRunsGet**](docs/Api/DefaultApi.md#payrunsget) | **GET** /PayRuns | Allows you to retrieve, add and update pay runs in a Xero organisation
*DefaultApi* | [**payRunsPayRunIDGet**](docs/Api/DefaultApi.md#payrunspayrunidget) | **GET** /PayRuns/{PayRunID} | Allows you to retrieve, add and update pay runs in a Xero organisation
*DefaultApi* | [**payRunsPayRunIDPost**](docs/Api/DefaultApi.md#payrunspayrunidpost) | **POST** /PayRuns/{PayRunID} | 
*DefaultApi* | [**payRunsPost**](docs/Api/DefaultApi.md#payrunspost) | **POST** /PayRuns | 
*DefaultApi* | [**payrollCalendarsGet**](docs/Api/DefaultApi.md#payrollcalendarsget) | **GET** /PayrollCalendars | Allows you to retrieve and add Payroll Calendars in a Xero organisation
*DefaultApi* | [**payrollCalendarsPost**](docs/Api/DefaultApi.md#payrollcalendarspost) | **POST** /PayrollCalendars | 
*DefaultApi* | [**payslipGet**](docs/Api/DefaultApi.md#payslipget) | **GET** /Payslip | Allows you to retrieve and update payslips in a Xero organisation
*DefaultApi* | [**payslipPayslipIDGet**](docs/Api/DefaultApi.md#payslippayslipidget) | **GET** /Payslip/{PayslipID} | Allows you to retrieve and update payslips in a Xero organisation
*DefaultApi* | [**payslipPayslipIDPost**](docs/Api/DefaultApi.md#payslippayslipidpost) | **POST** /Payslip/{PayslipID} | 
*DefaultApi* | [**payslipPost**](docs/Api/DefaultApi.md#payslippost) | **POST** /Payslip | 
*DefaultApi* | [**settingsGet**](docs/Api/DefaultApi.md#settingsget) | **GET** /Settings | Allows you to retrieve the Payroll settings of a Xero organisation
*DefaultApi* | [**superFundProductsGet**](docs/Api/DefaultApi.md#superfundproductsget) | **GET** /SuperFundProducts | GET a SuperFundProduct
*DefaultApi* | [**superFundsGet**](docs/Api/DefaultApi.md#superfundsget) | **GET** /SuperFunds | Allows you to retrieve, add and update Payroll Super Funds in a Xero organisation
*DefaultApi* | [**superFundsPost**](docs/Api/DefaultApi.md#superfundspost) | **POST** /SuperFunds | 
*DefaultApi* | [**superFundsSuperFundIDGet**](docs/Api/DefaultApi.md#superfundssuperfundidget) | **GET** /SuperFunds/{SuperFundID} | Allows you to retrieve, add and update Payroll Super Funds in a Xero organisation
*DefaultApi* | [**superFundsSuperFundIDPost**](docs/Api/DefaultApi.md#superfundssuperfundidpost) | **POST** /SuperFunds/{SuperFundID} | 
*DefaultApi* | [**timesheetsGet**](docs/Api/DefaultApi.md#timesheetsget) | **GET** /Timesheets | Allows you to retrieve, add and update Payroll Timesheet in a Xero organisation
*DefaultApi* | [**timesheetsPost**](docs/Api/DefaultApi.md#timesheetspost) | **POST** /Timesheets | 
*DefaultApi* | [**timesheetsTimesheetIDGet**](docs/Api/DefaultApi.md#timesheetstimesheetidget) | **GET** /Timesheets/{TimesheetID} | Allows you to retrieve, add and update Payroll Timesheet in a Xero organisation
*DefaultApi* | [**timesheetsTimesheetIDPost**](docs/Api/DefaultApi.md#timesheetstimesheetidpost) | **POST** /Timesheets/{TimesheetID} | 


## Documentation For Models

 - [Account](docs/Model/Account.md)
 - [BankAccount](docs/Model/BankAccount.md)
 - [DeductionLine](docs/Model/DeductionLine.md)
 - [DeductionType](docs/Model/DeductionType.md)
 - [EarningsLine](docs/Model/EarningsLine.md)
 - [EarningsRate](docs/Model/EarningsRate.md)
 - [Employee](docs/Model/Employee.md)
 - [HomeAddress](docs/Model/HomeAddress.md)
 - [LeaveAccrualLine](docs/Model/LeaveAccrualLine.md)
 - [LeaveApplication](docs/Model/LeaveApplication.md)
 - [LeaveBalance](docs/Model/LeaveBalance.md)
 - [LeaveEarningsLine](docs/Model/LeaveEarningsLine.md)
 - [LeavePeriod](docs/Model/LeavePeriod.md)
 - [LeaveType](docs/Model/LeaveType.md)
 - [OpeningBalance](docs/Model/OpeningBalance.md)
 - [PayItem](docs/Model/PayItem.md)
 - [PayRun](docs/Model/PayRun.md)
 - [PayTemplate](docs/Model/PayTemplate.md)
 - [PayrollCalendar](docs/Model/PayrollCalendar.md)
 - [Payslip](docs/Model/Payslip.md)
 - [ReimbursementLine](docs/Model/ReimbursementLine.md)
 - [ReimbursementType](docs/Model/ReimbursementType.md)
 - [Setting](docs/Model/Setting.md)
 - [SuperFund](docs/Model/SuperFund.md)
 - [SuperFundProduct](docs/Model/SuperFundProduct.md)
 - [SuperMembership](docs/Model/SuperMembership.md)
 - [SuperannuationLine](docs/Model/SuperannuationLine.md)
 - [TaxDeclaration](docs/Model/TaxDeclaration.md)
 - [TaxLine](docs/Model/TaxLine.md)
 - [Timesheet](docs/Model/Timesheet.md)
 - [TimesheetEarningsLine](docs/Model/TimesheetEarningsLine.md)
 - [TimesheetLine](docs/Model/TimesheetLine.md)
 - [TrackingCategory](docs/Model/TrackingCategory.md)


## Documentation For Authorization

All endpoints do not require authorization.

## Author



