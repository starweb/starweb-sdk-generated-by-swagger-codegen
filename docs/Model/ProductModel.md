# ProductModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_id** | [**int**](.md) |  | [optional] 
**created_at** | [**string**](.md) | A timestamp of when the product was created. The time should be formatted using ISO-8601 | [optional] 
**default_vat_rate** | [**string**](.md) | The default vat rate for this product. Will fall back to shop default if null. To fetch country specific vat rates, please use include&#x3D;vatRates or use the /products/x/vat-rates endpoint. | [optional] [default to 'null']
**visibility** | [**string**](.md) | The visibility of this product. Supported values are: hidden, visible, pricelists | [optional] [default to 'hidden']
**more_info_url** | [**string**](.md) | A valid URL to a web page with more information for this product | [optional] 
**manufacturer_id** | [**int**](.md) | The id of the manufacturer to use for this product. Fetch and handle available manufacturers using the /product-manufacturers endpoint | [optional] 
**unit_id** | [**int**](.md) | The id of the unit to use for this product if not standard. Fetch and handle available units using the /product-units endpoint | [optional] 
**sort_index** | [**int**](.md) | Sort index for this product in a list | [optional] 
**is_back_in_stock_watchable** | [**bool**](.md) | Should this product be watchable for customers when it is back in stock? | [optional] [default to true]
**has_several_variants** | [**bool**](.md) | Indicates if the products has several variants or not. The remaining variants can be fetched using the /products/{product id}/variants endpoint | [optional] 
**modified_at** | [**string**](.md) | A timestamp of when the product was modified. The time should be formatted using ISO-8601 | [optional] 
**variants** | [**\Swagger\Client\Model\ProductVariantModelCollection**](ProductVariantModelCollection.md) |  | [optional] 
**media_files** | [**\Swagger\Client\Model\ProductMediaFileLinkModelCollection**](ProductMediaFileLinkModelCollection.md) |  | [optional] 
**languages** | [**\Swagger\Client\Model\ProductLanguageModelCollection**](ProductLanguageModelCollection.md) |  | [optional] 
**vat_rates** | [**\Swagger\Client\Model\ProductVatRateModelCollection**](ProductVatRateModelCollection.md) |  | [optional] 
**categories** | [**\Swagger\Client\Model\ProductCategoryLinkModelCollection**](ProductCategoryLinkModelCollection.md) |  | [optional] 
**unit** | [**\Swagger\Client\Model\ProductUnitModelItem**](ProductUnitModelItem.md) |  | [optional] 
**meta_data** | [**\Swagger\Client\Model\ProductMetaDataModelCollection**](ProductMetaDataModelCollection.md) |  | [optional] 


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


