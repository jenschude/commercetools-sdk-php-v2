<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\JsonObjectModel;

final class InventoryEntryAddQuantityActionModel extends JsonObjectModel implements InventoryEntryAddQuantityAction
{
    const DISCRIMINATOR_VALUE = 'addQuantity';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?int
     */
    protected $quantity;

    public function __construct(
        string $action = null,
        int $quantity = null
    ) {
        $this->action = $action;
        $this->quantity = $quantity;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(InventoryEntryUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(InventoryEntryAddQuantityAction::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }
}