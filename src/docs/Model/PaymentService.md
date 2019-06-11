# # PaymentService

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentServiceID** | **string** | Xero identifier | [optional] 
**paymentServiceName** | **string** | Name of payment service | [optional] 
**paymentServiceUrl** | **string** | The custom payment URL | [optional] 
**payNowText** | **string** | The text displayed on the Pay Now button in Xero Online Invoicing. If this is not set it will default to Pay by credit card | [optional] 
**paymentServiceType** | **string** | This will always be CUSTOM for payment services created via the API. | [optional] 
**validationErrors** | [**\Consilience\XeroAccounting\Sdk\Model\ValidationError[]**](ValidationError.md) | Displays array of validation error messages from the API | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


