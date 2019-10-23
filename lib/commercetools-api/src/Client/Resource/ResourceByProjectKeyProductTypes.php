<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ProductType\ProductTypeDraft;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyProductTypes extends ApiResource
{
    /**
     * @psalm-param scalar $key
     *
     * @param null|mixed $key
     */
    public function withKey($key = null): ResourceByProjectKeyProductTypesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyProductTypesKeyByKey($this->getUri().'/key={key}', $args, $this->getClient());
    }

    /**
     * @psalm-param scalar $ID
     *
     * @param null|mixed $ID
     */
    public function withId($ID = null): ResourceByProjectKeyProductTypesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyProductTypesByID($this->getUri().'/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductTypesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductTypesGet($args['projectKey'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?ProductTypeDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductTypeDraft $body = null, array $headers = []): ByProjectKeyProductTypesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductTypesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}