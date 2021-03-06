<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StateChangeTypeAction extends StateUpdateAction
{
    public const FIELD_TYPE = 'type';

    /**
     * @return null|string
     */
    public function getType();

    public function setType(?string $type): void;
}
