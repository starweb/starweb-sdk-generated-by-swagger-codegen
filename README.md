# SwaggerClient-php
This API is only allowed to be used by partners of Starweb AB and further requires explicit permission from both Starweb AB and the shop owner. If you are interested in using it, please contact us at starwebapi@starweb.se

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0.0


- Build package: io.swagger.codegen.languages.php.PhpClientCodegen

For more information, please visit [https://www.starweb.se/starweb-api](https://www.starweb.se/starweb-api)


## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
    $result = $apiInstance->addTagToCustomer($body, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addTagToCustomer: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://{shopId}.starwebserver.se/api/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**addTagToCustomer**](docs/Api/DefaultApi.md#addtagtocustomer) | **POST** /customers/{customerId}/tags | 
*DefaultApi* | [**createAttribute**](docs/Api/DefaultApi.md#createattribute) | **POST** /product-attributes | 
*DefaultApi* | [**createCustomer**](docs/Api/DefaultApi.md#createcustomer) | **POST** /customers | 
*DefaultApi* | [**createMediaFile**](docs/Api/DefaultApi.md#createmediafile) | **POST** /media-files | 
*DefaultApi* | [**createOrder**](docs/Api/DefaultApi.md#createorder) | **POST** /orders | 
*DefaultApi* | [**createOrderExternalService**](docs/Api/DefaultApi.md#createorderexternalservice) | **POST** /orders/{orderId}/external-services | 
*DefaultApi* | [**createOrderItem**](docs/Api/DefaultApi.md#createorderitem) | **POST** /orders/{orderId}/items | 
*DefaultApi* | [**createOrderStatus**](docs/Api/DefaultApi.md#createorderstatus) | **POST** /order-statuses | 
*DefaultApi* | [**createProduct**](docs/Api/DefaultApi.md#createproduct) | **POST** /products | 
*DefaultApi* | [**createProductCategory**](docs/Api/DefaultApi.md#createproductcategory) | **POST** /product-categories | 
*DefaultApi* | [**createProductStockStatus**](docs/Api/DefaultApi.md#createproductstockstatus) | **POST** /product-stock-statuses | 
*DefaultApi* | [**createProductVariant**](docs/Api/DefaultApi.md#createproductvariant) | **POST** /products/{productId}/variants | 
*DefaultApi* | [**createProductVariantPricelistPrice**](docs/Api/DefaultApi.md#createproductvariantpricelistprice) | **POST** /products/{productId}/variants/{variantId}/prices | 
*DefaultApi* | [**createProductVatRate**](docs/Api/DefaultApi.md#createproductvatrate) | **POST** /products/{productId}/vat-rates | 
*DefaultApi* | [**createProductsCategoryLink**](docs/Api/DefaultApi.md#createproductscategorylink) | **POST** /products/{productId}/categories | 
*DefaultApi* | [**createProductsLanguage**](docs/Api/DefaultApi.md#createproductslanguage) | **POST** /products/{productId}/languages | 
*DefaultApi* | [**createProductsMediaFileLink**](docs/Api/DefaultApi.md#createproductsmediafilelink) | **POST** /products/{productId}/media-files | 
*DefaultApi* | [**createProductsMetaData**](docs/Api/DefaultApi.md#createproductsmetadata) | **POST** /products/{productId}/meta-data | 
*DefaultApi* | [**createProductsVariantsAttributeValues**](docs/Api/DefaultApi.md#createproductsvariantsattributevalues) | **POST** /product-attributes/{attributeId}/values | 
*DefaultApi* | [**deleteAttribute**](docs/Api/DefaultApi.md#deleteattribute) | **DELETE** /product-attributes/{attributeId} | 
*DefaultApi* | [**deleteAttributeValue**](docs/Api/DefaultApi.md#deleteattributevalue) | **DELETE** /product-attributes/{attributeId}/values/{attributeValueId} | 
*DefaultApi* | [**deleteCustomer**](docs/Api/DefaultApi.md#deletecustomer) | **DELETE** /customers/{customerId} | 
*DefaultApi* | [**deleteMediaFile**](docs/Api/DefaultApi.md#deletemediafile) | **DELETE** /media-files/{mediaFileId} | 
*DefaultApi* | [**deleteOrder**](docs/Api/DefaultApi.md#deleteorder) | **DELETE** /orders/{orderId} | 
*DefaultApi* | [**deleteOrderAddress**](docs/Api/DefaultApi.md#deleteorderaddress) | **DELETE** /orders/{orderId}/addresses/{addressType} | 
*DefaultApi* | [**deleteOrderExternalService**](docs/Api/DefaultApi.md#deleteorderexternalservice) | **DELETE** /orders/{orderId}/external-services/{serviceName} | 
*DefaultApi* | [**deleteOrderItem**](docs/Api/DefaultApi.md#deleteorderitem) | **DELETE** /orders/{orderId}/items/{orderItemId} | 
*DefaultApi* | [**deleteOrderStatus**](docs/Api/DefaultApi.md#deleteorderstatus) | **DELETE** /order-statuses/{orderStatusId} | 
*DefaultApi* | [**deleteProduct**](docs/Api/DefaultApi.md#deleteproduct) | **DELETE** /products/{productId} | 
*DefaultApi* | [**deleteProductCategory**](docs/Api/DefaultApi.md#deleteproductcategory) | **DELETE** /product-categories/{categoryId} | 
*DefaultApi* | [**deleteProductStockStatus**](docs/Api/DefaultApi.md#deleteproductstockstatus) | **DELETE** /product-stock-statuses/{stockStatusId} | 
*DefaultApi* | [**deleteProductsCategoryLink**](docs/Api/DefaultApi.md#deleteproductscategorylink) | **DELETE** /products/{productId}/categories/{categoryId} | 
*DefaultApi* | [**deleteProductsLanguage**](docs/Api/DefaultApi.md#deleteproductslanguage) | **DELETE** /products/{productId}/languages/{langCode} | 
*DefaultApi* | [**deleteProductsMediaFileLink**](docs/Api/DefaultApi.md#deleteproductsmediafilelink) | **DELETE** /products/{productId}/media-files/{mediaFileId} | 
*DefaultApi* | [**deleteProductsMetaData**](docs/Api/DefaultApi.md#deleteproductsmetadata) | **DELETE** /products/{productId}/meta-data/{metaDataTypeId} | 
*DefaultApi* | [**deleteProductsVariant**](docs/Api/DefaultApi.md#deleteproductsvariant) | **DELETE** /products/{productId}/variants/{variantId} | 
*DefaultApi* | [**deleteProductsVariantsPricelistPrice**](docs/Api/DefaultApi.md#deleteproductsvariantspricelistprice) | **DELETE** /products/{productId}/variants/{variantId}/prices/{pricelistId} | 
*DefaultApi* | [**deleteProductsVatRate**](docs/Api/DefaultApi.md#deleteproductsvatrate) | **DELETE** /products/{productId}/vat-rates/{countryCode} | 
*DefaultApi* | [**generateFetchAccessToken**](docs/Api/DefaultApi.md#generatefetchaccesstoken) | **POST** /token | 
*DefaultApi* | [**getCurrencies**](docs/Api/DefaultApi.md#getcurrencies) | **GET** /currencies | 
*DefaultApi* | [**getCurrency**](docs/Api/DefaultApi.md#getcurrency) | **GET** /currencies/{currencyCode} | 
*DefaultApi* | [**getCustomer**](docs/Api/DefaultApi.md#getcustomer) | **GET** /customers/{customerId} | 
*DefaultApi* | [**getCustomerAddress**](docs/Api/DefaultApi.md#getcustomeraddress) | **GET** /customers/{customerId}/addresses/{addressType} | 
*DefaultApi* | [**getCustomerExternalService**](docs/Api/DefaultApi.md#getcustomerexternalservice) | **GET** /customers/{customerId}/external-services/{serviceName} | 
*DefaultApi* | [**getCustomerExternalServices**](docs/Api/DefaultApi.md#getcustomerexternalservices) | **GET** /customers/{customerId}/external-services | 
*DefaultApi* | [**getCustomerGroups**](docs/Api/DefaultApi.md#getcustomergroups) | **GET** /customers/{customerId}/addresses | 
*DefaultApi* | [**getCustomerTag**](docs/Api/DefaultApi.md#getcustomertag) | **GET** /customer-tags/{tagId} | 
*DefaultApi* | [**getCustomerTag_0**](docs/Api/DefaultApi.md#getcustomertag_0) | **GET** /customers/{customerId}/tags/{tagId} | 
*DefaultApi* | [**getCustomerTags**](docs/Api/DefaultApi.md#getcustomertags) | **GET** /customer-tags | 
*DefaultApi* | [**getCustomerTags_0**](docs/Api/DefaultApi.md#getcustomertags_0) | **GET** /customers/{customerId}/tags | 
*DefaultApi* | [**getMediaFile**](docs/Api/DefaultApi.md#getmediafile) | **GET** /media-files/{mediaFileId} | 
*DefaultApi* | [**getMediaFiles**](docs/Api/DefaultApi.md#getmediafiles) | **GET** /media-files | 
*DefaultApi* | [**getOrder**](docs/Api/DefaultApi.md#getorder) | **GET** /orders/{orderId} | 
*DefaultApi* | [**getOrderAddress**](docs/Api/DefaultApi.md#getorderaddress) | **GET** /orders/{orderId}/addresses/{addressType} | 
*DefaultApi* | [**getOrderComment**](docs/Api/DefaultApi.md#getordercomment) | **GET** /orders/{orderId}/comments/{commentId} | 
*DefaultApi* | [**getOrderComments**](docs/Api/DefaultApi.md#getordercomments) | **GET** /orders/{orderId}/comments | 
*DefaultApi* | [**getOrderExternalService**](docs/Api/DefaultApi.md#getorderexternalservice) | **GET** /orders/{orderId}/external-services/{serviceName} | 
*DefaultApi* | [**getOrderExternalServices**](docs/Api/DefaultApi.md#getorderexternalservices) | **GET** /orders/{orderId}/external-services | 
*DefaultApi* | [**getOrderItem**](docs/Api/DefaultApi.md#getorderitem) | **GET** /orders/{orderId}/items/{orderItemId} | 
*DefaultApi* | [**getOrderItems**](docs/Api/DefaultApi.md#getorderitems) | **GET** /orders/{orderId}/items | 
*DefaultApi* | [**getOrderStatus**](docs/Api/DefaultApi.md#getorderstatus) | **GET** /order-statuses/{orderStatusId} | 
*DefaultApi* | [**getOrderStatuses**](docs/Api/DefaultApi.md#getorderstatuses) | **GET** /order-statuses | 
*DefaultApi* | [**getPaymentMethod**](docs/Api/DefaultApi.md#getpaymentmethod) | **GET** /payment-methods/{paymentMethodId} | 
*DefaultApi* | [**getPaymentMethods**](docs/Api/DefaultApi.md#getpaymentmethods) | **GET** /payment-methods | 
*DefaultApi* | [**getPricelist**](docs/Api/DefaultApi.md#getpricelist) | **GET** /pricelists/{pricelistId} | 
*DefaultApi* | [**getPricelists**](docs/Api/DefaultApi.md#getpricelists) | **GET** /pricelists | 
*DefaultApi* | [**getProduct**](docs/Api/DefaultApi.md#getproduct) | **GET** /products/{productId} | 
*DefaultApi* | [**getProductCategory**](docs/Api/DefaultApi.md#getproductcategory) | **GET** /product-categories/{categoryId} | 
*DefaultApi* | [**getProductManufacturer**](docs/Api/DefaultApi.md#getproductmanufacturer) | **GET** /product-manufacturers/{manufacturerId} | 
*DefaultApi* | [**getProductMetaDataType**](docs/Api/DefaultApi.md#getproductmetadatatype) | **GET** /product-meta-data-types/{metaDataTypeId} | 
*DefaultApi* | [**getProductStockStatus**](docs/Api/DefaultApi.md#getproductstockstatus) | **GET** /product-stock-statuses/{stockStatusId} | 
*DefaultApi* | [**getProductUnit**](docs/Api/DefaultApi.md#getproductunit) | **GET** /product-units/{unitId} | 
*DefaultApi* | [**getProductsAttribute**](docs/Api/DefaultApi.md#getproductsattribute) | **GET** /products/{productId}/attributes/{attributeId} | 
*DefaultApi* | [**getProductsCategoryLink**](docs/Api/DefaultApi.md#getproductscategorylink) | **GET** /products/{productId}/categories/{categoryId} | 
*DefaultApi* | [**getProductsLanguage**](docs/Api/DefaultApi.md#getproductslanguage) | **GET** /products/{productId}/languages/{langCode} | 
*DefaultApi* | [**getProductsMediaFileLink**](docs/Api/DefaultApi.md#getproductsmediafilelink) | **GET** /products/{productId}/media-files/{mediaFileId} | 
*DefaultApi* | [**getProductsMetaData**](docs/Api/DefaultApi.md#getproductsmetadata) | **GET** /products/{productId}/meta-data/{metaDataTypeId} | 
*DefaultApi* | [**getProductsVariant**](docs/Api/DefaultApi.md#getproductsvariant) | **GET** /products/{productId}/variants/{variantId} | 
*DefaultApi* | [**getProductsVariantsAttributeValue**](docs/Api/DefaultApi.md#getproductsvariantsattributevalue) | **GET** /product-attributes/{attributeId} | 
*DefaultApi* | [**getProductsVariantsAttributeValue_0**](docs/Api/DefaultApi.md#getproductsvariantsattributevalue_0) | **GET** /product-attributes/{attributeId}/values/{attributeValueId} | 
*DefaultApi* | [**getProductsVariantsPricelistPrice**](docs/Api/DefaultApi.md#getproductsvariantspricelistprice) | **GET** /products/{productId}/variants/{variantId}/prices/{pricelistId} | 
*DefaultApi* | [**getProductsVatRate**](docs/Api/DefaultApi.md#getproductsvatrate) | **GET** /products/{productId}/vat-rates/{countryCode} | 
*DefaultApi* | [**getShippingMethod**](docs/Api/DefaultApi.md#getshippingmethod) | **GET** /shipping-methods/{shippingMethodId} | 
*DefaultApi* | [**getShippingMethods**](docs/Api/DefaultApi.md#getshippingmethods) | **GET** /shipping-methods | 
*DefaultApi* | [**getShippingTrackingTypes**](docs/Api/DefaultApi.md#getshippingtrackingtypes) | **GET** /shipping-tracking-types | 
*DefaultApi* | [**getShop**](docs/Api/DefaultApi.md#getshop) | **GET** /shop | 
*DefaultApi* | [**listCustomers**](docs/Api/DefaultApi.md#listcustomers) | **GET** /customers | 
*DefaultApi* | [**listOrderAddresses**](docs/Api/DefaultApi.md#listorderaddresses) | **GET** /orders/{orderId}/addresses | 
*DefaultApi* | [**listOrders**](docs/Api/DefaultApi.md#listorders) | **GET** /orders | 
*DefaultApi* | [**listProductCategories**](docs/Api/DefaultApi.md#listproductcategories) | **GET** /product-categories | 
*DefaultApi* | [**listProductManufacturers**](docs/Api/DefaultApi.md#listproductmanufacturers) | **GET** /product-manufacturers | 
*DefaultApi* | [**listProductMetaDataTypes**](docs/Api/DefaultApi.md#listproductmetadatatypes) | **GET** /product-meta-data-types | 
*DefaultApi* | [**listProductStockStatses**](docs/Api/DefaultApi.md#listproductstockstatses) | **GET** /product-stock-statuses | 
*DefaultApi* | [**listProductUnits**](docs/Api/DefaultApi.md#listproductunits) | **GET** /product-units | 
*DefaultApi* | [**listProducts**](docs/Api/DefaultApi.md#listproducts) | **GET** /products | 
*DefaultApi* | [**listProductsAttributes**](docs/Api/DefaultApi.md#listproductsattributes) | **GET** /products/{productId}/attributes | 
*DefaultApi* | [**listProductsCategoryLinks**](docs/Api/DefaultApi.md#listproductscategorylinks) | **GET** /products/{productId}/categories | 
*DefaultApi* | [**listProductsLanguages**](docs/Api/DefaultApi.md#listproductslanguages) | **GET** /products/{productId}/languages | 
*DefaultApi* | [**listProductsMediaFileLinks**](docs/Api/DefaultApi.md#listproductsmediafilelinks) | **GET** /products/{productId}/media-files | 
*DefaultApi* | [**listProductsMetaData**](docs/Api/DefaultApi.md#listproductsmetadata) | **GET** /products/{productId}/meta-data | 
*DefaultApi* | [**listProductsVariants**](docs/Api/DefaultApi.md#listproductsvariants) | **GET** /products/{productId}/variants | 
*DefaultApi* | [**listProductsVariantsAttributeValues**](docs/Api/DefaultApi.md#listproductsvariantsattributevalues) | **GET** /product-attributes | 
*DefaultApi* | [**listProductsVariantsAttributeValues_0**](docs/Api/DefaultApi.md#listproductsvariantsattributevalues_0) | **GET** /product-attributes/{attributeId}/values | 
*DefaultApi* | [**listProductsVariantsPricelistPrices**](docs/Api/DefaultApi.md#listproductsvariantspricelistprices) | **GET** /products/{productId}/variants/{variantId}/prices | 
*DefaultApi* | [**listProductsVatRates**](docs/Api/DefaultApi.md#listproductsvatrates) | **GET** /products/{productId}/vat-rates | 
*DefaultApi* | [**patchAttribute**](docs/Api/DefaultApi.md#patchattribute) | **PATCH** /product-attributes/{attributeId} | 
*DefaultApi* | [**patchCustomer**](docs/Api/DefaultApi.md#patchcustomer) | **PATCH** /customers/{customerId} | 
*DefaultApi* | [**patchCustomerAddress**](docs/Api/DefaultApi.md#patchcustomeraddress) | **PATCH** /customers/{customerId}/addresses/{addressType} | 
*DefaultApi* | [**patchMediaFile**](docs/Api/DefaultApi.md#patchmediafile) | **PATCH** /media-files/{mediaFileId} | 
*DefaultApi* | [**patchOrder**](docs/Api/DefaultApi.md#patchorder) | **PATCH** /orders/{orderId} | 
*DefaultApi* | [**patchOrderAddress**](docs/Api/DefaultApi.md#patchorderaddress) | **PATCH** /orders/{orderId}/addresses/{addressType} | 
*DefaultApi* | [**patchOrderExternalService**](docs/Api/DefaultApi.md#patchorderexternalservice) | **PATCH** /orders/{orderId}/external-services/{serviceName} | 
*DefaultApi* | [**patchOrderItem**](docs/Api/DefaultApi.md#patchorderitem) | **PATCH** /orders/{orderId}/items/{orderItemId} | 
*DefaultApi* | [**patchOrderStatus**](docs/Api/DefaultApi.md#patchorderstatus) | **PATCH** /order-statuses/{orderStatusId} | 
*DefaultApi* | [**patchProduct**](docs/Api/DefaultApi.md#patchproduct) | **PATCH** /products/{productId} | 
*DefaultApi* | [**patchProductCategory**](docs/Api/DefaultApi.md#patchproductcategory) | **PATCH** /product-categories/{categoryId} | 
*DefaultApi* | [**patchProductStockStatus**](docs/Api/DefaultApi.md#patchproductstockstatus) | **PATCH** /product-stock-statuses/{stockStatusId} | 
*DefaultApi* | [**patchProductsCategoryLink**](docs/Api/DefaultApi.md#patchproductscategorylink) | **PATCH** /products/{productId}/categories/{categoryId} | 
*DefaultApi* | [**patchProductsLanguage**](docs/Api/DefaultApi.md#patchproductslanguage) | **PATCH** /products/{productId}/languages/{langCode} | 
*DefaultApi* | [**patchProductsMediaFileLink**](docs/Api/DefaultApi.md#patchproductsmediafilelink) | **PATCH** /products/{productId}/media-files/{mediaFileId} | 
*DefaultApi* | [**patchProductsMetaData**](docs/Api/DefaultApi.md#patchproductsmetadata) | **PATCH** /products/{productId}/meta-data/{metaDataTypeId} | 
*DefaultApi* | [**patchProductsVariant**](docs/Api/DefaultApi.md#patchproductsvariant) | **PATCH** /products/{productId}/variants/{variantId} | 
*DefaultApi* | [**patchProductsVariantsAttributeValues**](docs/Api/DefaultApi.md#patchproductsvariantsattributevalues) | **PATCH** /product-attributes/{attributeId}/values/{attributeValueId} | 
*DefaultApi* | [**patchProductsVariantsPricelistPrice**](docs/Api/DefaultApi.md#patchproductsvariantspricelistprice) | **PATCH** /products/{productId}/variants/{variantId}/prices/{pricelistId} | 
*DefaultApi* | [**patchProductsVatRate**](docs/Api/DefaultApi.md#patchproductsvatrate) | **PATCH** /products/{productId}/vat-rates/{countryCode} | 
*DefaultApi* | [**patchTagOnCustomerBy**](docs/Api/DefaultApi.md#patchtagoncustomerby) | **PATCH** /customers/{customerId}/tags/{tagId} | 
*DefaultApi* | [**putAttribute**](docs/Api/DefaultApi.md#putattribute) | **PUT** /product-attributes/{attributeId} | 
*DefaultApi* | [**putCustomer**](docs/Api/DefaultApi.md#putcustomer) | **PUT** /customers/{customerId} | 
*DefaultApi* | [**putCustomerAddress**](docs/Api/DefaultApi.md#putcustomeraddress) | **PUT** /customers/{customerId}/addresses/{addressType} | 
*DefaultApi* | [**putMediaFile**](docs/Api/DefaultApi.md#putmediafile) | **PUT** /media-files/{mediaFileId} | 
*DefaultApi* | [**putOrder**](docs/Api/DefaultApi.md#putorder) | **PUT** /orders/{orderId} | 
*DefaultApi* | [**putOrderAddress**](docs/Api/DefaultApi.md#putorderaddress) | **PUT** /orders/{orderId}/addresses/{addressType} | 
*DefaultApi* | [**putOrderExternalService**](docs/Api/DefaultApi.md#putorderexternalservice) | **PUT** /orders/{orderId}/external-services/{serviceName} | 
*DefaultApi* | [**putOrderItem**](docs/Api/DefaultApi.md#putorderitem) | **PUT** /orders/{orderId}/items/{orderItemId} | 
*DefaultApi* | [**putOrderStatus**](docs/Api/DefaultApi.md#putorderstatus) | **PUT** /order-statuses/{orderStatusId} | 
*DefaultApi* | [**putProduct**](docs/Api/DefaultApi.md#putproduct) | **PUT** /products/{productId} | 
*DefaultApi* | [**putProductCategory**](docs/Api/DefaultApi.md#putproductcategory) | **PUT** /product-categories/{categoryId} | 
*DefaultApi* | [**putProductStockStatus**](docs/Api/DefaultApi.md#putproductstockstatus) | **PUT** /product-stock-statuses/{stockStatusId} | 
*DefaultApi* | [**putProductsCategoryLink**](docs/Api/DefaultApi.md#putproductscategorylink) | **PUT** /products/{productId}/categories/{categoryId} | 
*DefaultApi* | [**putProductsLanguage**](docs/Api/DefaultApi.md#putproductslanguage) | **PUT** /products/{productId}/languages/{langCode} | 
*DefaultApi* | [**putProductsMediaFileLink**](docs/Api/DefaultApi.md#putproductsmediafilelink) | **PUT** /products/{productId}/media-files/{mediaFileId} | 
*DefaultApi* | [**putProductsMetaData**](docs/Api/DefaultApi.md#putproductsmetadata) | **PUT** /products/{productId}/meta-data/{metaDataTypeId} | 
*DefaultApi* | [**putProductsVariant**](docs/Api/DefaultApi.md#putproductsvariant) | **PUT** /products/{productId}/variants/{variantId} | 
*DefaultApi* | [**putProductsVariantsAttributeValues**](docs/Api/DefaultApi.md#putproductsvariantsattributevalues) | **PUT** /product-attributes/{attributeId}/values/{attributeValueId} | 
*DefaultApi* | [**putProductsVariantsPricelistPrice**](docs/Api/DefaultApi.md#putproductsvariantspricelistprice) | **PUT** /products/{productId}/variants/{variantId}/prices/{pricelistId} | 
*DefaultApi* | [**putProductsVatRate**](docs/Api/DefaultApi.md#putproductsvatrate) | **PUT** /products/{productId}/vat-rates/{countryCode} | 
*DefaultApi* | [**putTagOnCustomer**](docs/Api/DefaultApi.md#puttagoncustomer) | **PUT** /customers/{customerId}/tags/{tagId} | 
*DefaultApi* | [**removeAddressFromCustomer**](docs/Api/DefaultApi.md#removeaddressfromcustomer) | **DELETE** /customers/{customerId}/addresses/{addressType} | 
*DefaultApi* | [**removeTagFromCustomer**](docs/Api/DefaultApi.md#removetagfromcustomer) | **DELETE** /customers/{customerId}/tags/{tagId} | 


## Documentation For Models

 - [AddressModel](docs/Model/AddressModel.md)
 - [AddressModelItem](docs/Model/AddressModelItem.md)
 - [ClientCredentialModel](docs/Model/ClientCredentialModel.md)
 - [CurrencyCollection](docs/Model/CurrencyCollection.md)
 - [CurrencyModel](docs/Model/CurrencyModel.md)
 - [CurrencyModelItem](docs/Model/CurrencyModelItem.md)
 - [CustomerAddedTagModel](docs/Model/CustomerAddedTagModel.md)
 - [CustomerAddedTagModelCollection](docs/Model/CustomerAddedTagModelCollection.md)
 - [CustomerAddedTagModelItem](docs/Model/CustomerAddedTagModelItem.md)
 - [CustomerAddressesModelCollection](docs/Model/CustomerAddressesModelCollection.md)
 - [CustomerAddressesModelItem](docs/Model/CustomerAddressesModelItem.md)
 - [CustomerExternalServicesModel](docs/Model/CustomerExternalServicesModel.md)
 - [CustomerExternalServicesModelCollection](docs/Model/CustomerExternalServicesModelCollection.md)
 - [CustomerExternalServicesModelItem](docs/Model/CustomerExternalServicesModelItem.md)
 - [CustomerModel](docs/Model/CustomerModel.md)
 - [CustomerModelCollection](docs/Model/CustomerModelCollection.md)
 - [CustomerModelItem](docs/Model/CustomerModelItem.md)
 - [CustomerTagModel](docs/Model/CustomerTagModel.md)
 - [CustomerTagModelCollection](docs/Model/CustomerTagModelCollection.md)
 - [CustomerTagModelItem](docs/Model/CustomerTagModelItem.md)
 - [CustomerUpdateModel](docs/Model/CustomerUpdateModel.md)
 - [CustomerUpdateModelAddresses](docs/Model/CustomerUpdateModelAddresses.md)
 - [ErrorModel](docs/Model/ErrorModel.md)
 - [MediaFileModel](docs/Model/MediaFileModel.md)
 - [MediaFileModelCollection](docs/Model/MediaFileModelCollection.md)
 - [MediaFileModelItem](docs/Model/MediaFileModelItem.md)
 - [MediaFileUploadModel](docs/Model/MediaFileUploadModel.md)
 - [OrderAddressCollection](docs/Model/OrderAddressCollection.md)
 - [OrderAddressModel](docs/Model/OrderAddressModel.md)
 - [OrderCommentModel](docs/Model/OrderCommentModel.md)
 - [OrderCommentModelCollection](docs/Model/OrderCommentModelCollection.md)
 - [OrderCommentModelItem](docs/Model/OrderCommentModelItem.md)
 - [OrderExternalServiceModel](docs/Model/OrderExternalServiceModel.md)
 - [OrderExternalServiceModelCollection](docs/Model/OrderExternalServiceModelCollection.md)
 - [OrderExternalServicesModelItem](docs/Model/OrderExternalServicesModelItem.md)
 - [OrderItemModel](docs/Model/OrderItemModel.md)
 - [OrderItemModelCollection](docs/Model/OrderItemModelCollection.md)
 - [OrderItemModelItem](docs/Model/OrderItemModelItem.md)
 - [OrderModel](docs/Model/OrderModel.md)
 - [OrderModelCollection](docs/Model/OrderModelCollection.md)
 - [OrderModelCollectionMeta](docs/Model/OrderModelCollectionMeta.md)
 - [OrderModelItem](docs/Model/OrderModelItem.md)
 - [OrderStatusLanguageModel](docs/Model/OrderStatusLanguageModel.md)
 - [OrderStatusModel](docs/Model/OrderStatusModel.md)
 - [OrderStatusModelCollection](docs/Model/OrderStatusModelCollection.md)
 - [OrderStatusModelItem](docs/Model/OrderStatusModelItem.md)
 - [OrderUpdateModel](docs/Model/OrderUpdateModel.md)
 - [PaginationModel](docs/Model/PaginationModel.md)
 - [PaymentMethodLanguageModel](docs/Model/PaymentMethodLanguageModel.md)
 - [PaymentMethodLanguageModelCollection](docs/Model/PaymentMethodLanguageModelCollection.md)
 - [PaymentMethodModel](docs/Model/PaymentMethodModel.md)
 - [PaymentMethodModelCollection](docs/Model/PaymentMethodModelCollection.md)
 - [PaymentMethodModelItem](docs/Model/PaymentMethodModelItem.md)
 - [PricelistModel](docs/Model/PricelistModel.md)
 - [PricelistModelCollection](docs/Model/PricelistModelCollection.md)
 - [PricelistModelItem](docs/Model/PricelistModelItem.md)
 - [ProductCategoryLanguagesModel](docs/Model/ProductCategoryLanguagesModel.md)
 - [ProductCategoryLinkModel](docs/Model/ProductCategoryLinkModel.md)
 - [ProductCategoryLinkModelCollection](docs/Model/ProductCategoryLinkModelCollection.md)
 - [ProductCategoryLinkModelItem](docs/Model/ProductCategoryLinkModelItem.md)
 - [ProductCategoryModel](docs/Model/ProductCategoryModel.md)
 - [ProductCategoryModelCollection](docs/Model/ProductCategoryModelCollection.md)
 - [ProductCategoryModelItem](docs/Model/ProductCategoryModelItem.md)
 - [ProductLanguageModel](docs/Model/ProductLanguageModel.md)
 - [ProductLanguageModelCollection](docs/Model/ProductLanguageModelCollection.md)
 - [ProductLanguageModelItem](docs/Model/ProductLanguageModelItem.md)
 - [ProductManufacturerModel](docs/Model/ProductManufacturerModel.md)
 - [ProductManufacturerModelCollection](docs/Model/ProductManufacturerModelCollection.md)
 - [ProductManufacturerModelItem](docs/Model/ProductManufacturerModelItem.md)
 - [ProductMediaFileLinkModel](docs/Model/ProductMediaFileLinkModel.md)
 - [ProductMediaFileLinkModelCollection](docs/Model/ProductMediaFileLinkModelCollection.md)
 - [ProductMediaFileLinkModelItem](docs/Model/ProductMediaFileLinkModelItem.md)
 - [ProductMetaDataModel](docs/Model/ProductMetaDataModel.md)
 - [ProductMetaDataModelCollection](docs/Model/ProductMetaDataModelCollection.md)
 - [ProductMetaDataModelItem](docs/Model/ProductMetaDataModelItem.md)
 - [ProductMetaDataModelUpdatable](docs/Model/ProductMetaDataModelUpdatable.md)
 - [ProductMetaDataTypeLanguageModel](docs/Model/ProductMetaDataTypeLanguageModel.md)
 - [ProductMetaDataTypeLanguageModelCollection](docs/Model/ProductMetaDataTypeLanguageModelCollection.md)
 - [ProductMetaDataTypeModel](docs/Model/ProductMetaDataTypeModel.md)
 - [ProductMetaDataTypeModelCollection](docs/Model/ProductMetaDataTypeModelCollection.md)
 - [ProductMetaDataTypeModelItem](docs/Model/ProductMetaDataTypeModelItem.md)
 - [ProductMetaLanguageDataModel](docs/Model/ProductMetaLanguageDataModel.md)
 - [ProductMetaLanguageDataModelCollection](docs/Model/ProductMetaLanguageDataModelCollection.md)
 - [ProductMetaLanguageDataModelItem](docs/Model/ProductMetaLanguageDataModelItem.md)
 - [ProductModel](docs/Model/ProductModel.md)
 - [ProductModelCollection](docs/Model/ProductModelCollection.md)
 - [ProductModelItem](docs/Model/ProductModelItem.md)
 - [ProductModelUpdatable](docs/Model/ProductModelUpdatable.md)
 - [ProductStockStatusLanguageModel](docs/Model/ProductStockStatusLanguageModel.md)
 - [ProductStockStatusModel](docs/Model/ProductStockStatusModel.md)
 - [ProductStockStatusModelCollection](docs/Model/ProductStockStatusModelCollection.md)
 - [ProductStockStatusModelItem](docs/Model/ProductStockStatusModelItem.md)
 - [ProductUnitLanguageModel](docs/Model/ProductUnitLanguageModel.md)
 - [ProductUnitLanguageModelCollection](docs/Model/ProductUnitLanguageModelCollection.md)
 - [ProductUnitModel](docs/Model/ProductUnitModel.md)
 - [ProductUnitModelCollection](docs/Model/ProductUnitModelCollection.md)
 - [ProductUnitModelItem](docs/Model/ProductUnitModelItem.md)
 - [ProductVariantAttributeLanguageModel](docs/Model/ProductVariantAttributeLanguageModel.md)
 - [ProductVariantAttributeModel](docs/Model/ProductVariantAttributeModel.md)
 - [ProductVariantAttributeModelCollection](docs/Model/ProductVariantAttributeModelCollection.md)
 - [ProductVariantAttributeModelItem](docs/Model/ProductVariantAttributeModelItem.md)
 - [ProductVariantAttributeModelLanguages](docs/Model/ProductVariantAttributeModelLanguages.md)
 - [ProductVariantAttributeModelUpdatable](docs/Model/ProductVariantAttributeModelUpdatable.md)
 - [ProductVariantAttributeValueLanguageModel](docs/Model/ProductVariantAttributeValueLanguageModel.md)
 - [ProductVariantAttributeValueModel](docs/Model/ProductVariantAttributeValueModel.md)
 - [ProductVariantAttributeValueModelCollection](docs/Model/ProductVariantAttributeValueModelCollection.md)
 - [ProductVariantAttributeValueModelItem](docs/Model/ProductVariantAttributeValueModelItem.md)
 - [ProductVariantAttributeValueModelUpdatable](docs/Model/ProductVariantAttributeValueModelUpdatable.md)
 - [ProductVariantModel](docs/Model/ProductVariantModel.md)
 - [ProductVariantModelCollection](docs/Model/ProductVariantModelCollection.md)
 - [ProductVariantModelItem](docs/Model/ProductVariantModelItem.md)
 - [ProductVariantPriceModel](docs/Model/ProductVariantPriceModel.md)
 - [ProductVariantPriceModelCollection](docs/Model/ProductVariantPriceModelCollection.md)
 - [ProductVariantPriceModelItem](docs/Model/ProductVariantPriceModelItem.md)
 - [ProductVatRateModel](docs/Model/ProductVatRateModel.md)
 - [ProductVatRateModelCollection](docs/Model/ProductVatRateModelCollection.md)
 - [ProductVatRateModelItem](docs/Model/ProductVatRateModelItem.md)
 - [ShippingMethodLanguageModel](docs/Model/ShippingMethodLanguageModel.md)
 - [ShippingMethodLanguageModelCollection](docs/Model/ShippingMethodLanguageModelCollection.md)
 - [ShippingMethodModel](docs/Model/ShippingMethodModel.md)
 - [ShippingMethodModelCollection](docs/Model/ShippingMethodModelCollection.md)
 - [ShippingMethodModelItem](docs/Model/ShippingMethodModelItem.md)
 - [ShippingTrackingTypeModel](docs/Model/ShippingTrackingTypeModel.md)
 - [ShippingTrackingTypeModelCollection](docs/Model/ShippingTrackingTypeModelCollection.md)
 - [ShopItem](docs/Model/ShopItem.md)
 - [ShopModel](docs/Model/ShopModel.md)
 - [TokenModel](docs/Model/TokenModel.md)


## Documentation For Authorization


## oauth2



- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: N/A






## Author

starwebapi@starweb.se

