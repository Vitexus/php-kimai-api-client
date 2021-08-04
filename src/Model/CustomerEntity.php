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
 * CustomerEntity Class Doc Comment.
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
class CustomerEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'CustomerEntity';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'id'         => 'int',
        'name'       => 'string',
        'number'     => 'string',
        'comment'    => 'string',
        'visible'    => 'bool',
        'company'    => 'string',
        'vatId'      => 'string',
        'contact'    => 'string',
        'address'    => 'string',
        'country'    => 'string',
        'currency'   => 'string',
        'phone'      => 'string',
        'fax'        => 'string',
        'mobile'     => 'string',
        'email'      => 'string',
        'homepage'   => 'string',
        'timezone'   => 'string',
        'budget'     => 'float',
        'timeBudget' => 'int',
        'metaFields' => '\Fiteco\KimaiClient\Model\CustomerMeta[]',
        'teams'      => '\Fiteco\KimaiClient\Model\Team[]',
        'color'      => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'id'         => null,
        'name'       => null,
        'number'     => null,
        'comment'    => null,
        'visible'    => null,
        'company'    => null,
        'vatId'      => null,
        'contact'    => null,
        'address'    => null,
        'country'    => null,
        'currency'   => null,
        'phone'      => null,
        'fax'        => null,
        'mobile'     => null,
        'email'      => null,
        'homepage'   => null,
        'timezone'   => null,
        'budget'     => 'float',
        'timeBudget' => null,
        'metaFields' => null,
        'teams'      => null,
        'color'      => null,
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
        'id'         => 'id',
        'name'       => 'name',
        'number'     => 'number',
        'comment'    => 'comment',
        'visible'    => 'visible',
        'company'    => 'company',
        'vatId'      => 'vatId',
        'contact'    => 'contact',
        'address'    => 'address',
        'country'    => 'country',
        'currency'   => 'currency',
        'phone'      => 'phone',
        'fax'        => 'fax',
        'mobile'     => 'mobile',
        'email'      => 'email',
        'homepage'   => 'homepage',
        'timezone'   => 'timezone',
        'budget'     => 'budget',
        'timeBudget' => 'timeBudget',
        'metaFields' => 'metaFields',
        'teams'      => 'teams',
        'color'      => 'color',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'id'         => 'setId',
        'name'       => 'setName',
        'number'     => 'setNumber',
        'comment'    => 'setComment',
        'visible'    => 'setVisible',
        'company'    => 'setCompany',
        'vatId'      => 'setVatId',
        'contact'    => 'setContact',
        'address'    => 'setAddress',
        'country'    => 'setCountry',
        'currency'   => 'setCurrency',
        'phone'      => 'setPhone',
        'fax'        => 'setFax',
        'mobile'     => 'setMobile',
        'email'      => 'setEmail',
        'homepage'   => 'setHomepage',
        'timezone'   => 'setTimezone',
        'budget'     => 'setBudget',
        'timeBudget' => 'setTimeBudget',
        'metaFields' => 'setMetaFields',
        'teams'      => 'setTeams',
        'color'      => 'setColor',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'id'         => 'getId',
        'name'       => 'getName',
        'number'     => 'getNumber',
        'comment'    => 'getComment',
        'visible'    => 'getVisible',
        'company'    => 'getCompany',
        'vatId'      => 'getVatId',
        'contact'    => 'getContact',
        'address'    => 'getAddress',
        'country'    => 'getCountry',
        'currency'   => 'getCurrency',
        'phone'      => 'getPhone',
        'fax'        => 'getFax',
        'mobile'     => 'getMobile',
        'email'      => 'getEmail',
        'homepage'   => 'getHomepage',
        'timezone'   => 'getTimezone',
        'budget'     => 'getBudget',
        'timeBudget' => 'getTimeBudget',
        'metaFields' => 'getMetaFields',
        'teams'      => 'getTeams',
        'color'      => 'getColor',
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['number'] = $data['number'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['visible'] = $data['visible'] ?? null;
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
        $this->container['budget'] = $data['budget'] ?? null;
        $this->container['timeBudget'] = $data['timeBudget'] ?? null;
        $this->container['metaFields'] = $data['metaFields'] ?? null;
        $this->container['teams'] = $data['teams'] ?? null;
        $this->container['color'] = $data['color'] ?? null;
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
        if ((mb_strlen($this->container['name']) > 150)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 150.";
        }

        if ((mb_strlen($this->container['name']) < 2)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
        }

        if (null !== $this->container['number'] && (mb_strlen($this->container['number']) > 50)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 50.";
        }

        if (null === $this->container['visible']) {
            $invalidProperties[] = "'visible' can't be null";
        }
        if (null !== $this->container['company'] && (mb_strlen($this->container['company']) > 255)) {
            $invalidProperties[] = "invalid value for 'company', the character length must be smaller than or equal to 255.";
        }

        if (null !== $this->container['vatId'] && (mb_strlen($this->container['vatId']) > 50)) {
            $invalidProperties[] = "invalid value for 'vatId', the character length must be smaller than or equal to 50.";
        }

        if (null !== $this->container['contact'] && (mb_strlen($this->container['contact']) > 255)) {
            $invalidProperties[] = "invalid value for 'contact', the character length must be smaller than or equal to 255.";
        }

        if (null === $this->container['country']) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ((mb_strlen($this->container['country']) > 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        if (null === $this->container['currency']) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ((mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if (null !== $this->container['phone'] && (mb_strlen($this->container['phone']) > 255)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 255.";
        }

        if (null !== $this->container['fax'] && (mb_strlen($this->container['fax']) > 255)) {
            $invalidProperties[] = "invalid value for 'fax', the character length must be smaller than or equal to 255.";
        }

        if (null !== $this->container['mobile'] && (mb_strlen($this->container['mobile']) > 255)) {
            $invalidProperties[] = "invalid value for 'mobile', the character length must be smaller than or equal to 255.";
        }

        if (null !== $this->container['email'] && (mb_strlen($this->container['email']) > 254)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 254.";
        }

        if (null !== $this->container['homepage'] && (mb_strlen($this->container['homepage']) > 255)) {
            $invalidProperties[] = "invalid value for 'homepage', the character length must be smaller than or equal to 255.";
        }

        if (null === $this->container['timezone']) {
            $invalidProperties[] = "'timezone' can't be null";
        }
        if ((mb_strlen($this->container['timezone']) > 64)) {
            $invalidProperties[] = "invalid value for 'timezone', the character length must be smaller than or equal to 64.";
        }

        if (null === $this->container['budget']) {
            $invalidProperties[] = "'budget' can't be null";
        }
        if (($this->container['budget'] > 9E+11)) {
            $invalidProperties[] = "invalid value for 'budget', must be smaller than or equal to 9E+11.";
        }

        if (($this->container['budget'] < 0)) {
            $invalidProperties[] = "invalid value for 'budget', must be bigger than or equal to 0.";
        }

        if (null === $this->container['timeBudget']) {
            $invalidProperties[] = "'timeBudget' can't be null";
        }
        if (($this->container['timeBudget'] > 2145600000)) {
            $invalidProperties[] = "invalid value for 'timeBudget', must be smaller than or equal to 2145600000.";
        }

        if (($this->container['timeBudget'] < 0)) {
            $invalidProperties[] = "invalid value for 'timeBudget', must be bigger than or equal to 0.";
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
        if ((mb_strlen($name) > 150)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CustomerEntity., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($name) < 2)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CustomerEntity., must be bigger than or equal to 2.');
        }

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
        if (null !== $number && (mb_strlen($number) > 50)) {
            throw new \InvalidArgumentException('invalid length for $number when calling CustomerEntity., must be smaller than or equal to 50.');
        }

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
     * Gets visible.
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible.
     *
     * @param bool $visible visible
     *
     * @return self
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

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
        if (null !== $company && (mb_strlen($company) > 255)) {
            throw new \InvalidArgumentException('invalid length for $company when calling CustomerEntity., must be smaller than or equal to 255.');
        }

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
        if (null !== $vatId && (mb_strlen($vatId) > 50)) {
            throw new \InvalidArgumentException('invalid length for $vatId when calling CustomerEntity., must be smaller than or equal to 50.');
        }

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
        if (null !== $contact && (mb_strlen($contact) > 255)) {
            throw new \InvalidArgumentException('invalid length for $contact when calling CustomerEntity., must be smaller than or equal to 255.');
        }

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
        if ((mb_strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling CustomerEntity., must be smaller than or equal to 2.');
        }

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
        if ((mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling CustomerEntity., must be smaller than or equal to 3.');
        }

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
        if (null !== $phone && (mb_strlen($phone) > 255)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling CustomerEntity., must be smaller than or equal to 255.');
        }

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
        if (null !== $fax && (mb_strlen($fax) > 255)) {
            throw new \InvalidArgumentException('invalid length for $fax when calling CustomerEntity., must be smaller than or equal to 255.');
        }

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
        if (null !== $mobile && (mb_strlen($mobile) > 255)) {
            throw new \InvalidArgumentException('invalid length for $mobile when calling CustomerEntity., must be smaller than or equal to 255.');
        }

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
     * @param string|null $email Limited via RFC to 254 chars
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (null !== $email && (mb_strlen($email) > 254)) {
            throw new \InvalidArgumentException('invalid length for $email when calling CustomerEntity., must be smaller than or equal to 254.');
        }

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
        if (null !== $homepage && (mb_strlen($homepage) > 255)) {
            throw new \InvalidArgumentException('invalid length for $homepage when calling CustomerEntity., must be smaller than or equal to 255.');
        }

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
     * @param string $timezone Length was determined by a MySQL column via \"use mysql;describe time_zone_name;\"
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        if ((mb_strlen($timezone) > 64)) {
            throw new \InvalidArgumentException('invalid length for $timezone when calling CustomerEntity., must be smaller than or equal to 64.');
        }

        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets budget.
     *
     * @return float
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget.
     *
     * @param float $budget budget
     *
     * @return self
     */
    public function setBudget($budget)
    {
        if (($budget > 9E+11)) {
            throw new \InvalidArgumentException('invalid value for $budget when calling CustomerEntity., must be smaller than or equal to 9E+11.');
        }
        if (($budget < 0)) {
            throw new \InvalidArgumentException('invalid value for $budget when calling CustomerEntity., must be bigger than or equal to 0.');
        }

        $this->container['budget'] = $budget;

        return $this;
    }

    /**
     * Gets timeBudget.
     *
     * @return int
     */
    public function getTimeBudget()
    {
        return $this->container['timeBudget'];
    }

    /**
     * Sets timeBudget.
     *
     * @param int $timeBudget timeBudget
     *
     * @return self
     */
    public function setTimeBudget($timeBudget)
    {
        if (($timeBudget > 2145600000)) {
            throw new \InvalidArgumentException('invalid value for $timeBudget when calling CustomerEntity., must be smaller than or equal to 2145600000.');
        }
        if (($timeBudget < 0)) {
            throw new \InvalidArgumentException('invalid value for $timeBudget when calling CustomerEntity., must be bigger than or equal to 0.');
        }

        $this->container['timeBudget'] = $timeBudget;

        return $this;
    }

    /**
     * Gets metaFields.
     *
     * @return \Fiteco\KimaiClient\Model\CustomerMeta[]|null
     */
    public function getMetaFields()
    {
        return $this->container['metaFields'];
    }

    /**
     * Sets metaFields.
     *
     * @param \Fiteco\KimaiClient\Model\CustomerMeta[]|null $metaFields All visible meta (custom) fields registered with this customer
     *
     * @return self
     */
    public function setMetaFields($metaFields)
    {
        $this->container['metaFields'] = $metaFields;

        return $this;
    }

    /**
     * Gets teams.
     *
     * @return \Fiteco\KimaiClient\Model\Team[]|null
     */
    public function getTeams()
    {
        return $this->container['teams'];
    }

    /**
     * Sets teams.
     *
     * @param \Fiteco\KimaiClient\Model\Team[]|null $teams If no team is assigned, everyone can access the customer
     *
     * @return self
     */
    public function setTeams($teams)
    {
        $this->container['teams'] = $teams;

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
     * @param string|null $color color
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

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
