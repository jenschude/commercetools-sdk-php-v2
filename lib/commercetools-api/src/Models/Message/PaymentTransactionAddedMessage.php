<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Payment\Transaction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentTransactionAddedMessage extends Message
{
    public const FIELD_TRANSACTION = 'transaction';

    /**
     * @return null|Transaction
     */
    public function getTransaction();

    public function setTransaction(?Transaction $transaction): void;
}
