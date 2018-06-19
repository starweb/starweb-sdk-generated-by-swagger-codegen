# PaymentMethodModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_method_id** | [**int**](.md) | The payment methods Id | [optional] 
**id_code** | [**string**](.md) | The payment methods idCode. This can be used to identify a payment method of a standarized type | [optional] 
**active** | [**bool**](.md) | If the payment method is actively available on checkout or not | [optional] 
**fee** | [**float**](.md) | Fee associated with this method | [optional] 
**valid_for_countries** | [**string**](.md) | The restrictions to countries this payment method is valid for. Valid values are: all, EU, non-EU, selected, none | [optional] 
**valid_countries_selected** | [**string[]**](.md) | The countries this method is valid for (if validForCountries is set to ”selected”) | [optional] 
**valid_for_min_items_subtotal** | [**float**](.md) | The min order sub total that this method is valid for | [optional] 
**valid_for_max_items_subtotal** | [**float**](.md) | The max order sub total that this method is valid for | [optional] 
**valid_for_min_weight** | [**float**](.md) | The min order weight that this method is valid for | [optional] 
**valid_for_max_weight** | [**float**](.md) | The max order weight that this method is valid for. | [optional] 
**valid_for_shipping_methods** | [**string**](.md) | The shipping methods this is valid for. Valid values are: all, selected | [optional] 
**valid_for_customer_type** | [**string**](.md) | The customer type this method is valid for. Valid values are: null (no restriction), person, company | [optional] 
**languages** | [**\Swagger\Client\Model\PaymentMethodLanguageModelCollection**](PaymentMethodLanguageModelCollection.md) |  | [optional] 


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


