<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderBillingAddressSetMessagePayloadModel extends JsonObjectModel implements OrderBillingAddressSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderBillingAddressSet';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?Address
     */
    protected $address;

    /**
     * @var ?Address
     */
    protected $oldAddress;


    public function __construct(
        Address $address = null,
        Address $oldAddress = null
    ) {
        $this->address = $address;
        $this->oldAddress = $oldAddress;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|Address
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->address = AddressModel::of($data);
        }

        return $this->address;
    }

    /**
     * @return null|Address
     */
    public function getOldAddress()
    {
        if (is_null($this->oldAddress)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->oldAddress = AddressModel::of($data);
        }

        return $this->oldAddress;
    }


    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    public function setOldAddress(?Address $oldAddress): void
    {
        $this->oldAddress = $oldAddress;
    }
}
