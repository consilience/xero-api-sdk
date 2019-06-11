# # Schedule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**period** | **int** | Integer used with the unit e.g. 1 (every 1 week), 2 (every 2 months) | [optional] 
**unit** | **string** | One of the following - WEEKLY or MONTHLY | [optional] 
**dueDate** | **int** | Integer used with due date type e.g 20 (of following month), 31 (of current month) | [optional] 
**dueDateType** | **string** | the payment terms | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Date the first invoice of the current version of the repeating schedule was generated (changes when repeating invoice is edited) | [optional] 
**nextScheduledDate** | [**\DateTime**](\DateTime.md) | The calendar date of the next invoice in the schedule to be generated | [optional] 
**endDate** | [**\DateTime**](\DateTime.md) | Invoice end date – only returned if the template has an end date set | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


