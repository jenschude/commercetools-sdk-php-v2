<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CategoryChangeNameAction extends CategoryUpdateAction
{
    public const FIELD_NAME = 'name';

    /**
     * @return null|LocalizedString
     */
    public function getName();

    public function setName(?LocalizedString $name): void;
}
