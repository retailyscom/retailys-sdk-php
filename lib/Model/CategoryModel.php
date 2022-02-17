<?php
/**
 * CategoryModel
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
 * CategoryModel Class Doc Comment
 *
 * @category Class
 * @package  Retailys
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CategoryModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CategoryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'keywords' => 'string',
        'shortContent' => 'string',
        'content' => 'string',
        'note' => 'string',
        'visible' => 'bool',
        'parentCategory' => 'OneOfNonExpandedModelCategoryModel',
        'topCategory' => 'OneOfNonExpandedModelCategoryModel',
        'channel' => 'OneOfNonExpandedModelChannelModel'
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
        'name' => null,
        'keywords' => null,
        'shortContent' => null,
        'content' => null,
        'note' => null,
        'visible' => null,
        'parentCategory' => null,
        'topCategory' => null,
        'channel' => null
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
        'name' => 'name',
        'keywords' => 'keywords',
        'shortContent' => 'short_content',
        'content' => 'content',
        'note' => 'note',
        'visible' => 'visible',
        'parentCategory' => 'parent_category',
        'topCategory' => 'top_category',
        'channel' => 'channel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'keywords' => 'setKeywords',
        'shortContent' => 'setShortContent',
        'content' => 'setContent',
        'note' => 'setNote',
        'visible' => 'setVisible',
        'parentCategory' => 'setParentCategory',
        'topCategory' => 'setTopCategory',
        'channel' => 'setChannel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'keywords' => 'getKeywords',
        'shortContent' => 'getShortContent',
        'content' => 'getContent',
        'note' => 'getNote',
        'visible' => 'getVisible',
        'parentCategory' => 'getParentCategory',
        'topCategory' => 'getTopCategory',
        'channel' => 'getChannel'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['keywords'] = $data['keywords'] ?? null;
        $this->container['shortContent'] = $data['shortContent'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['visible'] = $data['visible'] ?? null;
        $this->container['parentCategory'] = $data['parentCategory'] ?? null;
        $this->container['topCategory'] = $data['topCategory'] ?? null;
        $this->container['channel'] = $data['channel'] ?? null;
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
     * @param int|null $id Category identifier.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string|null $name Category name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string|null $keywords Category keywords.
     *
     * @return self
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

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
     * @param string|null $shortContent Category short content.
     *
     * @return self
     */
    public function setShortContent($shortContent)
    {
        $this->container['shortContent'] = $shortContent;

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
     * @param string|null $content Category content.
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note Category note.
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool|null
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool|null $visible Category visible.
     *
     * @return self
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets parentCategory
     *
     * @return OneOfNonExpandedModelCategoryModel|null
     */
    public function getParentCategory()
    {
        return $this->container['parentCategory'];
    }

    /**
     * Sets parentCategory
     *
     * @param OneOfNonExpandedModelCategoryModel|null $parentCategory Category parent ID of category.
     *
     * @return self
     */
    public function setParentCategory($parentCategory)
    {
        $this->container['parentCategory'] = $parentCategory;

        return $this;
    }

    /**
     * Gets topCategory
     *
     * @return OneOfNonExpandedModelCategoryModel|null
     */
    public function getTopCategory()
    {
        return $this->container['topCategory'];
    }

    /**
     * Sets topCategory
     *
     * @param OneOfNonExpandedModelCategoryModel|null $topCategory Top category ID of category.
     *
     * @return self
     */
    public function setTopCategory($topCategory)
    {
        $this->container['topCategory'] = $topCategory;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return OneOfNonExpandedModelChannelModel|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param OneOfNonExpandedModelChannelModel|null $channel Channel.
     *
     * @return self
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

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


