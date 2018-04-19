<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetShippingRateInputActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartSetShippingRateInputAction
     */
    public function at($index);

    /**
     * @return CartSetShippingRateInputAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetShippingRateInputAction
     */
    public function map($data, $index);
}