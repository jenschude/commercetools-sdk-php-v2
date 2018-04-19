<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface OrderBillingAddressSetMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return OrderBillingAddressSetMessage
     */
    public function at($index);

    /**
     * @return OrderBillingAddressSetMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderBillingAddressSetMessage
     */
    public function map($data, $index);
}