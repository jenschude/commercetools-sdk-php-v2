<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ItemStateModel extends JsonObjectModel implements ItemState
{
    /**
     * @var ?float
     */
    protected $quantity;

    /**
     * @var ?StateReference
     */
    protected $state;


    public function __construct(
        float $quantity = null,
        StateReference $state = null
    ) {
        $this->quantity = $quantity;
        $this->state = $state;
    }

    /**
     * @return null|float
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (float) $data;
        }

        return $this->quantity;
    }

    /**
     * @return null|StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateReferenceModel::of($data);
        }

        return $this->state;
    }


    public function setQuantity(?float $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }
}
