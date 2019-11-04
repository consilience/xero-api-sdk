# # Quote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**quoteID** | **string** | Xero generated unique identifier for quote | [optional] 
**quoteNumber** | **string** | Unique alpha numeric code identifying quote (when missing will auto-generate from your Organisation Invoice Settings) | [optional] 
**reference** | **string** | Additional reference number | [optional] 
**terms** | **string** | Terms of the quote | [optional] 
**contact** | [**\Consilience\Xero\AccountingSdk\Model\Contact**](Contact.md) |  | 
**lineItems** | [**\Consilience\Xero\AccountingSdk\Model\LineItem[]**](LineItem.md) | See LineItems | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Date quote was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation | [optional] 
**dateString** | **string** | Date the quote was issued (YYYY-MM-DD) | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Date the quote expires – YYYY-MM-DD. | [optional] 
**expiryDateString** | **string** | Date the quote expires – YYYY-MM-DD. | [optional] 
**status** | [**\Consilience\Xero\AccountingSdk\Model\QuoteStatusCodes**](QuoteStatusCodes.md) |  | [optional] 
**currencyCode** | [**\Consilience\Xero\AccountingSdk\Model\CurrencyCode**](CurrencyCode.md) |  | [optional] 
**currencyRate** | **double** | The currency rate for a multicurrency quote. If no rate is specified, the XE.com day rate is used. | [optional] 
**subTotal** | **double** | Total of quote excluding taxes. | [optional] 
**totalTax** | **double** | Total tax on quote | [optional] 
**total** | **double** | Total of Quote tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts | [optional] 
**totalDiscount** | **double** | Total of discounts applied on the quote line items | [optional] 
**title** | **string** | Title text for the quote | [optional] 
**summary** | **string** | Summary text for the quote | [optional] 
**brandingThemeID** | **string** | See BrandingThemes | [optional] 
**updatedDateUTC** | [**\DateTime**](\DateTime.md) | Last modified date UTC format | [optional] 
**lineAmountTypes** | [**\Consilience\Xero\AccountingSdk\Model\LineAmountTypes**](LineAmountTypes.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


