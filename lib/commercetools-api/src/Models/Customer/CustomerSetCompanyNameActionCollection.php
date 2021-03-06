<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerSetCompanyNameAction>
 * @method CustomerSetCompanyNameAction current()
 * @method CustomerSetCompanyNameAction at($offset)
 */
class CustomerSetCompanyNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSetCompanyNameAction $value
     * @psalm-param CustomerSetCompanyNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetCompanyNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetCompanyNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetCompanyNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerSetCompanyNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerSetCompanyNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
