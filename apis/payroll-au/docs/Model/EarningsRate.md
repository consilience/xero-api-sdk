# # EarningsRate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the earnings rate (max length &#x3D; 100) | 
**accountCode** | **string** | See Accounts | 
**typeOfUnits** | **string** | Type of units used to record earnings (max length &#x3D; 50). Only When RateType is RATEPERUNIT | 
**isExemptFromTax** | **string** | Most payments are subject to tax, so you should only set this value if you are sure that a payment is exempt from PAYG withholding | 
**isExemptFromSuper** | **string** | See the ATO website for details of which payments are exempt from SGC | 
**earningsType** | **string** | See EarningsTypes | 
**earningsRateID** | **string** | Xero identifier | [optional] 
**rateType** | **string** | See RateTypes | [optional] 
**ratePerUnit** | **float** | Default rate per unit (optional). Only applicable if RateType is RATEPERUNIT. | [optional] 
**multiplier** | **float** | This is the multiplier used to calculate the rate per unit, based on the employee’s ordinary earnings rate. For example, for time and a half enter 1.5. Only applicable if RateType is MULTIPLE | [optional] 
**accrueLeave** | **float** | Indicates that this earnings rate should accrue leave. Only applicable if RateType is MULTIPLE | [optional] 
**amount** | **float** | Option Amount for FIXEDAMOUNT RateType EarningsRate | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


