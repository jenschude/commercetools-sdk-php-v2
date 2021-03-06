<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\TypedMoneyCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountValueAbsolute extends CartDiscountValue
{
    public const FIELD_MONEY = 'money';

    /**
     * @return null|TypedMoneyCollection
     */
    public function getMoney();

    public function setMoney(?TypedMoneyCollection $money): void;
}
