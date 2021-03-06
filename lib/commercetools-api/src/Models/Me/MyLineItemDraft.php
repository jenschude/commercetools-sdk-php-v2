<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyLineItemDraft extends JsonObject
{
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';
    public const FIELD_SKU = 'sku';

    /**
     * @return null|string
     */
    public function getProductId();

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @return null|float
     */
    public function getQuantity();

    /**
     * <p>By providing supply channel information, you can unique identify
     * inventory entries that should be reserved.
     * The provided channel should have the InventorySupply role.</p>
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel();

    /**
     * <p>The channel is used to select a ProductPrice.
     * The provided channel should have the ProductDistribution role.</p>
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel();

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>Container for line item specific address(es).</p>
     *
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails();

    /**
     * @return null|string
     */
    public function getSku();

    public function setProductId(?string $productId): void;

    public function setVariantId(?int $variantId): void;

    public function setQuantity(?float $quantity): void;

    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;

    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void;

    public function setCustom(?CustomFieldsDraft $custom): void;

    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;

    public function setSku(?string $sku): void;
}
