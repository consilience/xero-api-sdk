# # BankTransfer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fromBankAccount** | [**\Consilience\XeroAccounting\Sdk\Model\Account**](Account.md) |  | 
**toBankAccount** | [**\Consilience\XeroAccounting\Sdk\Model\Account**](Account.md) |  | 
**amount** | **string** | amount of the transaction | 
**date** | [**\DateTime**](\DateTime.md) | The date of the Transfer YYYY-MM-DD | [optional] 
**bankTransferID** | **string** | The identifier of the Bank Transfer | [optional] 
**currencyRate** | **double** | The currency rate | [optional] 
**fromBankTransactionID** | **string** | The Bank Transaction ID for the source account | [optional] 
**toBankTransactionID** | **string** | The Bank Transaction ID for the destination account | [optional] 
**hasAttachments** | **bool** | Boolean to indicate if a Bank Transfer has an attachment | [optional] 
**createdDateUTC** | [**\DateTime**](\DateTime.md) | UTC timestamp of creation date of bank transfer | [optional] 
**validationErrors** | [**\Consilience\XeroAccounting\Sdk\Model\ValidationError[]**](ValidationError.md) | Displays array of validation error messages from the API | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


