<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TaxCategory>
 * @method TaxCategory current()
 * @method TaxCategory at($offset)
 */
class TaxCategoryCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxCategory $value
     * @psalm-param TaxCategory|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaxCategoryCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxCategory) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxCategory
     */
    protected function mapper()
    {
        return function (int $index): ?TaxCategory {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TaxCategoryModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
