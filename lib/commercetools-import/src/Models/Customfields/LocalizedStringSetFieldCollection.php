<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<LocalizedStringSetField>
 * @method LocalizedStringSetField current()
 * @method LocalizedStringSetField at($offset)
 */
class LocalizedStringSetFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert LocalizedStringSetField $value
     * @psalm-param LocalizedStringSetField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LocalizedStringSetFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof LocalizedStringSetField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LocalizedStringSetField
     */
    protected function mapper()
    {
        return function (int $index): ?LocalizedStringSetField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = LocalizedStringSetFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
