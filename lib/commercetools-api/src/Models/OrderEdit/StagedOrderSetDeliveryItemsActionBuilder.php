<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\DeliveryItemCollection;
use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderSetDeliveryItemsAction>
 */
final class StagedOrderSetDeliveryItemsActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $deliveryId;

    /**
     * @var ?DeliveryItemCollection
     */
    private $items;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withItems(?DeliveryItemCollection $items)
    {
        $this->items = $items;

        return $this;
    }

    public function build(): StagedOrderSetDeliveryItemsAction
    {
        return new StagedOrderSetDeliveryItemsActionModel(
            $this->action,
            $this->deliveryId,
            $this->items
        );
    }

    public static function of(): StagedOrderSetDeliveryItemsActionBuilder
    {
        return new self();
    }
}