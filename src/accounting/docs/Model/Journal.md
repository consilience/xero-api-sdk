# # Journal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**journalID** | **string** | Xero identifier | [optional] 
**journalDate** | [**\DateTime**](\DateTime.md) | Date the journal was posted | [optional] 
**journalNumber** | **string** | Xero generated journal number | [optional] 
**createdDateUTC** | [**\DateTime**](\DateTime.md) | Created date UTC format | [optional] 
**reference** | **string** | reference field for additional indetifying information | [optional] 
**sourceID** | **string** | The identifier for the source transaction (e.g. InvoiceID) | [optional] 
**sourceType** | **string** | The journal source type. The type of transaction that created the journal | [optional] 
**journalLines** | [**\Consilience\Xero\AccountingSdk\Model\JournalLine[]**](JournalLine.md) | See JournalLines | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


