# # ManualJournalLine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lineAmount** | **double** | total for line. Debits are positive, credits are negative value | [optional] 
**accountCode** | **string** | See Accounts | [optional] 
**description** | **string** | Description for journal line | [optional] 
**taxType** | **string** | The tax type from TaxRates | [optional] 
**tracking** | [**\Consilience\XeroAccounting\Sdk\Model\TrackingCategory[]**](TrackingCategory.md) | Optional Tracking Category – see Tracking. Any JournalLine can have a maximum of 2 &lt;TrackingCategory&gt; elements. | [optional] 
**taxAmount** | **double** | The calculated tax amount based on the TaxType and LineAmount | [optional] 
**isBlank** | **bool** | is the line blank | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


