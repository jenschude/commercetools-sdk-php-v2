<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\CartDiscount\CartDiscountResourceIdentifier;
use Commercetools\Api\Models\Category\CategoryResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\DiscountCode\DiscountCodeResourceIdentifier;
use Commercetools\Api\Models\Inventory\InventoryEntryResourceIdentifier;
use Commercetools\Api\Models\Order\OrderResourceIdentifier;
use Commercetools\Api\Models\OrderEdit\OrderEditResourceIdentifier;
use Commercetools\Api\Models\Payment\PaymentResourceIdentifier;
use Commercetools\Api\Models\Product\ProductResourceIdentifier;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountResourceIdentifier;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifier;
use Commercetools\Api\Models\Review\ReviewResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Api\Models\Zone\ZoneResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ResourceIdentifier extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'typeId';
    public const FIELD_TYPE_ID = 'typeId';
    public const FIELD_ID = 'id';
    public const FIELD_KEY = 'key';

    /**
     * @return null|string
     */
    public function getTypeId();

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|string
     */
    public function getKey();

    public function setId(?string $id): void;

    public function setKey(?string $key): void;
}
