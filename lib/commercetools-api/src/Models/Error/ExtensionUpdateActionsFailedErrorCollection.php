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
 * @extends MapperSequence<ExtensionUpdateActionsFailedError>
 * @method ExtensionUpdateActionsFailedError current()
 * @method ExtensionUpdateActionsFailedError at($offset)
 */
class ExtensionUpdateActionsFailedErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionUpdateActionsFailedError $value
     * @psalm-param ExtensionUpdateActionsFailedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionUpdateActionsFailedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionUpdateActionsFailedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionUpdateActionsFailedError
     */
    protected function mapper()
    {
        return function (int $index): ?ExtensionUpdateActionsFailedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ExtensionUpdateActionsFailedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
