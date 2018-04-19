<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface ProductImageAddedMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return ProductImageAddedMessage
     */
    public function at($index);

    /**
     * @return ProductImageAddedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductImageAddedMessage
     */
    public function map($data, $index);
}