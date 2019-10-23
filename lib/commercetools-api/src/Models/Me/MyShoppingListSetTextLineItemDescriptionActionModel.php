<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class MyShoppingListSetTextLineItemDescriptionActionModel extends JsonObjectModel implements MyShoppingListSetTextLineItemDescriptionAction
{
    const DISCRIMINATOR_VALUE = 'setTextLineItemDescription';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?LocalizedString
     */
    protected $description;

    /**
     * @var ?string
     */
    protected $textLineItemId;

    public function __construct(
        string $action = null,
        LocalizedString $description = null,
        string $textLineItemId = null
    ) {
        $this->action = $action;
        $this->description = $description;
        $this->textLineItemId = $textLineItemId;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyShoppingListUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyShoppingListSetTextLineItemDescriptionAction::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * @return null|string
     */
    public function getTextLineItemId()
    {
        if (is_null($this->textLineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyShoppingListSetTextLineItemDescriptionAction::FIELD_TEXT_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->textLineItemId = (string) $data;
        }

        return $this->textLineItemId;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    public function setTextLineItemId(?string $textLineItemId): void
    {
        $this->textLineItemId = $textLineItemId;
    }
}