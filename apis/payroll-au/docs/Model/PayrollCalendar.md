# # PayrollCalendar

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the Payroll Calendar (max length &#x3D; 100) | 
**calendarType** | **string** | See Payroll Calendar types | 
**startDate** | [**\DateTime**](\DateTime.md) | The start date of the upcoming pay period. The end date will be calculated based upon this date, and the calendar type selected (YYYY-MM-DD), more details. | 
**paymentDate** | [**\DateTime**](\DateTime.md) | The date on which employees will be paid for the upcoming pay period (YYYY-MM-DD), more details. | 
**employeeID** | **string** | The Xero identifier for a Payroll Calendar e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


