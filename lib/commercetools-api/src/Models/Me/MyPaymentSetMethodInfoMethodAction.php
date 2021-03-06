<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyPaymentSetMethodInfoMethodAction extends MyPaymentUpdateAction
{
    public const FIELD_METHOD = 'method';

    /**
     * @return null|string
     */
    public function getMethod();

    public function setMethod(?string $method): void;
}
