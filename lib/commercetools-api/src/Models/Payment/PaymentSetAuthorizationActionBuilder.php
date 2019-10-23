<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<PaymentSetAuthorizationAction>
 */
final class PaymentSetAuthorizationActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var Money|?MoneyBuilder
     */
    private $amount;

    /**
     * @var ?DateTimeImmutable
     */
    private $until;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|Money
     */
    public function getAmount()
    {
        return $this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getUntil()
    {
        return $this->until;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmount(?Money $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withUntil(?DateTimeImmutable $until)
    {
        $this->until = $until;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmountBuilder(?MoneyBuilder $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function build(): PaymentSetAuthorizationAction
    {
        return new PaymentSetAuthorizationActionModel(
            $this->action,
            ($this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount),
            $this->until
        );
    }

    public static function of(): PaymentSetAuthorizationActionBuilder
    {
        return new self();
    }
}