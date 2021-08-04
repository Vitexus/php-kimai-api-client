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
 * TimesheetEditForm Class Doc Comment.
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
class TimesheetEditForm implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'TimesheetEditForm';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'begin'       => '\DateTime',
        'end'         => '\DateTime',
        'project'     => 'int',
        'activity'    => 'int',
        'description' => 'string',
        'fixedRate'   => 'float',
        'hourlyRate'  => 'float',
        'user'        => 'int',
        'exported'    => 'bool',
        'billable'    => 'bool',
        'tags'        => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'begin'       => 'date-time',
        'end'         => 'date-time',
        'project'     => null,
        'activity'    => null,
        'description' => null,
        'fixedRate'   => null,
        'hourlyRate'  => null,
        'user'        => null,
        'exported'    => null,
        'billable'    => null,
        'tags'        => null,
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
        'begin'       => 'begin',
        'end'         => 'end',
        'project'     => 'project',
        'activity'    => 'activity',
        'description' => 'description',
        'fixedRate'   => 'fixedRate',
        'hourlyRate'  => 'hourlyRate',
        'user'        => 'user',
        'exported'    => 'exported',
        'billable'    => 'billable',
        'tags'        => 'tags',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'begin'       => 'setBegin',
        'end'         => 'setEnd',
        'project'     => 'setProject',
        'activity'    => 'setActivity',
        'description' => 'setDescription',
        'fixedRate'   => 'setFixedRate',
        'hourlyRate'  => 'setHourlyRate',
        'user'        => 'setUser',
        'exported'    => 'setExported',
        'billable'    => 'setBillable',
        'tags'        => 'setTags',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'begin'       => 'getBegin',
        'end'         => 'getEnd',
        'project'     => 'getProject',
        'activity'    => 'getActivity',
        'description' => 'getDescription',
        'fixedRate'   => 'getFixedRate',
        'hourlyRate'  => 'getHourlyRate',
        'user'        => 'getUser',
        'exported'    => 'getExported',
        'billable'    => 'getBillable',
        'tags'        => 'getTags',
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
        $this->container['begin'] = $data['begin'] ?? null;
        $this->container['end'] = $data['end'] ?? null;
        $this->container['project'] = $data['project'] ?? null;
        $this->container['activity'] = $data['activity'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['fixedRate'] = $data['fixedRate'] ?? null;
        $this->container['hourlyRate'] = $data['hourlyRate'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
        $this->container['exported'] = $data['exported'] ?? null;
        $this->container['billable'] = $data['billable'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['begin']) {
            $invalidProperties[] = "'begin' can't be null";
        }
        if (null === $this->container['project']) {
            $invalidProperties[] = "'project' can't be null";
        }
        if (null === $this->container['activity']) {
            $invalidProperties[] = "'activity' can't be null";
        }

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
     * Gets begin.
     *
     * @return \DateTime
     */
    public function getBegin()
    {
        return $this->container['begin'];
    }

    /**
     * Sets begin.
     *
     * @param \DateTime $begin begin
     *
     * @return self
     */
    public function setBegin($begin)
    {
        $this->container['begin'] = $begin;

        return $this;
    }

    /**
     * Gets end.
     *
     * @return \DateTime|null
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end.
     *
     * @param \DateTime|null $end end
     *
     * @return self
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets project.
     *
     * @return int
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project.
     *
     * @param int $project Project ID
     *
     * @return self
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets activity.
     *
     * @return int
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity.
     *
     * @param int $activity Activity ID
     *
     * @return self
     */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description.
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets fixedRate.
     *
     * @return float|null
     */
    public function getFixedRate()
    {
        return $this->container['fixedRate'];
    }

    /**
     * Sets fixedRate.
     *
     * @param float|null $fixedRate Fixed rate
     *
     * @return self
     */
    public function setFixedRate($fixedRate)
    {
        $this->container['fixedRate'] = $fixedRate;

        return $this;
    }

    /**
     * Gets hourlyRate.
     *
     * @return float|null
     */
    public function getHourlyRate()
    {
        return $this->container['hourlyRate'];
    }

    /**
     * Sets hourlyRate.
     *
     * @param float|null $hourlyRate Hourly rate
     *
     * @return self
     */
    public function setHourlyRate($hourlyRate)
    {
        $this->container['hourlyRate'] = $hourlyRate;

        return $this;
    }

    /**
     * Gets user.
     *
     * @return int|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user.
     *
     * @param int|null $user User ID
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets exported.
     *
     * @return bool|null
     */
    public function getExported()
    {
        return $this->container['exported'];
    }

    /**
     * Sets exported.
     *
     * @param bool|null $exported exported
     *
     * @return self
     */
    public function setExported($exported)
    {
        $this->container['exported'] = $exported;

        return $this;
    }

    /**
     * Gets billable.
     *
     * @return bool|null
     */
    public function getBillable()
    {
        return $this->container['billable'];
    }

    /**
     * Sets billable.
     *
     * @param bool|null $billable billable
     *
     * @return self
     */
    public function setBillable($billable)
    {
        $this->container['billable'] = $billable;

        return $this;
    }

    /**
     * Gets tags.
     *
     * @return string|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags.
     *
     * @param string|null $tags Comma separated list of tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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
