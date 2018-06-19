<?php


/**
 * ProductVariantModel
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
 * ProductVariantModel Class Doc Comment
 *
 * @category Class

 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductVariantModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductVariantModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sku' => 'string''is_active' => 'bool''stock_status_id' => 'int''stock_quantity' => 'int''weight_in_kg' => 'float''cost_price' => 'string''ean' => 'string''mpn' => 'string''image_file_id' => 'int''attribute_value_links' => 'int[]''prices' => '\Swagger\Client\Model\ProductVariantPriceModel[]''attributes' => '\Swagger\Client\Model\ProductVariantAttributeValueModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sku' => null'is_active' => null'stock_status_id' => 'int32''stock_quantity' => 'int32''weight_in_kg' => 'float''cost_price' => null'ean' => null'mpn' => null'image_file_id' => 'int32''attribute_value_links' => 'int32''prices' => null'attributes' => null
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
        'sku' => 'sku''is_active' => 'isActive''stock_status_id' => 'stockStatusId''stock_quantity' => 'stockQuantity''weight_in_kg' => 'weightInKg''cost_price' => 'costPrice''ean' => 'ean''mpn' => 'mpn''image_file_id' => 'imageFileId''attribute_value_links' => 'attributeValueLinks''prices' => 'prices''attributes' => 'attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sku' => 'setSku''is_active' => 'setIsActive''stock_status_id' => 'setStockStatusId''stock_quantity' => 'setStockQuantity''weight_in_kg' => 'setWeightInKg''cost_price' => 'setCostPrice''ean' => 'setEan''mpn' => 'setMpn''image_file_id' => 'setImageFileId''attribute_value_links' => 'setAttributeValueLinks''prices' => 'setPrices''attributes' => 'setAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku' => 'getSku''is_active' => 'getIsActive''stock_status_id' => 'getStockStatusId''stock_quantity' => 'getStockQuantity''weight_in_kg' => 'getWeightInKg''cost_price' => 'getCostPrice''ean' => 'getEan''mpn' => 'getMpn''image_file_id' => 'getImageFileId''attribute_value_links' => 'getAttributeValueLinks''prices' => 'getPrices''attributes' => 'getAttributes'
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
        
        
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : true;
        
        $this->container['stock_status_id'] = isset($data['stock_status_id']) ? $data['stock_status_id'] : null;
        
        $this->container['stock_quantity'] = isset($data['stock_quantity']) ? $data['stock_quantity'] : null;
        
        $this->container['weight_in_kg'] = isset($data['weight_in_kg']) ? $data['weight_in_kg'] : null;
        
        $this->container['cost_price'] = isset($data['cost_price']) ? $data['cost_price'] : 'null';
        
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        
        $this->container['mpn'] = isset($data['mpn']) ? $data['mpn'] : null;
        
        $this->container['image_file_id'] = isset($data['image_file_id']) ? $data['image_file_id'] : null;
        
        $this->container['attribute_value_links'] = isset($data['attribute_value_links']) ? $data['attribute_value_links'] : null;
        
        $this->container['prices'] = isset($data['prices']) ? $data['prices'] : null;
        
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        
        
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
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku The product variants SKU (stock keeping unit)
     *
     * @return $this
     */
    public function setSku($sku)
    {
        
        
        $this->container['sku'] = $sku;

        return $this;
    }
    

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active Is this variant active? Only active variants are visible to customers
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        
        
        $this->container['is_active'] = $is_active;

        return $this;
    }
    

    /**
     * Gets stock_status_id
     *
     * @return int
     */
    public function getStockStatusId()
    {
        return $this->container['stock_status_id'];
    }

    /**
     * Sets stock_status_id
     *
     * @param int $stock_status_id The ID of the variants stock status. Available stock statuses can be fetched using the /product-stock-statuses endpoint
     *
     * @return $this
     */
    public function setStockStatusId($stock_status_id)
    {
        
        
        $this->container['stock_status_id'] = $stock_status_id;

        return $this;
    }
    

    /**
     * Gets stock_quantity
     *
     * @return int
     */
    public function getStockQuantity()
    {
        return $this->container['stock_quantity'];
    }

    /**
     * Sets stock_quantity
     *
     * @param int $stock_quantity The current stock quantity for this variant
     *
     * @return $this
     */
    public function setStockQuantity($stock_quantity)
    {
        
        
        $this->container['stock_quantity'] = $stock_quantity;

        return $this;
    }
    

    /**
     * Gets weight_in_kg
     *
     * @return float
     */
    public function getWeightInKg()
    {
        return $this->container['weight_in_kg'];
    }

    /**
     * Sets weight_in_kg
     *
     * @param float $weight_in_kg The variants weight in KG
     *
     * @return $this
     */
    public function setWeightInKg($weight_in_kg)
    {
        
        
        $this->container['weight_in_kg'] = $weight_in_kg;

        return $this;
    }
    

    /**
     * Gets cost_price
     *
     * @return string
     */
    public function getCostPrice()
    {
        return $this->container['cost_price'];
    }

    /**
     * Sets cost_price
     *
     * @param string $cost_price The cost for this variant. Used for statistic and never displayed to customers
     *
     * @return $this
     */
    public function setCostPrice($cost_price)
    {
        
        
        $this->container['cost_price'] = $cost_price;

        return $this;
    }
    

    /**
     * Gets ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string $ean European article no
     *
     * @return $this
     */
    public function setEan($ean)
    {
        
        
        $this->container['ean'] = $ean;

        return $this;
    }
    

    /**
     * Gets mpn
     *
     * @return string
     */
    public function getMpn()
    {
        return $this->container['mpn'];
    }

    /**
     * Sets mpn
     *
     * @param string $mpn Manufacturer part no
     *
     * @return $this
     */
    public function setMpn($mpn)
    {
        
        
        $this->container['mpn'] = $mpn;

        return $this;
    }
    

    /**
     * Gets image_file_id
     *
     * @return int
     */
    public function getImageFileId()
    {
        return $this->container['image_file_id'];
    }

    /**
     * Sets image_file_id
     *
     * @param int $image_file_id image_file_id
     *
     * @return $this
     */
    public function setImageFileId($image_file_id)
    {
        
        
        $this->container['image_file_id'] = $image_file_id;

        return $this;
    }
    

    /**
     * Gets attribute_value_links
     *
     * @return int[]
     */
    public function getAttributeValueLinks()
    {
        return $this->container['attribute_value_links'];
    }

    /**
     * Sets attribute_value_links
     *
     * @param int[] $attribute_value_links An array of attribute value IDs that this variant belongs to. This field is mandatory for products variants if the product´s hasSeveralVariants field is set to true
     *
     * @return $this
     */
    public function setAttributeValueLinks($attribute_value_links)
    {
        
        
        $this->container['attribute_value_links'] = $attribute_value_links;

        return $this;
    }
    

    /**
     * Gets prices
     *
     * @return \Swagger\Client\Model\ProductVariantPriceModel[]
     */
    public function getPrices()
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param \Swagger\Client\Model\ProductVariantPriceModel[] $prices A collection of product variant prices
     *
     * @return $this
     */
    public function setPrices($prices)
    {
        
        
        $this->container['prices'] = $prices;

        return $this;
    }
    

    /**
     * Gets attributes
     *
     * @return \Swagger\Client\Model\ProductVariantAttributeValueModel[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \Swagger\Client\Model\ProductVariantAttributeValueModel[] $attributes A collection of product variant attribute values
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        
        
        $this->container['attributes'] = $attributes;

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


