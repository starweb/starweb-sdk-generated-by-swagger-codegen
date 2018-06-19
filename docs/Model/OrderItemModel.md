# OrderItemModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | [**int**](.md) | The id of the order item | [optional] 
**sku** | [**string**](.md) | The SKU of the order item | [optional] 
**description** | [**string**](.md) | The description of the order item | [optional] 
**quantity** | [**int**](.md) | The quantity of the order item | [optional] 
**unit_symbol** | [**string**](.md) | The unit symbol of the order item | [optional] 
**unit_price** | [**BigDecimal**](BigDecimal.md) | The price per unit excluding VAT | [optional] 
**vat_rate** | [**BigDecimal**](BigDecimal.md) | The items VAT rate in percent. 25.0 &#x3D; 25% VAT | [optional] 
**discount** | [**BigDecimal**](BigDecimal.md) | The discount for the entire order row. Either as a percentage or an amount. If this is an amount and set to 20.0, the sum 20.0 will be subtracted from the order total no matter what the quantity is set to. | [optional] 
**discount_type** | [**string**](.md) | The type of discount. Either ”amount” or ”percent”. Default is ”percent” | [optional] 
**sort_index** | [**int**](.md) | The sort order of the order items | [optional] 


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


