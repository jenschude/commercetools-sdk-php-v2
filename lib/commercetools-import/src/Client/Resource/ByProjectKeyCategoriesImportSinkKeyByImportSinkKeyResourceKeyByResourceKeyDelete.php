<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\ResultMapper;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Psr\Http\Message\ResponseInterface;

/** @psalm-suppress PropertyNotSetInConstructor */
class ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyResourceKeyByResourceKeyDelete extends ApiRequest
{
    /**
     * @psalm-param scalar $projectKey
     * @psalm-param scalar $importSinkKey
     * @psalm-param scalar $resourceKey
     *
     * @param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param array $headers
     * @param mixed $projectKey
     * @param mixed $importSinkKey
     * @param mixed $resourceKey
     */
    public function __construct($projectKey, $importSinkKey, $resourceKey, $body = null, array $headers = [], Client $client = null)
    {
        $uri = str_replace(['{projectKey}', '{importSinkKey}', '{resourceKey}'], [$projectKey, $importSinkKey, $resourceKey], '{projectKey}/categories/importSinkKey={importSinkKey}/resourceKey={resourceKey}');
        parent::__construct($client, 'DELETE', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @psalm-return JsonObject|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        $mapper = new ResultMapper();
        if (is_null($resultType)) {
            switch ($response->getStatusCode()) {
                default:
                    $resultType = JsonObjectModel::class;

                    break;
            }
        }

        return $mapper->mapResponseToClass($resultType, $response);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     *
     * @param array $options
     *
     * @return null|JsonObject
     */
    public function execute(array $options = [], string $resultType = null)
    {
        try {
            $response = $this->send($options);
        } catch (ServerException $e) {
            $result = $this->mapFromResponse($e->getResponse());

            throw new ApiServerException($e->getMessage(), $result, $this, $e->getResponse(), $e, []);
        } catch (ClientException $e) {
            $result = $this->mapFromResponse($e->getResponse());

            throw new ApiClientException($e->getMessage(), $result, $this, $e->getResponse(), $e, []);
        }

        return $this->mapFromResponse($response, $resultType);
    }
}