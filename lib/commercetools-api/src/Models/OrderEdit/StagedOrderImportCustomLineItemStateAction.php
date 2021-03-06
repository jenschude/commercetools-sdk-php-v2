<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderImportCustomLineItemStateAction extends StagedOrderUpdateAction
{
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_STATE = 'state';

    /**
     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * @return null|ItemStateCollection
     */
    public function getState();

    public function setCustomLineItemId(?string $customLineItemId): void;

    public function setState(?ItemStateCollection $state): void;
}
