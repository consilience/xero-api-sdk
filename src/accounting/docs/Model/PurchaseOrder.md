# # PurchaseOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact** | [**\Consilience\Xero\AccountingSdk\Model\Contact**](Contact.md) |  | 
**lineItems** | [**\Consilience\Xero\AccountingSdk\Model\LineItem[]**](LineItem.md) | See LineItems | 
**date** | [**\DateTime**](\DateTime.md) | Date purchase order was issued – YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation | [optional] 
**deliveryDate** | [**\DateTime**](\DateTime.md) | Date the goods are to be delivered – YYYY-MM-DD | [optional] 
**lineAmountTypes** | [**\Consilience\Xero\AccountingSdk\Model\LineAmountTypes**](LineAmountTypes.md) |  | [optional] 
**purchaseOrderNumber** | **string** | Unique alpha numeric code identifying purchase order (when missing will auto-generate from your Organisation Invoice Settings) | [optional] 
**reference** | **string** | Additional reference number | [optional] 
**brandingThemeID** | **string** | See BrandingThemes | [optional] 
**currencyCode** | [**\Consilience\Xero\AccountingSdk\Model\CurrencyCode**](CurrencyCode.md) |  | [optional] 
**status** | **string** | See Purchase Order Status Codes | [optional] 
**sentToContact** | **bool** | Boolean to set whether the purchase order should be marked as “sent”. This can be set only on purchase orders that have been approved or billed | [optional] 
**deliveryAddress** | **string** | The address the goods are to be delivered to | [optional] 
**attentionTo** | **string** | The person that the delivery is going to | [optional] 
**telephone** | **string** | The phone number for the person accepting the delivery | [optional] 
**deliveryInstructions** | **string** | A free text feild for instructions (500 characters max) | [optional] 
**expectedArrivalDate** | [**\DateTime**](\DateTime.md) | The date the goods are expected to arrive. | [optional] 
**purchaseOrderID** | **string** | Xero generated unique identifier for purchase order | [optional] 
**currencyRate** | **double** | The currency rate for a multicurrency purchase order. As no rate can  be specified, the XE.com day rate is used. | [optional] 
**subTotal** | **double** | Total of purchase order excluding taxes | [optional] 
**totalTax** | **double** | Total tax on purchase order | [optional] 
**total** | **double** | Total of Purchase Order tax inclusive (i.e. SubTotal + TotalTax) | [optional] 
**totalDiscount** | **double** | Total of discounts applied on the purchase order line items | [optional] 
**hasAttachments** | **bool** | boolean to indicate if a purchase order has an attachment | [optional] 
**updatedDateUTC** | [**\DateTime**](\DateTime.md) | Last modified date UTC format | [optional] 
**statusAttributeString** | **string** | A string to indicate if a invoice status | [optional] 
**validationErrors** | [**\Consilience\Xero\AccountingSdk\Model\ValidationError[]**](ValidationError.md) | Displays array of validation error messages from the API | [optional] 
**warnings** | [**\Consilience\Xero\AccountingSdk\Model\ValidationError[]**](ValidationError.md) | Displays array of warning messages from the API | [optional] 
**attachments** | [**\Consilience\Xero\AccountingSdk\Model\Attachment[]**](Attachment.md) | Displays array of attachments from the API | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


