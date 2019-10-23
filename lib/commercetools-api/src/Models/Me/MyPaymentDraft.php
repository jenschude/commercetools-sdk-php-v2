<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Payment\PaymentMethodInfo;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\JsonObject;

interface MyPaymentDraft extends JsonObject
{
    const FIELD_AMOUNT_PLANNED = 'amountPlanned';
    const FIELD_PAYMENT_METHOD_INFO = 'paymentMethodInfo';
    const FIELD_CUSTOM = 'custom';
    const FIELD_TRANSACTION = 'transaction';

    /**
     * @return null|Money
     */
    public function getAmountPlanned();

    /**
     * @return null|PaymentMethodInfo
     */
    public function getPaymentMethodInfo();

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return null|MyTransactionDraft
     */
    public function getTransaction();

    public function setAmountPlanned(?Money $amountPlanned): void;

    public function setPaymentMethodInfo(?PaymentMethodInfo $paymentMethodInfo): void;

    public function setCustom(?CustomFieldsDraft $custom): void;

    public function setTransaction(?MyTransactionDraft $transaction): void;
}