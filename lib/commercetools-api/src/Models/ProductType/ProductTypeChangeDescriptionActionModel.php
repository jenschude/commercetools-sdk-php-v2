<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObjectModel;

final class ProductTypeChangeDescriptionActionModel extends JsonObjectModel implements ProductTypeChangeDescriptionAction
{
    const DISCRIMINATOR_VALUE = 'changeDescription';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $description;

    public function __construct(
        string $action = null,
        string $description = null
    ) {
        $this->action = $action;
        $this->description = $description;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeUpdateAction::FIELD_ACTION);
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
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeChangeDescriptionAction::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }
            $this->description = (string) $data;
        }

        return $this->description;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
}