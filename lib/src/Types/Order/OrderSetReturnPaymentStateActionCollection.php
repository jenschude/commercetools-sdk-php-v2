<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderSetReturnPaymentStateActionCollection extends OrderUpdateActionCollection
{
    /**
     * @param $index
     * @return OrderSetReturnPaymentStateAction
     */
    public function at($index);

    /**
     * @return OrderSetReturnPaymentStateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderSetReturnPaymentStateAction
     */
    public function map($data, $index);
}