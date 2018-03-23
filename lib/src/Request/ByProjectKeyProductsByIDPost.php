<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Product\Product;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\Product\ProductUpdate;


class ByProjectKeyProductsByIDPost extends ApiRequest
{
    const RESULT_TYPE = Product::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, ProductUpdate $body, array $headers = [])
    {
        $uri = sprintf('/%s/products/%s', $projectKey, $ID);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Product
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Product
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyProductsByIDPost
     */
    public function withExpand($expand): ByProjectKeyProductsByIDPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}