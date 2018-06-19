# CustomerModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | [**int**](.md) | The customers ID | [optional] 
**created_at** | [**string**](.md) | A timestamp of when the customer was created. The time should be formatted using ISO-8601 | [optional] 
**type** | [**string**](.md) | The type of customer this is. Either: ”person” or ”company” | [optional] 
**email** | [**string**](.md) | Email address of the customer | [optional] 
**national_id_no** | [**string**](.md) | National id number of the customer | [optional] 
**vat_no** | [**string**](.md) | VAT number of the customer | [optional] 
**custom_info1** | [**string**](.md) | Custom info saved to a customer. Can be linked to text fields on the customer registration page for additional data collection | [optional] 
**custom_info2** | [**string**](.md) | Custom info saved to a customer. Can be linked to text fields on the customer registration page for additional data collection | [optional] 
**modified_at** | [**string**](.md) | A timestamp of when the customer was modified. The time should be formatted using ISO-8601 | [optional] 
**approved** | [**bool**](.md) | If the customer is approved or not. Can be null if the customer is neither approved nor disapproved yet | [optional] 
**approved_at** | [**string**](.md) | A timestamp of when the customer was was approved/disapproved. The time should be formatted using ISO-8601 | [optional] 
**pricelist_id** | [**int**](.md) | The id of the pricelist the customer is linked to (or null if the customer has no specific pricelist linked) | [optional] 
**tags** | [**\Swagger\Client\Model\CustomerTagModelCollection**](CustomerTagModelCollection.md) |  | [optional] 
**addresses** | [**\Swagger\Client\Model\CustomerAddressesModelCollection**](CustomerAddressesModelCollection.md) |  | [optional] 
**external_services** | [**\Swagger\Client\Model\CustomerExternalServicesModelCollection**](CustomerExternalServicesModelCollection.md) |  | [optional] 


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


