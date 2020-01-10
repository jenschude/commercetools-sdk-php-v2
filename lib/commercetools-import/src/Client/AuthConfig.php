<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client;

use Commercetools\Client\AuthConfig as BaseAuthConfig;

abstract class AuthConfig implements BaseAuthConfig
{
    const AUTH_URI = 'https://auth.sphere.io/oauth/token';

    const GRANT_TYPE = '';

    /** @psalm-var string */
    private $authUri;

    /** @psalm-var array */
    private $options;

    public function __construct(array $clientOptions = [], string $authUri = self::AUTH_URI)
    {
        /** @psalm-var string authUri */
        $this->authUri = $authUri;
        $this->options = array_replace(
            [self::OPT_BASE_URI => $this->authUri],
            $clientOptions
        );
    }

    public function getGrantType(): string
    {
        /** @psalm-var string */
        return static::GRANT_TYPE;
    }

    public function getAuthUri(): string
    {
        return $this->authUri;
    }

    public function getOptions(): array
    {
        return $this->options;
    }
}
