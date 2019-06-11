# # JournalLine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**journalLineID** | **string** | Xero identifier for Journal | [optional] 
**accountID** | **string** | See Accounts | [optional] 
**accountCode** | **string** | See Accounts | [optional] 
**accountType** | [**\Consilience\Xero\AccountingSdk\Model\AccountType**](AccountType.md) |  | [optional] 
**accountName** | **string** | See AccountCodes | [optional] 
**description** | **string** | The description from the source transaction line item. Only returned if populated. | [optional] 
**netAmount** | **double** | Net amount of journal line. This will be a positive value for a debit and negative for a credit | [optional] 
**grossAmount** | **double** | Gross amount of journal line (NetAmount + TaxAmount). | [optional] 
**taxAmount** | **double** | Total tax on a journal line | [optional] 
**taxType** | **string** | The tax type from TaxRates | [optional] 
**taxName** | **string** | see TaxRates | [optional] 
**trackingCategories** | [**\Consilience\Xero\AccountingSdk\Model\TrackingCategory[]**](TrackingCategory.md) | Optional Tracking Category – see Tracking. Any JournalLine can have a maximum of 2 &lt;TrackingCategory&gt; elements. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


