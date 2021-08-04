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
 * UserEditForm Class Doc Comment.
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
class UserEditForm implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'UserEditForm';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'alias'    => 'string',
        'title'    => 'string',
        'avatar'   => 'string',
        'email'    => 'string',
        'language' => 'string',
        'timezone' => 'string',
        'enabled'  => 'bool',
        'roles'    => 'string[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'alias'    => null,
        'title'    => null,
        'avatar'   => null,
        'email'    => null,
        'language' => null,
        'timezone' => null,
        'enabled'  => null,
        'roles'    => null,
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
        'alias'    => 'alias',
        'title'    => 'title',
        'avatar'   => 'avatar',
        'email'    => 'email',
        'language' => 'language',
        'timezone' => 'timezone',
        'enabled'  => 'enabled',
        'roles'    => 'roles',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'alias'    => 'setAlias',
        'title'    => 'setTitle',
        'avatar'   => 'setAvatar',
        'email'    => 'setEmail',
        'language' => 'setLanguage',
        'timezone' => 'setTimezone',
        'enabled'  => 'setEnabled',
        'roles'    => 'setRoles',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'alias'    => 'getAlias',
        'title'    => 'getTitle',
        'avatar'   => 'getAvatar',
        'email'    => 'getEmail',
        'language' => 'getLanguage',
        'timezone' => 'getTimezone',
        'enabled'  => 'getEnabled',
        'roles'    => 'getRoles',
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

    const LANGUAGE_AR = 'ar';
    const LANGUAGE_CS = 'cs';
    const LANGUAGE_DA = 'da';
    const LANGUAGE_DE = 'de';
    const LANGUAGE_DE_AT = 'de_AT';
    const LANGUAGE_DE_CH = 'de_CH';
    const LANGUAGE_EL = 'el';
    const LANGUAGE_EN = 'en';
    const LANGUAGE_EO = 'eo';
    const LANGUAGE_ES = 'es';
    const LANGUAGE_EU = 'eu';
    const LANGUAGE_FI = 'fi';
    const LANGUAGE_FO = 'fo';
    const LANGUAGE_FR = 'fr';
    const LANGUAGE_HE = 'he';
    const LANGUAGE_HU = 'hu';
    const LANGUAGE_IT = 'it';
    const LANGUAGE_JA = 'ja';
    const LANGUAGE_KO = 'ko';
    const LANGUAGE_NL = 'nl';
    const LANGUAGE_PL = 'pl';
    const LANGUAGE_PT = 'pt';
    const LANGUAGE_PT_BR = 'pt_BR';
    const LANGUAGE_RO = 'ro';
    const LANGUAGE_RU = 'ru';
    const LANGUAGE_SK = 'sk';
    const LANGUAGE_SV = 'sv';
    const LANGUAGE_TR = 'tr';
    const LANGUAGE_VI = 'vi';
    const LANGUAGE_ZH_CN = 'zh_CN';
    const ROLES_TEAMLEAD = 'ROLE_TEAMLEAD';
    const ROLES_ADMIN = 'ROLE_ADMIN';
    const ROLES_SUPER_ADMIN = 'ROLE_SUPER_ADMIN';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_AR,
            self::LANGUAGE_CS,
            self::LANGUAGE_DA,
            self::LANGUAGE_DE,
            self::LANGUAGE_DE_AT,
            self::LANGUAGE_DE_CH,
            self::LANGUAGE_EL,
            self::LANGUAGE_EN,
            self::LANGUAGE_EO,
            self::LANGUAGE_ES,
            self::LANGUAGE_EU,
            self::LANGUAGE_FI,
            self::LANGUAGE_FO,
            self::LANGUAGE_FR,
            self::LANGUAGE_HE,
            self::LANGUAGE_HU,
            self::LANGUAGE_IT,
            self::LANGUAGE_JA,
            self::LANGUAGE_KO,
            self::LANGUAGE_NL,
            self::LANGUAGE_PL,
            self::LANGUAGE_PT,
            self::LANGUAGE_PT_BR,
            self::LANGUAGE_RO,
            self::LANGUAGE_RU,
            self::LANGUAGE_SK,
            self::LANGUAGE_SV,
            self::LANGUAGE_TR,
            self::LANGUAGE_VI,
            self::LANGUAGE_ZH_CN,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getRolesAllowableValues()
    {
        return [
            self::ROLES_TEAMLEAD,
            self::ROLES_ADMIN,
            self::ROLES_SUPER_ADMIN,
        ];
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
        $this->container['alias'] = $data['alias'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['avatar'] = $data['avatar'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['timezone'] = $data['timezone'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['roles'] = $data['roles'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['email']) {
            $invalidProperties[] = "'email' can't be null";
        }
        if (null === $this->container['language']) {
            $invalidProperties[] = "'language' can't be null";
        }
        $allowedValues = $this->getLanguageAllowableValues();
        if (null !== $this->container['language'] && !\in_array($this->container['language'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'language', must be one of '%s'",
                $this->container['language'],
                implode("', '", $allowedValues)
            );
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
     * Gets alias.
     *
     * @return string|null
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias.
     *
     * @param string|null $alias alias
     *
     * @return self
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets avatar.
     *
     * @return string|null
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar.
     *
     * @param string|null $avatar avatar
     *
     * @return self
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email.
     *
     * @param string $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets language.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language.
     *
     * @param string $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $allowedValues = $this->getLanguageAllowableValues();
        if (!\in_array($language, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'language', must be one of '%s'", $language, implode("', '", $allowedValues)));
        }
        $this->container['language'] = $language;

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
     * Gets enabled.
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled.
     *
     * @param bool|null $enabled enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets roles.
     *
     * @return string[]|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles.
     *
     * @param string[]|null $roles roles
     *
     * @return self
     */
    public function setRoles($roles)
    {
        $allowedValues = $this->getRolesAllowableValues();
        if (null !== $roles && array_diff($roles, $allowedValues)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'roles', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['roles'] = $roles;

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
