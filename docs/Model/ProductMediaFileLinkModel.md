# ProductMediaFileLinkModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_media_file_id** | [**int**](.md) | This links ID | [optional] 
**media_file_id** | [**int**](.md) | The media file this link points to. You can fetch available media files from the /media-files endpoint | [optional] 
**sort_index** | [**int**](.md) | The sort index of these media file links. Note that after the item is saved the sort index will be rearranged so that the item with the lowest sort index always get sort index 0, the next one 1, and so on. | [optional] 
**type** | [**string**](.md) | The type of file this link points to. Can be either ”image” or ”document” | [optional] 


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


