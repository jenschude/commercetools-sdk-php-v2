<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AzureEventGridDestination>
 */
final class AzureEventGridDestinationBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $uri;

    /**
     * @var ?string
     */
    private $accessKey;

    /**
     * @return null|string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return null|string
     */
    public function getAccessKey()
    {
        return $this->accessKey;
    }

    /**
     * @return $this
     */
    public function withUri(?string $uri)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAccessKey(?string $accessKey)
    {
        $this->accessKey = $accessKey;

        return $this;
    }


    public function build(): AzureEventGridDestination
    {
        return new AzureEventGridDestinationModel(
            $this->uri,
            $this->accessKey
        );
    }

    public static function of(): AzureEventGridDestinationBuilder
    {
        return new self();
    }
}
