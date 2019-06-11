# # CreditNote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | See Credit Note Types | [optional] 
**contact** | [**\Consilience\XeroAccounting\Sdk\Model\Contact**](Contact.md) |  | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date the credit note is issued YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation | [optional] 
**status** | **string** | See Credit Note Status Codes | [optional] 
**lineAmountTypes** | [**\Consilience\XeroAccounting\Sdk\Model\LineAmountTypes**](LineAmountTypes.md) |  | [optional] 
**lineItems** | [**\Consilience\XeroAccounting\Sdk\Model\LineItem[]**](LineItem.md) | See Invoice Line Items | [optional] 
**subTotal** | **double** | The subtotal of the credit note excluding taxes | [optional] 
**totalTax** | **double** | The total tax on the credit note | [optional] 
**total** | **double** | The total of the Credit Note(subtotal + total tax) | [optional] 
**updatedDateUTC** | [**\DateTime**](\DateTime.md) | UTC timestamp of last update to the credit note | [optional] 
**currencyCode** | [**\Consilience\XeroAccounting\Sdk\Model\CurrencyCode**](CurrencyCode.md) |  | [optional] 
**fullyPaidOnDate** | [**\DateTime**](\DateTime.md) | Date when credit note was fully paid(UTC format) | [optional] 
**creditNoteID** | **string** | Xero generated unique identifier | [optional] 
**creditNoteNumber** | **string** | ACCRECCREDIT – Unique alpha numeric code identifying credit note (when missing will auto-generate from your Organisation Invoice Settings) | [optional] 
**reference** | **string** | ACCRECCREDIT only – additional reference number | [optional] 
**sentToContact** | **bool** | boolean to indicate if a credit note has been sent to a contact via  the Xero app (currently read only) | [optional] 
**currencyRate** | **double** | The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used | [optional] 
**remainingCredit** | **double** | The remaining credit balance on the Credit Note | [optional] 
**allocations** | [**\Consilience\XeroAccounting\Sdk\Model\Allocation[]**](Allocation.md) | See Allocations | [optional] 
**payments** | [**\Consilience\XeroAccounting\Sdk\Model\Payment[]**](Payment.md) | See Payments | [optional] 
**brandingThemeID** | **string** | See BrandingThemes | [optional] 
**hasAttachments** | **bool** | boolean to indicate if a credit note has an attachment | [optional] 
**validationErrors** | [**\Consilience\XeroAccounting\Sdk\Model\ValidationError[]**](ValidationError.md) | Displays array of validation error messages from the API | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


