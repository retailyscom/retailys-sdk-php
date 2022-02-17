<?php
/**
 * ArticlePostRequestMultidata
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
 * ArticlePostRequestMultidata Class Doc Comment
 *
 * @category Class
 * @package  Retailys
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ArticlePostRequestMultidata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ArticlePostRequest_multidata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channelId' => 'int',
        'name' => 'string',
        'path' => 'string',
        'keywords' => 'string',
        'content' => 'string',
        'shortContent' => 'string',
        'active' => 'bool',
        'baseprice' => 'float',
        'price' => 'float',
        'baseretailprice' => 'float',
        'retailprice' => 'float',
        'categories' => 'int[]',
        'relatedArticles' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'channelId' => 'int64',
        'name' => null,
        'path' => null,
        'keywords' => null,
        'content' => null,
        'shortContent' => null,
        'active' => null,
        'baseprice' => 'float',
        'price' => 'float',
        'baseretailprice' => 'float',
        'retailprice' => 'float',
        'categories' => 'int64',
        'relatedArticles' => 'int64'
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
        'channelId' => 'channel_id',
        'name' => 'name',
        'path' => 'path',
        'keywords' => 'keywords',
        'content' => 'content',
        'shortContent' => 'short_content',
        'active' => 'active',
        'baseprice' => 'baseprice',
        'price' => 'price',
        'baseretailprice' => 'baseretailprice',
        'retailprice' => 'retailprice',
        'categories' => 'categories',
        'relatedArticles' => 'related_articles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channelId' => 'setChannelId',
        'name' => 'setName',
        'path' => 'setPath',
        'keywords' => 'setKeywords',
        'content' => 'setContent',
        'shortContent' => 'setShortContent',
        'active' => 'setActive',
        'baseprice' => 'setBaseprice',
        'price' => 'setPrice',
        'baseretailprice' => 'setBaseretailprice',
        'retailprice' => 'setRetailprice',
        'categories' => 'setCategories',
        'relatedArticles' => 'setRelatedArticles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channelId' => 'getChannelId',
        'name' => 'getName',
        'path' => 'getPath',
        'keywords' => 'getKeywords',
        'content' => 'getContent',
        'shortContent' => 'getShortContent',
        'active' => 'getActive',
        'baseprice' => 'getBaseprice',
        'price' => 'getPrice',
        'baseretailprice' => 'getBaseretailprice',
        'retailprice' => 'getRetailprice',
        'categories' => 'getCategories',
        'relatedArticles' => 'getRelatedArticles'
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
        $this->container['channelId'] = $data['channelId'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['path'] = $data['path'] ?? null;
        $this->container['keywords'] = $data['keywords'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
        $this->container['shortContent'] = $data['shortContent'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['baseprice'] = $data['baseprice'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['baseretailprice'] = $data['baseretailprice'] ?? null;
        $this->container['retailprice'] = $data['retailprice'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['relatedArticles'] = $data['relatedArticles'] ?? null;
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
     * Gets channelId
     *
     * @return int|null
     */
    public function getChannelId()
    {
        return $this->container['channelId'];
    }

    /**
     * Sets channelId
     *
     * @param int|null $channelId channelId
     *
     * @return self
     */
    public function setChannelId($channelId)
    {
        $this->container['channelId'] = $channelId;

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
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path path
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string|null
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string|null $keywords keywords
     *
     * @return self
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content content
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets shortContent
     *
     * @return string|null
     */
    public function getShortContent()
    {
        return $this->container['shortContent'];
    }

    /**
     * Sets shortContent
     *
     * @param string|null $shortContent shortContent
     *
     * @return self
     */
    public function setShortContent($shortContent)
    {
        $this->container['shortContent'] = $shortContent;

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
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets baseprice
     *
     * @return float|null
     */
    public function getBaseprice()
    {
        return $this->container['baseprice'];
    }

    /**
     * Sets baseprice
     *
     * @param float|null $baseprice baseprice
     *
     * @return self
     */
    public function setBaseprice($baseprice)
    {
        $this->container['baseprice'] = $baseprice;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets baseretailprice
     *
     * @return float|null
     */
    public function getBaseretailprice()
    {
        return $this->container['baseretailprice'];
    }

    /**
     * Sets baseretailprice
     *
     * @param float|null $baseretailprice baseretailprice
     *
     * @return self
     */
    public function setBaseretailprice($baseretailprice)
    {
        $this->container['baseretailprice'] = $baseretailprice;

        return $this;
    }

    /**
     * Gets retailprice
     *
     * @return float|null
     */
    public function getRetailprice()
    {
        return $this->container['retailprice'];
    }

    /**
     * Sets retailprice
     *
     * @param float|null $retailprice retailprice
     *
     * @return self
     */
    public function setRetailprice($retailprice)
    {
        $this->container['retailprice'] = $retailprice;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return int[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param int[]|null $categories categories
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets relatedArticles
     *
     * @return int[]|null
     */
    public function getRelatedArticles()
    {
        return $this->container['relatedArticles'];
    }

    /**
     * Sets relatedArticles
     *
     * @param int[]|null $relatedArticles relatedArticles
     *
     * @return self
     */
    public function setRelatedArticles($relatedArticles)
    {
        $this->container['relatedArticles'] = $relatedArticles;

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


