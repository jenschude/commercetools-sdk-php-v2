<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerSetCustomerGroupAction>
 */
final class CustomerSetCustomerGroupActionBuilder implements Builder
{
    /**
     * @var null|CustomerGroupResourceIdentifier|CustomerGroupResourceIdentifierBuilder
     */
    private $customerGroup;

    /**
     * <p>If not defined, the customer group is unset.</p>
     *
     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupResourceIdentifierBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    public function build(): CustomerSetCustomerGroupAction
    {
        return new CustomerSetCustomerGroupActionModel(
            $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup
        );
    }

    public static function of(): CustomerSetCustomerGroupActionBuilder
    {
        return new self();
    }
}
