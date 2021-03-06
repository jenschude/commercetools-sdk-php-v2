<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<EnumValueIsUsedError>
 * @method EnumValueIsUsedError current()
 * @method EnumValueIsUsedError at($offset)
 */
class EnumValueIsUsedErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert EnumValueIsUsedError $value
     * @psalm-param EnumValueIsUsedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return EnumValueIsUsedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof EnumValueIsUsedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?EnumValueIsUsedError
     */
    protected function mapper()
    {
        return function (int $index): ?EnumValueIsUsedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = EnumValueIsUsedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
