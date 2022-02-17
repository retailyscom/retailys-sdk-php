<?php
/**
 * ArticlePostRequest
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
 * ArticlePostRequest Class Doc Comment
 *
 * @category Class
 * @description Article create model
 * @package  Retailys
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ArticlePostRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ArticlePostRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'defaultName' => 'string',
        'state' => 'string',
        'vat' => 'float',
        'date' => '\DateTime',
        'manufacturerName' => 'string',
        'manufacturerCatalogid' => 'string',
        'familyId' => 'int',
        'measureId' => 'int',
        'ean' => 'string',
        'asin' => 'string',
        'isbn' => 'string',
        'internalCatalogid' => 'string',
        'weight' => 'float',
        'stockId' => 'int',
        'quantity' => 'int',
        'multidata' => '\Retailys\Model\ArticlePostRequestMultidata[]'
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
        'state' => null,
        'vat' => 'float',
        'date' => 'date-time',
        'manufacturerName' => null,
        'manufacturerCatalogid' => null,
        'familyId' => 'int64',
        'measureId' => 'int64',
        'ean' => null,
        'asin' => null,
        'isbn' => null,
        'internalCatalogid' => null,
        'weight' => 'float',
        'stockId' => 'int64',
        'quantity' => 'int64',
        'multidata' => null
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
        'state' => 'state',
        'vat' => 'vat',
        'date' => 'date',
        'manufacturerName' => 'manufacturer_name',
        'manufacturerCatalogid' => 'manufacturer_catalogid',
        'familyId' => 'family_id',
        'measureId' => 'measure_id',
        'ean' => 'ean',
        'asin' => 'asin',
        'isbn' => 'isbn',
        'internalCatalogid' => 'internal_catalogid',
        'weight' => 'weight',
        'stockId' => 'stock_id',
        'quantity' => 'quantity',
        'multidata' => 'multidata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'defaultName' => 'setDefaultName',
        'state' => 'setState',
        'vat' => 'setVat',
        'date' => 'setDate',
        'manufacturerName' => 'setManufacturerName',
        'manufacturerCatalogid' => 'setManufacturerCatalogid',
        'familyId' => 'setFamilyId',
        'measureId' => 'setMeasureId',
        'ean' => 'setEan',
        'asin' => 'setAsin',
        'isbn' => 'setIsbn',
        'internalCatalogid' => 'setInternalCatalogid',
        'weight' => 'setWeight',
        'stockId' => 'setStockId',
        'quantity' => 'setQuantity',
        'multidata' => 'setMultidata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'defaultName' => 'getDefaultName',
        'state' => 'getState',
        'vat' => 'getVat',
        'date' => 'getDate',
        'manufacturerName' => 'getManufacturerName',
        'manufacturerCatalogid' => 'getManufacturerCatalogid',
        'familyId' => 'getFamilyId',
        'measureId' => 'getMeasureId',
        'ean' => 'getEan',
        'asin' => 'getAsin',
        'isbn' => 'getIsbn',
        'internalCatalogid' => 'getInternalCatalogid',
        'weight' => 'getWeight',
        'stockId' => 'getStockId',
        'quantity' => 'getQuantity',
        'multidata' => 'getMultidata'
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

    const STATE__NEW = 'new';
    const STATE_OPENED = 'opened';
    const STATE_USED = 'used';
    const STATE_UNDEFINED = 'undefined';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE__NEW,
            self::STATE_OPENED,
            self::STATE_USED,
            self::STATE_UNDEFINED,
        ];
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
        $this->container['state'] = $data['state'] ?? 'new';
        $this->container['vat'] = $data['vat'] ?? 21;
        $this->container['date'] = $data['date'] ?? null;
        $this->container['manufacturerName'] = $data['manufacturerName'] ?? null;
        $this->container['manufacturerCatalogid'] = $data['manufacturerCatalogid'] ?? null;
        $this->container['familyId'] = $data['familyId'] ?? null;
        $this->container['measureId'] = $data['measureId'] ?? null;
        $this->container['ean'] = $data['ean'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['isbn'] = $data['isbn'] ?? null;
        $this->container['internalCatalogid'] = $data['internalCatalogid'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['stockId'] = $data['stockId'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['multidata'] = $data['multidata'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['defaultName'] === null) {
            $invalidProperties[] = "'defaultName' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['vat'] === null) {
            $invalidProperties[] = "'vat' can't be null";
        }
        if ($this->container['familyId'] === null) {
            $invalidProperties[] = "'familyId' can't be null";
        }
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
     * @return string
     */
    public function getDefaultName()
    {
        return $this->container['defaultName'];
    }

    /**
     * Sets defaultName
     *
     * @param string $defaultName Article default name.
     *
     * @return self
     */
    public function setDefaultName($defaultName)
    {
        $this->container['defaultName'] = $defaultName;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state Article state.
     *
     * @return self
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return float
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param float $vat Article vat.
     *
     * @return self
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date Date of article creation.
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets manufacturerName
     *
     * @return string|null
     */
    public function getManufacturerName()
    {
        return $this->container['manufacturerName'];
    }

    /**
     * Sets manufacturerName
     *
     * @param string|null $manufacturerName Manufacturer's name.
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
     * @return string|null
     */
    public function getManufacturerCatalogid()
    {
        return $this->container['manufacturerCatalogid'];
    }

    /**
     * Sets manufacturerCatalogid
     *
     * @param string|null $manufacturerCatalogid Manufacturer's article identifier.
     *
     * @return self
     */
    public function setManufacturerCatalogid($manufacturerCatalogid)
    {
        $this->container['manufacturerCatalogid'] = $manufacturerCatalogid;

        return $this;
    }

    /**
     * Gets familyId
     *
     * @return int
     */
    public function getFamilyId()
    {
        return $this->container['familyId'];
    }

    /**
     * Sets familyId
     *
     * @param int $familyId Family ID.
     *
     * @return self
     */
    public function setFamilyId($familyId)
    {
        $this->container['familyId'] = $familyId;

        return $this;
    }

    /**
     * Gets measureId
     *
     * @return int|null
     */
    public function getMeasureId()
    {
        return $this->container['measureId'];
    }

    /**
     * Sets measureId
     *
     * @param int|null $measureId The ID of the user who created the product.
     *
     * @return self
     */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string|null
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string|null $ean EAN.
     *
     * @return self
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets asin
     *
     * @return string|null
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string|null $asin ASIN.
     *
     * @return self
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets isbn
     *
     * @return string|null
     */
    public function getIsbn()
    {
        return $this->container['isbn'];
    }

    /**
     * Sets isbn
     *
     * @param string|null $isbn ISBN.
     *
     * @return self
     */
    public function setIsbn($isbn)
    {
        $this->container['isbn'] = $isbn;

        return $this;
    }

    /**
     * Gets internalCatalogid
     *
     * @return string|null
     */
    public function getInternalCatalogid()
    {
        return $this->container['internalCatalogid'];
    }

    /**
     * Sets internalCatalogid
     *
     * @param string|null $internalCatalogid Internal catalog ID.
     *
     * @return self
     */
    public function setInternalCatalogid($internalCatalogid)
    {
        $this->container['internalCatalogid'] = $internalCatalogid;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float|null $weight Weight in kilograms
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets stockId
     *
     * @return int|null
     */
    public function getStockId()
    {
        return $this->container['stockId'];
    }

    /**
     * Sets stockId
     *
     * @param int|null $stockId Stock ID.
     *
     * @return self
     */
    public function setStockId($stockId)
    {
        $this->container['stockId'] = $stockId;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity Quantity.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets multidata
     *
     * @return \Retailys\Model\ArticlePostRequestMultidata[]|null
     */
    public function getMultidata()
    {
        return $this->container['multidata'];
    }

    /**
     * Sets multidata
     *
     * @param \Retailys\Model\ArticlePostRequestMultidata[]|null $multidata Article multidata.
     *
     * @return self
     */
    public function setMultidata($multidata)
    {
        $this->container['multidata'] = $multidata;

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


