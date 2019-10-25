<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\CustomerDraft;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyInStoreKeyByStoreKeyCustomers extends ApiResource
{
    /**
     * @psalm-param scalar $passwordToken
     *
     * @param null|mixed $passwordToken
     */
    public function withPasswordToken($passwordToken = null): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordTokenByPasswordToken
    {
        $args = $this->getArgs();
        if (!is_null($passwordToken)) {
            $args['passwordToken'] = $passwordToken;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordTokenByPasswordToken($this->getUri().'/password-token={passwordToken}', $args, $this->getClient());
    }

    /**
     * @psalm-param scalar $emailToken
     *
     * @param null|mixed $emailToken
     */
    public function withEmailToken($emailToken = null): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailTokenByEmailToken
    {
        $args = $this->getArgs();
        if (!is_null($emailToken)) {
            $args['emailToken'] = $emailToken;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailTokenByEmailToken($this->getUri().'/email-token={emailToken}', $args, $this->getClient());
    }

    public function emailToken(): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailToken
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailToken($this->getUri().'/email-token', $args, $this->getClient());
    }

    public function email(): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmail
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmail($this->getUri().'/email', $args, $this->getClient());
    }

    public function password(): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPassword
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPassword($this->getUri().'/password', $args, $this->getClient());
    }

    public function passwordToken(): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordToken
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordToken($this->getUri().'/password-token', $args, $this->getClient());
    }

    /**
     * @psalm-param scalar $key
     *
     * @param null|mixed $key
     */
    public function withKey($key = null): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKey($this->getUri().'/key={key}', $args, $this->getClient());
    }

    /**
     * @psalm-param scalar $ID
     *
     * @param null|mixed $ID
     */
    public function withId($ID = null): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersByID($this->getUri().'/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCustomersGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCustomersGet($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?CustomerDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerDraft $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCustomersPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCustomersPost($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
}