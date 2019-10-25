<?php
declare(strict_types=1);

namespace Commercetools\Client;

use Commercetools\Api\Client\AuthConfig;
use Commercetools\Client\ClientCredentialsConfig as BaseClientCredentialsConfig;

class MeConfig extends AuthConfig implements BaseClientCredentialsConfig
{
    const ANON_AUTH_URI = 'https://auth.sphere.io/oauth/{projectKey}/anonymous/token';
    const REFRESH_AUTH_URI = 'https://auth.sphere.io/oauth/token';

    const GRANT_TYPE = 'client_credentials';

    /** @var ClientCredentials */
    private $credentials;

    /** @var string */
    private $anonUri;

    /** @var string */
    private $refreshUri;

    public function __construct(string $projectKey, ClientCredentials $credentials, array $clientOptions = [], string $anonUri = null, string $refreshUri = null, string $authUri = self::AUTH_URI)
    {
        parent::__construct($clientOptions, $authUri);
        $anonUri = $anonUri ?? self::ANON_AUTH_URI;
        $anonUri = str_replace('{projectKey}', $projectKey, $anonUri);
        $this->anonUri = $anonUri;
        $this->refreshUri = $refreshUri ?? self::REFRESH_AUTH_URI;
        $this->credentials = $credentials;
    }

    public function getCredentials(): ClientCredentials
    {
        return $this->credentials;
    }

    /**
     * @return string
     */
    public function getAnonUri(): string
    {
        return $this->anonUri;
    }

    /**
     * @return string
     */
    public function getRefreshUri(): string
    {
        return $this->refreshUri;
    }
}