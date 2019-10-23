<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Extension\ExtensionDraft;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyExtensions extends ApiResource
{
    /**
     * @psalm-param scalar $key
     *
     * @param null|mixed $key
     */
    public function withKey($key = null): ResourceByProjectKeyExtensionsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyExtensionsKeyByKey($this->getUri().'/key={key}', $args, $this->getClient());
    }

    /**
     * @psalm-param scalar $ID
     *
     * @param null|mixed $ID
     */
    public function withId($ID = null): ResourceByProjectKeyExtensionsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyExtensionsByID($this->getUri().'/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyExtensionsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyExtensionsGet($args['projectKey'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?ExtensionDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ExtensionDraft $body = null, array $headers = []): ByProjectKeyExtensionsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyExtensionsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}