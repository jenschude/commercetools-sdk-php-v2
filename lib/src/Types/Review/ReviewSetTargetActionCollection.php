<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollection;


interface ReviewSetTargetActionCollection extends ReviewUpdateActionCollection
{
    /**
     * @param $index
     * @return ReviewSetTargetAction
     */
    public function at($index);

    /**
     * @return ReviewSetTargetAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewSetTargetAction
     */
    public function map($data, $index);
}