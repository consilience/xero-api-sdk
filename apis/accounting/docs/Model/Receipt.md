# # Receipt

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | [**\DateTime**](\DateTime.md) | Date of receipt – YYYY-MM-DD | 
**contact** | [**\Consilience\Xero\AccountingSdk\Model\Contact**](Contact.md) |  | 
**lineitems** | [**\Consilience\Xero\AccountingSdk\Model\LineItem[]**](LineItem.md) |  | 
**user** | [**\Consilience\Xero\AccountingSdk\Model\User**](User.md) |  | 
**reference** | **string** | Additional reference number | [optional] 
**lineAmountTypes** | [**\Consilience\Xero\AccountingSdk\Model\LineAmountTypes**](LineAmountTypes.md) |  | [optional] 
**subTotal** | **double** | Total of receipt excluding taxes | [optional] 
**totalTax** | **double** | Total tax on receipt | [optional] 
**total** | **double** | Total of receipt tax inclusive (i.e. SubTotal + TotalTax) | [optional] 
**receiptID** | **string** | Xero generated unique identifier for receipt | [optional] 
**status** | **string** | Current status of receipt – see status types | [optional] 
**receiptNumber** | **string** | Xero generated sequence number for receipt in current claim for a given user | [optional] 
**updatedDateUTC** | [**\DateTime**](\DateTime.md) | Last modified date UTC format | [optional] 
**hasAttachments** | **bool** | boolean to indicate if a receipt has an attachment | [optional] 
**url** | **string** | URL link to a source document – shown as “Go to [appName]” in the Xero app | [optional] 
**validationErrors** | [**\Consilience\Xero\AccountingSdk\Model\ValidationError[]**](ValidationError.md) | Displays array of validation error messages from the API | [optional] 
**attachments** | [**\Consilience\Xero\AccountingSdk\Model\Attachment[]**](Attachment.md) | Displays array of attachments from the API | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


