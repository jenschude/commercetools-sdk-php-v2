<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class TypeChangeEnumValueOrderActionModel extends JsonObjectModel implements TypeChangeEnumValueOrderAction
{
    public const DISCRIMINATOR_VALUE = 'changeEnumValueOrder';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $fieldName;

    /**
     * @var ?array
     */
    protected $keys;


    public function __construct(
        string $fieldName = null,
        array $keys = null
    ) {
        $this->fieldName = $fieldName;
        $this->keys = $keys;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getFieldName()
    {
        if (is_null($this->fieldName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->fieldName = (string) $data;
        }

        return $this->fieldName;
    }

    /**
     * @return null|array
     */
    public function getKeys()
    {
        if (is_null($this->keys)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(self::FIELD_KEYS);
            if (is_null($data)) {
                return null;
            }
            $this->keys = $data;
        }

        return $this->keys;
    }


    public function setFieldName(?string $fieldName): void
    {
        $this->fieldName = $fieldName;
    }

    public function setKeys(?array $keys): void
    {
        $this->keys = $keys;
    }
}
