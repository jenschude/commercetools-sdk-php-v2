<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface LineItemDraft extends JsonObject
{
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    public const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_EXTERNAL_PRICE = 'externalPrice';
    public const FIELD_EXTERNAL_TOTAL_PRICE = 'externalTotalPrice';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     * @return null|string
     */
    public function getProductId();

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * <p>The amount of a <code>LineItem</code>in the cart.
     * Must be a positive integer.</p>
     *
     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>By providing supply channel information, you can unique identify
     * inventory entries that should be reserved.
     * The provided channel should have
     * the InventorySupply role.</p>
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
     * <p>An external tax rate can be set if the cart has the <code>External</code> TaxMode.</p>
     *
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>Sets the line item <code>price</code> to the given value and sets the line item <code>priceMode</code> to <code>ExternalPrice</code> LineItemPriceMode.</p>
     *
     * @return null|Money
     */
    public function getExternalPrice();

    /**
     * <p>Sets the line item <code>price</code> and <code>totalPrice</code> to the given values and sets the line item <code>priceMode</code> to <code>ExternalTotal</code> LineItemPriceMode.</p>
     *
     * @return null|ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice();

    /**
     * <p>Container for line item specific address(es).</p>
     *
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails();

    public function setProductId(?string $productId): void;

    public function setVariantId(?int $variantId): void;

    public function setSku(?string $sku): void;

    public function setQuantity(?int $quantity): void;

    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;

    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void;

    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;

    public function setCustom(?CustomFieldsDraft $custom): void;

    public function setExternalPrice(?Money $externalPrice): void;

    public function setExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice): void;

    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;
}
