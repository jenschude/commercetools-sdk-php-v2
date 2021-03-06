<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class InvalidFieldErrorModel extends JsonObjectModel implements InvalidFieldError
{
    public const DISCRIMINATOR_VALUE = 'InvalidField';
    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?string
     */
    protected $field;

    /**
     * @var ?JsonObject
     */
    protected $invalidValue;

    /**
     * @var ?array
     */
    protected $allowedValues;


    public function __construct(
        string $message = null,
        string $field = null,
        JsonObject $invalidValue = null,
        array $allowedValues = null
    ) {
        $this->message = $message;
        $this->field = $field;
        $this->invalidValue = $invalidValue;
        $this->allowedValues = $allowedValues;
        $this->code = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * <p>The error's description.</p>
     *
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * <p>The name of the field.</p>
     *
     * @return null|string
     */
    public function getField()
    {
        if (is_null($this->field)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FIELD);
            if (is_null($data)) {
                return null;
            }
            $this->field = (string) $data;
        }

        return $this->field;
    }

    /**
     * <p>The invalid value.</p>
     *
     * @return null|JsonObject
     */
    public function getInvalidValue()
    {
        if (is_null($this->invalidValue)) {
            /** @psalm-var ?stdClass $data */
            $data = $this->raw(self::FIELD_INVALID_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->invalidValue = JsonObjectModel::of($data);
        }

        return $this->invalidValue;
    }

    /**
     * <p>A fixed set of allowed values for the field, if any.</p>
     *
     * @return null|array
     */
    public function getAllowedValues()
    {
        if (is_null($this->allowedValues)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(self::FIELD_ALLOWED_VALUES);
            if (is_null($data)) {
                return null;
            }
            $this->allowedValues = $data;
        }

        return $this->allowedValues;
    }


    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setField(?string $field): void
    {
        $this->field = $field;
    }

    public function setInvalidValue(?JsonObject $invalidValue): void
    {
        $this->invalidValue = $invalidValue;
    }

    public function setAllowedValues(?array $allowedValues): void
    {
        $this->allowedValues = $allowedValues;
    }
}
