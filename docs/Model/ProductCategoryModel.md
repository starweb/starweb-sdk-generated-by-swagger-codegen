# ProductCategoryModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_id** | [**int**](.md) | The product category Id | [optional] 
**parent_id** | [**int**](.md) | The category&#x60;s parent&#x60;s Id | [optional] 
**visibility** | [**string**](.md) | The category&#x60;s visibility settings. Possible values are: visible, hidden and pricelists. Pricelists means that the category is only visible for customers with access to specific pricelists | [optional] 
**sort_index** | [**int**](.md) | Sort index. A category with a lower value is displayed higher up in lists | [optional] 
**open_page** | [**bool**](.md) | Whether or not links to the category should open a category page listing its products and sub categories on click. | [optional] 
**image_file_id** | [**int**](.md) | The Id to the category&#x60;s image file. Has to be an existing mediaFile | [optional] 
**external_type** | [**string**](.md) | The system name the externalId belongs to. | [optional] 
**external_id** | [**string**](.md) | The external Id for this category for the system named in externalType | [optional] 
**has_children** | [**bool**](.md) | Whether or not the category has any children categories | [optional] 
**languages** | [**\Swagger\Client\Model\ProductCategoryLanguagesModel[]**](ProductCategoryLanguagesModel.md) |  | [optional] 


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


