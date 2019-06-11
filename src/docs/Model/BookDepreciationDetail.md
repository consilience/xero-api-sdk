# # BookDepreciationDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currentCapitalGain** | **int** | When an asset is disposed, this will be the sell price minus the purchase price if a profit was made. | [optional] 
**currentGainLoss** | **int** | When an asset is disposed, this will be the lowest one of sell price or purchase price, minus the current book value. | [optional] 
**depreciationStartDate** | [**\DateTime**](\DateTime.md) | YYYY-MM-DD | [optional] 
**costLimit** | **int** | The value of the asset you want to depreciate, if this is less than the cost of the asset. | [optional] 
**residualValue** | **int** | The value of the asset remaining when you&#39;ve fully depreciated it. | [optional] 
**priorAccumDepreciationAmount** | **int** | All depreciation prior to the current financial year. | [optional] 
**currentAccumDepreciationAmount** | **int** | All depreciation occurring in the current financial year. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


