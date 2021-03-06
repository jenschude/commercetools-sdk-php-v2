<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssetDimensions extends JsonObject
{
    public const FIELD_W = 'w';
    public const FIELD_H = 'h';

    /**
     * @return null|float
     */
    public function getW();

    /**
     * @return null|float
     */
    public function getH();

    public function setW(?float $w): void;

    public function setH(?float $h): void;
}
