<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface TimeField extends CustomField
{
    public const FIELD_VALUE = 'value';

    /**
     * @return null|DateTimeImmutable
     */
    public function getValue();

    public function setValue(?DateTimeImmutable $value): void;
}
