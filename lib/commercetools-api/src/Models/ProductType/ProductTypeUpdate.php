<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeUpdate extends JsonObject
{
    public const FIELD_VERSION = 'version';
    public const FIELD_ACTIONS = 'actions';

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|ProductTypeUpdateActionCollection
     */
    public function getActions();

    public function setVersion(?int $version): void;

    public function setActions(?ProductTypeUpdateActionCollection $actions): void;
}
