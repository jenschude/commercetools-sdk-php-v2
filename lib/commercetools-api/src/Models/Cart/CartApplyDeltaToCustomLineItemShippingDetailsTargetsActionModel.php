<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartApplyDeltaToCustomLineItemShippingDetailsTargetsActionModel extends JsonObjectModel implements CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction
{
    const DISCRIMINATOR_VALUE = 'applyDeltaToCustomLineItemShippingDetailsTargets';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $customLineItemId;

    /**
     * @var ?ItemShippingTargetCollection
     */
    protected $targetsDelta;

    public function __construct(
        string $action = null,
        string $customLineItemId = null,
        ItemShippingTargetCollection $targetsDelta = null
    ) {
        $this->action = $action;
        $this->customLineItemId = $customLineItemId;
        $this->targetsDelta = $targetsDelta;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartUpdateAction::FIELD_ACTION);
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
    public function getCustomLineItemId()
    {
        if (is_null($this->customLineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction::FIELD_CUSTOM_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customLineItemId = (string) $data;
        }

        return $this->customLineItemId;
    }

    /**
     * @return null|ItemShippingTargetCollection
     */
    public function getTargetsDelta()
    {
        if (is_null($this->targetsDelta)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction::FIELD_TARGETS_DELTA);
            if (is_null($data)) {
                return null;
            }
            $this->targetsDelta = ItemShippingTargetCollection::fromArray($data);
        }

        return $this->targetsDelta;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }

    public function setTargetsDelta(?ItemShippingTargetCollection $targetsDelta): void
    {
        $this->targetsDelta = $targetsDelta;
    }
}