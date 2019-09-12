<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\JsonObject;

interface InvalidFieldError extends ErrorObject
{
    const FIELD_FIELD = 'field';
    const FIELD_INVALID_VALUE = 'invalidValue';
    const FIELD_ALLOWED_VALUES = 'allowedValues';

    /**
     * @return null|string
     */
    public function getField();

    /**
     * @return null|JsonObject
     */
    public function getInvalidValue();

    /**
     * @return null|array
     */
    public function getAllowedValues();

    public function setField(?string $field): void;

    public function setInvalidValue(?JsonObject $invalidValue): void;

    public function setAllowedValues(?array $allowedValues): void;
}
