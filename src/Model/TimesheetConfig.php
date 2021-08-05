<?php

/**
 *
 * Kimai API Client 2021 — NOTICE OF LICENSE
 * This source file is released under MIT license by copyright holders.
 * @copyright 2017-2021 (c) Niko Granö (https://granö.fi)
 * @copyright 2014-2021 (c) Fiteco Group Oy (https://group.fiteco.fi)
 *
 */

/**
 * Kimai - API Docs.
 *
 * JSON API for the Kimai time-tracking software: [API documentation](https://www.kimai.org/documentation/rest-api.html), [Swagger definition file](doc.json)
 *
 * The version of the OpenAPI document: 0.6
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Fiteco\KimaiClient\Model;

use ArrayAccess;
use Fiteco\KimaiClient\ObjectSerializer;

/**
 * TimesheetConfig Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TimesheetConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'TimesheetConfig';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'trackingMode'           => 'string',
        'defaultBeginTime'       => 'string',
        'activeEntriesHardLimit' => 'int',
        'activeEntriesSoftLimit' => 'int',
        'isAllowFutureTimes'     => 'bool',
        'isAllowOverlapping'     => 'bool',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'trackingMode'           => null,
        'defaultBeginTime'       => null,
        'activeEntriesHardLimit' => null,
        'activeEntriesSoftLimit' => null,
        'isAllowFutureTimes'     => null,
        'isAllowOverlapping'     => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'trackingMode'           => 'trackingMode',
        'defaultBeginTime'       => 'defaultBeginTime',
        'activeEntriesHardLimit' => 'activeEntriesHardLimit',
        'activeEntriesSoftLimit' => 'activeEntriesSoftLimit',
        'isAllowFutureTimes'     => 'isAllowFutureTimes',
        'isAllowOverlapping'     => 'isAllowOverlapping',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'trackingMode'           => 'setTrackingMode',
        'defaultBeginTime'       => 'setDefaultBeginTime',
        'activeEntriesHardLimit' => 'setActiveEntriesHardLimit',
        'activeEntriesSoftLimit' => 'setActiveEntriesSoftLimit',
        'isAllowFutureTimes'     => 'setIsAllowFutureTimes',
        'isAllowOverlapping'     => 'setIsAllowOverlapping',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'trackingMode'           => 'getTrackingMode',
        'defaultBeginTime'       => 'getDefaultBeginTime',
        'activeEntriesHardLimit' => 'getActiveEntriesHardLimit',
        'activeEntriesSoftLimit' => 'getActiveEntriesSoftLimit',
        'isAllowFutureTimes'     => 'getIsAllowFutureTimes',
        'isAllowOverlapping'     => 'getIsAllowOverlapping',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['trackingMode'] = $data['trackingMode'] ?? null;
        $this->container['defaultBeginTime'] = $data['defaultBeginTime'] ?? null;
        $this->container['activeEntriesHardLimit'] = $data['activeEntriesHardLimit'] ?? null;
        $this->container['activeEntriesSoftLimit'] = $data['activeEntriesSoftLimit'] ?? null;
        $this->container['isAllowFutureTimes'] = $data['isAllowFutureTimes'] ?? null;
        $this->container['isAllowOverlapping'] = $data['isAllowOverlapping'] ?? null;
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
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === \count($this->listInvalidProperties());
    }

    /**
     * Gets trackingMode.
     *
     * @return string|null
     */
    public function getTrackingMode()
    {
        return $this->container['trackingMode'];
    }

    /**
     * Sets trackingMode.
     *
     * @param string|null $trackingMode trackingMode
     *
     * @return self
     */
    public function setTrackingMode($trackingMode)
    {
        $this->container['trackingMode'] = $trackingMode;

        return $this;
    }

    /**
     * Gets defaultBeginTime.
     *
     * @return string|null
     */
    public function getDefaultBeginTime()
    {
        return $this->container['defaultBeginTime'];
    }

    /**
     * Sets defaultBeginTime.
     *
     * @param string|null $defaultBeginTime defaultBeginTime
     *
     * @return self
     */
    public function setDefaultBeginTime($defaultBeginTime)
    {
        $this->container['defaultBeginTime'] = $defaultBeginTime;

        return $this;
    }

    /**
     * Gets activeEntriesHardLimit.
     *
     * @return int|null
     */
    public function getActiveEntriesHardLimit()
    {
        return $this->container['activeEntriesHardLimit'];
    }

    /**
     * Sets activeEntriesHardLimit.
     *
     * @param int|null $activeEntriesHardLimit activeEntriesHardLimit
     *
     * @return self
     */
    public function setActiveEntriesHardLimit($activeEntriesHardLimit)
    {
        $this->container['activeEntriesHardLimit'] = $activeEntriesHardLimit;

        return $this;
    }

    /**
     * Gets activeEntriesSoftLimit.
     *
     * @return int|null
     */
    public function getActiveEntriesSoftLimit()
    {
        return $this->container['activeEntriesSoftLimit'];
    }

    /**
     * Sets activeEntriesSoftLimit.
     *
     * @param int|null $activeEntriesSoftLimit activeEntriesSoftLimit
     *
     * @return self
     */
    public function setActiveEntriesSoftLimit($activeEntriesSoftLimit)
    {
        $this->container['activeEntriesSoftLimit'] = $activeEntriesSoftLimit;

        return $this;
    }

    /**
     * Gets isAllowFutureTimes.
     *
     * @return bool|null
     */
    public function getIsAllowFutureTimes()
    {
        return $this->container['isAllowFutureTimes'];
    }

    /**
     * Sets isAllowFutureTimes.
     *
     * @param bool|null $isAllowFutureTimes isAllowFutureTimes
     *
     * @return self
     */
    public function setIsAllowFutureTimes($isAllowFutureTimes)
    {
        $this->container['isAllowFutureTimes'] = $isAllowFutureTimes;

        return $this;
    }

    /**
     * Gets isAllowOverlapping.
     *
     * @return bool|null
     */
    public function getIsAllowOverlapping()
    {
        return $this->container['isAllowOverlapping'];
    }

    /**
     * Sets isAllowOverlapping.
     *
     * @param bool|null $isAllowOverlapping isAllowOverlapping
     *
     * @return self
     */
    public function setIsAllowOverlapping($isAllowOverlapping)
    {
        $this->container['isAllowOverlapping'] = $isAllowOverlapping;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            \JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
