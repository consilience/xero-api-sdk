# # Asset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assetId** | **string** | The Xero-generated Id for the asset | 
**assetName** | **string** | The name of the asset | 
**assetNumber** | **string** | Must be unique. | [optional] 
**purchaseDate** | [**\DateTime**](\DateTime.md) | The date the asset was purchased YYYY-MM-DD | [optional] 
**purchasePrice** | **int** | The purchase price of the asset | [optional] 
**disposalPrice** | **int** | The price the asset was disposed at | [optional] 
**assetStatus** | **string** | See Asset Status Codes. | [optional] 
**warrantyExpiryDate** | **string** | The date the asset’s warranty expires (if needed) YYYY-MM-DD | [optional] 
**serialNumber** | **string** | The asset&#39;s serial number | [optional] 
**bookDepreciationSetting** | [**\Consilience\XeroAccounting\Sdk\Model\BookDepreciationSetting**](BookDepreciationSetting.md) |  | 
**bookDepreciationDetail** | [**\Consilience\XeroAccounting\Sdk\Model\BookDepreciationDetail**](BookDepreciationDetail.md) |  | [optional] 
**canRollBack** | **bool** | Boolean to indicate whether depreciation can be rolled back for this asset individually. This is true if it doesn&#39;t have &#39;legacy&#39; journal entries and if there is no lock period that would prevent this asset from rolling back. | [optional] 
**accountingBookValue** | **int** | The accounting value of the asset | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


