<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Zone\ZoneUpdate;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyZonesByID extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyZonesByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyZonesByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?ZoneUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ZoneUpdate $body = null, array $headers = []): ByProjectKeyZonesByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyZonesByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function delete($body = null, array $headers = []): ByProjectKeyZonesByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyZonesByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}