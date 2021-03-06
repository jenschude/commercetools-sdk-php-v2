<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Api\Models\Message\UserProvidedIdentifiers;
use Commercetools\Api\Models\Message\UserProvidedIdentifiersBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<ResourceUpdatedDelivery>
 */
final class ResourceUpdatedDeliveryBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $projectKey;

    /**
     * @var null|Reference|ReferenceBuilder
     */
    private $resource;

    /**
     * @var null|UserProvidedIdentifiers|UserProvidedIdentifiersBuilder
     */
    private $resourceUserProvidedIdentifiers;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?int
     */
    private $oldVersion;

    /**
     * @var ?DateTimeImmutable
     */
    private $modifiedAt;

    /**
     * @return null|string
     */
    public function getProjectKey()
    {
        return $this->projectKey;
    }

    /**
     * @return null|Reference
     */
    public function getResource()
    {
        return $this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource;
    }

    /**
     * @return null|UserProvidedIdentifiers
     */
    public function getResourceUserProvidedIdentifiers()
    {
        return $this->resourceUserProvidedIdentifiers instanceof UserProvidedIdentifiersBuilder ? $this->resourceUserProvidedIdentifiers->build() : $this->resourceUserProvidedIdentifiers;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|int
     */
    public function getOldVersion()
    {
        return $this->oldVersion;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * @return $this
     */
    public function withProjectKey(?string $projectKey)
    {
        $this->projectKey = $projectKey;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResource(?Reference $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers)
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;

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

    /**
     * @return $this
     */
    public function withOldVersion(?int $oldVersion)
    {
        $this->oldVersion = $oldVersion;

        return $this;
    }

    /**
     * @return $this
     */
    public function withModifiedAt(?DateTimeImmutable $modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResourceBuilder(?ReferenceBuilder $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResourceUserProvidedIdentifiersBuilder(?UserProvidedIdentifiersBuilder $resourceUserProvidedIdentifiers)
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;

        return $this;
    }

    public function build(): ResourceUpdatedDelivery
    {
        return new ResourceUpdatedDeliveryModel(
            $this->projectKey,
            $this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource,
            $this->resourceUserProvidedIdentifiers instanceof UserProvidedIdentifiersBuilder ? $this->resourceUserProvidedIdentifiers->build() : $this->resourceUserProvidedIdentifiers,
            $this->version,
            $this->oldVersion,
            $this->modifiedAt
        );
    }

    public static function of(): ResourceUpdatedDeliveryBuilder
    {
        return new self();
    }
}
