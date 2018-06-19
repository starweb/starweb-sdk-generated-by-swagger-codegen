<?php


/**
 * ProductCategoryLanguagesModel
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
 * ProductCategoryLanguagesModel Class Doc Comment
 *
 * @category Class

 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductCategoryLanguagesModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductCategoryLanguagesModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lang_code' => 'string''name' => 'string''page_title' => 'string''description' => 'string''bottom_description' => 'string''page_meta_description' => 'string''permalink' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lang_code' => null'name' => null'page_title' => null'description' => null'bottom_description' => null'page_meta_description' => null'permalink' => null
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
        'lang_code' => 'langCode''name' => 'name''page_title' => 'pageTitle''description' => 'description''bottom_description' => 'bottomDescription''page_meta_description' => 'pageMetaDescription''permalink' => 'permalink'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lang_code' => 'setLangCode''name' => 'setName''page_title' => 'setPageTitle''description' => 'setDescription''bottom_description' => 'setBottomDescription''page_meta_description' => 'setPageMetaDescription''permalink' => 'setPermalink'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lang_code' => 'getLangCode''name' => 'getName''page_title' => 'getPageTitle''description' => 'getDescription''bottom_description' => 'getBottomDescription''page_meta_description' => 'getPageMetaDescription''permalink' => 'getPermalink'
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
        
        
        $this->container['lang_code'] = isset($data['lang_code']) ? $data['lang_code'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['page_title'] = isset($data['page_title']) ? $data['page_title'] : null;
        
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        
        $this->container['bottom_description'] = isset($data['bottom_description']) ? $data['bottom_description'] : null;
        
        $this->container['page_meta_description'] = isset($data['page_meta_description']) ? $data['page_meta_description'] : null;
        
        $this->container['permalink'] = isset($data['permalink']) ? $data['permalink'] : null;
        
        
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
     * Gets lang_code
     *
     * @return string
     */
    public function getLangCode()
    {
        return $this->container['lang_code'];
    }

    /**
     * Sets lang_code
     *
     * @param string $lang_code Language Code (ISO 639-1) for this translation. Has to be a valid lang code that the shop supports.
     *
     * @return $this
     */
    public function setLangCode($lang_code)
    {
        
        
        $this->container['lang_code'] = $lang_code;

        return $this;
    }
    

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of this product category
     *
     * @return $this
     */
    public function setName($name)
    {
        
        
        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets page_title
     *
     * @return string
     */
    public function getPageTitle()
    {
        return $this->container['page_title'];
    }

    /**
     * Sets page_title
     *
     * @param string $page_title The page title for this product category
     *
     * @return $this
     */
    public function setPageTitle($page_title)
    {
        
        
        $this->container['page_title'] = $page_title;

        return $this;
    }
    

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The main/top description of this product category
     *
     * @return $this
     */
    public function setDescription($description)
    {
        
        
        $this->container['description'] = $description;

        return $this;
    }
    

    /**
     * Gets bottom_description
     *
     * @return string
     */
    public function getBottomDescription()
    {
        return $this->container['bottom_description'];
    }

    /**
     * Sets bottom_description
     *
     * @param string $bottom_description The extra/bottom description of this product category
     *
     * @return $this
     */
    public function setBottomDescription($bottom_description)
    {
        
        
        $this->container['bottom_description'] = $bottom_description;

        return $this;
    }
    

    /**
     * Gets page_meta_description
     *
     * @return string
     */
    public function getPageMetaDescription()
    {
        return $this->container['page_meta_description'];
    }

    /**
     * Sets page_meta_description
     *
     * @param string $page_meta_description The page meta data description of this product category
     *
     * @return $this
     */
    public function setPageMetaDescription($page_meta_description)
    {
        
        
        $this->container['page_meta_description'] = $page_meta_description;

        return $this;
    }
    

    /**
     * Gets permalink
     *
     * @return string
     */
    public function getPermalink()
    {
        return $this->container['permalink'];
    }

    /**
     * Sets permalink
     *
     * @param string $permalink The permalink to this product category. Will auto generate if left out
     *
     * @return $this
     */
    public function setPermalink($permalink)
    {
        
        
        $this->container['permalink'] = $permalink;

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

