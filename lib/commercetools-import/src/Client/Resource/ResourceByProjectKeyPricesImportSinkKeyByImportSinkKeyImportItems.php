<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyImportItems extends ApiResource
{
    /**
     * @psalm-param scalar $resourceKey
     *
     * @param null|mixed $resourceKey
     */
    public function resourceKeyWithResourceKeyValue($resourceKey = null): ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyImportItemsResourceKeyByResourceKey
    {
        $args = $this->getArgs();
        if (!is_null($resourceKey)) {
            $args['resourceKey'] = $resourceKey;
        }

        return new ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyImportItemsResourceKeyByResourceKey($this->getUri().'/resourceKey={resourceKey}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyPricesImportSinkKeyByImportSinkKeyImportItemsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyPricesImportSinkKeyByImportSinkKeyImportItemsGet($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }
}