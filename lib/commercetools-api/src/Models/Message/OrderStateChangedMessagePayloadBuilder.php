<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderStateChangedMessagePayload>
 */
final class OrderStateChangedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $orderState;

    /**
     * @var ?string
     */
    private $oldOrderState;

    /**
     * @return null|string
     */
    public function getOrderState()
    {
        return $this->orderState;
    }

    /**
     * @return null|string
     */
    public function getOldOrderState()
    {
        return $this->oldOrderState;
    }

    /**
     * @return $this
     */
    public function withOrderState(?string $orderState)
    {
        $this->orderState = $orderState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldOrderState(?string $oldOrderState)
    {
        $this->oldOrderState = $oldOrderState;

        return $this;
    }


    public function build(): OrderStateChangedMessagePayload
    {
        return new OrderStateChangedMessagePayloadModel(
            $this->orderState,
            $this->oldOrderState
        );
    }

    public static function of(): OrderStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}
