<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\TypedMoneyCollection;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductDiscountValueAbsoluteModel extends JsonObjectModel implements ProductDiscountValueAbsolute
{
    const DISCRIMINATOR_VALUE = 'absolute';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?TypedMoneyCollection
     */
    protected $money;

    public function __construct(
        string $type = null,
        TypedMoneyCollection $money = null
    ) {
        $this->type = $type;
        $this->money = $money;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductDiscountValue::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|TypedMoneyCollection
     */
    public function getMoney()
    {
        if (is_null($this->money)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductDiscountValueAbsolute::FIELD_MONEY);
            if (is_null($data)) {
                return null;
            }
            $this->money = TypedMoneyCollection::fromArray($data);
        }

        return $this->money;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setMoney(?TypedMoneyCollection $money): void
    {
        $this->money = $money;
    }
}