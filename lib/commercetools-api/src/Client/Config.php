<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client;

use Commercetools\Client\Config as BaseConfig;

class Config implements BaseConfig
{
    const API_URI = 'https://api.sphere.io';

    /** @psalm-var string */
    private $apiUri;

    /** @psalm-var array */
    private $clientOptions;

    public function __construct(array $clientOptions = [], string $baseUri = null)
    {
        /** @psalm-var string $apiUri */
        $apiUri = $baseUri ?? static::API_URI;
        $this->apiUri = $apiUri;
        $this->clientOptions = $clientOptions;
    }

    public function getApiUri(): string
    {
        return $this->apiUri;
    }

    public function getClientOptions(): array
    {
        return $this->clientOptions;
    }

    public function getOptions(): array
    {
        return array_replace(
            [self::OPT_BASE_URI => $this->apiUri],
            $this->clientOptions
        );
    }
}
