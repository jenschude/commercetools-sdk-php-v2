<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Base\JsonCollection;

class CartDiscountCollectionModel extends JsonCollection implements CartDiscountCollection {

    /**
     * @param CartDiscount $value
     * @return CartDiscountCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscount) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscount
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscount) {
            $data = $this->mapData(CartDiscount::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }

    protected function index($data)
    {
        foreach ($data as $key => $value) {
            if (isset($value['id'])) {
                $this->addToIndex('id', $value['id'], $key);
            }
        }
    }

    /**
     * @return string
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}