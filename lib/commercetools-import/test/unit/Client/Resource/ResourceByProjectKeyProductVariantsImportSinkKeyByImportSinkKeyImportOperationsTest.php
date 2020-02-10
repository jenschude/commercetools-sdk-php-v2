<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Test\Client\Resource;

use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Import\Client\ImportRequestBuilder;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet
 *
 * @internal
 */
class ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet_withLimit' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('projectKey')
                        ->productVariants()
                        ->importSinkKeyWithImportSinkKeyValue('importSinkKey')
                        ->importOperations()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/product-variants/importSinkKey={importSinkKey}/import-operations?limit=limit',
            ],
            'ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet_withOffset' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('projectKey')
                        ->productVariants()
                        ->importSinkKeyWithImportSinkKeyValue('importSinkKey')
                        ->importOperations()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/product-variants/importSinkKey={importSinkKey}/import-operations?offset=offset',
            ],
            'ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet_withResourceKey' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('projectKey')
                        ->productVariants()
                        ->importSinkKeyWithImportSinkKeyValue('importSinkKey')
                        ->importOperations()
                        ->get()
                        ->withResourceKey('resourceKey')
                    ;
                },
                'get',
                '{projectKey}/product-variants/importSinkKey={importSinkKey}/import-operations?resourceKey=resourceKey',
            ],
            'ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet_withState' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('projectKey')
                        ->productVariants()
                        ->importSinkKeyWithImportSinkKeyValue('importSinkKey')
                        ->importOperations()
                        ->get()
                        ->withState('state')
                    ;
                },
                'get',
                '{projectKey}/product-variants/importSinkKey={importSinkKey}/import-operations?state=state',
            ],
            'ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('projectKey')
                        ->productVariants()
                        ->importSinkKeyWithImportSinkKeyValue('importSinkKey')
                        ->importOperations()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/product-variants/importSinkKey={importSinkKey}/import-operations',
            ],
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ImportRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        }
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('projectKey')
                        ->productVariants()
                        ->importSinkKeyWithImportSinkKeyValue('importSinkKey')
                        ->importOperations()
                        ->get()
                    ;
                },
            ],
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testMapFromResponse(callable $builderFunction)
    {
        $builder = new ImportRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response(200, [], '{}');
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}