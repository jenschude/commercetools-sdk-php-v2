<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeChangeAttributeOrderAction extends ProductTypeUpdateAction
{
    public const FIELD_ATTRIBUTES = 'attributes';

    /**
     * @return null|AttributeDefinitionCollection
     */
    public function getAttributes();

    public function setAttributes(?AttributeDefinitionCollection $attributes): void;
}
