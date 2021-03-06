<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomerSetDefaultBillingAddressActionModel extends JsonObjectModel implements CustomerSetDefaultBillingAddressAction
{
    public const DISCRIMINATOR_VALUE = 'setDefaultBillingAddress';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $addressId;

    /**
     * @var ?string
     */
    protected $addressKey;


    public function __construct(
        string $addressId = null,
        string $addressKey = null
    ) {
        $this->addressId = $addressId;
        $this->addressKey = $addressKey;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>If not defined, the customer's <code>defaultBillingAddress</code> is unset.</p>
     *
     * @return null|string
     */
    public function getAddressId()
    {
        if (is_null($this->addressId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ADDRESS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->addressId = (string) $data;
        }

        return $this->addressId;
    }

    /**
     * @return null|string
     */
    public function getAddressKey()
    {
        if (is_null($this->addressKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ADDRESS_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->addressKey = (string) $data;
        }

        return $this->addressKey;
    }


    public function setAddressId(?string $addressId): void
    {
        $this->addressId = $addressId;
    }

    public function setAddressKey(?string $addressKey): void
    {
        $this->addressKey = $addressKey;
    }
}
