<?php

/**
 *
 * Kimai API Client 2020 — NOTICE OF LICENSE
 * This source file is released under MIT license by copyright holders.
 * @copyright 2017-2020 (c) Niko Granö (https://granö.fi)
 * @copyright 2014-2020 (c) Fiteco Group Oy (https://group.fiteco.fi)
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
 * I18nConfig Class Doc Comment.
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
class I18nConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'I18nConfig';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'formDateTime' => 'string',
        'formDate'     => 'string',
        'dateTime'     => 'string',
        'date'         => 'string',
        'time'         => 'string',
        'duration'     => 'string',
        'is24hours'    => 'bool',
        'now'          => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'formDateTime' => null,
        'formDate'     => null,
        'dateTime'     => null,
        'date'         => null,
        'time'         => null,
        'duration'     => null,
        'is24hours'    => null,
        'now'          => 'date-time',
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
        'formDateTime' => 'formDateTime',
        'formDate'     => 'formDate',
        'dateTime'     => 'dateTime',
        'date'         => 'date',
        'time'         => 'time',
        'duration'     => 'duration',
        'is24hours'    => 'is24hours',
        'now'          => 'now',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'formDateTime' => 'setFormDateTime',
        'formDate'     => 'setFormDate',
        'dateTime'     => 'setDateTime',
        'date'         => 'setDate',
        'time'         => 'setTime',
        'duration'     => 'setDuration',
        'is24hours'    => 'setIs24hours',
        'now'          => 'setNow',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'formDateTime' => 'getFormDateTime',
        'formDate'     => 'getFormDate',
        'dateTime'     => 'getDateTime',
        'date'         => 'getDate',
        'time'         => 'getTime',
        'duration'     => 'getDuration',
        'is24hours'    => 'getIs24hours',
        'now'          => 'getNow',
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
        $this->container['formDateTime'] = $data['formDateTime'] ?? null;
        $this->container['formDate'] = $data['formDate'] ?? null;
        $this->container['dateTime'] = $data['dateTime'] ?? null;
        $this->container['date'] = $data['date'] ?? null;
        $this->container['time'] = $data['time'] ?? null;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['is24hours'] = $data['is24hours'] ?? null;
        $this->container['now'] = $data['now'] ?? null;
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
     * Gets formDateTime.
     *
     * @return string|null
     */
    public function getFormDateTime()
    {
        return $this->container['formDateTime'];
    }

    /**
     * Sets formDateTime.
     *
     * @param string|null $formDateTime formDateTime
     *
     * @return self
     */
    public function setFormDateTime($formDateTime)
    {
        $this->container['formDateTime'] = $formDateTime;

        return $this;
    }

    /**
     * Gets formDate.
     *
     * @return string|null
     */
    public function getFormDate()
    {
        return $this->container['formDate'];
    }

    /**
     * Sets formDate.
     *
     * @param string|null $formDate formDate
     *
     * @return self
     */
    public function setFormDate($formDate)
    {
        $this->container['formDate'] = $formDate;

        return $this;
    }

    /**
     * Gets dateTime.
     *
     * @return string|null
     */
    public function getDateTime()
    {
        return $this->container['dateTime'];
    }

    /**
     * Sets dateTime.
     *
     * @param string|null $dateTime dateTime
     *
     * @return self
     */
    public function setDateTime($dateTime)
    {
        $this->container['dateTime'] = $dateTime;

        return $this;
    }

    /**
     * Gets date.
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date.
     *
     * @param string|null $date date
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets time.
     *
     * @return string|null
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time.
     *
     * @param string|null $time time
     *
     * @return self
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets duration.
     *
     * @return string|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration.
     *
     * @param string|null $duration duration
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets is24hours.
     *
     * @return bool|null
     */
    public function getIs24hours()
    {
        return $this->container['is24hours'];
    }

    /**
     * Sets is24hours.
     *
     * @param bool|null $is24hours is24hours
     *
     * @return self
     */
    public function setIs24hours($is24hours)
    {
        $this->container['is24hours'] = $is24hours;

        return $this;
    }

    /**
     * Gets now.
     *
     * @return \DateTime|null
     */
    public function getNow()
    {
        return $this->container['now'];
    }

    /**
     * Sets now.
     *
     * @param \DateTime|null $now now
     *
     * @return self
     */
    public function setNow($now)
    {
        $this->container['now'] = $now;

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
            JSON_PRETTY_PRINT
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
