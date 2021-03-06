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
final class CustomFieldSetTypeModel extends JsonObjectModel implements CustomFieldSetType
{
    public const DISCRIMINATOR_VALUE = 'Set';
    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?FieldType
     */
    protected $elementType;


    public function __construct(
        FieldType $elementType = null
    ) {
        $this->elementType = $elementType;
        $this->name = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|FieldType
     */
    public function getElementType()
    {
        if (is_null($this->elementType)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ELEMENT_TYPE);
            if (is_null($data)) {
                return null;
            }
            $className = FieldTypeModel::resolveDiscriminatorClass($data);
            $this->elementType = $className::of($data);
        }

        return $this->elementType;
    }


    public function setElementType(?FieldType $elementType): void
    {
        $this->elementType = $elementType;
    }
}
