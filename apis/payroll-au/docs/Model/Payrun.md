# # Payrun

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payrollCalendarID** | **object** | Xero identifier for pay run | 
**payRunID** | **object** | Xero identifier for pay run | [optional] 
**payRunPeriodStartDate** | [**\DateTime**](\DateTime.md) | Period Start Date for the PayRun (YYYY-MM-DD) | [optional] 
**payRunPeriodEndDate** | [**\DateTime**](\DateTime.md) | Period End Date for the PayRun (YYYY-MM-DD) | [optional] 
**payRunStatus** | [**\Consilience\Xero\PayrollAuSdk\Model\PayRunStatus**](PayRunStatus.md) |  | [optional] 
**paymentDate** | [**\DateTime**](\DateTime.md) | Payment Date for the PayRun (YYYY-MM-DD) | [optional] 
**payslipMessage** | **string** | Payslip message for the PayRun | [optional] 
**updatedDateUTC** | [**\DateTime**](\DateTime.md) | Last modified timestamp | [optional] 
**payslips** | [**\Consilience\Xero\PayrollAuSdk\Model\PayslipSummary[]**](PayslipSummary.md) | The payslips in the payrun | [optional] 
**wages** | **float** | The total Wages for the Payrun | [optional] 
**deductions** | **float** | The total Deductions for the Payrun | [optional] 
**tax** | **float** | The total Tax for the Payrun | [optional] 
**super** | **float** | The total Super for the Payrun | [optional] 
**reimbursements** | **float** | The total Reimbursements for the Payrun | [optional] 
**netPay** | **float** | The total NetPay for the Payrun | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


