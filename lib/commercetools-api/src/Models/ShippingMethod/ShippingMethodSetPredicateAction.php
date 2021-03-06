<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingMethodSetPredicateAction extends ShippingMethodUpdateAction
{
    public const FIELD_PREDICATE = 'predicate';

    /**
     * <p>A valid Cart predicate.
     * If <code>predicate</code> is absent or <code>null</code>, it is removed if it exists.</p>
     *
     * @return null|string
     */
    public function getPredicate();

    public function setPredicate(?string $predicate): void;
}
