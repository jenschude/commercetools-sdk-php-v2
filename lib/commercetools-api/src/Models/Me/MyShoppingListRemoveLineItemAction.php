<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyShoppingListRemoveLineItemAction extends MyShoppingListUpdateAction
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_QUANTITY = 'quantity';

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @return null|int
     */
    public function getQuantity();

    public function setLineItemId(?string $lineItemId): void;

    public function setQuantity(?int $quantity): void;
}
