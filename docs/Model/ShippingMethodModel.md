# ShippingMethodModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_method_id** | [**int**](.md) | The shipping methods Id | [optional] 
**active** | [**bool**](.md) | If the shipping method is actively available on checkout or not | [optional] 
**valid_for_countries** | [**string**](.md) | The restrictions to countries this shipping method is valid for. Valid values are: all, EU, non-EU, selected, none | [optional] 
**valid_countries_selected** | [**string[]**](.md) | The countries this method is valid for (if validForCountries is set to ”selected”) | [optional] 
**valid_for_min_items_subtotal** | [**float**](.md) | The min order sub total that this method is valid for | [optional] 
**valid_for_max_items_subtotal** | [**float**](.md) | The max order sub total that this method is valid for | [optional] 
**valid_for_min_weight** | [**float**](.md) | The min order weight that this method is valid for | [optional] 
**valid_for_max_weight** | [**float**](.md) | The max order weight that this method is valid for. | [optional] 
**valid_for_customer_type** | [**string**](.md) | The customer type this method is valid for. Valid values are: null (no restriction), person, company | [optional] 
**free_shipping_min_items_subtotal** | [**float**](.md) | Offer free shipping with this method if the minimum order sub total amount is at least this value | [optional] 
**free_shipping_min_weight** | [**float**](.md) | Offer free shipping with this method if the minimum order total weight is at least this value | [optional] 
**languages** | [**\Swagger\Client\Model\ShippingMethodLanguageModelCollection**](ShippingMethodLanguageModelCollection.md) |  | [optional] 


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


