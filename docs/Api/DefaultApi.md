# Swagger\Client\DefaultApi

All URIs are relative to *https://{shopId}.starwebserver.se/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTagToCustomer**](DefaultApi.md#addTagToCustomer) | **POST** /customers/{customerId}/tags | 
[**createAttribute**](DefaultApi.md#createAttribute) | **POST** /product-attributes | 
[**createCustomer**](DefaultApi.md#createCustomer) | **POST** /customers | 
[**createMediaFile**](DefaultApi.md#createMediaFile) | **POST** /media-files | 
[**createOrder**](DefaultApi.md#createOrder) | **POST** /orders | 
[**createOrderExternalService**](DefaultApi.md#createOrderExternalService) | **POST** /orders/{orderId}/external-services | 
[**createOrderItem**](DefaultApi.md#createOrderItem) | **POST** /orders/{orderId}/items | 
[**createOrderStatus**](DefaultApi.md#createOrderStatus) | **POST** /order-statuses | 
[**createProduct**](DefaultApi.md#createProduct) | **POST** /products | 
[**createProductCategory**](DefaultApi.md#createProductCategory) | **POST** /product-categories | 
[**createProductStockStatus**](DefaultApi.md#createProductStockStatus) | **POST** /product-stock-statuses | 
[**createProductVariant**](DefaultApi.md#createProductVariant) | **POST** /products/{productId}/variants | 
[**createProductVariantPricelistPrice**](DefaultApi.md#createProductVariantPricelistPrice) | **POST** /products/{productId}/variants/{variantId}/prices | 
[**createProductVatRate**](DefaultApi.md#createProductVatRate) | **POST** /products/{productId}/vat-rates | 
[**createProductsCategoryLink**](DefaultApi.md#createProductsCategoryLink) | **POST** /products/{productId}/categories | 
[**createProductsLanguage**](DefaultApi.md#createProductsLanguage) | **POST** /products/{productId}/languages | 
[**createProductsMediaFileLink**](DefaultApi.md#createProductsMediaFileLink) | **POST** /products/{productId}/media-files | 
[**createProductsMetaData**](DefaultApi.md#createProductsMetaData) | **POST** /products/{productId}/meta-data | 
[**createProductsVariantsAttributeValues**](DefaultApi.md#createProductsVariantsAttributeValues) | **POST** /product-attributes/{attributeId}/values | 
[**deleteAttribute**](DefaultApi.md#deleteAttribute) | **DELETE** /product-attributes/{attributeId} | 
[**deleteAttributeValue**](DefaultApi.md#deleteAttributeValue) | **DELETE** /product-attributes/{attributeId}/values/{attributeValueId} | 
[**deleteCustomer**](DefaultApi.md#deleteCustomer) | **DELETE** /customers/{customerId} | 
[**deleteMediaFile**](DefaultApi.md#deleteMediaFile) | **DELETE** /media-files/{mediaFileId} | 
[**deleteOrder**](DefaultApi.md#deleteOrder) | **DELETE** /orders/{orderId} | 
[**deleteOrderAddress**](DefaultApi.md#deleteOrderAddress) | **DELETE** /orders/{orderId}/addresses/{addressType} | 
[**deleteOrderExternalService**](DefaultApi.md#deleteOrderExternalService) | **DELETE** /orders/{orderId}/external-services/{serviceName} | 
[**deleteOrderItem**](DefaultApi.md#deleteOrderItem) | **DELETE** /orders/{orderId}/items/{orderItemId} | 
[**deleteOrderStatus**](DefaultApi.md#deleteOrderStatus) | **DELETE** /order-statuses/{orderStatusId} | 
[**deleteProduct**](DefaultApi.md#deleteProduct) | **DELETE** /products/{productId} | 
[**deleteProductCategory**](DefaultApi.md#deleteProductCategory) | **DELETE** /product-categories/{categoryId} | 
[**deleteProductStockStatus**](DefaultApi.md#deleteProductStockStatus) | **DELETE** /product-stock-statuses/{stockStatusId} | 
[**deleteProductsCategoryLink**](DefaultApi.md#deleteProductsCategoryLink) | **DELETE** /products/{productId}/categories/{categoryId} | 
[**deleteProductsLanguage**](DefaultApi.md#deleteProductsLanguage) | **DELETE** /products/{productId}/languages/{langCode} | 
[**deleteProductsMediaFileLink**](DefaultApi.md#deleteProductsMediaFileLink) | **DELETE** /products/{productId}/media-files/{mediaFileId} | 
[**deleteProductsMetaData**](DefaultApi.md#deleteProductsMetaData) | **DELETE** /products/{productId}/meta-data/{metaDataTypeId} | 
[**deleteProductsVariant**](DefaultApi.md#deleteProductsVariant) | **DELETE** /products/{productId}/variants/{variantId} | 
[**deleteProductsVariantsPricelistPrice**](DefaultApi.md#deleteProductsVariantsPricelistPrice) | **DELETE** /products/{productId}/variants/{variantId}/prices/{pricelistId} | 
[**deleteProductsVatRate**](DefaultApi.md#deleteProductsVatRate) | **DELETE** /products/{productId}/vat-rates/{countryCode} | 
[**generateFetchAccessToken**](DefaultApi.md#generateFetchAccessToken) | **POST** /token | 
[**getCurrencies**](DefaultApi.md#getCurrencies) | **GET** /currencies | 
[**getCurrency**](DefaultApi.md#getCurrency) | **GET** /currencies/{currencyCode} | 
[**getCustomer**](DefaultApi.md#getCustomer) | **GET** /customers/{customerId} | 
[**getCustomerAddress**](DefaultApi.md#getCustomerAddress) | **GET** /customers/{customerId}/addresses/{addressType} | 
[**getCustomerExternalService**](DefaultApi.md#getCustomerExternalService) | **GET** /customers/{customerId}/external-services/{serviceName} | 
[**getCustomerExternalServices**](DefaultApi.md#getCustomerExternalServices) | **GET** /customers/{customerId}/external-services | 
[**getCustomerGroups**](DefaultApi.md#getCustomerGroups) | **GET** /customers/{customerId}/addresses | 
[**getCustomerTag**](DefaultApi.md#getCustomerTag) | **GET** /customer-tags/{tagId} | 
[**getCustomerTag_0**](DefaultApi.md#getCustomerTag_0) | **GET** /customers/{customerId}/tags/{tagId} | 
[**getCustomerTags**](DefaultApi.md#getCustomerTags) | **GET** /customer-tags | 
[**getCustomerTags_0**](DefaultApi.md#getCustomerTags_0) | **GET** /customers/{customerId}/tags | 
[**getMediaFile**](DefaultApi.md#getMediaFile) | **GET** /media-files/{mediaFileId} | 
[**getMediaFiles**](DefaultApi.md#getMediaFiles) | **GET** /media-files | 
[**getOrder**](DefaultApi.md#getOrder) | **GET** /orders/{orderId} | 
[**getOrderAddress**](DefaultApi.md#getOrderAddress) | **GET** /orders/{orderId}/addresses/{addressType} | 
[**getOrderComment**](DefaultApi.md#getOrderComment) | **GET** /orders/{orderId}/comments/{commentId} | 
[**getOrderComments**](DefaultApi.md#getOrderComments) | **GET** /orders/{orderId}/comments | 
[**getOrderExternalService**](DefaultApi.md#getOrderExternalService) | **GET** /orders/{orderId}/external-services/{serviceName} | 
[**getOrderExternalServices**](DefaultApi.md#getOrderExternalServices) | **GET** /orders/{orderId}/external-services | 
[**getOrderItem**](DefaultApi.md#getOrderItem) | **GET** /orders/{orderId}/items/{orderItemId} | 
[**getOrderItems**](DefaultApi.md#getOrderItems) | **GET** /orders/{orderId}/items | 
[**getOrderStatus**](DefaultApi.md#getOrderStatus) | **GET** /order-statuses/{orderStatusId} | 
[**getOrderStatuses**](DefaultApi.md#getOrderStatuses) | **GET** /order-statuses | 
[**getPaymentMethod**](DefaultApi.md#getPaymentMethod) | **GET** /payment-methods/{paymentMethodId} | 
[**getPaymentMethods**](DefaultApi.md#getPaymentMethods) | **GET** /payment-methods | 
[**getPricelist**](DefaultApi.md#getPricelist) | **GET** /pricelists/{pricelistId} | 
[**getPricelists**](DefaultApi.md#getPricelists) | **GET** /pricelists | 
[**getProduct**](DefaultApi.md#getProduct) | **GET** /products/{productId} | 
[**getProductCategory**](DefaultApi.md#getProductCategory) | **GET** /product-categories/{categoryId} | 
[**getProductManufacturer**](DefaultApi.md#getProductManufacturer) | **GET** /product-manufacturers/{manufacturerId} | 
[**getProductMetaDataType**](DefaultApi.md#getProductMetaDataType) | **GET** /product-meta-data-types/{metaDataTypeId} | 
[**getProductStockStatus**](DefaultApi.md#getProductStockStatus) | **GET** /product-stock-statuses/{stockStatusId} | 
[**getProductUnit**](DefaultApi.md#getProductUnit) | **GET** /product-units/{unitId} | 
[**getProductsAttribute**](DefaultApi.md#getProductsAttribute) | **GET** /products/{productId}/attributes/{attributeId} | 
[**getProductsCategoryLink**](DefaultApi.md#getProductsCategoryLink) | **GET** /products/{productId}/categories/{categoryId} | 
[**getProductsLanguage**](DefaultApi.md#getProductsLanguage) | **GET** /products/{productId}/languages/{langCode} | 
[**getProductsMediaFileLink**](DefaultApi.md#getProductsMediaFileLink) | **GET** /products/{productId}/media-files/{mediaFileId} | 
[**getProductsMetaData**](DefaultApi.md#getProductsMetaData) | **GET** /products/{productId}/meta-data/{metaDataTypeId} | 
[**getProductsVariant**](DefaultApi.md#getProductsVariant) | **GET** /products/{productId}/variants/{variantId} | 
[**getProductsVariantsAttributeValue**](DefaultApi.md#getProductsVariantsAttributeValue) | **GET** /product-attributes/{attributeId} | 
[**getProductsVariantsAttributeValue_0**](DefaultApi.md#getProductsVariantsAttributeValue_0) | **GET** /product-attributes/{attributeId}/values/{attributeValueId} | 
[**getProductsVariantsPricelistPrice**](DefaultApi.md#getProductsVariantsPricelistPrice) | **GET** /products/{productId}/variants/{variantId}/prices/{pricelistId} | 
[**getProductsVatRate**](DefaultApi.md#getProductsVatRate) | **GET** /products/{productId}/vat-rates/{countryCode} | 
[**getShippingMethod**](DefaultApi.md#getShippingMethod) | **GET** /shipping-methods/{shippingMethodId} | 
[**getShippingMethods**](DefaultApi.md#getShippingMethods) | **GET** /shipping-methods | 
[**getShippingTrackingTypes**](DefaultApi.md#getShippingTrackingTypes) | **GET** /shipping-tracking-types | 
[**getShop**](DefaultApi.md#getShop) | **GET** /shop | 
[**listCustomers**](DefaultApi.md#listCustomers) | **GET** /customers | 
[**listOrderAddresses**](DefaultApi.md#listOrderAddresses) | **GET** /orders/{orderId}/addresses | 
[**listOrders**](DefaultApi.md#listOrders) | **GET** /orders | 
[**listProductCategories**](DefaultApi.md#listProductCategories) | **GET** /product-categories | 
[**listProductManufacturers**](DefaultApi.md#listProductManufacturers) | **GET** /product-manufacturers | 
[**listProductMetaDataTypes**](DefaultApi.md#listProductMetaDataTypes) | **GET** /product-meta-data-types | 
[**listProductStockStatses**](DefaultApi.md#listProductStockStatses) | **GET** /product-stock-statuses | 
[**listProductUnits**](DefaultApi.md#listProductUnits) | **GET** /product-units | 
[**listProducts**](DefaultApi.md#listProducts) | **GET** /products | 
[**listProductsAttributes**](DefaultApi.md#listProductsAttributes) | **GET** /products/{productId}/attributes | 
[**listProductsCategoryLinks**](DefaultApi.md#listProductsCategoryLinks) | **GET** /products/{productId}/categories | 
[**listProductsLanguages**](DefaultApi.md#listProductsLanguages) | **GET** /products/{productId}/languages | 
[**listProductsMediaFileLinks**](DefaultApi.md#listProductsMediaFileLinks) | **GET** /products/{productId}/media-files | 
[**listProductsMetaData**](DefaultApi.md#listProductsMetaData) | **GET** /products/{productId}/meta-data | 
[**listProductsVariants**](DefaultApi.md#listProductsVariants) | **GET** /products/{productId}/variants | 
[**listProductsVariantsAttributeValues**](DefaultApi.md#listProductsVariantsAttributeValues) | **GET** /product-attributes | 
[**listProductsVariantsAttributeValues_0**](DefaultApi.md#listProductsVariantsAttributeValues_0) | **GET** /product-attributes/{attributeId}/values | 
[**listProductsVariantsPricelistPrices**](DefaultApi.md#listProductsVariantsPricelistPrices) | **GET** /products/{productId}/variants/{variantId}/prices | 
[**listProductsVatRates**](DefaultApi.md#listProductsVatRates) | **GET** /products/{productId}/vat-rates | 
[**patchAttribute**](DefaultApi.md#patchAttribute) | **PATCH** /product-attributes/{attributeId} | 
[**patchCustomer**](DefaultApi.md#patchCustomer) | **PATCH** /customers/{customerId} | 
[**patchCustomerAddress**](DefaultApi.md#patchCustomerAddress) | **PATCH** /customers/{customerId}/addresses/{addressType} | 
[**patchMediaFile**](DefaultApi.md#patchMediaFile) | **PATCH** /media-files/{mediaFileId} | 
[**patchOrder**](DefaultApi.md#patchOrder) | **PATCH** /orders/{orderId} | 
[**patchOrderAddress**](DefaultApi.md#patchOrderAddress) | **PATCH** /orders/{orderId}/addresses/{addressType} | 
[**patchOrderExternalService**](DefaultApi.md#patchOrderExternalService) | **PATCH** /orders/{orderId}/external-services/{serviceName} | 
[**patchOrderItem**](DefaultApi.md#patchOrderItem) | **PATCH** /orders/{orderId}/items/{orderItemId} | 
[**patchOrderStatus**](DefaultApi.md#patchOrderStatus) | **PATCH** /order-statuses/{orderStatusId} | 
[**patchProduct**](DefaultApi.md#patchProduct) | **PATCH** /products/{productId} | 
[**patchProductCategory**](DefaultApi.md#patchProductCategory) | **PATCH** /product-categories/{categoryId} | 
[**patchProductStockStatus**](DefaultApi.md#patchProductStockStatus) | **PATCH** /product-stock-statuses/{stockStatusId} | 
[**patchProductsCategoryLink**](DefaultApi.md#patchProductsCategoryLink) | **PATCH** /products/{productId}/categories/{categoryId} | 
[**patchProductsLanguage**](DefaultApi.md#patchProductsLanguage) | **PATCH** /products/{productId}/languages/{langCode} | 
[**patchProductsMediaFileLink**](DefaultApi.md#patchProductsMediaFileLink) | **PATCH** /products/{productId}/media-files/{mediaFileId} | 
[**patchProductsMetaData**](DefaultApi.md#patchProductsMetaData) | **PATCH** /products/{productId}/meta-data/{metaDataTypeId} | 
[**patchProductsVariant**](DefaultApi.md#patchProductsVariant) | **PATCH** /products/{productId}/variants/{variantId} | 
[**patchProductsVariantsAttributeValues**](DefaultApi.md#patchProductsVariantsAttributeValues) | **PATCH** /product-attributes/{attributeId}/values/{attributeValueId} | 
[**patchProductsVariantsPricelistPrice**](DefaultApi.md#patchProductsVariantsPricelistPrice) | **PATCH** /products/{productId}/variants/{variantId}/prices/{pricelistId} | 
[**patchProductsVatRate**](DefaultApi.md#patchProductsVatRate) | **PATCH** /products/{productId}/vat-rates/{countryCode} | 
[**patchTagOnCustomerBy**](DefaultApi.md#patchTagOnCustomerBy) | **PATCH** /customers/{customerId}/tags/{tagId} | 
[**putAttribute**](DefaultApi.md#putAttribute) | **PUT** /product-attributes/{attributeId} | 
[**putCustomer**](DefaultApi.md#putCustomer) | **PUT** /customers/{customerId} | 
[**putCustomerAddress**](DefaultApi.md#putCustomerAddress) | **PUT** /customers/{customerId}/addresses/{addressType} | 
[**putMediaFile**](DefaultApi.md#putMediaFile) | **PUT** /media-files/{mediaFileId} | 
[**putOrder**](DefaultApi.md#putOrder) | **PUT** /orders/{orderId} | 
[**putOrderAddress**](DefaultApi.md#putOrderAddress) | **PUT** /orders/{orderId}/addresses/{addressType} | 
[**putOrderExternalService**](DefaultApi.md#putOrderExternalService) | **PUT** /orders/{orderId}/external-services/{serviceName} | 
[**putOrderItem**](DefaultApi.md#putOrderItem) | **PUT** /orders/{orderId}/items/{orderItemId} | 
[**putOrderStatus**](DefaultApi.md#putOrderStatus) | **PUT** /order-statuses/{orderStatusId} | 
[**putProduct**](DefaultApi.md#putProduct) | **PUT** /products/{productId} | 
[**putProductCategory**](DefaultApi.md#putProductCategory) | **PUT** /product-categories/{categoryId} | 
[**putProductStockStatus**](DefaultApi.md#putProductStockStatus) | **PUT** /product-stock-statuses/{stockStatusId} | 
[**putProductsCategoryLink**](DefaultApi.md#putProductsCategoryLink) | **PUT** /products/{productId}/categories/{categoryId} | 
[**putProductsLanguage**](DefaultApi.md#putProductsLanguage) | **PUT** /products/{productId}/languages/{langCode} | 
[**putProductsMediaFileLink**](DefaultApi.md#putProductsMediaFileLink) | **PUT** /products/{productId}/media-files/{mediaFileId} | 
[**putProductsMetaData**](DefaultApi.md#putProductsMetaData) | **PUT** /products/{productId}/meta-data/{metaDataTypeId} | 
[**putProductsVariant**](DefaultApi.md#putProductsVariant) | **PUT** /products/{productId}/variants/{variantId} | 
[**putProductsVariantsAttributeValues**](DefaultApi.md#putProductsVariantsAttributeValues) | **PUT** /product-attributes/{attributeId}/values/{attributeValueId} | 
[**putProductsVariantsPricelistPrice**](DefaultApi.md#putProductsVariantsPricelistPrice) | **PUT** /products/{productId}/variants/{variantId}/prices/{pricelistId} | 
[**putProductsVatRate**](DefaultApi.md#putProductsVatRate) | **PUT** /products/{productId}/vat-rates/{countryCode} | 
[**putTagOnCustomer**](DefaultApi.md#putTagOnCustomer) | **PUT** /customers/{customerId}/tags/{tagId} | 
[**removeAddressFromCustomer**](DefaultApi.md#removeAddressFromCustomer) | **DELETE** /customers/{customerId}/addresses/{addressType} | 
[**removeTagFromCustomer**](DefaultApi.md#removeTagFromCustomer) | **DELETE** /customers/{customerId}/tags/{tagId} | 




# **addTagToCustomer**
> \Swagger\Client\Model\CustomerAddedTagModelItem addTagToCustomer($body$customer_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CustomerAddedTagModel(); // \Swagger\Client\Model\CustomerAddedTagModel | Customer tag data
$customer_id = array(56); // int | The customers id


try {
    $result = $apiInstance->addTagToCustomer($body$customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addTagToCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerAddedTagModel**](../Model/CustomerAddedTagModel.md)| Customer tag data |
 **customer_id** | **int**| The customers id |


### Return type

[**\Swagger\Client\Model\CustomerAddedTagModelItem**](../Model/CustomerAddedTagModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **createAttribute**
> \Swagger\Client\Model\ProductVariantAttributeModelItem createAttribute($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductVariantAttributeModelUpdatable(); // \Swagger\Client\Model\ProductVariantAttributeModelUpdatable | Attribute data


try {
    $result = $apiInstance->createAttribute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductVariantAttributeModelUpdatable**](../Model/ProductVariantAttributeModelUpdatable.md)| Attribute data |


### Return type

[**\Swagger\Client\Model\ProductVariantAttributeModelItem**](../Model/ProductVariantAttributeModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **createCustomer**
> \Swagger\Client\Model\CustomerModelItem createCustomer($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CustomerUpdateModel(); // \Swagger\Client\Model\CustomerUpdateModel | Customer data


try {
    $result = $apiInstance->createCustomer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerUpdateModel**](../Model/CustomerUpdateModel.md)| Customer data |


### Return type

[**\Swagger\Client\Model\CustomerModelItem**](../Model/CustomerModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **createMediaFile**
> \Swagger\Client\Model\MediaFileModelItem createMediaFile($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MediaFileUploadModel(); // \Swagger\Client\Model\MediaFileUploadModel | The media file to upload


try {
    $result = $apiInstance->createMediaFile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createMediaFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MediaFileUploadModel**](../Model/MediaFileUploadModel.md)| The media file to upload |


### Return type

[**\Swagger\Client\Model\MediaFileModelItem**](../Model/MediaFileModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **createOrder**
> \Swagger\Client\Model\OrderModelItem createOrder($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrderUpdateModel(); // \Swagger\Client\Model\OrderUpdateModel | Order data


try {
    $result = $apiInstance->createOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderUpdateModel**](../Model/OrderUpdateModel.md)| Order data |


### Return type

[**\Swagger\Client\Model\OrderModelItem**](../Model/OrderModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **createOrderExternalService**
> \Swagger\Client\Model\OrderExternalServicesModelItem createOrderExternalService($body$order_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrderExternalServiceModel(); // \Swagger\Client\Model\OrderExternalServiceModel | Order external service data
$order_id = array(56); // int | The orders id


try {
    $result = $apiInstance->createOrderExternalService($body$order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createOrderExternalService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderExternalServiceModel**](../Model/OrderExternalServiceModel.md)| Order external service data |
 **order_id** | **int**| The orders id |


### Return type

[**\Swagger\Client\Model\OrderExternalServicesModelItem**](../Model/OrderExternalServicesModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **createOrderItem**
> \Swagger\Client\Model\OrderItemModelItem createOrderItem($body$order_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrderItemModel(); // \Swagger\Client\Model\OrderItemModel | Order item data
$order_id = array(56); // int | The orders id


try {
    $result = $apiInstance->createOrderItem($body$order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderItemModel**](../Model/OrderItemModel.md)| Order item data |
 **order_id** | **int**| The orders id |


### Return type

[**\Swagger\Client\Model\OrderItemModelItem**](../Model/OrderItemModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **createOrderStatus**
> \Swagger\Client\Model\OrderStatusModelItem createOrderStatus($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrderStatusModel(); // \Swagger\Client\Model\OrderStatusModel | Order status data


try {
    $result = $apiInstance->createOrderStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createOrderStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderStatusModel**](../Model/OrderStatusModel.md)| Order status data |


### Return type

[**\Swagger\Client\Model\OrderStatusModelItem**](../Model/OrderStatusModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **createProduct**
> \Swagger\Client\Model\ProductModelItem createProduct($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductModelUpdatable(); // \Swagger\Client\Model\ProductModelUpdatable | Product data


try {
    $result = $apiInstance->createProduct($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductModelUpdatable**](../Model/ProductModelUpdatable.md)| Product data |


### Return type

[**\Swagger\Client\Model\ProductModelItem**](../Model/ProductModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **createProductCategory**
> \Swagger\Client\Model\ProductCategoryModelItem createProductCategory($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductCategoryModel(); // \Swagger\Client\Model\ProductCategoryModel | Product category data


try {
    $result = $apiInstance->createProductCategory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createProductCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductCategoryModel**](../Model/ProductCategoryModel.md)| Product category data |


### Return type

[**\Swagger\Client\Model\ProductCategoryModelItem**](../Model/ProductCategoryModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **createProductStockStatus**
> \Swagger\Client\Model\ProductStockStatusModelItem createProductStockStatus($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductStockStatusModel(); // \Swagger\Client\Model\ProductStockStatusModel | Product stock status data


try {
    $result = $apiInstance->createProductStockStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createProductStockStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductStockStatusModel**](../Model/ProductStockStatusModel.md)| Product stock status data |


### Return type

[**\Swagger\Client\Model\ProductStockStatusModelItem**](../Model/ProductStockStatusModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **createProductVariant**
> \Swagger\Client\Model\ProductVariantModelItem createProductVariant($body$product_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductVariantModel(); // \Swagger\Client\Model\ProductVariantModel | Product variant data
$product_id = array(56); // int | The products id


try {
    $result = $apiInstance->createProductVariant($body$product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createProductVariant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductVariantModel**](../Model/ProductVariantModel.md)| Product variant data |
 **product_id** | **int**| The products id |


### Return type

[**\Swagger\Client\Model\ProductVariantModelItem**](../Model/ProductVariantModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **createProductVariantPricelistPrice**
> \Swagger\Client\Model\ProductVariantPriceModelItem createProductVariantPricelistPrice($body$product_id$variant_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductVariantPriceModel(); // \Swagger\Client\Model\ProductVariantPriceModel | Oricelist price data
$product_id = array(56); // int | The products id
$variant_id = array(56); // int | The products variants id


try {
    $result = $apiInstance->createProductVariantPricelistPrice($body$product_id$variant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createProductVariantPricelistPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductVariantPriceModel**](../Model/ProductVariantPriceModel.md)| Oricelist price data |
 **product_id** | **int**| The products id |
 **variant_id** | **int**| The products variants id |


### Return type

[**\Swagger\Client\Model\ProductVariantPriceModelItem**](../Model/ProductVariantPriceModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **createProductVatRate**
> \Swagger\Client\Model\ProductVatRateModelItem createProductVatRate($body$product_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductVatRateModel(); // \Swagger\Client\Model\ProductVatRateModel | Product vat rate data
$product_id = array(56); // int | The products id


try {
    $result = $apiInstance->createProductVatRate($body$product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createProductVatRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductVatRateModel**](../Model/ProductVatRateModel.md)| Product vat rate data |
 **product_id** | **int**| The products id |


### Return type

[**\Swagger\Client\Model\ProductVatRateModelItem**](../Model/ProductVatRateModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **createProductsCategoryLink**
> \Swagger\Client\Model\ProductCategoryLinkModelItem createProductsCategoryLink($body$product_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductCategoryLinkModel(); // \Swagger\Client\Model\ProductCategoryLinkModel | Product category link data
$product_id = array(56); // int | The products id


try {
    $result = $apiInstance->createProductsCategoryLink($body$product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createProductsCategoryLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductCategoryLinkModel**](../Model/ProductCategoryLinkModel.md)| Product category link data |
 **product_id** | **int**| The products id |


### Return type

[**\Swagger\Client\Model\ProductCategoryLinkModelItem**](../Model/ProductCategoryLinkModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **createProductsLanguage**
> \Swagger\Client\Model\ProductLanguageModelItem createProductsLanguage($body$product_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductLanguageModel(); // \Swagger\Client\Model\ProductLanguageModel | Product language data
$product_id = array(56); // int | The products id


try {
    $result = $apiInstance->createProductsLanguage($body$product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createProductsLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductLanguageModel**](../Model/ProductLanguageModel.md)| Product language data |
 **product_id** | **int**| The products id |


### Return type

[**\Swagger\Client\Model\ProductLanguageModelItem**](../Model/ProductLanguageModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **createProductsMediaFileLink**
> \Swagger\Client\Model\ProductMediaFileLinkModelItem createProductsMediaFileLink($body$product_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductMediaFileLinkModel(); // \Swagger\Client\Model\ProductMediaFileLinkModel | Product media file link data
$product_id = array(56); // int | The products id


try {
    $result = $apiInstance->createProductsMediaFileLink($body$product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createProductsMediaFileLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductMediaFileLinkModel**](../Model/ProductMediaFileLinkModel.md)| Product media file link data |
 **product_id** | **int**| The products id |


### Return type

[**\Swagger\Client\Model\ProductMediaFileLinkModelItem**](../Model/ProductMediaFileLinkModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **createProductsMetaData**
> \Swagger\Client\Model\ProductMetaDataModelItem createProductsMetaData($body$product_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductMetaDataModelUpdatable(); // \Swagger\Client\Model\ProductMetaDataModelUpdatable | Product meta data
$product_id = array(56); // int | The products id


try {
    $result = $apiInstance->createProductsMetaData($body$product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createProductsMetaData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductMetaDataModelUpdatable**](../Model/ProductMetaDataModelUpdatable.md)| Product meta data |
 **product_id** | **int**| The products id |


### Return type

[**\Swagger\Client\Model\ProductMetaDataModelItem**](../Model/ProductMetaDataModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **createProductsVariantsAttributeValues**
> \Swagger\Client\Model\ProductVariantAttributeValueModelCollection createProductsVariantsAttributeValues($body$attribute_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductVariantAttributeValueModelUpdatable(); // \Swagger\Client\Model\ProductVariantAttributeValueModelUpdatable | Attribute value data
$attribute_id = array(56); // int | The attribute id


try {
    $result = $apiInstance->createProductsVariantsAttributeValues($body$attribute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createProductsVariantsAttributeValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductVariantAttributeValueModelUpdatable**](../Model/ProductVariantAttributeValueModelUpdatable.md)| Attribute value data |
 **attribute_id** | **int**| The attribute id |


### Return type

[**\Swagger\Client\Model\ProductVariantAttributeValueModelCollection**](../Model/ProductVariantAttributeValueModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteAttribute**
> deleteAttribute($attribute_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = array(56); // int | The attribute value id


try {
    $apiInstance->deleteAttribute($attribute_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**| The attribute value id |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteAttributeValue**
> deleteAttributeValue($attribute_id$attribute_value_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = array(56); // int | The attribute id
$attribute_value_id = array(56); // int | The attribe value id


try {
    $apiInstance->deleteAttributeValue($attribute_id$attribute_value_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAttributeValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**| The attribute id |
 **attribute_value_id** | **int**| The attribe value id |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteCustomer**
> deleteCustomer($customer_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = array(56); // int | The customers id


try {
    $apiInstance->deleteCustomer($customer_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| The customers id |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteMediaFile**
> deleteMediaFile($media_file_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_file_id = array(56); // int | The media files id


try {
    $apiInstance->deleteMediaFile($media_file_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteMediaFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **media_file_id** | **int**| The media files id |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteOrder**
> deleteOrder($order_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = array(56); // int | The orders id


try {
    $apiInstance->deleteOrder($order_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| The orders id |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteOrderAddress**
> deleteOrderAddress($order_id$address_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = array(56); // int | The orders id
$address_type = array("address_type_example"); // string | The order address type


try {
    $apiInstance->deleteOrderAddress($order_id$address_type);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteOrderAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| The orders id |
 **address_type** | **string**| The order address type |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteOrderExternalService**
> deleteOrderExternalService($order_id$service_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = array(56); // int | The orders id
$service_name = array("service_name_example"); // string | The service name


try {
    $apiInstance->deleteOrderExternalService($order_id$service_name);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteOrderExternalService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| The orders id |
 **service_name** | **string**| The service name |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteOrderItem**
> deleteOrderItem($order_id$order_item_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = array(56); // int | The orders id
$order_item_id = array(56); // int | The order item id


try {
    $apiInstance->deleteOrderItem($order_id$order_item_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| The orders id |
 **order_item_id** | **int**| The order item id |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteOrderStatus**
> deleteOrderStatus($order_status_id)



NB! You are not allowed to delete order statuses that is in use by an order, or standard order statuses (all statuses with an idCode set)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_status_id = array(56); // int | The order status id


try {
    $apiInstance->deleteOrderStatus($order_status_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteOrderStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_status_id** | **int**| The order status id |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteProduct**
> deleteProduct($product_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The product id


try {
    $apiInstance->deleteProduct($product_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product id |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteProductCategory**
> deleteProductCategory($category_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = array(56); // int | The product category id


try {
    $apiInstance->deleteProductCategory($category_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteProductCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| The product category id |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteProductStockStatus**
> deleteProductStockStatus($stock_status_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stock_status_id = array(56); // int | The stock status id


try {
    $apiInstance->deleteProductStockStatus($stock_status_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteProductStockStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_status_id** | **int**| The stock status id |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteProductsCategoryLink**
> deleteProductsCategoryLink($product_id$category_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The product id
$category_id = array(56); // int | The category id


try {
    $apiInstance->deleteProductsCategoryLink($product_id$category_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteProductsCategoryLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product id |
 **category_id** | **int**| The category id |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteProductsLanguage**
> deleteProductsLanguage($product_id$lang_code)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The product id
$lang_code = array("lang_code_example"); // string | The language code you want to fetch/change. Supported language codes are: sv, en, no, da, fi, de, fr, es


try {
    $apiInstance->deleteProductsLanguage($product_id$lang_code);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteProductsLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product id |
 **lang_code** | **string**| The language code you want to fetch/change. Supported language codes are: sv, en, no, da, fi, de, fr, es |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteProductsMediaFileLink**
> deleteProductsMediaFileLink($product_id$media_file_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The product id
$media_file_id = array(56); // int | The media file id of the link you want to fetch/change


try {
    $apiInstance->deleteProductsMediaFileLink($product_id$media_file_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteProductsMediaFileLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product id |
 **media_file_id** | **int**| The media file id of the link you want to fetch/change |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteProductsMetaData**
> deleteProductsMetaData($product_id$meta_data_type_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The product id
$meta_data_type_id = array(56); // int | The meta data type id


try {
    $apiInstance->deleteProductsMetaData($product_id$meta_data_type_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteProductsMetaData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product id |
 **meta_data_type_id** | **int**| The meta data type id |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteProductsVariant**
> deleteProductsVariant($product_id$variant_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The product id
$variant_id = array(56); // int | The products variants id


try {
    $apiInstance->deleteProductsVariant($product_id$variant_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteProductsVariant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product id |
 **variant_id** | **int**| The products variants id |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteProductsVariantsPricelistPrice**
> deleteProductsVariantsPricelistPrice($product_id$variant_id$pricelist_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The product id
$variant_id = array(56); // int | The products variants id
$pricelist_id = array(56); // int | The pricelist id


try {
    $apiInstance->deleteProductsVariantsPricelistPrice($product_id$variant_id$pricelist_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteProductsVariantsPricelistPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product id |
 **variant_id** | **int**| The products variants id |
 **pricelist_id** | **int**| The pricelist id |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **deleteProductsVatRate**
> deleteProductsVatRate($product_id$country_code)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The product id
$country_code = array("country_code_example"); // string | The country code for the vat rate to fetch/manipulate


try {
    $apiInstance->deleteProductsVatRate($product_id$country_code);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteProductsVatRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product id |
 **country_code** | **string**| The country code for the vat rate to fetch/manipulate |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **generateFetchAccessToken**
> \Swagger\Client\Model\TokenModel generateFetchAccessToken($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ClientCredentialModel(); // \Swagger\Client\Model\ClientCredentialModel | Client credentials


try {
    $result = $apiInstance->generateFetchAccessToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->generateFetchAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ClientCredentialModel**](../Model/ClientCredentialModel.md)| Client credentials |


### Return type

[**\Swagger\Client\Model\TokenModel**](../Model/TokenModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getCurrencies**
> \Swagger\Client\Model\CurrencyCollection getCurrencies()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->getCurrencies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.


### Return type

[**\Swagger\Client\Model\CurrencyCollection**](../Model/CurrencyCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getCurrency**
> \Swagger\Client\Model\CurrencyModelItem getCurrency($currency_code)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency_code = array("currency_code_example"); // string | The currency code


try {
    $result = $apiInstance->getCurrency($currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**| The currency code |


### Return type

[**\Swagger\Client\Model\CurrencyModelItem**](../Model/CurrencyModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getCustomer**
> \Swagger\Client\Model\CustomerModelItem getCustomer($customer_id$include)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = array(56); // int | The customers id
$include = array("include_example"); // string | If you want to include child data in the result. Example: ?include=tags (to include customer tags); ?include=tags,addresses (to include both customer tags and addresses). Available includes: tags, externalServices, addresses


try {
    $result = $apiInstance->getCustomer($customer_id$include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| The customers id |
 **include** | **string**| If you want to include child data in the result. Example: ?include&#x3D;tags (to include customer tags); ?include&#x3D;tags,addresses (to include both customer tags and addresses). Available includes: tags, externalServices, addresses | [optional]


### Return type

[**\Swagger\Client\Model\CustomerModelItem**](../Model/CustomerModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getCustomerAddress**
> \Swagger\Client\Model\CustomerAddressesModelItem getCustomerAddress($customer_id$address_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = array(56); // int | The customers id
$address_type = array("address_type_example"); // string | The customer address type


try {
    $result = $apiInstance->getCustomerAddress($customer_id$address_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| The customers id |
 **address_type** | **string**| The customer address type |


### Return type

[**\Swagger\Client\Model\CustomerAddressesModelItem**](../Model/CustomerAddressesModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getCustomerExternalService**
> \Swagger\Client\Model\CustomerExternalServicesModelItem getCustomerExternalService($order_id$service_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = array(56); // int | The orders id
$service_name = array("service_name_example"); // string | The service name


try {
    $result = $apiInstance->getCustomerExternalService($order_id$service_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCustomerExternalService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| The orders id |
 **service_name** | **string**| The service name |


### Return type

[**\Swagger\Client\Model\CustomerExternalServicesModelItem**](../Model/CustomerExternalServicesModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getCustomerExternalServices**
> \Swagger\Client\Model\CustomerExternalServicesModelCollection getCustomerExternalServices($order_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = array(56); // int | The orders id


try {
    $result = $apiInstance->getCustomerExternalServices($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCustomerExternalServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| The orders id |


### Return type

[**\Swagger\Client\Model\CustomerExternalServicesModelCollection**](../Model/CustomerExternalServicesModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getCustomerGroups**
> \Swagger\Client\Model\CustomerAddressesModelCollection getCustomerGroups($customer_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = array(56); // int | The customers id


try {
    $result = $apiInstance->getCustomerGroups($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCustomerGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| The customers id |


### Return type

[**\Swagger\Client\Model\CustomerAddressesModelCollection**](../Model/CustomerAddressesModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getCustomerTag**
> \Swagger\Client\Model\CustomerTagModelItem getCustomerTag($tag_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = array(56); // int | The tag id


try {
    $result = $apiInstance->getCustomerTag($tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCustomerTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **int**| The tag id |


### Return type

[**\Swagger\Client\Model\CustomerTagModelItem**](../Model/CustomerTagModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getCustomerTag_0**
> \Swagger\Client\Model\CustomerAddedTagModelItem getCustomerTag_0($customer_id$tag_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = array(56); // int | The customers id
$tag_id = array(56); // int | The customer tag id


try {
    $result = $apiInstance->getCustomerTag_0($customer_id$tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCustomerTag_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| The customers id |
 **tag_id** | **int**| The customer tag id |


### Return type

[**\Swagger\Client\Model\CustomerAddedTagModelItem**](../Model/CustomerAddedTagModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getCustomerTags**
> \Swagger\Client\Model\CustomerTagModelCollection getCustomerTags()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->getCustomerTags();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCustomerTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.


### Return type

[**\Swagger\Client\Model\CustomerTagModelCollection**](../Model/CustomerTagModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getCustomerTags_0**
> \Swagger\Client\Model\CustomerAddedTagModelCollection getCustomerTags_0($customer_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = array(56); // int | The customers id


try {
    $result = $apiInstance->getCustomerTags_0($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCustomerTags_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| The customers id |


### Return type

[**\Swagger\Client\Model\CustomerAddedTagModelCollection**](../Model/CustomerAddedTagModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getMediaFile**
> \Swagger\Client\Model\MediaFileModelItem getMediaFile($media_file_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_file_id = array(56); // int | The media files id


try {
    $result = $apiInstance->getMediaFile($media_file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMediaFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **media_file_id** | **int**| The media files id |


### Return type

[**\Swagger\Client\Model\MediaFileModelItem**](../Model/MediaFileModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getMediaFiles**
> \Swagger\Client\Model\MediaFileModelCollection getMediaFiles($page)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = array(56); // int | The page of media files to return


try {
    $result = $apiInstance->getMediaFiles($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMediaFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page of media files to return | [optional]


### Return type

[**\Swagger\Client\Model\MediaFileModelCollection**](../Model/MediaFileModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getOrder**
> \Swagger\Client\Model\OrderModelItem getOrder($order_id$include)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = array(56); // int | The orders id
$include = array("include_example"); // string | If you want to include child data in the result. Example: ?include=items (to include order items) or ?include=items,externalServices (to include order items as well as external ids). Available includes: items, externalServices, status, customer, addresses


try {
    $result = $apiInstance->getOrder($order_id$include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| The orders id |
 **include** | **string**| If you want to include child data in the result. Example: ?include&#x3D;items (to include order items) or ?include&#x3D;items,externalServices (to include order items as well as external ids). Available includes: items, externalServices, status, customer, addresses | [optional]


### Return type

[**\Swagger\Client\Model\OrderModelItem**](../Model/OrderModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getOrderAddress**
> \Swagger\Client\Model\AddressModelItem getOrderAddress($order_id$address_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = array(56); // int | The orders id
$address_type = array("address_type_example"); // string | The order address type


try {
    $result = $apiInstance->getOrderAddress($order_id$address_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrderAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| The orders id |
 **address_type** | **string**| The order address type |


### Return type

[**\Swagger\Client\Model\AddressModelItem**](../Model/AddressModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getOrderComment**
> \Swagger\Client\Model\OrderCommentModelItem getOrderComment($order_id$comment_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = array(56); // int | The orders id
$comment_id = array(56); // int | The order comments id


try {
    $result = $apiInstance->getOrderComment($order_id$comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrderComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| The orders id |
 **comment_id** | **int**| The order comments id |


### Return type

[**\Swagger\Client\Model\OrderCommentModelItem**](../Model/OrderCommentModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getOrderComments**
> \Swagger\Client\Model\OrderCommentModelCollection getOrderComments($order_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = array(56); // int | The orders id


try {
    $result = $apiInstance->getOrderComments($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrderComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| The orders id |


### Return type

[**\Swagger\Client\Model\OrderCommentModelCollection**](../Model/OrderCommentModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getOrderExternalService**
> \Swagger\Client\Model\OrderExternalServicesModelItem getOrderExternalService($order_id$service_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = array(56); // int | The orders id
$service_name = array("service_name_example"); // string | The service name


try {
    $result = $apiInstance->getOrderExternalService($order_id$service_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrderExternalService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| The orders id |
 **service_name** | **string**| The service name |


### Return type

[**\Swagger\Client\Model\OrderExternalServicesModelItem**](../Model/OrderExternalServicesModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getOrderExternalServices**
> \Swagger\Client\Model\OrderExternalServiceModelCollection getOrderExternalServices($order_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = array(56); // int | The orders id


try {
    $result = $apiInstance->getOrderExternalServices($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrderExternalServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| The orders id |


### Return type

[**\Swagger\Client\Model\OrderExternalServiceModelCollection**](../Model/OrderExternalServiceModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getOrderItem**
> \Swagger\Client\Model\OrderItemModelItem getOrderItem($order_id$order_item_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = array(56); // int | The orders id
$order_item_id = array(56); // int | The order item id


try {
    $result = $apiInstance->getOrderItem($order_id$order_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| The orders id |
 **order_item_id** | **int**| The order item id |


### Return type

[**\Swagger\Client\Model\OrderItemModelItem**](../Model/OrderItemModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getOrderItems**
> \Swagger\Client\Model\OrderItemModelCollection getOrderItems($order_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = array(56); // int | The orders id


try {
    $result = $apiInstance->getOrderItems($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrderItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| The orders id |


### Return type

[**\Swagger\Client\Model\OrderItemModelCollection**](../Model/OrderItemModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getOrderStatus**
> \Swagger\Client\Model\OrderStatusModelItem getOrderStatus($order_status_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_status_id = array(56); // int | The order status id


try {
    $result = $apiInstance->getOrderStatus($order_status_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrderStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_status_id** | **int**| The order status id |


### Return type

[**\Swagger\Client\Model\OrderStatusModelItem**](../Model/OrderStatusModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getOrderStatuses**
> \Swagger\Client\Model\OrderStatusModelCollection getOrderStatuses()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->getOrderStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrderStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.


### Return type

[**\Swagger\Client\Model\OrderStatusModelCollection**](../Model/OrderStatusModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getPaymentMethod**
> \Swagger\Client\Model\PaymentMethodModelItem getPaymentMethod($payment_method_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = array(56); // int | The payment method id


try {
    $result = $apiInstance->getPaymentMethod($payment_method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **int**| The payment method id |


### Return type

[**\Swagger\Client\Model\PaymentMethodModelItem**](../Model/PaymentMethodModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getPaymentMethods**
> \Swagger\Client\Model\PaymentMethodModelCollection getPaymentMethods()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->getPaymentMethods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.


### Return type

[**\Swagger\Client\Model\PaymentMethodModelCollection**](../Model/PaymentMethodModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getPricelist**
> \Swagger\Client\Model\PricelistModelItem getPricelist($pricelist_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pricelist_id = array(56); // int | The pricelist id


try {
    $result = $apiInstance->getPricelist($pricelist_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPricelist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pricelist_id** | **int**| The pricelist id |


### Return type

[**\Swagger\Client\Model\PricelistModelItem**](../Model/PricelistModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getPricelists**
> \Swagger\Client\Model\PricelistModelCollection getPricelists()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->getPricelists();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPricelists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.


### Return type

[**\Swagger\Client\Model\PricelistModelCollection**](../Model/PricelistModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getProduct**
> \Swagger\Client\Model\ProductModelItem getProduct($product_id$include)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The product id
$include = array("include_example"); // string | If you want to include child data in the result. Example: ?include=variants (to include product variants); ?include=variants,languages (to include both product variants and languages). Available includes: primaryVariant, primaryVariant.prices, mediaFiles, languages, vatRates, categories, unit, metaData. NOTE! Only one variant is included in result for performance reason. To fetch all variants, instead use /products/x/variants (unnecessary if hasSeveralVariants is false)


try {
    $result = $apiInstance->getProduct($product_id$include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product id |
 **include** | **string**| If you want to include child data in the result. Example: ?include&#x3D;variants (to include product variants); ?include&#x3D;variants,languages (to include both product variants and languages). Available includes: primaryVariant, primaryVariant.prices, mediaFiles, languages, vatRates, categories, unit, metaData. NOTE! Only one variant is included in result for performance reason. To fetch all variants, instead use /products/x/variants (unnecessary if hasSeveralVariants is false) | [optional]


### Return type

[**\Swagger\Client\Model\ProductModelItem**](../Model/ProductModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getProductCategory**
> \Swagger\Client\Model\ProductCategoryModelItem getProductCategory($category_id$include)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = array(56); // int | The product category id
$include = array("include_example"); // string | If you want to include child data in the result. Example: ?include=languages (to include language based data such as category names, description, etc). Available includes: languages


try {
    $result = $apiInstance->getProductCategory($category_id$include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProductCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| The product category id |
 **include** | **string**| If you want to include child data in the result. Example: ?include&#x3D;languages (to include language based data such as category names, description, etc). Available includes: languages | [optional]


### Return type

[**\Swagger\Client\Model\ProductCategoryModelItem**](../Model/ProductCategoryModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getProductManufacturer**
> \Swagger\Client\Model\ProductManufacturerModelItem getProductManufacturer($manufacturer_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manufacturer_id = array(56); // int | The manufacturers id


try {
    $result = $apiInstance->getProductManufacturer($manufacturer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProductManufacturer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manufacturer_id** | **int**| The manufacturers id |


### Return type

[**\Swagger\Client\Model\ProductManufacturerModelItem**](../Model/ProductManufacturerModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getProductMetaDataType**
> \Swagger\Client\Model\ProductMetaDataTypeModelItem getProductMetaDataType($meta_data_type_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meta_data_type_id = array(56); // int | The meta data types id


try {
    $result = $apiInstance->getProductMetaDataType($meta_data_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProductMetaDataType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meta_data_type_id** | **int**| The meta data types id |


### Return type

[**\Swagger\Client\Model\ProductMetaDataTypeModelItem**](../Model/ProductMetaDataTypeModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getProductStockStatus**
> \Swagger\Client\Model\ProductStockStatusModelItem getProductStockStatus($stock_status_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stock_status_id = array(56); // int | The stock status id


try {
    $result = $apiInstance->getProductStockStatus($stock_status_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProductStockStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_status_id** | **int**| The stock status id |


### Return type

[**\Swagger\Client\Model\ProductStockStatusModelItem**](../Model/ProductStockStatusModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getProductUnit**
> \Swagger\Client\Model\ProductUnitModelItem getProductUnit($unit_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unit_id = array(56); // int | The units id


try {
    $result = $apiInstance->getProductUnit($unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProductUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unit_id** | **int**| The units id |


### Return type

[**\Swagger\Client\Model\ProductUnitModelItem**](../Model/ProductUnitModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getProductsAttribute**
> \Swagger\Client\Model\ProductVariantAttributeModelItem getProductsAttribute($product_id$attribute_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The product id
$attribute_id = array(new \Swagger\Client\Model\Int()); // Int | The attribute id you want to fetch.


try {
    $result = $apiInstance->getProductsAttribute($product_id$attribute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProductsAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product id |
 **attribute_id** | [**Int**](../Model/.md)| The attribute id you want to fetch. |


### Return type

[**\Swagger\Client\Model\ProductVariantAttributeModelItem**](../Model/ProductVariantAttributeModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getProductsCategoryLink**
> \Swagger\Client\Model\ProductCategoryLinkModelItem getProductsCategoryLink($product_id$category_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The product id
$category_id = array(56); // int | The category id


try {
    $result = $apiInstance->getProductsCategoryLink($product_id$category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProductsCategoryLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product id |
 **category_id** | **int**| The category id |


### Return type

[**\Swagger\Client\Model\ProductCategoryLinkModelItem**](../Model/ProductCategoryLinkModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getProductsLanguage**
> \Swagger\Client\Model\ProductLanguageModelItem getProductsLanguage($product_id$lang_code)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The product id
$lang_code = array("lang_code_example"); // string | The language code you want to fetch/change. Supported language codes are: sv, en, no, da, fi, de, fr, es


try {
    $result = $apiInstance->getProductsLanguage($product_id$lang_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProductsLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product id |
 **lang_code** | **string**| The language code you want to fetch/change. Supported language codes are: sv, en, no, da, fi, de, fr, es |


### Return type

[**\Swagger\Client\Model\ProductLanguageModelItem**](../Model/ProductLanguageModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getProductsMediaFileLink**
> \Swagger\Client\Model\ProductMediaFileLinkModelItem getProductsMediaFileLink($product_id$media_file_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The product id
$media_file_id = array(56); // int | The media file id of the link you want to fetch/change


try {
    $result = $apiInstance->getProductsMediaFileLink($product_id$media_file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProductsMediaFileLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product id |
 **media_file_id** | **int**| The media file id of the link you want to fetch/change |


### Return type

[**\Swagger\Client\Model\ProductMediaFileLinkModelItem**](../Model/ProductMediaFileLinkModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getProductsMetaData**
> \Swagger\Client\Model\ProductMetaDataModelItem getProductsMetaData($product_id$meta_data_type_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The product id
$meta_data_type_id = array(56); // int | The meta data type id


try {
    $result = $apiInstance->getProductsMetaData($product_id$meta_data_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProductsMetaData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product id |
 **meta_data_type_id** | **int**| The meta data type id |


### Return type

[**\Swagger\Client\Model\ProductMetaDataModelItem**](../Model/ProductMetaDataModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getProductsVariant**
> \Swagger\Client\Model\ProductVariantModelItem getProductsVariant($product_id$variant_id$include)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The product id
$variant_id = array(56); // int | The products variants id
$include = array("include_example"); // string | If you want to include child data in the result. Example: ?include=prices (to include variants prices). Available includes: prices,  attributes, attributes.attribute


try {
    $result = $apiInstance->getProductsVariant($product_id$variant_id$include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProductsVariant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product id |
 **variant_id** | **int**| The products variants id |
 **include** | **string**| If you want to include child data in the result. Example: ?include&#x3D;prices (to include variants prices). Available includes: prices,  attributes, attributes.attribute | [optional]


### Return type

[**\Swagger\Client\Model\ProductVariantModelItem**](../Model/ProductVariantModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getProductsVariantsAttributeValue**
> \Swagger\Client\Model\ProductVariantAttributeModelItem getProductsVariantsAttributeValue($attribute_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = array(56); // int | The attribute value id


try {
    $result = $apiInstance->getProductsVariantsAttributeValue($attribute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProductsVariantsAttributeValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**| The attribute value id |


### Return type

[**\Swagger\Client\Model\ProductVariantAttributeModelItem**](../Model/ProductVariantAttributeModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getProductsVariantsAttributeValue_0**
> \Swagger\Client\Model\ProductVariantAttributeValueModelItem getProductsVariantsAttributeValue_0($attribute_id$attribute_value_id$include)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = array(56); // int | The attribute id
$attribute_value_id = array(56); // int | The attribe value id
$include = array("include_example"); // string | If you want to include child data in the result. Example: ?include=attribute (to include the attribute the values belongs to). Available includes: attribute


try {
    $result = $apiInstance->getProductsVariantsAttributeValue_0($attribute_id$attribute_value_id$include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProductsVariantsAttributeValue_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**| The attribute id |
 **attribute_value_id** | **int**| The attribe value id |
 **include** | **string**| If you want to include child data in the result. Example: ?include&#x3D;attribute (to include the attribute the values belongs to). Available includes: attribute | [optional]


### Return type

[**\Swagger\Client\Model\ProductVariantAttributeValueModelItem**](../Model/ProductVariantAttributeValueModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getProductsVariantsPricelistPrice**
> \Swagger\Client\Model\ProductVariantPriceModelItem getProductsVariantsPricelistPrice($product_id$variant_id$pricelist_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The product id
$variant_id = array(56); // int | The products variants id
$pricelist_id = array(56); // int | The pricelist id


try {
    $result = $apiInstance->getProductsVariantsPricelistPrice($product_id$variant_id$pricelist_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProductsVariantsPricelistPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product id |
 **variant_id** | **int**| The products variants id |
 **pricelist_id** | **int**| The pricelist id |


### Return type

[**\Swagger\Client\Model\ProductVariantPriceModelItem**](../Model/ProductVariantPriceModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getProductsVatRate**
> \Swagger\Client\Model\ProductVatRateModelItem getProductsVatRate($product_id$country_code)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The product id
$country_code = array("country_code_example"); // string | The country code for the vat rate to fetch/manipulate


try {
    $result = $apiInstance->getProductsVatRate($product_id$country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProductsVatRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product id |
 **country_code** | **string**| The country code for the vat rate to fetch/manipulate |


### Return type

[**\Swagger\Client\Model\ProductVatRateModelItem**](../Model/ProductVatRateModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getShippingMethod**
> \Swagger\Client\Model\ShippingMethodModelItem getShippingMethod($shipping_method_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipping_method_id = array(56); // int | The shipping method id


try {
    $result = $apiInstance->getShippingMethod($shipping_method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getShippingMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_method_id** | **int**| The shipping method id |


### Return type

[**\Swagger\Client\Model\ShippingMethodModelItem**](../Model/ShippingMethodModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getShippingMethods**
> \Swagger\Client\Model\ShippingMethodModelCollection getShippingMethods()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->getShippingMethods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getShippingMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.


### Return type

[**\Swagger\Client\Model\ShippingMethodModelCollection**](../Model/ShippingMethodModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getShippingTrackingTypes**
> \Swagger\Client\Model\ShippingTrackingTypeModelCollection getShippingTrackingTypes()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->getShippingTrackingTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getShippingTrackingTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.


### Return type

[**\Swagger\Client\Model\ShippingTrackingTypeModelCollection**](../Model/ShippingTrackingTypeModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **getShop**
> \Swagger\Client\Model\ShopItem getShop()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->getShop();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getShop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.


### Return type

[**\Swagger\Client\Model\ShopItem**](../Model/ShopItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listCustomers**
> \Swagger\Client\Model\CustomerModelCollection listCustomers($page$sort_by$sort_order$created_since$updated_since$include_without_account$include)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = array(56); // int | The page of customers to return
$sort_by = array("sort_by_example"); // string | Sort the result using a specified field. customerId is default. Valid options are: customerId
$sort_order = array("sort_order_example"); // string | ASC for an ascending sort order; or DESC for a descending sort order. DESC is default
$created_since = array("created_since_example"); // string | Use this to only fetch customers that has been created since a certain time. The time should be formatted using ISO-8601 (url encoded)
$updated_since = array("updated_since_example"); // string | Use this to only fetch customers that has been modified since a certain time. The time should be formatted using ISO-8601 (url encoded)
$include_without_account = array(true); // bool | Use this to also include customers without an account
$include = array("include_example"); // string | If you want to include child data in the result. Example: ?include=tags (to include customer tags); ?include=tags,addresses (to include both customer tags and addresses). Available includes: tags, externalServices, addresses


try {
    $result = $apiInstance->listCustomers($page$sort_by$sort_order$created_since$updated_since$include_without_account$include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page of customers to return | [optional]
 **sort_by** | **string**| Sort the result using a specified field. customerId is default. Valid options are: customerId | [optional]
 **sort_order** | **string**| ASC for an ascending sort order; or DESC for a descending sort order. DESC is default | [optional]
 **created_since** | **string**| Use this to only fetch customers that has been created since a certain time. The time should be formatted using ISO-8601 (url encoded) | [optional]
 **updated_since** | **string**| Use this to only fetch customers that has been modified since a certain time. The time should be formatted using ISO-8601 (url encoded) | [optional]
 **include_without_account** | **bool**| Use this to also include customers without an account | [optional]
 **include** | **string**| If you want to include child data in the result. Example: ?include&#x3D;tags (to include customer tags); ?include&#x3D;tags,addresses (to include both customer tags and addresses). Available includes: tags, externalServices, addresses | [optional]


### Return type

[**\Swagger\Client\Model\CustomerModelCollection**](../Model/CustomerModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listOrderAddresses**
> \Swagger\Client\Model\OrderAddressCollection listOrderAddresses($order_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = array(56); // int | The orders id


try {
    $result = $apiInstance->listOrderAddresses($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listOrderAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| The orders id |


### Return type

[**\Swagger\Client\Model\OrderAddressCollection**](../Model/OrderAddressCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listOrders**
> \Swagger\Client\Model\OrderModelCollection listOrders($page$include_non_complete_payments$filter_query$filter_payment_method_id$filter_shipping_method_id$orders_created_after$orders_created_before$status_filter$sort_by$sort_order$include)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = array(56); // int | The page of orders to return
$include_non_complete_payments = array(true); // bool | Set to true if you want to fetch orders that has not been completed yet. An order is ”completed” when the payment step has been completed successfully.
$filter_query = array("filter_query_example"); // string | A filter query to filter the fetched orders by. Will search in fields such as: customer/company name, order items sku and description, etc
$filter_payment_method_id = array(56); // int | Only fetch orders with a certain payment method Id
$filter_shipping_method_id = array(56); // int | Only fetch orders with a certain shipping method Id
$orders_created_after = array("orders_created_after_example"); // string | Only fetch orders created after this timestamp (The time should be formatted using ISO-8601 and url encoded)
$orders_created_before = array("orders_created_before_example"); // string | Only fetch orders created before this timestamp (The time should be formatted using ISO-8601 and url encoded)
$status_filter = array(56); // int | Only fetch orders with the specifiec order status. Use order status ID
$sort_by = array("sort_by_example"); // string | Sort the result using a specified field. orderId is default
$sort_order = array("sort_order_example"); // string | ASC for an ascending sort order; or DESC for a descending sort order. DESC is default
$include = array("include_example"); // string | If you want to include child data in the result. Example: ?include=items (to include order items) or ?include=items,externalServices (to include order items as well as external ids). Available includes: items, externalServices, status, customer, addresses


try {
    $result = $apiInstance->listOrders($page$include_non_complete_payments$filter_query$filter_payment_method_id$filter_shipping_method_id$orders_created_after$orders_created_before$status_filter$sort_by$sort_order$include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page of orders to return | [optional]
 **include_non_complete_payments** | **bool**| Set to true if you want to fetch orders that has not been completed yet. An order is ”completed” when the payment step has been completed successfully. | [optional]
 **filter_query** | **string**| A filter query to filter the fetched orders by. Will search in fields such as: customer/company name, order items sku and description, etc | [optional]
 **filter_payment_method_id** | **int**| Only fetch orders with a certain payment method Id | [optional]
 **filter_shipping_method_id** | **int**| Only fetch orders with a certain shipping method Id | [optional]
 **orders_created_after** | **string**| Only fetch orders created after this timestamp (The time should be formatted using ISO-8601 and url encoded) | [optional]
 **orders_created_before** | **string**| Only fetch orders created before this timestamp (The time should be formatted using ISO-8601 and url encoded) | [optional]
 **status_filter** | **int**| Only fetch orders with the specifiec order status. Use order status ID | [optional]
 **sort_by** | **string**| Sort the result using a specified field. orderId is default | [optional]
 **sort_order** | **string**| ASC for an ascending sort order; or DESC for a descending sort order. DESC is default | [optional]
 **include** | **string**| If you want to include child data in the result. Example: ?include&#x3D;items (to include order items) or ?include&#x3D;items,externalServices (to include order items as well as external ids). Available includes: items, externalServices, status, customer, addresses | [optional]


### Return type

[**\Swagger\Client\Model\OrderModelCollection**](../Model/OrderModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listProductCategories**
> \Swagger\Client\Model\ProductCategoryModelCollection listProductCategories($page$external_id$parent$filter_visible$include)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = array(56); // int | The page of categories to return
$external_id = array("external_id_example"); // string | Use to fetch categories with a specific external id
$parent = array(new \Swagger\Client\Model\Int()); // Int | Use to fetch only categories with this parentId
$filter_visible = array(true); // bool | Only fetch categories visible to visitors
$include = array("include_example"); // string | If you want to include child data in the result. Example: ?include=languages (to include language based data such as category names, description, etc). Available includes: languages


try {
    $result = $apiInstance->listProductCategories($page$external_id$parent$filter_visible$include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProductCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page of categories to return | [optional]
 **external_id** | **string**| Use to fetch categories with a specific external id | [optional]
 **parent** | [**Int**](../Model/.md)| Use to fetch only categories with this parentId | [optional]
 **filter_visible** | **bool**| Only fetch categories visible to visitors | [optional]
 **include** | **string**| If you want to include child data in the result. Example: ?include&#x3D;languages (to include language based data such as category names, description, etc). Available includes: languages | [optional]


### Return type

[**\Swagger\Client\Model\ProductCategoryModelCollection**](../Model/ProductCategoryModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listProductManufacturers**
> \Swagger\Client\Model\ProductManufacturerModelCollection listProductManufacturers()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->listProductManufacturers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProductManufacturers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.


### Return type

[**\Swagger\Client\Model\ProductManufacturerModelCollection**](../Model/ProductManufacturerModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listProductMetaDataTypes**
> \Swagger\Client\Model\ProductMetaDataTypeModelCollection listProductMetaDataTypes()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->listProductMetaDataTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProductMetaDataTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.


### Return type

[**\Swagger\Client\Model\ProductMetaDataTypeModelCollection**](../Model/ProductMetaDataTypeModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listProductStockStatses**
> \Swagger\Client\Model\ProductStockStatusModelCollection listProductStockStatses()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->listProductStockStatses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProductStockStatses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.


### Return type

[**\Swagger\Client\Model\ProductStockStatusModelCollection**](../Model/ProductStockStatusModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listProductUnits**
> \Swagger\Client\Model\ProductUnitModelCollection listProductUnits()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->listProductUnits();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProductUnits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.


### Return type

[**\Swagger\Client\Model\ProductUnitModelCollection**](../Model/ProductUnitModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listProducts**
> \Swagger\Client\Model\ProductModelCollection listProducts($page$created_since$updated_since$include)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = array(56); // int | The page of products to return
$created_since = array("created_since_example"); // string | Use this to only fetch products that has been created since a certain time. The time should be formatted using ISO-8601 (url encoded)
$updated_since = array("updated_since_example"); // string | Use this to only fetch products that has been modified since a certain time. The time should be formatted using ISO-8601 (url encoded)
$include = array("include_example"); // string | If you want to include child data in the result. Example: ?include=primaryVariant (to include primary product variant);?include=primaryVariant,languages (to include both primary product variant and languages). Available includes: primaryVariant, primaryVariant.prices, primaryVariant.attributes, attributes, mediaFiles, languages, vatRates, categories, unit, metaData. NOTE! Only one variant is included in result for performance reason. To fetch all variants, instead use /products/x/variants(unnecessary if hasSeveralVariants is false)


try {
    $result = $apiInstance->listProducts($page$created_since$updated_since$include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page of products to return | [optional]
 **created_since** | **string**| Use this to only fetch products that has been created since a certain time. The time should be formatted using ISO-8601 (url encoded) | [optional]
 **updated_since** | **string**| Use this to only fetch products that has been modified since a certain time. The time should be formatted using ISO-8601 (url encoded) | [optional]
 **include** | **string**| If you want to include child data in the result. Example: ?include&#x3D;primaryVariant (to include primary product variant);?include&#x3D;primaryVariant,languages (to include both primary product variant and languages). Available includes: primaryVariant, primaryVariant.prices, primaryVariant.attributes, attributes, mediaFiles, languages, vatRates, categories, unit, metaData. NOTE! Only one variant is included in result for performance reason. To fetch all variants, instead use /products/x/variants(unnecessary if hasSeveralVariants is false) | [optional]


### Return type

[**\Swagger\Client\Model\ProductModelCollection**](../Model/ProductModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listProductsAttributes**
> \Swagger\Client\Model\ProductVariantAttributeModelCollection listProductsAttributes($product_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The products id


try {
    $result = $apiInstance->listProductsAttributes($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProductsAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The products id |


### Return type

[**\Swagger\Client\Model\ProductVariantAttributeModelCollection**](../Model/ProductVariantAttributeModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listProductsCategoryLinks**
> \Swagger\Client\Model\ProductCategoryLinkModelCollection listProductsCategoryLinks($product_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The products id


try {
    $result = $apiInstance->listProductsCategoryLinks($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProductsCategoryLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The products id |


### Return type

[**\Swagger\Client\Model\ProductCategoryLinkModelCollection**](../Model/ProductCategoryLinkModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listProductsLanguages**
> \Swagger\Client\Model\ProductLanguageModelCollection listProductsLanguages($product_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The products id


try {
    $result = $apiInstance->listProductsLanguages($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProductsLanguages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The products id |


### Return type

[**\Swagger\Client\Model\ProductLanguageModelCollection**](../Model/ProductLanguageModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listProductsMediaFileLinks**
> \Swagger\Client\Model\ProductMediaFileLinkModelCollection listProductsMediaFileLinks($product_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The products id


try {
    $result = $apiInstance->listProductsMediaFileLinks($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProductsMediaFileLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The products id |


### Return type

[**\Swagger\Client\Model\ProductMediaFileLinkModelCollection**](../Model/ProductMediaFileLinkModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listProductsMetaData**
> \Swagger\Client\Model\ProductMetaDataModelCollection listProductsMetaData($product_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The products id


try {
    $result = $apiInstance->listProductsMetaData($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProductsMetaData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The products id |


### Return type

[**\Swagger\Client\Model\ProductMetaDataModelCollection**](../Model/ProductMetaDataModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listProductsVariants**
> \Swagger\Client\Model\ProductVariantModelCollection listProductsVariants($product_id$page$include)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The products id
$page = array(56); // int | The page of customers to return
$include = array("include_example"); // string | If you want to include child data in the result. Example: ?include=prices (to include variants prices). Available includes: prices, attributes, attributes.attribute


try {
    $result = $apiInstance->listProductsVariants($product_id$page$include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProductsVariants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The products id |
 **page** | **int**| The page of customers to return | [optional]
 **include** | **string**| If you want to include child data in the result. Example: ?include&#x3D;prices (to include variants prices). Available includes: prices, attributes, attributes.attribute | [optional]


### Return type

[**\Swagger\Client\Model\ProductVariantModelCollection**](../Model/ProductVariantModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listProductsVariantsAttributeValues**
> \Swagger\Client\Model\ProductVariantAttributeModelCollection listProductsVariantsAttributeValues()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->listProductsVariantsAttributeValues();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProductsVariantsAttributeValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.


### Return type

[**\Swagger\Client\Model\ProductVariantAttributeModelCollection**](../Model/ProductVariantAttributeModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listProductsVariantsAttributeValues_0**
> \Swagger\Client\Model\ProductVariantAttributeValueModelCollection listProductsVariantsAttributeValues_0($attribute_id$include)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = array(56); // int | The attribute id
$include = array("include_example"); // string | If you want to include child data in the result. Example: ?include=attribute (to include the attribute the values belongs to). Available includes: attribute


try {
    $result = $apiInstance->listProductsVariantsAttributeValues_0($attribute_id$include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProductsVariantsAttributeValues_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**| The attribute id |
 **include** | **string**| If you want to include child data in the result. Example: ?include&#x3D;attribute (to include the attribute the values belongs to). Available includes: attribute | [optional]


### Return type

[**\Swagger\Client\Model\ProductVariantAttributeValueModelCollection**](../Model/ProductVariantAttributeValueModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listProductsVariantsPricelistPrices**
> \Swagger\Client\Model\ProductVariantPriceModelCollection listProductsVariantsPricelistPrices($product_id$variant_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The products id
$variant_id = array(56); // int | The products variants id


try {
    $result = $apiInstance->listProductsVariantsPricelistPrices($product_id$variant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProductsVariantsPricelistPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The products id |
 **variant_id** | **int**| The products variants id |


### Return type

[**\Swagger\Client\Model\ProductVariantPriceModelCollection**](../Model/ProductVariantPriceModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **listProductsVatRates**
> \Swagger\Client\Model\ProductVatRateModelCollection listProductsVatRates($product_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = array(56); // int | The products id


try {
    $result = $apiInstance->listProductsVatRates($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProductsVatRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The products id |


### Return type

[**\Swagger\Client\Model\ProductVatRateModelCollection**](../Model/ProductVatRateModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchAttribute**
> \Swagger\Client\Model\ProductVariantAttributeModelItem patchAttribute($body$attribute_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductVariantAttributeModelUpdatable(); // \Swagger\Client\Model\ProductVariantAttributeModelUpdatable | Attribute data
$attribute_id = array(56); // int | The attribute value id


try {
    $result = $apiInstance->patchAttribute($body$attribute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductVariantAttributeModelUpdatable**](../Model/ProductVariantAttributeModelUpdatable.md)| Attribute data |
 **attribute_id** | **int**| The attribute value id |


### Return type

[**\Swagger\Client\Model\ProductVariantAttributeModelItem**](../Model/ProductVariantAttributeModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchCustomer**
> \Swagger\Client\Model\CustomerModelItem patchCustomer($body$customer_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CustomerUpdateModel(); // \Swagger\Client\Model\CustomerUpdateModel | Customer data
$customer_id = array(56); // int | The customers id


try {
    $result = $apiInstance->patchCustomer($body$customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerUpdateModel**](../Model/CustomerUpdateModel.md)| Customer data |
 **customer_id** | **int**| The customers id |


### Return type

[**\Swagger\Client\Model\CustomerModelItem**](../Model/CustomerModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchCustomerAddress**
> \Swagger\Client\Model\CustomerAddressesModelItem patchCustomerAddress($body$customer_id$address_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AddressModel(); // \Swagger\Client\Model\AddressModel | Address data
$customer_id = array(56); // int | The customers id
$address_type = array("address_type_example"); // string | The customer address type


try {
    $result = $apiInstance->patchCustomerAddress($body$customer_id$address_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AddressModel**](../Model/AddressModel.md)| Address data |
 **customer_id** | **int**| The customers id |
 **address_type** | **string**| The customer address type |


### Return type

[**\Swagger\Client\Model\CustomerAddressesModelItem**](../Model/CustomerAddressesModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchMediaFile**
> \Swagger\Client\Model\MediaFileModelItem patchMediaFile($body$media_file_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MediaFileUploadModel(); // \Swagger\Client\Model\MediaFileUploadModel | The media file to upload
$media_file_id = array(56); // int | The media files id


try {
    $result = $apiInstance->patchMediaFile($body$media_file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchMediaFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MediaFileUploadModel**](../Model/MediaFileUploadModel.md)| The media file to upload |
 **media_file_id** | **int**| The media files id |


### Return type

[**\Swagger\Client\Model\MediaFileModelItem**](../Model/MediaFileModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchOrder**
> \Swagger\Client\Model\OrderModelItem patchOrder($body$order_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrderUpdateModel(); // \Swagger\Client\Model\OrderUpdateModel | Order data
$order_id = array(56); // int | The orders id


try {
    $result = $apiInstance->patchOrder($body$order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderUpdateModel**](../Model/OrderUpdateModel.md)| Order data |
 **order_id** | **int**| The orders id |


### Return type

[**\Swagger\Client\Model\OrderModelItem**](../Model/OrderModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchOrderAddress**
> \Swagger\Client\Model\AddressModelItem patchOrderAddress($body$order_id$address_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AddressModel(); // \Swagger\Client\Model\AddressModel | Address data
$order_id = array(56); // int | The orders id
$address_type = array("address_type_example"); // string | The order address type


try {
    $result = $apiInstance->patchOrderAddress($body$order_id$address_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchOrderAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AddressModel**](../Model/AddressModel.md)| Address data |
 **order_id** | **int**| The orders id |
 **address_type** | **string**| The order address type |


### Return type

[**\Swagger\Client\Model\AddressModelItem**](../Model/AddressModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchOrderExternalService**
> \Swagger\Client\Model\OrderExternalServicesModelItem patchOrderExternalService($body$order_id$service_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrderExternalServiceModel(); // \Swagger\Client\Model\OrderExternalServiceModel | Order external service data
$order_id = array(56); // int | The orders id
$service_name = array("service_name_example"); // string | The service name


try {
    $result = $apiInstance->patchOrderExternalService($body$order_id$service_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchOrderExternalService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderExternalServiceModel**](../Model/OrderExternalServiceModel.md)| Order external service data |
 **order_id** | **int**| The orders id |
 **service_name** | **string**| The service name |


### Return type

[**\Swagger\Client\Model\OrderExternalServicesModelItem**](../Model/OrderExternalServicesModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchOrderItem**
> \Swagger\Client\Model\OrderItemModelItem patchOrderItem($body$order_id$order_item_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrderItemModel(); // \Swagger\Client\Model\OrderItemModel | Order item data
$order_id = array(56); // int | The orders id
$order_item_id = array(56); // int | The order item id


try {
    $result = $apiInstance->patchOrderItem($body$order_id$order_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderItemModel**](../Model/OrderItemModel.md)| Order item data |
 **order_id** | **int**| The orders id |
 **order_item_id** | **int**| The order item id |


### Return type

[**\Swagger\Client\Model\OrderItemModelItem**](../Model/OrderItemModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchOrderStatus**
> \Swagger\Client\Model\OrderStatusModelItem patchOrderStatus($body$order_status_id)



NB! You are not allowed to update standard order statuses (all statuses with an idCode set)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrderStatusModel(); // \Swagger\Client\Model\OrderStatusModel | Order status data
$order_status_id = array(56); // int | The order status id


try {
    $result = $apiInstance->patchOrderStatus($body$order_status_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchOrderStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderStatusModel**](../Model/OrderStatusModel.md)| Order status data |
 **order_status_id** | **int**| The order status id |


### Return type

[**\Swagger\Client\Model\OrderStatusModelItem**](../Model/OrderStatusModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchProduct**
> \Swagger\Client\Model\ProductModelItem patchProduct($body$product_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductModelUpdatable(); // \Swagger\Client\Model\ProductModelUpdatable | Product data
$product_id = array(56); // int | The product id


try {
    $result = $apiInstance->patchProduct($body$product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductModelUpdatable**](../Model/ProductModelUpdatable.md)| Product data |
 **product_id** | **int**| The product id |


### Return type

[**\Swagger\Client\Model\ProductModelItem**](../Model/ProductModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchProductCategory**
> \Swagger\Client\Model\ProductCategoryModelItem patchProductCategory($body$category_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductCategoryModel(); // \Swagger\Client\Model\ProductCategoryModel | Product category data
$category_id = array(56); // int | The product category id


try {
    $result = $apiInstance->patchProductCategory($body$category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchProductCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductCategoryModel**](../Model/ProductCategoryModel.md)| Product category data |
 **category_id** | **int**| The product category id |


### Return type

[**\Swagger\Client\Model\ProductCategoryModelItem**](../Model/ProductCategoryModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchProductStockStatus**
> \Swagger\Client\Model\ProductStockStatusModelItem patchProductStockStatus($body$stock_status_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductStockStatusModel(); // \Swagger\Client\Model\ProductStockStatusModel | Product stock status data
$stock_status_id = array(56); // int | The stock status id


try {
    $result = $apiInstance->patchProductStockStatus($body$stock_status_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchProductStockStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductStockStatusModel**](../Model/ProductStockStatusModel.md)| Product stock status data |
 **stock_status_id** | **int**| The stock status id |


### Return type

[**\Swagger\Client\Model\ProductStockStatusModelItem**](../Model/ProductStockStatusModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchProductsCategoryLink**
> \Swagger\Client\Model\ProductCategoryLinkModelItem patchProductsCategoryLink($body$product_id$category_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductCategoryLinkModel(); // \Swagger\Client\Model\ProductCategoryLinkModel | Product category link data
$product_id = array(56); // int | The product id
$category_id = array(56); // int | The category id


try {
    $result = $apiInstance->patchProductsCategoryLink($body$product_id$category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchProductsCategoryLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductCategoryLinkModel**](../Model/ProductCategoryLinkModel.md)| Product category link data |
 **product_id** | **int**| The product id |
 **category_id** | **int**| The category id |


### Return type

[**\Swagger\Client\Model\ProductCategoryLinkModelItem**](../Model/ProductCategoryLinkModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchProductsLanguage**
> \Swagger\Client\Model\ProductLanguageModelItem patchProductsLanguage($body$product_id$lang_code)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductLanguageModel(); // \Swagger\Client\Model\ProductLanguageModel | Product language data
$product_id = array(56); // int | The product id
$lang_code = array("lang_code_example"); // string | The language code you want to fetch/change. Supported language codes are: sv, en, no, da, fi, de, fr, es


try {
    $result = $apiInstance->patchProductsLanguage($body$product_id$lang_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchProductsLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductLanguageModel**](../Model/ProductLanguageModel.md)| Product language data |
 **product_id** | **int**| The product id |
 **lang_code** | **string**| The language code you want to fetch/change. Supported language codes are: sv, en, no, da, fi, de, fr, es |


### Return type

[**\Swagger\Client\Model\ProductLanguageModelItem**](../Model/ProductLanguageModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchProductsMediaFileLink**
> \Swagger\Client\Model\ProductMediaFileLinkModelItem patchProductsMediaFileLink($body$product_id$media_file_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductMediaFileLinkModel(); // \Swagger\Client\Model\ProductMediaFileLinkModel | Product media file link data
$product_id = array(56); // int | The product id
$media_file_id = array(56); // int | The media file id of the link you want to fetch/change


try {
    $result = $apiInstance->patchProductsMediaFileLink($body$product_id$media_file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchProductsMediaFileLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductMediaFileLinkModel**](../Model/ProductMediaFileLinkModel.md)| Product media file link data |
 **product_id** | **int**| The product id |
 **media_file_id** | **int**| The media file id of the link you want to fetch/change |


### Return type

[**\Swagger\Client\Model\ProductMediaFileLinkModelItem**](../Model/ProductMediaFileLinkModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchProductsMetaData**
> \Swagger\Client\Model\ProductMetaDataModelItem patchProductsMetaData($body$product_id$meta_data_type_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductMetaDataModelUpdatable(); // \Swagger\Client\Model\ProductMetaDataModelUpdatable | Product meta data data
$product_id = array(56); // int | The product id
$meta_data_type_id = array(56); // int | The meta data type id


try {
    $result = $apiInstance->patchProductsMetaData($body$product_id$meta_data_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchProductsMetaData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductMetaDataModelUpdatable**](../Model/ProductMetaDataModelUpdatable.md)| Product meta data data |
 **product_id** | **int**| The product id |
 **meta_data_type_id** | **int**| The meta data type id |


### Return type

[**\Swagger\Client\Model\ProductMetaDataModelItem**](../Model/ProductMetaDataModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchProductsVariant**
> \Swagger\Client\Model\ProductVariantModelItem patchProductsVariant($body$product_id$variant_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductVariantModel(); // \Swagger\Client\Model\ProductVariantModel | Products variant data
$product_id = array(56); // int | The product id
$variant_id = array(56); // int | The products variants id


try {
    $result = $apiInstance->patchProductsVariant($body$product_id$variant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchProductsVariant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductVariantModel**](../Model/ProductVariantModel.md)| Products variant data |
 **product_id** | **int**| The product id |
 **variant_id** | **int**| The products variants id |


### Return type

[**\Swagger\Client\Model\ProductVariantModelItem**](../Model/ProductVariantModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchProductsVariantsAttributeValues**
> \Swagger\Client\Model\ProductVariantAttributeValueModelCollection patchProductsVariantsAttributeValues($body$attribute_id$attribute_value_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductVariantAttributeValueModelUpdatable(); // \Swagger\Client\Model\ProductVariantAttributeValueModelUpdatable | Attribute value data
$attribute_id = array(56); // int | The attribute id
$attribute_value_id = array(56); // int | The attribe value id


try {
    $result = $apiInstance->patchProductsVariantsAttributeValues($body$attribute_id$attribute_value_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchProductsVariantsAttributeValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductVariantAttributeValueModelUpdatable**](../Model/ProductVariantAttributeValueModelUpdatable.md)| Attribute value data |
 **attribute_id** | **int**| The attribute id |
 **attribute_value_id** | **int**| The attribe value id |


### Return type

[**\Swagger\Client\Model\ProductVariantAttributeValueModelCollection**](../Model/ProductVariantAttributeValueModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchProductsVariantsPricelistPrice**
> \Swagger\Client\Model\ProductVariantPriceModelItem patchProductsVariantsPricelistPrice($body$product_id$variant_id$pricelist_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductVariantPriceModel(); // \Swagger\Client\Model\ProductVariantPriceModel | Pricelist price data
$product_id = array(56); // int | The product id
$variant_id = array(56); // int | The products variants id
$pricelist_id = array(56); // int | The pricelist id


try {
    $result = $apiInstance->patchProductsVariantsPricelistPrice($body$product_id$variant_id$pricelist_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchProductsVariantsPricelistPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductVariantPriceModel**](../Model/ProductVariantPriceModel.md)| Pricelist price data |
 **product_id** | **int**| The product id |
 **variant_id** | **int**| The products variants id |
 **pricelist_id** | **int**| The pricelist id |


### Return type

[**\Swagger\Client\Model\ProductVariantPriceModelItem**](../Model/ProductVariantPriceModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchProductsVatRate**
> \Swagger\Client\Model\ProductVatRateModelItem patchProductsVatRate($body$product_id$country_code)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductVatRateModel(); // \Swagger\Client\Model\ProductVatRateModel | Products vat rate data
$product_id = array(56); // int | The product id
$country_code = array("country_code_example"); // string | The country code for the vat rate to fetch/manipulate


try {
    $result = $apiInstance->patchProductsVatRate($body$product_id$country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchProductsVatRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductVatRateModel**](../Model/ProductVatRateModel.md)| Products vat rate data |
 **product_id** | **int**| The product id |
 **country_code** | **string**| The country code for the vat rate to fetch/manipulate |


### Return type

[**\Swagger\Client\Model\ProductVatRateModelItem**](../Model/ProductVatRateModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **patchTagOnCustomerBy**
> \Swagger\Client\Model\CustomerAddedTagModelItem patchTagOnCustomerBy($body$customer_id$tag_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CustomerAddedTagModel(); // \Swagger\Client\Model\CustomerAddedTagModel | Customer tag data
$customer_id = array(56); // int | The customers id
$tag_id = array(56); // int | The customer tag id


try {
    $result = $apiInstance->patchTagOnCustomerBy($body$customer_id$tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchTagOnCustomerBy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerAddedTagModel**](../Model/CustomerAddedTagModel.md)| Customer tag data |
 **customer_id** | **int**| The customers id |
 **tag_id** | **int**| The customer tag id |


### Return type

[**\Swagger\Client\Model\CustomerAddedTagModelItem**](../Model/CustomerAddedTagModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putAttribute**
> \Swagger\Client\Model\ProductVariantAttributeModelItem putAttribute($body$attribute_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductVariantAttributeModelUpdatable(); // \Swagger\Client\Model\ProductVariantAttributeModelUpdatable | Attribute data
$attribute_id = array(56); // int | The attribute value id


try {
    $result = $apiInstance->putAttribute($body$attribute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductVariantAttributeModelUpdatable**](../Model/ProductVariantAttributeModelUpdatable.md)| Attribute data |
 **attribute_id** | **int**| The attribute value id |


### Return type

[**\Swagger\Client\Model\ProductVariantAttributeModelItem**](../Model/ProductVariantAttributeModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putCustomer**
> \Swagger\Client\Model\CustomerModelItem putCustomer($body$customer_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CustomerUpdateModel(); // \Swagger\Client\Model\CustomerUpdateModel | Customer data
$customer_id = array(56); // int | The customers id


try {
    $result = $apiInstance->putCustomer($body$customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerUpdateModel**](../Model/CustomerUpdateModel.md)| Customer data |
 **customer_id** | **int**| The customers id |


### Return type

[**\Swagger\Client\Model\CustomerModelItem**](../Model/CustomerModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putCustomerAddress**
> \Swagger\Client\Model\CustomerAddressesModelItem putCustomerAddress($body$customer_id$address_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AddressModel(); // \Swagger\Client\Model\AddressModel | Address data
$customer_id = array(56); // int | The customers id
$address_type = array("address_type_example"); // string | The customer address type


try {
    $result = $apiInstance->putCustomerAddress($body$customer_id$address_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AddressModel**](../Model/AddressModel.md)| Address data |
 **customer_id** | **int**| The customers id |
 **address_type** | **string**| The customer address type |


### Return type

[**\Swagger\Client\Model\CustomerAddressesModelItem**](../Model/CustomerAddressesModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putMediaFile**
> \Swagger\Client\Model\MediaFileModelItem putMediaFile($body$media_file_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MediaFileUploadModel(); // \Swagger\Client\Model\MediaFileUploadModel | The media file to upload
$media_file_id = array(56); // int | The media files id


try {
    $result = $apiInstance->putMediaFile($body$media_file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putMediaFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MediaFileUploadModel**](../Model/MediaFileUploadModel.md)| The media file to upload |
 **media_file_id** | **int**| The media files id |


### Return type

[**\Swagger\Client\Model\MediaFileModelItem**](../Model/MediaFileModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putOrder**
> \Swagger\Client\Model\OrderModelItem putOrder($body$order_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrderUpdateModel(); // \Swagger\Client\Model\OrderUpdateModel | Order data
$order_id = array(56); // int | The orders id


try {
    $result = $apiInstance->putOrder($body$order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderUpdateModel**](../Model/OrderUpdateModel.md)| Order data |
 **order_id** | **int**| The orders id |


### Return type

[**\Swagger\Client\Model\OrderModelItem**](../Model/OrderModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putOrderAddress**
> \Swagger\Client\Model\AddressModelItem putOrderAddress($body$order_id$address_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AddressModel(); // \Swagger\Client\Model\AddressModel | Address data
$order_id = array(56); // int | The orders id
$address_type = array("address_type_example"); // string | The order address type


try {
    $result = $apiInstance->putOrderAddress($body$order_id$address_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putOrderAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AddressModel**](../Model/AddressModel.md)| Address data |
 **order_id** | **int**| The orders id |
 **address_type** | **string**| The order address type |


### Return type

[**\Swagger\Client\Model\AddressModelItem**](../Model/AddressModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putOrderExternalService**
> \Swagger\Client\Model\OrderExternalServicesModelItem putOrderExternalService($body$order_id$service_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrderExternalServiceModel(); // \Swagger\Client\Model\OrderExternalServiceModel | Order external service data
$order_id = array(56); // int | The orders id
$service_name = array("service_name_example"); // string | The service name


try {
    $result = $apiInstance->putOrderExternalService($body$order_id$service_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putOrderExternalService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderExternalServiceModel**](../Model/OrderExternalServiceModel.md)| Order external service data |
 **order_id** | **int**| The orders id |
 **service_name** | **string**| The service name |


### Return type

[**\Swagger\Client\Model\OrderExternalServicesModelItem**](../Model/OrderExternalServicesModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putOrderItem**
> \Swagger\Client\Model\OrderItemModelItem putOrderItem($body$order_id$order_item_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrderItemModel(); // \Swagger\Client\Model\OrderItemModel | Order item data
$order_id = array(56); // int | The orders id
$order_item_id = array(56); // int | The order item id


try {
    $result = $apiInstance->putOrderItem($body$order_id$order_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderItemModel**](../Model/OrderItemModel.md)| Order item data |
 **order_id** | **int**| The orders id |
 **order_item_id** | **int**| The order item id |


### Return type

[**\Swagger\Client\Model\OrderItemModelItem**](../Model/OrderItemModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putOrderStatus**
> \Swagger\Client\Model\OrderStatusModelItem putOrderStatus($body$order_status_id)



NB! You are not allowed to update standard order statuses (all statuses with an idCode set)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrderStatusModel(); // \Swagger\Client\Model\OrderStatusModel | Order status data
$order_status_id = array(56); // int | The order status id


try {
    $result = $apiInstance->putOrderStatus($body$order_status_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putOrderStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderStatusModel**](../Model/OrderStatusModel.md)| Order status data |
 **order_status_id** | **int**| The order status id |


### Return type

[**\Swagger\Client\Model\OrderStatusModelItem**](../Model/OrderStatusModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putProduct**
> \Swagger\Client\Model\ProductModelItem putProduct($body$product_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductModelUpdatable(); // \Swagger\Client\Model\ProductModelUpdatable | Product data
$product_id = array(56); // int | The product id


try {
    $result = $apiInstance->putProduct($body$product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductModelUpdatable**](../Model/ProductModelUpdatable.md)| Product data |
 **product_id** | **int**| The product id |


### Return type

[**\Swagger\Client\Model\ProductModelItem**](../Model/ProductModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putProductCategory**
> \Swagger\Client\Model\ProductCategoryModelItem putProductCategory($body$category_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductCategoryModel(); // \Swagger\Client\Model\ProductCategoryModel | Product category data
$category_id = array(56); // int | The product category id


try {
    $result = $apiInstance->putProductCategory($body$category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putProductCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductCategoryModel**](../Model/ProductCategoryModel.md)| Product category data |
 **category_id** | **int**| The product category id |


### Return type

[**\Swagger\Client\Model\ProductCategoryModelItem**](../Model/ProductCategoryModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putProductStockStatus**
> \Swagger\Client\Model\ProductStockStatusModelItem putProductStockStatus($body$stock_status_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductStockStatusModel(); // \Swagger\Client\Model\ProductStockStatusModel | Product stock status data
$stock_status_id = array(56); // int | The stock status id


try {
    $result = $apiInstance->putProductStockStatus($body$stock_status_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putProductStockStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductStockStatusModel**](../Model/ProductStockStatusModel.md)| Product stock status data |
 **stock_status_id** | **int**| The stock status id |


### Return type

[**\Swagger\Client\Model\ProductStockStatusModelItem**](../Model/ProductStockStatusModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putProductsCategoryLink**
> \Swagger\Client\Model\ProductCategoryLinkModelItem putProductsCategoryLink($body$product_id$category_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductCategoryLinkModel(); // \Swagger\Client\Model\ProductCategoryLinkModel | Product category link data
$product_id = array(56); // int | The product id
$category_id = array(56); // int | The category id


try {
    $result = $apiInstance->putProductsCategoryLink($body$product_id$category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putProductsCategoryLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductCategoryLinkModel**](../Model/ProductCategoryLinkModel.md)| Product category link data |
 **product_id** | **int**| The product id |
 **category_id** | **int**| The category id |


### Return type

[**\Swagger\Client\Model\ProductCategoryLinkModelItem**](../Model/ProductCategoryLinkModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putProductsLanguage**
> \Swagger\Client\Model\ProductLanguageModelItem putProductsLanguage($body$product_id$lang_code)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductLanguageModel(); // \Swagger\Client\Model\ProductLanguageModel | Product language data
$product_id = array(56); // int | The product id
$lang_code = array("lang_code_example"); // string | The language code you want to fetch/change. Supported language codes are: sv, en, no, da, fi, de, fr, es


try {
    $result = $apiInstance->putProductsLanguage($body$product_id$lang_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putProductsLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductLanguageModel**](../Model/ProductLanguageModel.md)| Product language data |
 **product_id** | **int**| The product id |
 **lang_code** | **string**| The language code you want to fetch/change. Supported language codes are: sv, en, no, da, fi, de, fr, es |


### Return type

[**\Swagger\Client\Model\ProductLanguageModelItem**](../Model/ProductLanguageModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putProductsMediaFileLink**
> \Swagger\Client\Model\ProductMediaFileLinkModelItem putProductsMediaFileLink($body$product_id$media_file_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductMediaFileLinkModel(); // \Swagger\Client\Model\ProductMediaFileLinkModel | Product media file link data
$product_id = array(56); // int | The product id
$media_file_id = array(56); // int | The media file id of the link you want to fetch/change


try {
    $result = $apiInstance->putProductsMediaFileLink($body$product_id$media_file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putProductsMediaFileLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductMediaFileLinkModel**](../Model/ProductMediaFileLinkModel.md)| Product media file link data |
 **product_id** | **int**| The product id |
 **media_file_id** | **int**| The media file id of the link you want to fetch/change |


### Return type

[**\Swagger\Client\Model\ProductMediaFileLinkModelItem**](../Model/ProductMediaFileLinkModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putProductsMetaData**
> \Swagger\Client\Model\ProductMetaDataModelItem putProductsMetaData($body$product_id$meta_data_type_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductMetaDataModelUpdatable(); // \Swagger\Client\Model\ProductMetaDataModelUpdatable | Product meta data data
$product_id = array(56); // int | The product id
$meta_data_type_id = array(56); // int | The meta data type id


try {
    $result = $apiInstance->putProductsMetaData($body$product_id$meta_data_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putProductsMetaData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductMetaDataModelUpdatable**](../Model/ProductMetaDataModelUpdatable.md)| Product meta data data |
 **product_id** | **int**| The product id |
 **meta_data_type_id** | **int**| The meta data type id |


### Return type

[**\Swagger\Client\Model\ProductMetaDataModelItem**](../Model/ProductMetaDataModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putProductsVariant**
> \Swagger\Client\Model\ProductVariantModelItem putProductsVariant($body$product_id$variant_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductVariantModel(); // \Swagger\Client\Model\ProductVariantModel | Products variant data
$product_id = array(56); // int | The product id
$variant_id = array(56); // int | The products variants id


try {
    $result = $apiInstance->putProductsVariant($body$product_id$variant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putProductsVariant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductVariantModel**](../Model/ProductVariantModel.md)| Products variant data |
 **product_id** | **int**| The product id |
 **variant_id** | **int**| The products variants id |


### Return type

[**\Swagger\Client\Model\ProductVariantModelItem**](../Model/ProductVariantModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putProductsVariantsAttributeValues**
> \Swagger\Client\Model\ProductVariantAttributeValueModelCollection putProductsVariantsAttributeValues($body$attribute_id$attribute_value_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductVariantAttributeValueModelUpdatable(); // \Swagger\Client\Model\ProductVariantAttributeValueModelUpdatable | Attribute value data
$attribute_id = array(56); // int | The attribute id
$attribute_value_id = array(56); // int | The attribe value id


try {
    $result = $apiInstance->putProductsVariantsAttributeValues($body$attribute_id$attribute_value_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putProductsVariantsAttributeValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductVariantAttributeValueModelUpdatable**](../Model/ProductVariantAttributeValueModelUpdatable.md)| Attribute value data |
 **attribute_id** | **int**| The attribute id |
 **attribute_value_id** | **int**| The attribe value id |


### Return type

[**\Swagger\Client\Model\ProductVariantAttributeValueModelCollection**](../Model/ProductVariantAttributeValueModelCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putProductsVariantsPricelistPrice**
> \Swagger\Client\Model\ProductVariantPriceModelItem putProductsVariantsPricelistPrice($body$product_id$variant_id$pricelist_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductVariantPriceModel(); // \Swagger\Client\Model\ProductVariantPriceModel | Pricelist price data
$product_id = array(56); // int | The product id
$variant_id = array(56); // int | The products variants id
$pricelist_id = array(56); // int | The pricelist id


try {
    $result = $apiInstance->putProductsVariantsPricelistPrice($body$product_id$variant_id$pricelist_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putProductsVariantsPricelistPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductVariantPriceModel**](../Model/ProductVariantPriceModel.md)| Pricelist price data |
 **product_id** | **int**| The product id |
 **variant_id** | **int**| The products variants id |
 **pricelist_id** | **int**| The pricelist id |


### Return type

[**\Swagger\Client\Model\ProductVariantPriceModelItem**](../Model/ProductVariantPriceModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putProductsVatRate**
> \Swagger\Client\Model\ProductVatRateModelItem putProductsVatRate($body$product_id$country_code)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductVatRateModel(); // \Swagger\Client\Model\ProductVatRateModel | Products vat rate data
$product_id = array(56); // int | The product id
$country_code = array("country_code_example"); // string | The country code for the vat rate to fetch/manipulate


try {
    $result = $apiInstance->putProductsVatRate($body$product_id$country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putProductsVatRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductVatRateModel**](../Model/ProductVatRateModel.md)| Products vat rate data |
 **product_id** | **int**| The product id |
 **country_code** | **string**| The country code for the vat rate to fetch/manipulate |


### Return type

[**\Swagger\Client\Model\ProductVatRateModelItem**](../Model/ProductVatRateModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **putTagOnCustomer**
> \Swagger\Client\Model\CustomerAddedTagModelItem putTagOnCustomer($body$customer_id$tag_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CustomerAddedTagModel(); // \Swagger\Client\Model\CustomerAddedTagModel | Customer tag data
$customer_id = array(56); // int | The customers id
$tag_id = array(56); // int | The customer tag id


try {
    $result = $apiInstance->putTagOnCustomer($body$customer_id$tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putTagOnCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerAddedTagModel**](../Model/CustomerAddedTagModel.md)| Customer tag data |
 **customer_id** | **int**| The customers id |
 **tag_id** | **int**| The customer tag id |


### Return type

[**\Swagger\Client\Model\CustomerAddedTagModelItem**](../Model/CustomerAddedTagModelItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **removeAddressFromCustomer**
> removeAddressFromCustomer($customer_id$address_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = array(56); // int | The customers id
$address_type = array("address_type_example"); // string | The customer address type


try {
    $apiInstance->removeAddressFromCustomer($customer_id$address_type);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->removeAddressFromCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| The customers id |
 **address_type** | **string**| The customer address type |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# **removeTagFromCustomer**
> removeTagFromCustomer($customer_id$tag_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = array(56); // int | The customers id
$tag_id = array(56); // int | The customer tag id


try {
    $apiInstance->removeTagFromCustomer($customer_id$tag_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->removeTagFromCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| The customers id |
 **tag_id** | **int**| The customer tag id |


### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)



