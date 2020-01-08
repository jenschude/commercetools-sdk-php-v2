<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class OrderEditUpdateActionModel extends JsonObjectModel implements OrderEditUpdateAction
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<OrderEditUpdateAction> >
     */
    private static $discriminatorClasses = [
        'addStagedAction' => OrderEditAddStagedActionActionModel::class,
        'setComment' => OrderEditSetCommentActionModel::class,
        'setCustomField' => OrderEditSetCustomFieldActionModel::class,
        'setCustomType' => OrderEditSetCustomTypeActionModel::class,
        'setKey' => OrderEditSetKeyActionModel::class,
        'setStagedActions' => OrderEditSetStagedActionsActionModel::class,
    ];

    public function __construct(
    ) {
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderEditUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<OrderEditUpdateAction>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = OrderEditUpdateAction::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->{$fieldName})) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->{$fieldName};
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<OrderEditUpdateAction> */
        $type = OrderEditUpdateActionModel::class;

        return $type;
    }
}
