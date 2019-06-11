# # Item

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | User defined item code (max length &#x3D; 30) | 
**inventoryAssetAccountCode** | **string** | The inventory asset account for the item. The account must be of type INVENTORY. The  COGSAccountCode in PurchaseDetails is also required to create a tracked item | 
**name** | **string** | The name of the item (max length &#x3D; 50) | [optional] 
**isSold** | **bool** | Boolean value, defaults to true. When IsSold is true the item will be available on sales transactions in the Xero UI. If IsSold is updated to false then Description and SalesDetails values will be nulled. | [optional] 
**isPurchased** | **bool** | Boolean value, defaults to true. When IsPurchased is true the item is available for purchase transactions in the Xero UI. If IsPurchased is updated to false then PurchaseDescription and PurchaseDetails values will be nulled. | [optional] 
**description** | **string** | The sales description of the item (max length &#x3D; 4000) | [optional] 
**purchaseDescription** | **string** | The purchase description of the item (max length &#x3D; 4000) | [optional] 
**purchaseDetails** | [**\Consilience\XeroAccounting\Sdk\Model\Purchase**](Purchase.md) |  | [optional] 
**salesDetails** | [**\Consilience\XeroAccounting\Sdk\Model\Purchase**](Purchase.md) |  | [optional] 
**isTrackedAsInventory** | **bool** | True for items that are tracked as inventory. An item will be tracked as inventory if the InventoryAssetAccountCode and COGSAccountCode are set. | [optional] 
**totalCostPool** | **double** | The value of the item on hand. Calculated using average cost accounting. | [optional] 
**quantityOnHand** | **double** | The quantity of the item on hand | [optional] 
**updatedDateUTC** | [**\DateTime**](\DateTime.md) | Last modified date in UTC format | [optional] 
**itemID** | **string** | The Xero identifier for an Item | [optional] 
**validationErrors** | [**\Consilience\XeroAccounting\Sdk\Model\ValidationError[]**](ValidationError.md) | Displays array of validation error messages from the API | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


