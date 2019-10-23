<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyShoppingListUpdate;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyMeShoppingListsKeyByKey extends ApiResource
{
    /**
     * @psalm-param ?MyShoppingListUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyShoppingListUpdate $body = null, array $headers = []): ByProjectKeyMeShoppingListsKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeShoppingListsKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}