# PricelistModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pricelist_id** | [**int**](.md) | The shipping methods Id | [optional] 
**name** | [**string**](.md) | The name of this pricelist | [optional] 
**is_master** | [**bool**](.md) | If this pricelist is the default ”master” pricelist or not. Only one pricelist can be the master pricelist | [optional] 
**country_codes** | [**string[]**](.md) | The countryCodes this pricelist is valid for | [optional] 
**currency_code** | [**string**](.md) | The currencyCode this pricelist is valid for | [optional] 
**parent_pricelist_id** | [**int**](.md) | Does this pricelist has a parent price list. | [optional] 
**is_customer_pricelist** | [**bool**](.md) | Is this pricelist a ”customer” pricelist (for selected customer groups) | [optional] 
**is_country_pricelist** | [**bool**](.md) | Is this pricelist a ”country” pricelist (base pricelist for a certain country) | [optional] 


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


