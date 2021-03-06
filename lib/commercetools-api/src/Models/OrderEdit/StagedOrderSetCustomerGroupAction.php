<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderSetCustomerGroupAction extends StagedOrderUpdateAction
{
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';

    /**
     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup();

    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void;
}
