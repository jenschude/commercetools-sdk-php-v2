<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentTransactionStateChangedMessage extends Message
{
    public const FIELD_TRANSACTION_ID = 'transactionId';
    public const FIELD_STATE = 'state';

    /**
     * @return null|string
     */
    public function getTransactionId();

    /**
     * @return null|string
     */
    public function getState();

    public function setTransactionId(?string $transactionId): void;

    public function setState(?string $state): void;
}
