# CustomerUpdateModel

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
**addresses** | [**\Swagger\Client\Model\CustomerUpdateModelAddresses**](CustomerUpdateModelAddresses.md) |  | [optional] 


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


