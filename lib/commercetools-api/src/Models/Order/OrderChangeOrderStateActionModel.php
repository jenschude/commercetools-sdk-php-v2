<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObjectModel;

final class OrderChangeOrderStateActionModel extends JsonObjectModel implements OrderChangeOrderStateAction
{
    const DISCRIMINATOR_VALUE = 'changeOrderState';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $orderState;

    public function __construct(
        string $action = null,
        string $orderState = null
    ) {
        $this->action = $action;
        $this->orderState = $orderState;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
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
    public function getOrderState()
    {
        if (is_null($this->orderState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderChangeOrderStateAction::FIELD_ORDER_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->orderState = (string) $data;
        }

        return $this->orderState;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setOrderState(?string $orderState): void
    {
        $this->orderState = $orderState;
    }
}