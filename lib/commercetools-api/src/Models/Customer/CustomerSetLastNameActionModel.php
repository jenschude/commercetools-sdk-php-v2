<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObjectModel;

final class CustomerSetLastNameActionModel extends JsonObjectModel implements CustomerSetLastNameAction
{
    const DISCRIMINATOR_VALUE = 'setLastName';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $lastName;

    public function __construct(
        string $action = null,
        string $lastName = null
    ) {
        $this->action = $action;
        $this->lastName = $lastName;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getLastName()
    {
        if (is_null($this->lastName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerSetLastNameAction::FIELD_LAST_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->lastName = (string) $data;
        }

        return $this->lastName;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }
}