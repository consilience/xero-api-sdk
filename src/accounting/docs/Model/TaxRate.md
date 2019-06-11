# # TaxRate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of tax rate | [optional] 
**taxType** | **string** | The tax type | [optional] 
**taxComponents** | [**\Consilience\Xero\AccountingSdk\Model\TaxComponent[]**](TaxComponent.md) | See TaxComponents | [optional] 
**status** | **string** | See Status Codes | [optional] 
**reportTaxType** | **string** | See ReportTaxTypes | 
**canApplyToAssets** | **bool** | Boolean to describe if tax rate can be used for asset accounts i.e.  true,false | [optional] 
**canApplyToEquity** | **bool** | Boolean to describe if tax rate can be used for equity accounts i.e true,false | [optional] 
**canApplyToExpenses** | **bool** | Boolean to describe if tax rate can be used for expense accounts  i.e. true,false | [optional] 
**canApplyToLiabilities** | **bool** | Boolean to describe if tax rate can be used for liability accounts  i.e. true,false | [optional] 
**canApplyToRevenue** | **bool** | Boolean to describe if tax rate can be used for revenue accounts i.e. true,false | [optional] 
**displayTaxRate** | **double** | Tax Rate (decimal to 4dp) e.g 12.5000 | [optional] 
**effectiveRate** | **double** | Effective Tax Rate (decimal to 4dp) e.g 12.5000 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


