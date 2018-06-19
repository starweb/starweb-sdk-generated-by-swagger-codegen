# ProductVariantModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | [**string**](.md) | The product variants SKU (stock keeping unit) | [optional] 
**is_active** | [**bool**](.md) | Is this variant active? Only active variants are visible to customers | [optional] [default to true]
**stock_status_id** | [**int**](.md) | The ID of the variants stock status. Available stock statuses can be fetched using the /product-stock-statuses endpoint | [optional] 
**stock_quantity** | [**int**](.md) | The current stock quantity for this variant | [optional] 
**weight_in_kg** | [**float**](.md) | The variants weight in KG | [optional] 
**cost_price** | [**string**](.md) | The cost for this variant. Used for statistic and never displayed to customers | [optional] [default to 'null']
**ean** | [**string**](.md) | European article no | [optional] 
**mpn** | [**string**](.md) | Manufacturer part no | [optional] 
**image_file_id** | [**int**](.md) |  | [optional] 
**attribute_value_links** | [**int[]**](.md) | An array of attribute value IDs that this variant belongs to. This field is mandatory for products variants if the product´s hasSeveralVariants field is set to true | [optional] 
**prices** | [**\Swagger\Client\Model\ProductVariantPriceModel[]**](ProductVariantPriceModel.md) | A collection of product variant prices | [optional] 
**attributes** | [**\Swagger\Client\Model\ProductVariantAttributeValueModel[]**](ProductVariantAttributeValueModel.md) | A collection of product variant attribute values | [optional] 


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


