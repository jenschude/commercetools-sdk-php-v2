<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountCodeReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|DiscountCode
     */
    public function getObj();

    public function setObj(?DiscountCode $obj): void;
}
