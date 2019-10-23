<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalTaxAmountDraft;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetCustomLineItemTaxAmountAction extends StagedOrderUpdateAction
{
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    const FIELD_EXTERNAL_TAX_AMOUNT = 'externalTaxAmount';

    /**
     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * @return null|ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount();

    public function setCustomLineItemId(?string $customLineItemId): void;

    public function setExternalTaxAmount(?ExternalTaxAmountDraft $externalTaxAmount): void;
}