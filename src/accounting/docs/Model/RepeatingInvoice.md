# # RepeatingInvoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | See Invoice Types | [optional] 
**contact** | [**\Consilience\Xero\AccountingSdk\Model\Contact**](Contact.md) |  | [optional] 
**schedule** | [**\Consilience\Xero\AccountingSdk\Model\Schedule**](Schedule.md) |  | [optional] 
**lineItems** | [**\Consilience\Xero\AccountingSdk\Model\LineItem[]**](LineItem.md) | See LineItems | [optional] 
**lineAmountTypes** | [**\Consilience\Xero\AccountingSdk\Model\LineAmountTypes**](LineAmountTypes.md) |  | [optional] 
**reference** | **string** | ACCREC only – additional reference number | [optional] 
**brandingThemeID** | **string** | See BrandingThemes | [optional] 
**currencyCode** | [**\Consilience\Xero\AccountingSdk\Model\CurrencyCode**](CurrencyCode.md) |  | [optional] 
**status** | **string** | One of the following - DRAFT or AUTHORISED – See Invoice Status Codes | [optional] 
**subTotal** | **double** | Total of invoice excluding taxes | [optional] 
**totalTax** | **double** | Total tax on invoice | [optional] 
**total** | **double** | Total of Invoice tax inclusive (i.e. SubTotal + TotalTax) | [optional] 
**repeatingInvoiceID** | **string** | Xero generated unique identifier for repeating invoice template | [optional] 
**iD** | **string** | Xero generated unique identifier for repeating invoice template | [optional] 
**hasAttachments** | **bool** | boolean to indicate if an invoice has an attachment | [optional] 
**attachments** | [**\Consilience\Xero\AccountingSdk\Model\Attachment[]**](Attachment.md) | Displays array of attachments from the API | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


