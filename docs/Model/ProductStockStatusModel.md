# ProductStockStatusModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stock_status_id** | [**int**](.md) | The stock status id | [optional] 
**id_code** | [**string**](.md) | The idCode of the status. Only standard statuses has idCodes set. It is also not permitted to change names for standard statuses | [optional] 
**sort_index** | [**int**](.md) | Sort index for this status | [optional] 
**stockout_new_status_id** | [**int**](.md) | This has to be set to another, existing stock status id, or null. If a product has its quantity changed to negative, the product will then change stock status to the one with this id | [optional] 
**product_buyable** | [**bool**](.md) | Is the product buyable when this status is set? | [optional] [default to true]
**in_stock** | [**bool**](.md) | Should the product be displayed as \&quot;in stock\&quot; when this status is set? | [optional] [default to false]
**languages** | [**\Swagger\Client\Model\ProductStockStatusLanguageModel[]**](ProductStockStatusLanguageModel.md) |  | [optional] 


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


