<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerGroupReference>
 */
final class CustomerGroupReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|CustomerGroup|CustomerGroupBuilder
     */
    private $obj;

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|CustomerGroup
     */
    public function getObj()
    {
        return $this->obj instanceof CustomerGroupBuilder ? $this->obj->build() : $this->obj;
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
    public function withObj(?CustomerGroup $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObjBuilder(?CustomerGroupBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): CustomerGroupReference
    {
        return new CustomerGroupReferenceModel(
            $this->id,
            $this->obj instanceof CustomerGroupBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): CustomerGroupReferenceBuilder
    {
        return new self();
    }
}
