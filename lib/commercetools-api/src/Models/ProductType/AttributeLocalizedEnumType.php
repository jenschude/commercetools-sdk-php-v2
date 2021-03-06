<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AttributeLocalizedEnumType extends AttributeType
{
    public const FIELD_VALUES = 'values';

    /**
     * @return null|AttributeLocalizedEnumValueCollection
     */
    public function getValues();

    public function setValues(?AttributeLocalizedEnumValueCollection $values): void;
}
