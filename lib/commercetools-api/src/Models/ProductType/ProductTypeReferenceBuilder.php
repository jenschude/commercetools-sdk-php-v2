<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeReference>
 */
final class ProductTypeReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $typeId;

    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ProductType|?ProductTypeBuilder
     */
    private $obj;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|ProductType
     */
    public function getObj()
    {
        return $this->obj instanceof ProductTypeBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @return $this
     */
    public function withTypeId(?string $typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObj(?ProductType $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObjBuilder(?ProductTypeBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): ProductTypeReference
    {
        return new ProductTypeReferenceModel(
            $this->typeId,
            $this->id,
            ($this->obj instanceof ProductTypeBuilder ? $this->obj->build() : $this->obj)
        );
    }

    public static function of(): ProductTypeReferenceBuilder
    {
        return new self();
    }
}