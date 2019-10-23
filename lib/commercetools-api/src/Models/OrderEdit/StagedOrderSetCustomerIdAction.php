<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetCustomerIdAction extends StagedOrderUpdateAction
{
    const FIELD_CUSTOMER_ID = 'customerId';

    /**
     * @return null|string
     */
    public function getCustomerId();

    public function setCustomerId(?string $customerId): void;
}