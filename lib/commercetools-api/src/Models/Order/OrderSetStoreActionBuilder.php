<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderSetStoreAction>
 */
final class OrderSetStoreActionBuilder implements Builder
{
    /**
     * @var null|StoreResourceIdentifier|StoreResourceIdentifierBuilder
     */
    private $store;

    /**
     * @return null|StoreResourceIdentifier
     */
    public function getStore()
    {
        return $this->store instanceof StoreResourceIdentifierBuilder ? $this->store->build() : $this->store;
    }

    /**
     * @return $this
     */
    public function withStore(?StoreResourceIdentifier $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStoreBuilder(?StoreResourceIdentifierBuilder $store)
    {
        $this->store = $store;

        return $this;
    }

    public function build(): OrderSetStoreAction
    {
        return new OrderSetStoreActionModel(
            $this->store instanceof StoreResourceIdentifierBuilder ? $this->store->build() : $this->store
        );
    }

    public static function of(): OrderSetStoreActionBuilder
    {
        return new self();
    }
}
