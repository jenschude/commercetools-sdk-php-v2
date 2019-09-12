<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\JsonObject;

interface AttributePlainEnumValue extends JsonObject
{
    const FIELD_KEY = 'key';
    const FIELD_LABEL = 'label';

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|string
     */
    public function getLabel();

    public function setKey(?string $key): void;

    public function setLabel(?string $label): void;
}
