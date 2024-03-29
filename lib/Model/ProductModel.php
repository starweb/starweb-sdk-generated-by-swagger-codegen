<?php


/**
 * ProductModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Starweb Shop API v.2
 *
 * This API is only allowed to be used by partners of Starweb AB and further requires explicit permission from both Starweb AB and the shop owner. If you are interested in using it, please contact us at starwebapi@starweb.se
 *
 * OpenAPI spec version: 2.0.0
 * Contact: starwebapi@starweb.se
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.0-rc1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;



use \ArrayAccess;


use \Swagger\Client\ObjectSerializer;

/**
 * ProductModel Class Doc Comment
 *
 * @category Class

 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_id' => 'int''created_at' => 'string''default_vat_rate' => 'string''visibility' => 'string''more_info_url' => 'string''manufacturer_id' => 'int''unit_id' => 'int''sort_index' => 'int''is_back_in_stock_watchable' => 'bool''has_several_variants' => 'bool''modified_at' => 'string''variants' => '\Swagger\Client\Model\ProductVariantModelCollection''media_files' => '\Swagger\Client\Model\ProductMediaFileLinkModelCollection''languages' => '\Swagger\Client\Model\ProductLanguageModelCollection''vat_rates' => '\Swagger\Client\Model\ProductVatRateModelCollection''categories' => '\Swagger\Client\Model\ProductCategoryLinkModelCollection''unit' => '\Swagger\Client\Model\ProductUnitModelItem''meta_data' => '\Swagger\Client\Model\ProductMetaDataModelCollection'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'product_id' => 'int32''created_at' => null'default_vat_rate' => null'visibility' => null'more_info_url' => null'manufacturer_id' => 'int32''unit_id' => 'int32''sort_index' => 'int32''is_back_in_stock_watchable' => null'has_several_variants' => null'modified_at' => null'variants' => null'media_files' => null'languages' => null'vat_rates' => null'categories' => null'unit' => null'meta_data' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'product_id' => 'productId''created_at' => 'createdAt''default_vat_rate' => 'defaultVatRate''visibility' => 'visibility''more_info_url' => 'moreInfoUrl''manufacturer_id' => 'manufacturerId''unit_id' => 'unitId''sort_index' => 'sortIndex''is_back_in_stock_watchable' => 'isBackInStockWatchable''has_several_variants' => 'hasSeveralVariants''modified_at' => 'modifiedAt''variants' => 'variants''media_files' => 'mediaFiles''languages' => 'languages''vat_rates' => 'vatRates''categories' => 'categories''unit' => 'unit''meta_data' => 'metaData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId''created_at' => 'setCreatedAt''default_vat_rate' => 'setDefaultVatRate''visibility' => 'setVisibility''more_info_url' => 'setMoreInfoUrl''manufacturer_id' => 'setManufacturerId''unit_id' => 'setUnitId''sort_index' => 'setSortIndex''is_back_in_stock_watchable' => 'setIsBackInStockWatchable''has_several_variants' => 'setHasSeveralVariants''modified_at' => 'setModifiedAt''variants' => 'setVariants''media_files' => 'setMediaFiles''languages' => 'setLanguages''vat_rates' => 'setVatRates''categories' => 'setCategories''unit' => 'setUnit''meta_data' => 'setMetaData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId''created_at' => 'getCreatedAt''default_vat_rate' => 'getDefaultVatRate''visibility' => 'getVisibility''more_info_url' => 'getMoreInfoUrl''manufacturer_id' => 'getManufacturerId''unit_id' => 'getUnitId''sort_index' => 'getSortIndex''is_back_in_stock_watchable' => 'getIsBackInStockWatchable''has_several_variants' => 'getHasSeveralVariants''modified_at' => 'getModifiedAt''variants' => 'getVariants''media_files' => 'getMediaFiles''languages' => 'getLanguages''vat_rates' => 'getVatRates''categories' => 'getCategories''unit' => 'getUnit''meta_data' => 'getMetaData'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];
    

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        
        
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        
        $this->container['default_vat_rate'] = isset($data['default_vat_rate']) ? $data['default_vat_rate'] : 'null';
        
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : 'hidden';
        
        $this->container['more_info_url'] = isset($data['more_info_url']) ? $data['more_info_url'] : null;
        
        $this->container['manufacturer_id'] = isset($data['manufacturer_id']) ? $data['manufacturer_id'] : null;
        
        $this->container['unit_id'] = isset($data['unit_id']) ? $data['unit_id'] : null;
        
        $this->container['sort_index'] = isset($data['sort_index']) ? $data['sort_index'] : null;
        
        $this->container['is_back_in_stock_watchable'] = isset($data['is_back_in_stock_watchable']) ? $data['is_back_in_stock_watchable'] : true;
        
        $this->container['has_several_variants'] = isset($data['has_several_variants']) ? $data['has_several_variants'] : null;
        
        $this->container['modified_at'] = isset($data['modified_at']) ? $data['modified_at'] : null;
        
        $this->container['variants'] = isset($data['variants']) ? $data['variants'] : null;
        
        $this->container['media_files'] = isset($data['media_files']) ? $data['media_files'] : null;
        
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
        
        $this->container['vat_rates'] = isset($data['vat_rates']) ? $data['vat_rates'] : null;
        
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        
        
        $invalidProperties = [];
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        return true;
    }

    

    /**
     * Gets product_id
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        
        
        $this->container['product_id'] = $product_id;

        return $this;
    }
    

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at A timestamp of when the product was created. The time should be formatted using ISO-8601
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        
        
        $this->container['created_at'] = $created_at;

        return $this;
    }
    

    /**
     * Gets default_vat_rate
     *
     * @return string
     */
    public function getDefaultVatRate()
    {
        return $this->container['default_vat_rate'];
    }

    /**
     * Sets default_vat_rate
     *
     * @param string $default_vat_rate The default vat rate for this product. Will fall back to shop default if null. To fetch country specific vat rates, please use include=vatRates or use the /products/x/vat-rates endpoint.
     *
     * @return $this
     */
    public function setDefaultVatRate($default_vat_rate)
    {
        
        
        $this->container['default_vat_rate'] = $default_vat_rate;

        return $this;
    }
    

    /**
     * Gets visibility
     *
     * @return string
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     *
     * @param string $visibility The visibility of this product. Supported values are: hidden, visible, pricelists
     *
     * @return $this
     */
    public function setVisibility($visibility)
    {
        
        
        $this->container['visibility'] = $visibility;

        return $this;
    }
    

    /**
     * Gets more_info_url
     *
     * @return string
     */
    public function getMoreInfoUrl()
    {
        return $this->container['more_info_url'];
    }

    /**
     * Sets more_info_url
     *
     * @param string $more_info_url A valid URL to a web page with more information for this product
     *
     * @return $this
     */
    public function setMoreInfoUrl($more_info_url)
    {
        
        
        $this->container['more_info_url'] = $more_info_url;

        return $this;
    }
    

    /**
     * Gets manufacturer_id
     *
     * @return int
     */
    public function getManufacturerId()
    {
        return $this->container['manufacturer_id'];
    }

    /**
     * Sets manufacturer_id
     *
     * @param int $manufacturer_id The id of the manufacturer to use for this product. Fetch and handle available manufacturers using the /product-manufacturers endpoint
     *
     * @return $this
     */
    public function setManufacturerId($manufacturer_id)
    {
        
        
        $this->container['manufacturer_id'] = $manufacturer_id;

        return $this;
    }
    

    /**
     * Gets unit_id
     *
     * @return int
     */
    public function getUnitId()
    {
        return $this->container['unit_id'];
    }

    /**
     * Sets unit_id
     *
     * @param int $unit_id The id of the unit to use for this product if not standard. Fetch and handle available units using the /product-units endpoint
     *
     * @return $this
     */
    public function setUnitId($unit_id)
    {
        
        
        $this->container['unit_id'] = $unit_id;

        return $this;
    }
    

    /**
     * Gets sort_index
     *
     * @return int
     */
    public function getSortIndex()
    {
        return $this->container['sort_index'];
    }

    /**
     * Sets sort_index
     *
     * @param int $sort_index Sort index for this product in a list
     *
     * @return $this
     */
    public function setSortIndex($sort_index)
    {
        
        
        $this->container['sort_index'] = $sort_index;

        return $this;
    }
    

    /**
     * Gets is_back_in_stock_watchable
     *
     * @return bool
     */
    public function getIsBackInStockWatchable()
    {
        return $this->container['is_back_in_stock_watchable'];
    }

    /**
     * Sets is_back_in_stock_watchable
     *
     * @param bool $is_back_in_stock_watchable Should this product be watchable for customers when it is back in stock?
     *
     * @return $this
     */
    public function setIsBackInStockWatchable($is_back_in_stock_watchable)
    {
        
        
        $this->container['is_back_in_stock_watchable'] = $is_back_in_stock_watchable;

        return $this;
    }
    

    /**
     * Gets has_several_variants
     *
     * @return bool
     */
    public function getHasSeveralVariants()
    {
        return $this->container['has_several_variants'];
    }

    /**
     * Sets has_several_variants
     *
     * @param bool $has_several_variants Indicates if the products has several variants or not. The remaining variants can be fetched using the /products/{product id}/variants endpoint
     *
     * @return $this
     */
    public function setHasSeveralVariants($has_several_variants)
    {
        
        
        $this->container['has_several_variants'] = $has_several_variants;

        return $this;
    }
    

    /**
     * Gets modified_at
     *
     * @return string
     */
    public function getModifiedAt()
    {
        return $this->container['modified_at'];
    }

    /**
     * Sets modified_at
     *
     * @param string $modified_at A timestamp of when the product was modified. The time should be formatted using ISO-8601
     *
     * @return $this
     */
    public function setModifiedAt($modified_at)
    {
        
        
        $this->container['modified_at'] = $modified_at;

        return $this;
    }
    

    /**
     * Gets variants
     *
     * @return \Swagger\Client\Model\ProductVariantModelCollection
     */
    public function getVariants()
    {
        return $this->container['variants'];
    }

    /**
     * Sets variants
     *
     * @param \Swagger\Client\Model\ProductVariantModelCollection $variants variants
     *
     * @return $this
     */
    public function setVariants($variants)
    {
        
        
        $this->container['variants'] = $variants;

        return $this;
    }
    

    /**
     * Gets media_files
     *
     * @return \Swagger\Client\Model\ProductMediaFileLinkModelCollection
     */
    public function getMediaFiles()
    {
        return $this->container['media_files'];
    }

    /**
     * Sets media_files
     *
     * @param \Swagger\Client\Model\ProductMediaFileLinkModelCollection $media_files media_files
     *
     * @return $this
     */
    public function setMediaFiles($media_files)
    {
        
        
        $this->container['media_files'] = $media_files;

        return $this;
    }
    

    /**
     * Gets languages
     *
     * @return \Swagger\Client\Model\ProductLanguageModelCollection
     */
    public function getLanguages()
    {
        return $this->container['languages'];
    }

    /**
     * Sets languages
     *
     * @param \Swagger\Client\Model\ProductLanguageModelCollection $languages languages
     *
     * @return $this
     */
    public function setLanguages($languages)
    {
        
        
        $this->container['languages'] = $languages;

        return $this;
    }
    

    /**
     * Gets vat_rates
     *
     * @return \Swagger\Client\Model\ProductVatRateModelCollection
     */
    public function getVatRates()
    {
        return $this->container['vat_rates'];
    }

    /**
     * Sets vat_rates
     *
     * @param \Swagger\Client\Model\ProductVatRateModelCollection $vat_rates vat_rates
     *
     * @return $this
     */
    public function setVatRates($vat_rates)
    {
        
        
        $this->container['vat_rates'] = $vat_rates;

        return $this;
    }
    

    /**
     * Gets categories
     *
     * @return \Swagger\Client\Model\ProductCategoryLinkModelCollection
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \Swagger\Client\Model\ProductCategoryLinkModelCollection $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        
        
        $this->container['categories'] = $categories;

        return $this;
    }
    

    /**
     * Gets unit
     *
     * @return \Swagger\Client\Model\ProductUnitModelItem
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param \Swagger\Client\Model\ProductUnitModelItem $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        
        
        $this->container['unit'] = $unit;

        return $this;
    }
    

    /**
     * Gets meta_data
     *
     * @return \Swagger\Client\Model\ProductMetaDataModelCollection
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param \Swagger\Client\Model\ProductMetaDataModelCollection $meta_data meta_data
     *
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        
        
        $this->container['meta_data'] = $meta_data;

        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


