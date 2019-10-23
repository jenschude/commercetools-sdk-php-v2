<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;

interface CartSetCustomerGroupAction extends CartUpdateAction
{
    const FIELD_CUSTOMER_GROUP = 'customerGroup';

    /**
     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup();

    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void;
}