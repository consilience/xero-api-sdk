# # Prepayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | See Prepayment Types | [optional] 
**contact** | [**\Consilience\Xero\AccountingSdk\Model\Contact**](Contact.md) |  | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date the prepayment is created YYYY-MM-DD | [optional] 
**status** | **string** | See Prepayment Status Codes | [optional] 
**lineAmountTypes** | [**\Consilience\Xero\AccountingSdk\Model\LineAmountTypes**](LineAmountTypes.md) |  | [optional] 
**lineItems** | [**\Consilience\Xero\AccountingSdk\Model\LineItem[]**](LineItem.md) | See Prepayment Line Items | [optional] 
**subTotal** | **double** | The subtotal of the prepayment excluding taxes | [optional] 
**totalTax** | **double** | The total tax on the prepayment | [optional] 
**total** | **double** | The total of the prepayment(subtotal + total tax) | [optional] 
**updatedDateUTC** | [**\DateTime**](\DateTime.md) | UTC timestamp of last update to the prepayment | [optional] 
**currencyCode** | [**\Consilience\Xero\AccountingSdk\Model\CurrencyCode**](CurrencyCode.md) |  | [optional] 
**prepaymentID** | **string** | Xero generated unique identifier | [optional] 
**currencyRate** | **double** | The currency rate for a multicurrency prepayment. If no rate is specified, the XE.com day rate is used | [optional] 
**remainingCredit** | **double** | The remaining credit balance on the prepayment | [optional] 
**allocations** | [**\Consilience\Xero\AccountingSdk\Model\Allocation[]**](Allocation.md) | See Allocations | [optional] 
**hasAttachments** | **bool** | boolean to indicate if a prepayment has an attachment | [optional] 
**attachments** | [**\Consilience\Xero\AccountingSdk\Model\Attachment[]**](Attachment.md) | See Attachments | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


