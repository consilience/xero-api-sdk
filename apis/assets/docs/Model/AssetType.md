# # AssetType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assetTypeId** | **string** | Xero generated unique identifier for asset types | 
**assetTypeName** | **string** | The name of the asset type | 
**fixedAssetAccountId** | **string** | The asset account for fixed assets of this type | [optional] 
**depreciationExpenseAccountId** | **string** | The expense account for the depreciation of fixed assets of this type | [optional] 
**accumulatedDepreciationAccountId** | **string** | The account for accumulated depreciation of fixed assets of this type | [optional] 
**bookDepreciationSetting** | [**\Consilience\Xero\AssetsSdk\Model\BookDepreciationSetting**](BookDepreciationSetting.md) |  | 
**locks** | **int** | All asset types that have accumulated depreciation for any assets that use them are deemed ‘locked’ and cannot be removed. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


