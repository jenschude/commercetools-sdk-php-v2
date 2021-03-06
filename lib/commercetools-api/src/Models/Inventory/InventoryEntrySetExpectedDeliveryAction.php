<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface InventoryEntrySetExpectedDeliveryAction extends InventoryEntryUpdateAction
{
    public const FIELD_EXPECTED_DELIVERY = 'expectedDelivery';

    /**
     * @return null|DateTimeImmutable
     */
    public function getExpectedDelivery();

    public function setExpectedDelivery(?DateTimeImmutable $expectedDelivery): void;
}
