<?php
/**
 * FamilyPostRequestParamsArticles
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
 * FamilyPostRequestParamsArticles Class Doc Comment
 *
 * @category Class
 * @description Family params articles.
 * @package  Retailys
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FamilyPostRequestParamsArticles implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FamilyPostRequest_params_articles';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'defaultName' => 'bool',
        'vat' => 'bool',
        'thumbnail' => 'bool',
        'ean' => 'bool',
        'costPrice' => 'bool',
        'manufacturerName' => 'bool',
        'manufacturerCatalogid' => 'bool',
        'internalCatalogid' => 'bool',
        'note' => 'bool',
        'measureId' => 'bool',
        'countryOfOrigin' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'defaultName' => null,
        'vat' => null,
        'thumbnail' => null,
        'ean' => null,
        'costPrice' => null,
        'manufacturerName' => null,
        'manufacturerCatalogid' => null,
        'internalCatalogid' => null,
        'note' => null,
        'measureId' => null,
        'countryOfOrigin' => null
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
        'defaultName' => 'default_name',
        'vat' => 'vat',
        'thumbnail' => 'thumbnail',
        'ean' => 'ean',
        'costPrice' => 'cost_price',
        'manufacturerName' => 'manufacturer_name',
        'manufacturerCatalogid' => 'manufacturer_catalogid',
        'internalCatalogid' => 'internal_catalogid',
        'note' => 'note',
        'measureId' => 'measure_id',
        'countryOfOrigin' => 'country_of_origin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'defaultName' => 'setDefaultName',
        'vat' => 'setVat',
        'thumbnail' => 'setThumbnail',
        'ean' => 'setEan',
        'costPrice' => 'setCostPrice',
        'manufacturerName' => 'setManufacturerName',
        'manufacturerCatalogid' => 'setManufacturerCatalogid',
        'internalCatalogid' => 'setInternalCatalogid',
        'note' => 'setNote',
        'measureId' => 'setMeasureId',
        'countryOfOrigin' => 'setCountryOfOrigin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'defaultName' => 'getDefaultName',
        'vat' => 'getVat',
        'thumbnail' => 'getThumbnail',
        'ean' => 'getEan',
        'costPrice' => 'getCostPrice',
        'manufacturerName' => 'getManufacturerName',
        'manufacturerCatalogid' => 'getManufacturerCatalogid',
        'internalCatalogid' => 'getInternalCatalogid',
        'note' => 'getNote',
        'measureId' => 'getMeasureId',
        'countryOfOrigin' => 'getCountryOfOrigin'
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
        $this->container['defaultName'] = $data['defaultName'] ?? null;
        $this->container['vat'] = $data['vat'] ?? null;
        $this->container['thumbnail'] = $data['thumbnail'] ?? null;
        $this->container['ean'] = $data['ean'] ?? null;
        $this->container['costPrice'] = $data['costPrice'] ?? null;
        $this->container['manufacturerName'] = $data['manufacturerName'] ?? null;
        $this->container['manufacturerCatalogid'] = $data['manufacturerCatalogid'] ?? null;
        $this->container['internalCatalogid'] = $data['internalCatalogid'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['measureId'] = $data['measureId'] ?? null;
        $this->container['countryOfOrigin'] = $data['countryOfOrigin'] ?? null;
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
     * Gets defaultName
     *
     * @return bool|null
     */
    public function getDefaultName()
    {
        return $this->container['defaultName'];
    }

    /**
     * Sets defaultName
     *
     * @param bool|null $defaultName defaultName
     *
     * @return self
     */
    public function setDefaultName($defaultName)
    {
        $this->container['defaultName'] = $defaultName;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return bool|null
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param bool|null $vat vat
     *
     * @return self
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets thumbnail
     *
     * @return bool|null
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     *
     * @param bool|null $thumbnail thumbnail
     *
     * @return self
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return bool|null
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param bool|null $ean ean
     *
     * @return self
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets costPrice
     *
     * @return bool|null
     */
    public function getCostPrice()
    {
        return $this->container['costPrice'];
    }

    /**
     * Sets costPrice
     *
     * @param bool|null $costPrice costPrice
     *
     * @return self
     */
    public function setCostPrice($costPrice)
    {
        $this->container['costPrice'] = $costPrice;

        return $this;
    }

    /**
     * Gets manufacturerName
     *
     * @return bool|null
     */
    public function getManufacturerName()
    {
        return $this->container['manufacturerName'];
    }

    /**
     * Sets manufacturerName
     *
     * @param bool|null $manufacturerName manufacturerName
     *
     * @return self
     */
    public function setManufacturerName($manufacturerName)
    {
        $this->container['manufacturerName'] = $manufacturerName;

        return $this;
    }

    /**
     * Gets manufacturerCatalogid
     *
     * @return bool|null
     */
    public function getManufacturerCatalogid()
    {
        return $this->container['manufacturerCatalogid'];
    }

    /**
     * Sets manufacturerCatalogid
     *
     * @param bool|null $manufacturerCatalogid manufacturerCatalogid
     *
     * @return self
     */
    public function setManufacturerCatalogid($manufacturerCatalogid)
    {
        $this->container['manufacturerCatalogid'] = $manufacturerCatalogid;

        return $this;
    }

    /**
     * Gets internalCatalogid
     *
     * @return bool|null
     */
    public function getInternalCatalogid()
    {
        return $this->container['internalCatalogid'];
    }

    /**
     * Sets internalCatalogid
     *
     * @param bool|null $internalCatalogid internalCatalogid
     *
     * @return self
     */
    public function setInternalCatalogid($internalCatalogid)
    {
        $this->container['internalCatalogid'] = $internalCatalogid;

        return $this;
    }

    /**
     * Gets note
     *
     * @return bool|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param bool|null $note note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets measureId
     *
     * @return bool|null
     */
    public function getMeasureId()
    {
        return $this->container['measureId'];
    }

    /**
     * Sets measureId
     *
     * @param bool|null $measureId measureId
     *
     * @return self
     */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;

        return $this;
    }

    /**
     * Gets countryOfOrigin
     *
     * @return bool|null
     */
    public function getCountryOfOrigin()
    {
        return $this->container['countryOfOrigin'];
    }

    /**
     * Sets countryOfOrigin
     *
     * @param bool|null $countryOfOrigin countryOfOrigin
     *
     * @return self
     */
    public function setCountryOfOrigin($countryOfOrigin)
    {
        $this->container['countryOfOrigin'] = $countryOfOrigin;

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


