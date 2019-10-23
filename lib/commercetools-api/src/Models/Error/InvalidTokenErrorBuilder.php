<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;

/**
 * @implements Builder<InvalidTokenError>
 */
final class InvalidTokenErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $code;

    /**
     * @var ?string
     */
    private $message;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return $this
     */
    public function withCode(?string $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    public function build(): InvalidTokenError
    {
        return new InvalidTokenErrorModel(
            $this->code,
            $this->message
        );
    }

    public static function of(): InvalidTokenErrorBuilder
    {
        return new self();
    }
}