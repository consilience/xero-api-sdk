# # PayRun

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payrollCalendarID** | **string** | See PayrollCalendars | 
**payRunID** | **string** | The Xero identifier for a Pay run e.g. 297c2dc5-cc47-4afd-0000-74990b8761e9 | [optional] 
**payRunPeriodStartDate** | [**\DateTime**](\DateTime.md) | Period Start Date for the PayRun (YYYY-MM-DD) | [optional] 
**payRunPeriodEndDate** | [**\DateTime**](\DateTime.md) | Period End Date for the PayRun (YYYY-MM-DD) | [optional] 
**payRunStatus** | **string** | See PayRun Status types | [optional] 
**paymentDate** | [**\DateTime**](\DateTime.md) | Payment Date for the PayRun (YYYY-MM-DD) | [optional] 
**payslipMessage** | **string** | Payslip message for the PayRun | [optional] 
**payslips** | [**\Consilience\Xero\PayrollAuSdk\Model\Payslip[]**](Payslip.md) | See Payslip | [optional] 
**wages** | **string** | Total Wages for the PayRun | [optional] 
**deductions** | **string** | Total Deduction for the PayRun | [optional] 
**tax** | **float** | Total Tax for the PayRun | [optional] 
**super** | **string** | Total Super for the PayRun | [optional] 
**reimbursement** | **string** | Total Reimbursement for the PayRun | [optional] 
**netPay** | **string** | Total NetPay for the PayRun | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


