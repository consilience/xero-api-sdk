# # Overpayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | See Overpayment Types | [optional] 
**contact** | [**\Consilience\XeroAccounting\Sdk\Model\Contact**](Contact.md) |  | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date the overpayment is created YYYY-MM-DD | [optional] 
**status** | **string** | See Overpayment Status Codes | [optional] 
**lineAmountTypes** | [**\Consilience\XeroAccounting\Sdk\Model\LineAmountTypes**](LineAmountTypes.md) |  | [optional] 
**lineItems** | [**\Consilience\XeroAccounting\Sdk\Model\LineItem[]**](LineItem.md) | See Overpayment Line Items | [optional] 
**subTotal** | **double** | The subtotal of the overpayment excluding taxes | [optional] 
**totalTax** | **double** | The total tax on the overpayment | [optional] 
**total** | **double** | The total of the overpayment (subtotal + total tax) | [optional] 
**updatedDateUTC** | [**\DateTime**](\DateTime.md) | UTC timestamp of last update to the overpayment | [optional] 
**currencyCode** | [**\Consilience\XeroAccounting\Sdk\Model\CurrencyCode**](CurrencyCode.md) |  | [optional] 
**overpaymentID** | **string** | Xero generated unique identifier | [optional] 
**currencyRate** | **double** | The currency rate for a multicurrency overpayment. If no rate is specified, the XE.com day rate is used | [optional] 
**remainingCredit** | **double** | The remaining credit balance on the overpayment | [optional] 
**allocations** | [**\Consilience\XeroAccounting\Sdk\Model\Allocation[]**](Allocation.md) | See Allocations | [optional] 
**payments** | [**\Consilience\XeroAccounting\Sdk\Model\Payment[]**](Payment.md) | See Payments | [optional] 
**hasAttachments** | **bool** | boolean to indicate if a overpayment has an attachment | [optional] 
**attachments** | [**\Consilience\XeroAccounting\Sdk\Model\Attachment[]**](Attachment.md) | See Attachments | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


