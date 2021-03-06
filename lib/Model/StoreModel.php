<?php
/**
 * StoreModel
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Retailys
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Retailys API
 *
 * Communication API restful e-commerce system Retailys. Get access in system at [https://www.retailys.com](https://www.retailys.com)<h1>Introduction</h1>**Retailys API** allows to create an amazing ecosystem of e-commerce services and help to develop robust webshops and other e-commerce solutions. Thanks to many built-in omnichannel and multichannel principles, every developer has possibility tu use **Retailys API** for creating vast global e-commerce applications easily and effectively.
 *
 * The version of the OpenAPI document: 1.1.02
 * Contact: helpdesk@retailys.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Retailys\Model;

use \ArrayAccess;
use \Retailys\ObjectSerializer;

/**
 * StoreModel Class Doc Comment
 *
 * @category Class
 * @package  Retailys
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class StoreModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StoreModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'provider' => 'OneOfNonExpandedModelStoresProviderModel',
        'name' => 'string',
        'stateCode' => 'string',
        'alternativeNames' => '\Retailys\Model\FamilyModelNames[]',
        'shortName' => 'string',
        'active' => 'bool',
        'isDeliveryStore' => 'bool',
        'isDispatchingStore' => 'bool',
        'supplier' => 'AnyOfNonExpandedModelStoresProviderModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'provider' => null,
        'name' => null,
        'stateCode' => null,
        'alternativeNames' => null,
        'shortName' => null,
        'active' => null,
        'isDeliveryStore' => null,
        'isDispatchingStore' => null,
        'supplier' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'provider' => 'provider',
        'name' => 'name',
        'stateCode' => 'state_code',
        'alternativeNames' => 'alternative_names',
        'shortName' => 'short_name',
        'active' => 'active',
        'isDeliveryStore' => 'is_delivery_store',
        'isDispatchingStore' => 'is_dispatching_store',
        'supplier' => 'supplier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'provider' => 'setProvider',
        'name' => 'setName',
        'stateCode' => 'setStateCode',
        'alternativeNames' => 'setAlternativeNames',
        'shortName' => 'setShortName',
        'active' => 'setActive',
        'isDeliveryStore' => 'setIsDeliveryStore',
        'isDispatchingStore' => 'setIsDispatchingStore',
        'supplier' => 'setSupplier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'provider' => 'getProvider',
        'name' => 'getName',
        'stateCode' => 'getStateCode',
        'alternativeNames' => 'getAlternativeNames',
        'shortName' => 'getShortName',
        'active' => 'getActive',
        'isDeliveryStore' => 'getIsDeliveryStore',
        'isDispatchingStore' => 'getIsDispatchingStore',
        'supplier' => 'getSupplier'
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
        return self::$openAPIModelName;
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['provider'] = $data['provider'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['stateCode'] = $data['stateCode'] ?? null;
        $this->container['alternativeNames'] = $data['alternativeNames'] ?? null;
        $this->container['shortName'] = $data['shortName'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['isDeliveryStore'] = $data['isDeliveryStore'] ?? null;
        $this->container['isDispatchingStore'] = $data['isDispatchingStore'] ?? null;
        $this->container['supplier'] = $data['supplier'] ?? null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Store identifier.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return OneOfNonExpandedModelStoresProviderModel|null
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param OneOfNonExpandedModelStoresProviderModel|null $provider Store Provider.
     *
     * @return self
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Store name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets stateCode
     *
     * @return string|null
     */
    public function getStateCode()
    {
        return $this->container['stateCode'];
    }

    /**
     * Sets stateCode
     *
     * @param string|null $stateCode Store state code.
     *
     * @return self
     */
    public function setStateCode($stateCode)
    {
        $this->container['stateCode'] = $stateCode;

        return $this;
    }

    /**
     * Gets alternativeNames
     *
     * @return \Retailys\Model\FamilyModelNames[]|null
     */
    public function getAlternativeNames()
    {
        return $this->container['alternativeNames'];
    }

    /**
     * Sets alternativeNames
     *
     * @param \Retailys\Model\FamilyModelNames[]|null $alternativeNames Store alternative names.
     *
     * @return self
     */
    public function setAlternativeNames($alternativeNames)
    {
        $this->container['alternativeNames'] = $alternativeNames;

        return $this;
    }

    /**
     * Gets shortName
     *
     * @return string|null
     */
    public function getShortName()
    {
        return $this->container['shortName'];
    }

    /**
     * Sets shortName
     *
     * @param string|null $shortName Store short name.
     *
     * @return self
     */
    public function setShortName($shortName)
    {
        $this->container['shortName'] = $shortName;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Store active.
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets isDeliveryStore
     *
     * @return bool|null
     */
    public function getIsDeliveryStore()
    {
        return $this->container['isDeliveryStore'];
    }

    /**
     * Sets isDeliveryStore
     *
     * @param bool|null $isDeliveryStore Is delivery Store.
     *
     * @return self
     */
    public function setIsDeliveryStore($isDeliveryStore)
    {
        $this->container['isDeliveryStore'] = $isDeliveryStore;

        return $this;
    }

    /**
     * Gets isDispatchingStore
     *
     * @return bool|null
     */
    public function getIsDispatchingStore()
    {
        return $this->container['isDispatchingStore'];
    }

    /**
     * Sets isDispatchingStore
     *
     * @param bool|null $isDispatchingStore Is dispatching Store.
     *
     * @return self
     */
    public function setIsDispatchingStore($isDispatchingStore)
    {
        $this->container['isDispatchingStore'] = $isDispatchingStore;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return AnyOfNonExpandedModelStoresProviderModel|null
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param AnyOfNonExpandedModelStoresProviderModel|null $supplier Store supplier.
     *
     * @return self
     */
    public function setSupplier($supplier)
    {
        $this->container['supplier'] = $supplier;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


