# # BankTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | See Bank Transaction Types | 
**contact** | [**\Consilience\Xero\AccountingSdk\Model\Contact**](Contact.md) |  | 
**lineitems** | [**\Consilience\Xero\AccountingSdk\Model\LineItem[]**](LineItem.md) | See LineItems | 
**bankAccount** | [**\Consilience\Xero\AccountingSdk\Model\Account**](Account.md) |  | 
**isReconciled** | **bool** | Boolean to show if transaction is reconciled | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Date of transaction – YYYY-MM-DD | [optional] 
**reference** | **string** | Reference for the transaction. Only supported for SPEND and RECEIVE transactions. | [optional] 
**currencyCode** | [**\Consilience\Xero\AccountingSdk\Model\CurrencyCode**](CurrencyCode.md) |  | [optional] 
**currencyRate** | **double** | Exchange rate to base currency when money is spent or received. e.g.0.7500 Only used for bank transactions in non base currency. If this isn’t specified for non base currency accounts then either the user-defined rate (preference) or the XE.com day rate will be used. Setting currency is only supported on overpayments. | [optional] 
**url** | **string** | URL link to a source document – shown as “Go to App Name” | [optional] 
**status** | **string** | See Bank Transaction Status Codes | [optional] 
**lineAmountTypes** | [**\Consilience\Xero\AccountingSdk\Model\LineAmountTypes**](LineAmountTypes.md) |  | [optional] 
**subTotal** | **double** | Total of bank transaction excluding taxes | [optional] 
**totalTax** | **double** | Total tax on bank transaction | [optional] 
**total** | **double** | Total of bank transaction tax inclusive | [optional] 
**bankTransactionID** | **string** | Xero generated unique identifier for bank transaction | [optional] 
**prepaymentID** | **string** | Xero generated unique identifier for a Prepayment. This will be returned on BankTransactions with a Type of SPEND-PREPAYMENT or RECEIVE-PREPAYMENT | [optional] 
**overpaymentID** | **string** | Xero generated unique identifier for an Overpayment. This will be returned on BankTransactions with a Type of SPEND-OVERPAYMENT or RECEIVE-OVERPAYMENT | [optional] 
**updatedDateUTC** | [**\DateTime**](\DateTime.md) | Last modified date UTC format | [optional] 
**hasAttachments** | **bool** | Boolean to indicate if a bank transaction has an attachment | [optional] 
**statusAttributeString** | **string** | A string to indicate if a invoice status | [optional] 
**validationErrors** | [**\Consilience\Xero\AccountingSdk\Model\ValidationError[]**](ValidationError.md) | Displays array of validation error messages from the API | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


