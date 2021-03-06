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

interface CategoryChangeSlugAction extends CategoryUpdateAction
{
    public const FIELD_SLUG = 'slug';

    /**
     * <p>Allowed are alphabetic, numeric, underscore (_) and hyphen (-) characters.
     * Maximum size is  site.data.api-limits.slugLength .</p>
     *
     * @return null|LocalizedString
     */
    public function getSlug();

    public function setSlug(?LocalizedString $slug): void;
}
