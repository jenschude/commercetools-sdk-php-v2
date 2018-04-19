<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetShippingMethodActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartSetShippingMethodAction
     */
    public function at($index);

    /**
     * @return CartSetShippingMethodAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetShippingMethodAction
     */
    public function map($data, $index);
}