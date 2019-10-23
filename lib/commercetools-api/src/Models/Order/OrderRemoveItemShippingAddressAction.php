<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

interface OrderRemoveItemShippingAddressAction extends OrderUpdateAction
{
    const FIELD_ADDRESS_KEY = 'addressKey';

    /**
     * @return null|string
     */
    public function getAddressKey();

    public function setAddressKey(?string $addressKey): void;
}