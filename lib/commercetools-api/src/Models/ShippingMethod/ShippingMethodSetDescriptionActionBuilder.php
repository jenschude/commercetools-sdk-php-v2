<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShippingMethodSetDescriptionAction>
 */
final class ShippingMethodSetDescriptionActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $description;

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return $this
     */
    public function withDescription(?string $description)
    {
        $this->description = $description;

        return $this;
    }


    public function build(): ShippingMethodSetDescriptionAction
    {
        return new ShippingMethodSetDescriptionActionModel(
            $this->description
        );
    }

    public static function of(): ShippingMethodSetDescriptionActionBuilder
    {
        return new self();
    }
}
