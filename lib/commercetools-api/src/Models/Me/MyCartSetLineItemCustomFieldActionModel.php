<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class MyCartSetLineItemCustomFieldActionModel extends JsonObjectModel implements MyCartSetLineItemCustomFieldAction
{
    const DISCRIMINATOR_VALUE = 'setLineItemCustomField';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $lineItemId;

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?JsonObject
     */
    protected $value;

    public function __construct(
        string $action = null,
        string $lineItemId = null,
        string $name = null,
        JsonObject $value = null
    ) {
        $this->action = $action;
        $this->lineItemId = $lineItemId;
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCartUpdateAction::FIELD_ACTION);
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
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCartSetLineItemCustomFieldAction::FIELD_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemId = (string) $data;
        }

        return $this->lineItemId;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCartSetLineItemCustomFieldAction::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|JsonObject
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?stdClass $data */
            $data = $this->raw(MyCartSetLineItemCustomFieldAction::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = JsonObjectModel::of($data);
        }

        return $this->value;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setValue(?JsonObject $value): void
    {
        $this->value = $value;
    }
}