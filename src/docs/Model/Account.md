# # Account

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Customer defined alpha numeric account code e.g 200 or SALES (max length &#x3D; 10) | [optional] 
**name** | **string** | Name of account (max length &#x3D; 150) | [optional] 
**accountID** | **string** | The Xero identifier for an account – specified as a string following  the endpoint name   e.g. /297c2dc5-cc47-4afd-8ec8-74990b8761e9 | [optional] 
**type** | [**\Consilience\XeroAccounting\Sdk\Model\AccountType**](AccountType.md) |  | [optional] 
**bankAccountNumber** | **string** | For bank accounts only (Account Type BANK) | [optional] 
**status** | **string** | Accounts with a status of ACTIVE can be updated to ARCHIVED. See Account Status Codes | [optional] 
**description** | **string** | Description of the Account. Valid for all types of accounts except bank accounts (max length &#x3D; 4000) | [optional] 
**bankAccountType** | **string** | For bank accounts only. See Bank Account types | [optional] 
**currencyCode** | [**\Consilience\XeroAccounting\Sdk\Model\CurrencyCode**](CurrencyCode.md) |  | [optional] 
**taxType** | **string** | The tax type from TaxRates | [optional] 
**enablePaymentsToAccount** | **bool** | Boolean – describes whether account can have payments applied to it | [optional] 
**showInExpenseClaims** | **bool** | Boolean – describes whether account code is available for use with expense claims | [optional] 
**class** | **string** | See Account Class Types | [optional] 
**systemAccount** | **string** | If this is a system account then this element is returned. See System Account types. Note that non-system accounts may have this element set as either “” or null. | [optional] 
**reportingCode** | **string** | Shown if set | [optional] 
**reportingCodeName** | **string** | Shown if set | [optional] 
**hasAttachments** | **bool** | boolean to indicate if an account has an attachment (read only) | [optional] 
**updatedDateUTC** | [**\DateTime**](\DateTime.md) | Last modified date UTC format | [optional] 
**validationErrors** | [**\Consilience\XeroAccounting\Sdk\Model\ValidationError[]**](ValidationError.md) | Displays array of validation error messages from the API | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


