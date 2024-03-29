<?php


/**
 * CustomerUpdateModel
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
 * CustomerUpdateModel Class Doc Comment
 *
 * @category Class

 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerUpdateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerUpdateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer_id' => 'int''created_at' => 'string''type' => 'string''email' => 'string''national_id_no' => 'string''vat_no' => 'string''custom_info1' => 'string''custom_info2' => 'string''addresses' => '\Swagger\Client\Model\CustomerUpdateModelAddresses'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customer_id' => 'int32''created_at' => null'type' => null'email' => 'email''national_id_no' => null'vat_no' => null'custom_info1' => null'custom_info2' => null'addresses' => null
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
        'customer_id' => 'customerId''created_at' => 'createdAt''type' => 'type''email' => 'email''national_id_no' => 'nationalIdNo''vat_no' => 'vatNo''custom_info1' => 'customInfo1''custom_info2' => 'customInfo2''addresses' => 'addresses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_id' => 'setCustomerId''created_at' => 'setCreatedAt''type' => 'setType''email' => 'setEmail''national_id_no' => 'setNationalIdNo''vat_no' => 'setVatNo''custom_info1' => 'setCustomInfo1''custom_info2' => 'setCustomInfo2''addresses' => 'setAddresses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_id' => 'getCustomerId''created_at' => 'getCreatedAt''type' => 'getType''email' => 'getEmail''national_id_no' => 'getNationalIdNo''vat_no' => 'getVatNo''custom_info1' => 'getCustomInfo1''custom_info2' => 'getCustomInfo2''addresses' => 'getAddresses'
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
        
        
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        
        $this->container['national_id_no'] = isset($data['national_id_no']) ? $data['national_id_no'] : null;
        
        $this->container['vat_no'] = isset($data['vat_no']) ? $data['vat_no'] : null;
        
        $this->container['custom_info1'] = isset($data['custom_info1']) ? $data['custom_info1'] : null;
        
        $this->container['custom_info2'] = isset($data['custom_info2']) ? $data['custom_info2'] : null;
        
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        
        
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
     * Gets customer_id
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int $customer_id The customers ID
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        
        
        $this->container['customer_id'] = $customer_id;

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
     * @param string $created_at A timestamp of when the customer was created. The time should be formatted using ISO-8601
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        
        
        $this->container['created_at'] = $created_at;

        return $this;
    }
    

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of customer this is. Either: ”person” or ”company”
     *
     * @return $this
     */
    public function setType($type)
    {
        
        
        $this->container['type'] = $type;

        return $this;
    }
    

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email address of the customer
     *
     * @return $this
     */
    public function setEmail($email)
    {
        
        
        $this->container['email'] = $email;

        return $this;
    }
    

    /**
     * Gets national_id_no
     *
     * @return string
     */
    public function getNationalIdNo()
    {
        return $this->container['national_id_no'];
    }

    /**
     * Sets national_id_no
     *
     * @param string $national_id_no National id number of the customer
     *
     * @return $this
     */
    public function setNationalIdNo($national_id_no)
    {
        
        
        $this->container['national_id_no'] = $national_id_no;

        return $this;
    }
    

    /**
     * Gets vat_no
     *
     * @return string
     */
    public function getVatNo()
    {
        return $this->container['vat_no'];
    }

    /**
     * Sets vat_no
     *
     * @param string $vat_no VAT number of the customer
     *
     * @return $this
     */
    public function setVatNo($vat_no)
    {
        
        
        $this->container['vat_no'] = $vat_no;

        return $this;
    }
    

    /**
     * Gets custom_info1
     *
     * @return string
     */
    public function getCustomInfo1()
    {
        return $this->container['custom_info1'];
    }

    /**
     * Sets custom_info1
     *
     * @param string $custom_info1 Custom info saved to a customer. Can be linked to text fields on the customer registration page for additional data collection
     *
     * @return $this
     */
    public function setCustomInfo1($custom_info1)
    {
        
        
        $this->container['custom_info1'] = $custom_info1;

        return $this;
    }
    

    /**
     * Gets custom_info2
     *
     * @return string
     */
    public function getCustomInfo2()
    {
        return $this->container['custom_info2'];
    }

    /**
     * Sets custom_info2
     *
     * @param string $custom_info2 Custom info saved to a customer. Can be linked to text fields on the customer registration page for additional data collection
     *
     * @return $this
     */
    public function setCustomInfo2($custom_info2)
    {
        
        
        $this->container['custom_info2'] = $custom_info2;

        return $this;
    }
    

    /**
     * Gets addresses
     *
     * @return \Swagger\Client\Model\CustomerUpdateModelAddresses
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Swagger\Client\Model\CustomerUpdateModelAddresses $addresses addresses
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        
        
        $this->container['addresses'] = $addresses;

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


