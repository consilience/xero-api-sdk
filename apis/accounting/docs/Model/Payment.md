# # Payment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice** | [**\Consilience\Xero\AccountingSdk\Model\Invoice**](Invoice.md) |  | [optional] 
**creditNote** | [**\Consilience\Xero\AccountingSdk\Model\CreditNote**](CreditNote.md) |  | [optional] 
**prepayment** | [**\Consilience\Xero\AccountingSdk\Model\Prepayment**](Prepayment.md) |  | [optional] 
**overpayment** | [**\Consilience\Xero\AccountingSdk\Model\Overpayment**](Overpayment.md) |  | [optional] 
**batchPaymentID** | **string** | The optional Xero generated unique identifier for the batch this bank transaction may be in | [optional] 
**invoiceNumber** | **string** | Number of invoice or credit note you are applying payment to e.g.INV-4003 | [optional] 
**creditNoteNumber** | **string** | Number of invoice or credit note you are applying payment to e.g. INV-4003 | [optional] 
**account** | [**\Consilience\Xero\AccountingSdk\Model\Account**](Account.md) |  | [optional] 
**code** | **string** | Code of account you are using to make the payment e.g. 001 (note- not all accounts have a code value) | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06 | [optional] 
**currencyRate** | **double** | Exchange rate when payment is received. Only used for non base currency invoices and credit notes e.g. 0.7500 | [optional] 
**amount** | **double** | The amount of the payment. Must be less than or equal to the outstanding amount owing on the invoice e.g. 200.00 | [optional] 
**reference** | **string** | An optional description for the payment e.g. Direct Debit | [optional] 
**isReconciled** | **bool** | An optional parameter for the payment. A boolean indicating whether you would like the payment to be created as reconciled when using PUT, or whether a payment has been reconciled when using GET | [optional] 
**status** | **string** | The status of the payment. | [optional] 
**paymentType** | **string** | See Payment Types. | [optional] 
**updatedDateUTC** | [**\DateTime**](\DateTime.md) | UTC timestamp of last update to the payment | [optional] 
**paymentID** | **string** | The Xero identifier for an Payment e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9 | [optional] 
**bankAccountNumber** | **string** | The suppliers bank account number the payment is being made to | [optional] 
**particulars** | **string** | The suppliers bank account number the payment is being made to | [optional] 
**details** | **string** | The information to appear on the supplier&#39;s bank account | [optional] 
**hasAccount** | **bool** | A boolean to indicate if a contact has an validation errors | [optional] 
**hasValidationErrors** | **bool** | A boolean to indicate if a contact has an validation errors | [optional] 
**validationErrors** | [**\Consilience\Xero\AccountingSdk\Model\ValidationError[]**](ValidationError.md) | Displays array of validation error messages from the API | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


