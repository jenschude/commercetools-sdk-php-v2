<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<InventoryEntryDraft>
 */
final class InventoryEntryDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $sku;

    /**
     * @var null|ChannelResourceIdentifier|ChannelResourceIdentifierBuilder
     */
    private $supplyChannel;

    /**
     * @var ?int
     */
    private $quantityOnStock;

    /**
     * @var ?int
     */
    private $restockableInDays;

    /**
     * @var ?DateTimeImmutable
     */
    private $expectedDelivery;

    /**
     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel instanceof ChannelResourceIdentifierBuilder ? $this->supplyChannel->build() : $this->supplyChannel;
    }

    /**
     * @return null|int
     */
    public function getQuantityOnStock()
    {
        return $this->quantityOnStock;
    }

    /**
     * @return null|int
     */
    public function getRestockableInDays()
    {
        return $this->restockableInDays;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getExpectedDelivery()
    {
        return $this->expectedDelivery;
    }

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSupplyChannel(?ChannelResourceIdentifier $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withQuantityOnStock(?int $quantityOnStock)
    {
        $this->quantityOnStock = $quantityOnStock;

        return $this;
    }

    /**
     * @return $this
     */
    public function withRestockableInDays(?int $restockableInDays)
    {
        $this->restockableInDays = $restockableInDays;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExpectedDelivery(?DateTimeImmutable $expectedDelivery)
    {
        $this->expectedDelivery = $expectedDelivery;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSupplyChannelBuilder(?ChannelResourceIdentifierBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): InventoryEntryDraft
    {
        return new InventoryEntryDraftModel(
            $this->sku,
            $this->supplyChannel instanceof ChannelResourceIdentifierBuilder ? $this->supplyChannel->build() : $this->supplyChannel,
            $this->quantityOnStock,
            $this->restockableInDays,
            $this->expectedDelivery,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): InventoryEntryDraftBuilder
    {
        return new self();
    }
}
