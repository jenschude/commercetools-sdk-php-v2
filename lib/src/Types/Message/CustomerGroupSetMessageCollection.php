<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface CustomerGroupSetMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return CustomerGroupSetMessage
     */
    public function at($index);

    /**
     * @return CustomerGroupSetMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerGroupSetMessage
     */
    public function map($data, $index);
}