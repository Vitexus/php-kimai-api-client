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
 * CustomerEditForm Class Doc Comment.
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
class CustomerEditForm implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'CustomerEditForm';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'name'     => 'string',
        'number'   => 'string',
        'comment'  => 'string',
        'company'  => 'string',
        'vatId'    => 'string',
        'contact'  => 'string',
        'address'  => 'string',
        'country'  => 'string',
        'currency' => 'string',
        'phone'    => 'string',
        'fax'      => 'string',
        'mobile'   => 'string',
        'email'    => 'string',
        'homepage' => 'string',
        'timezone' => 'string',
        'color'    => 'string',
        'visible'  => 'bool',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'name'     => null,
        'number'   => null,
        'comment'  => null,
        'company'  => null,
        'vatId'    => null,
        'contact'  => null,
        'address'  => null,
        'country'  => null,
        'currency' => null,
        'phone'    => null,
        'fax'      => null,
        'mobile'   => null,
        'email'    => null,
        'homepage' => null,
        'timezone' => null,
        'color'    => null,
        'visible'  => null,
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
        'name'     => 'name',
        'number'   => 'number',
        'comment'  => 'comment',
        'company'  => 'company',
        'vatId'    => 'vatId',
        'contact'  => 'contact',
        'address'  => 'address',
        'country'  => 'country',
        'currency' => 'currency',
        'phone'    => 'phone',
        'fax'      => 'fax',
        'mobile'   => 'mobile',
        'email'    => 'email',
        'homepage' => 'homepage',
        'timezone' => 'timezone',
        'color'    => 'color',
        'visible'  => 'visible',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'name'     => 'setName',
        'number'   => 'setNumber',
        'comment'  => 'setComment',
        'company'  => 'setCompany',
        'vatId'    => 'setVatId',
        'contact'  => 'setContact',
        'address'  => 'setAddress',
        'country'  => 'setCountry',
        'currency' => 'setCurrency',
        'phone'    => 'setPhone',
        'fax'      => 'setFax',
        'mobile'   => 'setMobile',
        'email'    => 'setEmail',
        'homepage' => 'setHomepage',
        'timezone' => 'setTimezone',
        'color'    => 'setColor',
        'visible'  => 'setVisible',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'name'     => 'getName',
        'number'   => 'getNumber',
        'comment'  => 'getComment',
        'company'  => 'getCompany',
        'vatId'    => 'getVatId',
        'contact'  => 'getContact',
        'address'  => 'getAddress',
        'country'  => 'getCountry',
        'currency' => 'getCurrency',
        'phone'    => 'getPhone',
        'fax'      => 'getFax',
        'mobile'   => 'getMobile',
        'email'    => 'getEmail',
        'homepage' => 'getHomepage',
        'timezone' => 'getTimezone',
        'color'    => 'getColor',
        'visible'  => 'getVisible',
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['number'] = $data['number'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['company'] = $data['company'] ?? null;
        $this->container['vatId'] = $data['vatId'] ?? null;
        $this->container['contact'] = $data['contact'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['fax'] = $data['fax'] ?? null;
        $this->container['mobile'] = $data['mobile'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['homepage'] = $data['homepage'] ?? null;
        $this->container['timezone'] = $data['timezone'] ?? null;
        $this->container['color'] = $data['color'] ?? null;
        $this->container['visible'] = $data['visible'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['name']) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (null === $this->container['country']) {
            $invalidProperties[] = "'country' can't be null";
        }
        if (null === $this->container['currency']) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if (null === $this->container['timezone']) {
            $invalidProperties[] = "'timezone' can't be null";
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
     * Gets name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number.
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number.
     *
     * @param string|null $number number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets comment.
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment.
     *
     * @param string|null $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets company.
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company.
     *
     * @param string|null $company company
     *
     * @return self
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets vatId.
     *
     * @return string|null
     */
    public function getVatId()
    {
        return $this->container['vatId'];
    }

    /**
     * Sets vatId.
     *
     * @param string|null $vatId vatId
     *
     * @return self
     */
    public function setVatId($vatId)
    {
        $this->container['vatId'] = $vatId;

        return $this;
    }

    /**
     * Gets contact.
     *
     * @return string|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact.
     *
     * @param string|null $contact contact
     *
     * @return self
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets address.
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address.
     *
     * @param string|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country.
     *
     * @param string $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency.
     *
     * @param string $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets phone.
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone.
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets fax.
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax.
     *
     * @param string|null $fax fax
     *
     * @return self
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets mobile.
     *
     * @return string|null
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile.
     *
     * @param string|null $mobile mobile
     *
     * @return self
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email.
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets homepage.
     *
     * @return string|null
     */
    public function getHomepage()
    {
        return $this->container['homepage'];
    }

    /**
     * Sets homepage.
     *
     * @param string|null $homepage homepage
     *
     * @return self
     */
    public function setHomepage($homepage)
    {
        $this->container['homepage'] = $homepage;

        return $this;
    }

    /**
     * Gets timezone.
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone.
     *
     * @param string $timezone timezone
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets color.
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color.
     *
     * @param string|null $color The hexadecimal color code (default: #d2d6de)
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets visible.
     *
     * @return bool|null
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible.
     *
     * @param bool|null $visible visible
     *
     * @return self
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

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
