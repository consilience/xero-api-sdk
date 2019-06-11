# # Invoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | See Invoice Types | 
**contact** | [**\Consilience\Xero\AccountingSdk\Model\Contact**](Contact.md) |  | 
**lineItems** | [**\Consilience\Xero\AccountingSdk\Model\LineItem[]**](LineItem.md) | See LineItems | 
**date** | [**\DateTime**](\DateTime.md) | Date invoice was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation | [optional] 
**dueDate** | [**\DateTime**](\DateTime.md) | Date invoice is due – YYYY-MM-DD | [optional] 
**lineAmountTypes** | [**\Consilience\Xero\AccountingSdk\Model\LineAmountTypes**](LineAmountTypes.md) |  | [optional] 
**invoiceNumber** | **string** | ACCREC – Unique alpha numeric code identifying invoice (when missing will auto-generate from your Organisation Invoice Settings) (max length &#x3D; 255) | [optional] 
**reference** | **string** | ACCREC only – additional reference number (max length &#x3D; 255) | [optional] 
**brandingThemeID** | **string** | See BrandingThemes | [optional] 
**url** | **string** | URL link to a source document – shown as “Go to [appName]” in the Xero app | [optional] 
**currencyCode** | [**\Consilience\Xero\AccountingSdk\Model\CurrencyCode**](CurrencyCode.md) |  | [optional] 
**currencyRate** | **double** | The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used. (max length &#x3D; [18].[6]) | [optional] 
**status** | **string** | See Invoice Status Codes | [optional] 
**sentToContact** | **bool** | Boolean to set whether the invoice in the Xero app should be marked as “sent”. This can be set only on invoices that have been approved | [optional] 
**expectedPaymentDate** | [**\DateTime**](\DateTime.md) | Shown on sales invoices (Accounts Receivable) when this has been set | [optional] 
**plannedPaymentDate** | [**\DateTime**](\DateTime.md) | Shown on bills (Accounts Payable) when this has been set | [optional] 
**subTotal** | **double** | Total of invoice excluding taxes | [optional] 
**totalTax** | **double** | Total tax on invoice | [optional] 
**total** | **double** | Total of Invoice tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts | [optional] 
**totalDiscount** | **double** | Total of discounts applied on the invoice line items | [optional] 
**invoiceID** | **string** | Xero generated unique identifier for invoice | [optional] 
**hasAttachments** | **bool** | boolean to indicate if an invoice has an attachment | [optional] 
**isDiscounted** | **bool** | boolean to indicate if an invoice has a discount | [optional] 
**payments** | [**\Consilience\Xero\AccountingSdk\Model\Payment[]**](Payment.md) | See Payments | [optional] 
**prepayments** | [**\Consilience\Xero\AccountingSdk\Model\Prepayment[]**](Prepayment.md) | See Prepayments | [optional] 
**overpayments** | [**\Consilience\Xero\AccountingSdk\Model\Overpayment[]**](Overpayment.md) | See Overpayments | [optional] 
**amountDue** | **double** | Amount remaining to be paid on invoice | [optional] 
**amountPaid** | **double** | Sum of payments received for invoice | [optional] 
**fullyPaidOnDate** | [**\DateTime**](\DateTime.md) | The date the invoice was fully paid. Only returned on fully paid invoices | [optional] 
**amountCredited** | **double** | Sum of all credit notes, over-payments and pre-payments applied to invoice | [optional] 
**updatedDateUTC** | [**\DateTime**](\DateTime.md) | Last modified date UTC format | [optional] 
**creditNotes** | [**\Consilience\Xero\AccountingSdk\Model\CreditNote[]**](CreditNote.md) | Details of credit notes that have been applied to an invoice | [optional] 
**attachments** | [**\Consilience\Xero\AccountingSdk\Model\Attachment[]**](Attachment.md) | Displays array of attachments from the API | [optional] 
**hasErrors** | **bool** | A boolean to indicate if a invoice has an validation errors | [optional] 
**statusAttributeString** | **string** | A string to indicate if a invoice status | [optional] 
**validationErrors** | [**\Consilience\Xero\AccountingSdk\Model\ValidationError[]**](ValidationError.md) | Displays array of validation error messages from the API | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


