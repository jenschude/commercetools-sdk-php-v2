<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyPaymentUpdate;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyMePaymentKeyByKey extends ApiResource
{
    /**
     * @psalm-param ?MyPaymentUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyPaymentUpdate $body = null, array $headers = []): ByProjectKeyMePaymentKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMePaymentKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}