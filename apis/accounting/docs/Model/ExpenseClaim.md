# # ExpenseClaim

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expenseClaimID** | **string** | Xero generated unique identifier for an expense claim | [optional] 
**status** | **string** | Current status of an expense claim – see status types | [optional] 
**payments** | [**\Consilience\Xero\AccountingSdk\Model\Payment[]**](Payment.md) | See Payments | [optional] 
**user** | [**\Consilience\Xero\AccountingSdk\Model\User**](User.md) |  | [optional] 
**receipts** | [**\Consilience\Xero\AccountingSdk\Model\Receipt[]**](Receipt.md) |  | [optional] 
**updatedDateUTC** | [**\DateTime**](\DateTime.md) | Last modified date UTC format | [optional] 
**total** | **double** | The total of an expense claim being paid | [optional] 
**amountDue** | **double** | The amount due to be paid for an expense claim | [optional] 
**amountPaid** | **double** | The amount still to pay for an expense claim | [optional] 
**paymentDueDate** | [**\DateTime**](\DateTime.md) | The date when the expense claim is due to be paid YYYY-MM-DD | [optional] 
**reportingDate** | [**\DateTime**](\DateTime.md) | The date the expense claim will be reported in Xero YYYY-MM-DD | [optional] 
**receiptID** | **string** | The Xero identifier for the Receipt e.g.  e59a2c7f-1306-4078-a0f3-73537afcbba9 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


