<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderCustomerEmailSetMessagePayload extends MessagePayload
{
    public const FIELD_EMAIL = 'email';
    public const FIELD_OLD_EMAIL = 'oldEmail';

    /**
     * @return null|string
     */
    public function getEmail();

    /**
     * @return null|string
     */
    public function getOldEmail();

    public function setEmail(?string $email): void;

    public function setOldEmail(?string $oldEmail): void;
}
