<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Type\Type;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyTypesKeyByKeyDelete extends ApiRequest
{
    const RESULT_TYPE = Type::class;

    /**
     * @param $projectKey
     * @param $key
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $key, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/types/key=%s', $projectKey, $key);
        parent::__construct('delete', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Type
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Type
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $version
     * @return ByProjectKeyTypesKeyByKeyDelete
     */
    public function withVersion($version): ByProjectKeyTypesKeyByKeyDelete
    {
        return $this->withQueryParam('version', $version);
    }
    /**
     * @param $expand
     * @return ByProjectKeyTypesKeyByKeyDelete
     */
    public function withExpand($expand): ByProjectKeyTypesKeyByKeyDelete
    {
        return $this->withQueryParam('expand', $expand);
    }

}