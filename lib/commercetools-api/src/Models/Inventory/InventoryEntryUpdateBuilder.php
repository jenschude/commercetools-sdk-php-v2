<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<InventoryEntryUpdate>
 */
final class InventoryEntryUpdateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?InventoryEntryUpdateActionCollection
     */
    private $actions;

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|InventoryEntryUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withActions(?InventoryEntryUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): InventoryEntryUpdate
    {
        return new InventoryEntryUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): InventoryEntryUpdateBuilder
    {
        return new self();
    }
}
