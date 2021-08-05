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
 * TimesheetEntityExpanded Class Doc Comment.
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
class TimesheetEntityExpanded implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'TimesheetEntityExpanded';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'user'         => 'int',
        'tags'         => 'string[]',
        'id'           => 'int',
        'begin'        => '\DateTime',
        'end'          => '\DateTime',
        'duration'     => 'int',
        'activity'     => '\Fiteco\KimaiClient\Model\ActivityExpanded',
        'project'      => '\Fiteco\KimaiClient\Model\ProjectExpanded',
        'description'  => 'string',
        'rate'         => 'float',
        'internalRate' => 'float',
        'fixedRate'    => 'float',
        'hourlyRate'   => 'float',
        'exported'     => 'bool',
        'billable'     => 'bool',
        'metaFields'   => '\Fiteco\KimaiClient\Model\TimesheetMeta[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'user'         => null,
        'tags'         => null,
        'id'           => null,
        'begin'        => 'date-time',
        'end'          => 'date-time',
        'duration'     => null,
        'activity'     => null,
        'project'      => null,
        'description'  => null,
        'rate'         => 'float',
        'internalRate' => 'float',
        'fixedRate'    => 'float',
        'hourlyRate'   => 'float',
        'exported'     => null,
        'billable'     => null,
        'metaFields'   => null,
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
        'user'         => 'user',
        'tags'         => 'tags',
        'id'           => 'id',
        'begin'        => 'begin',
        'end'          => 'end',
        'duration'     => 'duration',
        'activity'     => 'activity',
        'project'      => 'project',
        'description'  => 'description',
        'rate'         => 'rate',
        'internalRate' => 'internalRate',
        'fixedRate'    => 'fixedRate',
        'hourlyRate'   => 'hourlyRate',
        'exported'     => 'exported',
        'billable'     => 'billable',
        'metaFields'   => 'metaFields',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'user'         => 'setUser',
        'tags'         => 'setTags',
        'id'           => 'setId',
        'begin'        => 'setBegin',
        'end'          => 'setEnd',
        'duration'     => 'setDuration',
        'activity'     => 'setActivity',
        'project'      => 'setProject',
        'description'  => 'setDescription',
        'rate'         => 'setRate',
        'internalRate' => 'setInternalRate',
        'fixedRate'    => 'setFixedRate',
        'hourlyRate'   => 'setHourlyRate',
        'exported'     => 'setExported',
        'billable'     => 'setBillable',
        'metaFields'   => 'setMetaFields',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'user'         => 'getUser',
        'tags'         => 'getTags',
        'id'           => 'getId',
        'begin'        => 'getBegin',
        'end'          => 'getEnd',
        'duration'     => 'getDuration',
        'activity'     => 'getActivity',
        'project'      => 'getProject',
        'description'  => 'getDescription',
        'rate'         => 'getRate',
        'internalRate' => 'getInternalRate',
        'fixedRate'    => 'getFixedRate',
        'hourlyRate'   => 'getHourlyRate',
        'exported'     => 'getExported',
        'billable'     => 'getBillable',
        'metaFields'   => 'getMetaFields',
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
        $this->container['user'] = $data['user'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['begin'] = $data['begin'] ?? null;
        $this->container['end'] = $data['end'] ?? null;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['activity'] = $data['activity'] ?? null;
        $this->container['project'] = $data['project'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['rate'] = $data['rate'] ?? null;
        $this->container['internalRate'] = $data['internalRate'] ?? null;
        $this->container['fixedRate'] = $data['fixedRate'] ?? null;
        $this->container['hourlyRate'] = $data['hourlyRate'] ?? null;
        $this->container['exported'] = $data['exported'] ?? null;
        $this->container['billable'] = $data['billable'] ?? null;
        $this->container['metaFields'] = $data['metaFields'] ?? null;
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
        if (null === $this->container['activity']) {
            $invalidProperties[] = "'activity' can't be null";
        }
        if (null === $this->container['project']) {
            $invalidProperties[] = "'project' can't be null";
        }
        if (null === $this->container['exported']) {
            $invalidProperties[] = "'exported' can't be null";
        }
        if (null === $this->container['billable']) {
            $invalidProperties[] = "'billable' can't be null";
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
     * @param int|null $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets tags.
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags.
     *
     * @param string[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets id.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id.
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * Gets duration.
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration.
     *
     * @param int|null $duration duration
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets activity.
     *
     * @return \Fiteco\KimaiClient\Model\ActivityExpanded
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity.
     *
     * @param \Fiteco\KimaiClient\Model\ActivityExpanded $activity activity
     *
     * @return self
     */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets project.
     *
     * @return \Fiteco\KimaiClient\Model\ProjectExpanded
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project.
     *
     * @param \Fiteco\KimaiClient\Model\ProjectExpanded $project project
     *
     * @return self
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

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
     * Gets rate.
     *
     * @return float|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate.
     *
     * @param float|null $rate rate
     *
     * @return self
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets internalRate.
     *
     * @return float|null
     */
    public function getInternalRate()
    {
        return $this->container['internalRate'];
    }

    /**
     * Sets internalRate.
     *
     * @param float|null $internalRate internalRate
     *
     * @return self
     */
    public function setInternalRate($internalRate)
    {
        $this->container['internalRate'] = $internalRate;

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
     * @param float|null $fixedRate fixedRate
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
     * @param float|null $hourlyRate hourlyRate
     *
     * @return self
     */
    public function setHourlyRate($hourlyRate)
    {
        $this->container['hourlyRate'] = $hourlyRate;

        return $this;
    }

    /**
     * Gets exported.
     *
     * @return bool
     */
    public function getExported()
    {
        return $this->container['exported'];
    }

    /**
     * Sets exported.
     *
     * @param bool $exported exported
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
     * @return bool
     */
    public function getBillable()
    {
        return $this->container['billable'];
    }

    /**
     * Sets billable.
     *
     * @param bool $billable billable
     *
     * @return self
     */
    public function setBillable($billable)
    {
        $this->container['billable'] = $billable;

        return $this;
    }

    /**
     * Gets metaFields.
     *
     * @return \Fiteco\KimaiClient\Model\TimesheetMeta[]|null
     */
    public function getMetaFields()
    {
        return $this->container['metaFields'];
    }

    /**
     * Sets metaFields.
     *
     * @param \Fiteco\KimaiClient\Model\TimesheetMeta[]|null $metaFields All visible meta (custom) fields registered with this timesheet
     *
     * @return self
     */
    public function setMetaFields($metaFields)
    {
        $this->container['metaFields'] = $metaFields;

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
