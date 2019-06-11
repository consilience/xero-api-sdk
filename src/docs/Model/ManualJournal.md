# # ManualJournal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**narration** | **string** | Description of journal being posted | 
**journalLines** | [**\Consilience\XeroAccounting\Sdk\Model\ManualJournalLine[]**](ManualJournalLine.md) | See JournalLines | 
**date** | [**\DateTime**](\DateTime.md) | Date journal was posted – YYYY-MM-DD | [optional] 
**lineAmountTypes** | [**\Consilience\XeroAccounting\Sdk\Model\LineAmountTypes**](LineAmountTypes.md) |  | [optional] 
**status** | **string** | See Manual Journal Status Codes | [optional] 
**url** | **string** | Url link to a source document – shown as “Go to [appName]” in the Xero app | [optional] 
**showOnCashBasisReports** | **bool** | Boolean – default is true if not specified | [optional] 
**hasAttachments** | **bool** | Boolean to indicate if a manual journal has an attachment | [optional] 
**updatedDateUTC** | [**\DateTime**](\DateTime.md) | Last modified date UTC format | [optional] 
**manualJournalID** | **string** | The Xero identifier for a Manual Journal | [optional] 
**warnings** | [**\Consilience\XeroAccounting\Sdk\Model\ValidationError[]**](ValidationError.md) | Displays array of warning messages from the API | [optional] 
**validationErrors** | [**\Consilience\XeroAccounting\Sdk\Model\ValidationError[]**](ValidationError.md) | Displays array of validation error messages from the API | [optional] 
**attachments** | [**\Consilience\XeroAccounting\Sdk\Model\Attachment[]**](Attachment.md) | Displays array of attachments from the API | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


