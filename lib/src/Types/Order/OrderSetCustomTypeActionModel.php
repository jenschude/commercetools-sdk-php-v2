<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionModel;

use Commercetools\Types\Type\TypeReference;

class OrderSetCustomTypeActionModel extends OrderUpdateActionModel implements OrderSetCustomTypeAction {
    const DISCRIMINATOR_VALUE = 'setCustomType';

    /**
     * @var string
     */
    protected $fields;
    /**
     * @var TypeReference
     */
    protected $type;

    /**
     * @return string
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            $value = $this->raw(OrderSetCustomTypeAction::FIELD_FIELDS);
            $value = (string)$value;
            $this->fields = $value;
        }
        return $this->fields;
    }
    /**
     * @return TypeReference
     */
    public function getType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(OrderSetCustomTypeAction::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(TypeReference::class, null);
            }
            $value = $this->mapData(TypeReference::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }

    /**
     * @param string $fields
     * @return $this
     */
    public function setFields(string $fields)
    {
        $this->fields = (string)$fields;

        return $this;
    }
    /**
     * @param TypeReference $type
     * @return $this
     */
    public function setType(TypeReference $type)
    {
        $this->type = $type;

        return $this;
    }

}