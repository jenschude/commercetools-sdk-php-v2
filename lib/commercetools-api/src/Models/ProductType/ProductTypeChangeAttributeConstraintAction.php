<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeChangeAttributeConstraintAction extends ProductTypeUpdateAction
{
    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_NEW_VALUE = 'newValue';

    /**
     * @return null|string
     */
    public function getAttributeName();

    /**
     * @return null|string
     */
    public function getNewValue();

    public function setAttributeName(?string $attributeName): void;

    public function setNewValue(?string $newValue): void;
}
