<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderSetCustomerEmailActionCollection extends OrderUpdateActionCollection
{
    /**
     * @param $index
     * @return OrderSetCustomerEmailAction
     */
    public function at($index);

    /**
     * @return OrderSetCustomerEmailAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderSetCustomerEmailAction
     */
    public function map($data, $index);
}