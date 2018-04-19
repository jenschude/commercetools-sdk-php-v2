<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountTargetCollection;


interface CartDiscountShippingCostTargetCollection extends CartDiscountTargetCollection
{
    /**
     * @param $index
     * @return CartDiscountShippingCostTarget
     */
    public function at($index);

    /**
     * @return CartDiscountShippingCostTarget
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountShippingCostTarget
     */
    public function map($data, $index);
}