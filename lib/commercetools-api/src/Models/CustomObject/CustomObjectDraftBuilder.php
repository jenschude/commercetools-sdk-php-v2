<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomObjectDraft>
 */
final class CustomObjectDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $container;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?JsonObject
     */
    private $value;

    /**
     * @var ?int
     */
    private $version;

    /**
     * <p>A namespace to group custom objects.</p>
     *
     * @return null|string
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * <p>A user-defined key that is unique within the given container.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|JsonObject
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return $this
     */
    public function withContainer(?string $container)
    {
        $this->container = $container;

        return $this;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValue(?JsonObject $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }


    public function build(): CustomObjectDraft
    {
        return new CustomObjectDraftModel(
            $this->container,
            $this->key,
            $this->value,
            $this->version
        );
    }

    public static function of(): CustomObjectDraftBuilder
    {
        return new self();
    }
}
