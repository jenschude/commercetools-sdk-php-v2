<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request\Test;

use Commercetools\Request\RequestBuilder;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

class RequestParameterBuilderTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCartDiscountsGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/cart-discounts?expand=expand',
            ],
            'ByProjectKeyCartDiscountsGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/cart-discounts?where=where',
            ],
            'ByProjectKeyCartDiscountsGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/cart-discounts?sort=sort',
            ],
            'ByProjectKeyCartDiscountsGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/cart-discounts?limit=limit',
            ],
            'ByProjectKeyCartDiscountsGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/cart-discounts?offset=offset',
            ],
            'ByProjectKeyCartDiscountsGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/cart-discounts?withTotal=withTotal',
            ],
            'ByProjectKeyCartDiscountsPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/cart-discounts?expand=expand',
            ],
            'ByProjectKeyCartDiscountsByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/cart-discounts/{ID}?expand=expand',
            ],
            'ByProjectKeyCartDiscountsByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/cart-discounts/{ID}?expand=expand',
            ],
            'ByProjectKeyCartDiscountsByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/cart-discounts/{ID}?version=version',
            ],
            'ByProjectKeyCartDiscountsByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/cart-discounts/{ID}?expand=expand',
            ],
            'ByProjectKeyCartsGet_customerId' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->get()->withCustomerId('customerId');
                },
                'get',
                '/{projectKey}/carts?customerId=customerId',
            ],
            'ByProjectKeyCartsPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/carts?expand=expand',
            ],
            'ByProjectKeyCartsByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/carts/{ID}?expand=expand',
            ],
            'ByProjectKeyCartsByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/carts/{ID}?expand=expand',
            ],
            'ByProjectKeyCartsByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/carts/{ID}?version=version',
            ],
            'ByProjectKeyCartsByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/carts/{ID}?expand=expand',
            ],
            'ByProjectKeyCategoriesGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/categories?expand=expand',
            ],
            'ByProjectKeyCategoriesGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/categories?where=where',
            ],
            'ByProjectKeyCategoriesGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/categories?sort=sort',
            ],
            'ByProjectKeyCategoriesGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/categories?limit=limit',
            ],
            'ByProjectKeyCategoriesGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/categories?offset=offset',
            ],
            'ByProjectKeyCategoriesGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/categories?withTotal=withTotal',
            ],
            'ByProjectKeyCategoriesPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/categories?expand=expand',
            ],
            'ByProjectKeyCategoriesKeyByKeyGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->withKey('key')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/categories/key={key}?expand=expand',
            ],
            'ByProjectKeyCategoriesKeyByKeyPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->withKey('key')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/categories/key={key}?expand=expand',
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->withKey('key')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/categories/key={key}?version=version',
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->withKey('key')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/categories/key={key}?expand=expand',
            ],
            'ByProjectKeyCategoriesByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/categories/{ID}?expand=expand',
            ],
            'ByProjectKeyCategoriesByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/categories/{ID}?expand=expand',
            ],
            'ByProjectKeyCategoriesByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/categories/{ID}?version=version',
            ],
            'ByProjectKeyCategoriesByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/categories/{ID}?expand=expand',
            ],
            'ByProjectKeyChannelsGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/channels?expand=expand',
            ],
            'ByProjectKeyChannelsGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/channels?where=where',
            ],
            'ByProjectKeyChannelsGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/channels?sort=sort',
            ],
            'ByProjectKeyChannelsGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/channels?limit=limit',
            ],
            'ByProjectKeyChannelsGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/channels?offset=offset',
            ],
            'ByProjectKeyChannelsGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/channels?withTotal=withTotal',
            ],
            'ByProjectKeyChannelsPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/channels?expand=expand',
            ],
            'ByProjectKeyChannelsByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/channels/{ID}?expand=expand',
            ],
            'ByProjectKeyChannelsByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/channels/{ID}?expand=expand',
            ],
            'ByProjectKeyChannelsByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/channels/{ID}?version=version',
            ],
            'ByProjectKeyChannelsByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/channels/{ID}?expand=expand',
            ],
            'ByProjectKeyCustomObjectsGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/custom-objects?expand=expand',
            ],
            'ByProjectKeyCustomObjectsGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/custom-objects?where=where',
            ],
            'ByProjectKeyCustomObjectsGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/custom-objects?sort=sort',
            ],
            'ByProjectKeyCustomObjectsGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/custom-objects?limit=limit',
            ],
            'ByProjectKeyCustomObjectsGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/custom-objects?offset=offset',
            ],
            'ByProjectKeyCustomObjectsGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/custom-objects?withTotal=withTotal',
            ],
            'ByProjectKeyCustomObjectsPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/custom-objects?expand=expand',
            ],
            'ByProjectKeyCustomObjectsByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/custom-objects/{ID}?expand=expand',
            ],
            'ByProjectKeyCustomObjectsByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/custom-objects/{ID}?version=version',
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->withContainerAndKey('container', 'key')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/custom-objects/{container}/{key}?expand=expand',
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->withContainerAndKey('container', 'key')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/custom-objects/{container}/{key}?version=version',
            ],
            'ByProjectKeyCustomerGroupsGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/customer-groups?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/customer-groups?where=where',
            ],
            'ByProjectKeyCustomerGroupsGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/customer-groups?sort=sort',
            ],
            'ByProjectKeyCustomerGroupsGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/customer-groups?limit=limit',
            ],
            'ByProjectKeyCustomerGroupsGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/customer-groups?offset=offset',
            ],
            'ByProjectKeyCustomerGroupsGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/customer-groups?withTotal=withTotal',
            ],
            'ByProjectKeyCustomerGroupsPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/customer-groups?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->withKey('key')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/customer-groups/key={key}?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->withKey('key')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/customer-groups/key={key}?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->withKey('key')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/customer-groups/key={key}?version=version',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->withKey('key')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/customer-groups/key={key}?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/customer-groups/{ID}?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/customer-groups/{ID}?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/customer-groups/{ID}?version=version',
            ],
            'ByProjectKeyCustomerGroupsByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/customer-groups/{ID}?expand=expand',
            ],
            'ByProjectKeyCustomersGet_token' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->get()->withToken('token');
                },
                'get',
                '/{projectKey}/customers?token=token',
            ],
            'ByProjectKeyCustomersPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/customers?expand=expand',
            ],
            'ByProjectKeyCustomersEmailTokenByEmailTokenGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->withEmailToken('emailToken')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/customers/email-token={emailToken}?expand=expand',
            ],
            'ByProjectKeyCustomersPasswordTokenByPasswordTokenGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->withPasswordToken('passwordToken')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/customers/password-token={passwordToken}?expand=expand',
            ],
            'ByProjectKeyCustomersByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/customers/{ID}?expand=expand',
            ],
            'ByProjectKeyCustomersByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/customers/{ID}?expand=expand',
            ],
            'ByProjectKeyCustomersByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/customers/{ID}?version=version',
            ],
            'ByProjectKeyCustomersByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/customers/{ID}?expand=expand',
            ],
            'ByProjectKeyDiscountCodesGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/discount-codes?expand=expand',
            ],
            'ByProjectKeyDiscountCodesGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/discount-codes?where=where',
            ],
            'ByProjectKeyDiscountCodesGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/discount-codes?sort=sort',
            ],
            'ByProjectKeyDiscountCodesGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/discount-codes?limit=limit',
            ],
            'ByProjectKeyDiscountCodesGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/discount-codes?offset=offset',
            ],
            'ByProjectKeyDiscountCodesGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/discount-codes?withTotal=withTotal',
            ],
            'ByProjectKeyDiscountCodesPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/discount-codes?expand=expand',
            ],
            'ByProjectKeyDiscountCodesByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/discount-codes/{ID}?expand=expand',
            ],
            'ByProjectKeyDiscountCodesByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/discount-codes/{ID}?expand=expand',
            ],
            'ByProjectKeyDiscountCodesByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/discount-codes/{ID}?version=version',
            ],
            'ByProjectKeyDiscountCodesByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/discount-codes/{ID}?expand=expand',
            ],
            'ByProjectKeyExtensionsGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/extensions?expand=expand',
            ],
            'ByProjectKeyExtensionsGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/extensions?where=where',
            ],
            'ByProjectKeyExtensionsGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/extensions?sort=sort',
            ],
            'ByProjectKeyExtensionsGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/extensions?limit=limit',
            ],
            'ByProjectKeyExtensionsGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/extensions?offset=offset',
            ],
            'ByProjectKeyExtensionsGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/extensions?withTotal=withTotal',
            ],
            'ByProjectKeyExtensionsPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/extensions?expand=expand',
            ],
            'ByProjectKeyExtensionsKeyByKeyGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->withKey('key')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/extensions/key={key}?expand=expand',
            ],
            'ByProjectKeyExtensionsKeyByKeyPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->withKey('key')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/extensions/key={key}?expand=expand',
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->withKey('key')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/extensions/key={key}?version=version',
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->withKey('key')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/extensions/key={key}?expand=expand',
            ],
            'ByProjectKeyExtensionsByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/extensions/{ID}?expand=expand',
            ],
            'ByProjectKeyExtensionsByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/extensions/{ID}?expand=expand',
            ],
            'ByProjectKeyExtensionsByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/extensions/{ID}?version=version',
            ],
            'ByProjectKeyExtensionsByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/extensions/{ID}?expand=expand',
            ],
            'ByProjectKeyInventoryGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/inventory?expand=expand',
            ],
            'ByProjectKeyInventoryGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/inventory?where=where',
            ],
            'ByProjectKeyInventoryGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/inventory?sort=sort',
            ],
            'ByProjectKeyInventoryGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/inventory?limit=limit',
            ],
            'ByProjectKeyInventoryGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/inventory?offset=offset',
            ],
            'ByProjectKeyInventoryGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/inventory?withTotal=withTotal',
            ],
            'ByProjectKeyInventoryPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/inventory?expand=expand',
            ],
            'ByProjectKeyInventoryByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/inventory/{ID}?expand=expand',
            ],
            'ByProjectKeyInventoryByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/inventory/{ID}?expand=expand',
            ],
            'ByProjectKeyInventoryByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/inventory/{ID}?version=version',
            ],
            'ByProjectKeyInventoryByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/inventory/{ID}?expand=expand',
            ],
            'ByProjectKeyMeCartsGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/me/carts?expand=expand',
            ],
            'ByProjectKeyMeCartsGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/me/carts?where=where',
            ],
            'ByProjectKeyMeCartsGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/me/carts?sort=sort',
            ],
            'ByProjectKeyMeCartsGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/me/carts?limit=limit',
            ],
            'ByProjectKeyMeCartsGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/me/carts?offset=offset',
            ],
            'ByProjectKeyMeCartsGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/me/carts?withTotal=withTotal',
            ],
            'ByProjectKeyMeCartsPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/me/carts?expand=expand',
            ],
            'ByProjectKeyMeCartsByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/me/carts/{ID}?expand=expand',
            ],
            'ByProjectKeyMeCartsByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/me/carts/{ID}?expand=expand',
            ],
            'ByProjectKeyMeCartsByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/me/carts/{ID}?version=version',
            ],
            'ByProjectKeyMeCartsByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/me/carts/{ID}?expand=expand',
            ],
            'ByProjectKeyMeOrdersGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->orders()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/me/orders?expand=expand',
            ],
            'ByProjectKeyMeOrdersGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->orders()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/me/orders?where=where',
            ],
            'ByProjectKeyMeOrdersGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->orders()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/me/orders?sort=sort',
            ],
            'ByProjectKeyMeOrdersGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->orders()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/me/orders?limit=limit',
            ],
            'ByProjectKeyMeOrdersGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->orders()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/me/orders?offset=offset',
            ],
            'ByProjectKeyMeOrdersGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->orders()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/me/orders?withTotal=withTotal',
            ],
            'ByProjectKeyMeOrdersPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->orders()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/me/orders?expand=expand',
            ],
            'ByProjectKeyMeOrdersByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->orders()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/me/orders/{ID}?expand=expand',
            ],
            'ByProjectKeyMeOrdersByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->orders()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/me/orders/{ID}?expand=expand',
            ],
            'ByProjectKeyMessagesGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->messages()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/messages?expand=expand',
            ],
            'ByProjectKeyMessagesGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->messages()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/messages?where=where',
            ],
            'ByProjectKeyMessagesGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->messages()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/messages?sort=sort',
            ],
            'ByProjectKeyMessagesGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->messages()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/messages?limit=limit',
            ],
            'ByProjectKeyMessagesGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->messages()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/messages?offset=offset',
            ],
            'ByProjectKeyMessagesGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->messages()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/messages?withTotal=withTotal',
            ],
            'ByProjectKeyMessagesByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->messages()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/messages/{ID}?expand=expand',
            ],
            'ByProjectKeyOrdersGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/orders?expand=expand',
            ],
            'ByProjectKeyOrdersGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/orders?where=where',
            ],
            'ByProjectKeyOrdersGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/orders?sort=sort',
            ],
            'ByProjectKeyOrdersGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/orders?limit=limit',
            ],
            'ByProjectKeyOrdersGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/orders?offset=offset',
            ],
            'ByProjectKeyOrdersGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/orders?withTotal=withTotal',
            ],
            'ByProjectKeyOrdersPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/orders?expand=expand',
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->withOrderNumber('orderNumber')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/orders/order-number={orderNumber}?expand=expand',
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->withOrderNumber('orderNumber')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/orders/order-number={orderNumber}?expand=expand',
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->withOrderNumber('orderNumber')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/orders/order-number={orderNumber}?version=version',
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->withOrderNumber('orderNumber')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/orders/order-number={orderNumber}?expand=expand',
            ],
            'ByProjectKeyOrdersByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/orders/{ID}?expand=expand',
            ],
            'ByProjectKeyOrdersByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/orders/{ID}?expand=expand',
            ],
            'ByProjectKeyOrdersByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/orders/{ID}?version=version',
            ],
            'ByProjectKeyOrdersByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/orders/{ID}?expand=expand',
            ],
            'ByProjectKeyPaymentsGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/payments?expand=expand',
            ],
            'ByProjectKeyPaymentsGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/payments?where=where',
            ],
            'ByProjectKeyPaymentsGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/payments?sort=sort',
            ],
            'ByProjectKeyPaymentsGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/payments?limit=limit',
            ],
            'ByProjectKeyPaymentsGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/payments?offset=offset',
            ],
            'ByProjectKeyPaymentsGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/payments?withTotal=withTotal',
            ],
            'ByProjectKeyPaymentsPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/payments?expand=expand',
            ],
            'ByProjectKeyPaymentsKeyByKeyGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->withKey('key')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/payments/key={key}?expand=expand',
            ],
            'ByProjectKeyPaymentsKeyByKeyPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->withKey('key')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/payments/key={key}?expand=expand',
            ],
            'ByProjectKeyPaymentsKeyByKeyDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->withKey('key')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/payments/key={key}?version=version',
            ],
            'ByProjectKeyPaymentsKeyByKeyDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->withKey('key')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/payments/key={key}?expand=expand',
            ],
            'ByProjectKeyPaymentsByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/payments/{ID}?expand=expand',
            ],
            'ByProjectKeyPaymentsByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/payments/{ID}?expand=expand',
            ],
            'ByProjectKeyPaymentsByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/payments/{ID}?version=version',
            ],
            'ByProjectKeyPaymentsByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/payments/{ID}?expand=expand',
            ],
            'ByProjectKeyProductDiscountsGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/product-discounts?expand=expand',
            ],
            'ByProjectKeyProductDiscountsGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/product-discounts?where=where',
            ],
            'ByProjectKeyProductDiscountsGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/product-discounts?sort=sort',
            ],
            'ByProjectKeyProductDiscountsGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/product-discounts?limit=limit',
            ],
            'ByProjectKeyProductDiscountsGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/product-discounts?offset=offset',
            ],
            'ByProjectKeyProductDiscountsGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/product-discounts?withTotal=withTotal',
            ],
            'ByProjectKeyProductDiscountsPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/product-discounts?expand=expand',
            ],
            'ByProjectKeyProductDiscountsByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/product-discounts/{ID}?expand=expand',
            ],
            'ByProjectKeyProductDiscountsByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/product-discounts/{ID}?expand=expand',
            ],
            'ByProjectKeyProductDiscountsByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/product-discounts/{ID}?version=version',
            ],
            'ByProjectKeyProductDiscountsByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/product-discounts/{ID}?expand=expand',
            ],
            'ByProjectKeyProductProjectionsGet_staged' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->get()->withStaged('staged');
                },
                'get',
                '/{projectKey}/product-projections?staged=staged',
            ],
            'ByProjectKeyProductProjectionsKeyByKeyGet_staged' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->withKey('key')->get()->withStaged('staged');
                },
                'get',
                '/{projectKey}/product-projections/key={key}?staged=staged',
            ],
            'ByProjectKeyProductProjectionsSearchGet_fuzzy' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->search()->get()->withFuzzy('fuzzy');
                },
                'get',
                '/{projectKey}/product-projections/search?fuzzy=fuzzy',
            ],
            'ByProjectKeyProductProjectionsSearchGet_fuzzyLevel' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->search()->get()->withFuzzyLevel('fuzzyLevel');
                },
                'get',
                '/{projectKey}/product-projections/search?fuzzyLevel=fuzzyLevel',
            ],
            'ByProjectKeyProductProjectionsSearchGet_staged' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->search()->get()->withStaged('staged');
                },
                'get',
                '/{projectKey}/product-projections/search?staged=staged',
            ],
            'ByProjectKeyProductProjectionsSearchGet_filter' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->search()->get()->withFilter('filter');
                },
                'get',
                '/{projectKey}/product-projections/search?filter=filter',
            ],
            'ByProjectKeyProductProjectionsSearchGet_filter.facets' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->search()->get()->withFilterFacets('filter.facets');
                },
                'get',
                '/{projectKey}/product-projections/search?filter.facets=filter.facets',
            ],
            'ByProjectKeyProductProjectionsSearchGet_filter.query' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->search()->get()->withFilterQuery('filter.query');
                },
                'get',
                '/{projectKey}/product-projections/search?filter.query=filter.query',
            ],
            'ByProjectKeyProductProjectionsSearchGet_facet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->search()->get()->withFacet('facet');
                },
                'get',
                '/{projectKey}/product-projections/search?facet=facet',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_fuzzy' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->suggest()->get()->withFuzzy('fuzzy');
                },
                'get',
                '/{projectKey}/product-projections/suggest?fuzzy=fuzzy',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_staged' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->suggest()->get()->withStaged('staged');
                },
                'get',
                '/{projectKey}/product-projections/suggest?staged=staged',
            ],
            'ByProjectKeyProductProjectionsByIDGet_staged' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->withId('ID')->get()->withStaged('staged');
                },
                'get',
                '/{projectKey}/product-projections/{ID}?staged=staged',
            ],
            'ByProjectKeyProductTypesGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/product-types?expand=expand',
            ],
            'ByProjectKeyProductTypesGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/product-types?where=where',
            ],
            'ByProjectKeyProductTypesGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/product-types?sort=sort',
            ],
            'ByProjectKeyProductTypesGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/product-types?limit=limit',
            ],
            'ByProjectKeyProductTypesGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/product-types?offset=offset',
            ],
            'ByProjectKeyProductTypesGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/product-types?withTotal=withTotal',
            ],
            'ByProjectKeyProductTypesPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/product-types?expand=expand',
            ],
            'ByProjectKeyProductTypesKeyByKeyGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->withKey('key')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/product-types/key={key}?expand=expand',
            ],
            'ByProjectKeyProductTypesKeyByKeyPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->withKey('key')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/product-types/key={key}?expand=expand',
            ],
            'ByProjectKeyProductTypesKeyByKeyDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->withKey('key')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/product-types/key={key}?version=version',
            ],
            'ByProjectKeyProductTypesKeyByKeyDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->withKey('key')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/product-types/key={key}?expand=expand',
            ],
            'ByProjectKeyProductTypesByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/product-types/{ID}?expand=expand',
            ],
            'ByProjectKeyProductTypesByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/product-types/{ID}?expand=expand',
            ],
            'ByProjectKeyProductTypesByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/product-types/{ID}?version=version',
            ],
            'ByProjectKeyProductTypesByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/product-types/{ID}?expand=expand',
            ],
            'ByProjectKeyProductsGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/products?expand=expand',
            ],
            'ByProjectKeyProductsGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/products?where=where',
            ],
            'ByProjectKeyProductsGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/products?sort=sort',
            ],
            'ByProjectKeyProductsGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/products?limit=limit',
            ],
            'ByProjectKeyProductsGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/products?offset=offset',
            ],
            'ByProjectKeyProductsGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/products?withTotal=withTotal',
            ],
            'ByProjectKeyProductsPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/products?expand=expand',
            ],
            'ByProjectKeyProductsKeyByKeyGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withKey('key')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/products/key={key}?expand=expand',
            ],
            'ByProjectKeyProductsKeyByKeyPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withKey('key')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/products/key={key}?expand=expand',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withKey('key')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/products/key={key}?version=version',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withKey('key')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/products/key={key}?expand=expand',
            ],
            'ByProjectKeyProductsByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/products/{ID}?expand=expand',
            ],
            'ByProjectKeyProductsByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/products/{ID}?expand=expand',
            ],
            'ByProjectKeyProductsByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/products/{ID}?version=version',
            ],
            'ByProjectKeyProductsByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/products/{ID}?expand=expand',
            ],
            'ByProjectKeyProductsByIDImagesPost_filename' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withId('ID')->images()->post(null)->withFilename('filename');
                },
                'post',
                '/{projectKey}/products/{ID}/images?filename=filename',
            ],
            'ByProjectKeyProductsByIDImagesPost_variant' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withId('ID')->images()->post(null)->withVariant('variant');
                },
                'post',
                '/{projectKey}/products/{ID}/images?variant=variant',
            ],
            'ByProjectKeyProductsByIDImagesPost_sku' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withId('ID')->images()->post(null)->withSku('sku');
                },
                'post',
                '/{projectKey}/products/{ID}/images?sku=sku',
            ],
            'ByProjectKeyProductsByIDImagesPost_staged' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withId('ID')->images()->post(null)->withStaged('staged');
                },
                'post',
                '/{projectKey}/products/{ID}/images?staged=staged',
            ],
            'ByProjectKeyReviewsGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/reviews?expand=expand',
            ],
            'ByProjectKeyReviewsGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/reviews?where=where',
            ],
            'ByProjectKeyReviewsGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/reviews?sort=sort',
            ],
            'ByProjectKeyReviewsGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/reviews?limit=limit',
            ],
            'ByProjectKeyReviewsGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/reviews?offset=offset',
            ],
            'ByProjectKeyReviewsGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/reviews?withTotal=withTotal',
            ],
            'ByProjectKeyReviewsPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/reviews?expand=expand',
            ],
            'ByProjectKeyReviewsKeyByKeyGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->withKey('key')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/reviews/key={key}?expand=expand',
            ],
            'ByProjectKeyReviewsKeyByKeyPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->withKey('key')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/reviews/key={key}?expand=expand',
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->withKey('key')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/reviews/key={key}?version=version',
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->withKey('key')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/reviews/key={key}?expand=expand',
            ],
            'ByProjectKeyReviewsByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/reviews/{ID}?expand=expand',
            ],
            'ByProjectKeyReviewsByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/reviews/{ID}?expand=expand',
            ],
            'ByProjectKeyReviewsByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/reviews/{ID}?version=version',
            ],
            'ByProjectKeyReviewsByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/reviews/{ID}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsGet_cartId' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->get()->withCartId('cartId');
                },
                'get',
                '/{projectKey}/shipping-methods?cartId=cartId',
            ],
            'ByProjectKeyShippingMethodsGet_country' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->get()->withCountry('country');
                },
                'get',
                '/{projectKey}/shipping-methods?country=country',
            ],
            'ByProjectKeyShippingMethodsGet_state' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->get()->withState('state');
                },
                'get',
                '/{projectKey}/shipping-methods?state=state',
            ],
            'ByProjectKeyShippingMethodsGet_currency' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->get()->withCurrency('currency');
                },
                'get',
                '/{projectKey}/shipping-methods?currency=currency',
            ],
            'ByProjectKeyShippingMethodsPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/shipping-methods?expand=expand',
            ],
            'ByProjectKeyShippingMethodsKeyByKeyGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->withKey('key')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/shipping-methods/key={key}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsKeyByKeyPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->withKey('key')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/shipping-methods/key={key}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsKeyByKeyDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->withKey('key')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/shipping-methods/key={key}?version=version',
            ],
            'ByProjectKeyShippingMethodsKeyByKeyDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->withKey('key')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/shipping-methods/key={key}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/shipping-methods/{ID}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/shipping-methods/{ID}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/shipping-methods/{ID}?version=version',
            ],
            'ByProjectKeyShippingMethodsByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/shipping-methods/{ID}?expand=expand',
            ],
            'ByProjectKeyShoppingListsGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/shopping-lists?expand=expand',
            ],
            'ByProjectKeyShoppingListsGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/shopping-lists?where=where',
            ],
            'ByProjectKeyShoppingListsGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/shopping-lists?sort=sort',
            ],
            'ByProjectKeyShoppingListsGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/shopping-lists?limit=limit',
            ],
            'ByProjectKeyShoppingListsGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/shopping-lists?offset=offset',
            ],
            'ByProjectKeyShoppingListsGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/shopping-lists?withTotal=withTotal',
            ],
            'ByProjectKeyShoppingListsPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/shopping-lists?expand=expand',
            ],
            'ByProjectKeyShoppingListsKeyByKeyGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->withKey('key')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/shopping-lists/key={key}?expand=expand',
            ],
            'ByProjectKeyShoppingListsKeyByKeyPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->withKey('key')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/shopping-lists/key={key}?expand=expand',
            ],
            'ByProjectKeyShoppingListsKeyByKeyDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->withKey('key')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/shopping-lists/key={key}?version=version',
            ],
            'ByProjectKeyShoppingListsKeyByKeyDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->withKey('key')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/shopping-lists/key={key}?expand=expand',
            ],
            'ByProjectKeyShoppingListsByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/shopping-lists/{ID}?expand=expand',
            ],
            'ByProjectKeyShoppingListsByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/shopping-lists/{ID}?expand=expand',
            ],
            'ByProjectKeyShoppingListsByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/shopping-lists/{ID}?version=version',
            ],
            'ByProjectKeyShoppingListsByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/shopping-lists/{ID}?expand=expand',
            ],
            'ByProjectKeyStatesGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/states?expand=expand',
            ],
            'ByProjectKeyStatesGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/states?where=where',
            ],
            'ByProjectKeyStatesGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/states?sort=sort',
            ],
            'ByProjectKeyStatesGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/states?limit=limit',
            ],
            'ByProjectKeyStatesGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/states?offset=offset',
            ],
            'ByProjectKeyStatesGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/states?withTotal=withTotal',
            ],
            'ByProjectKeyStatesPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/states?expand=expand',
            ],
            'ByProjectKeyStatesByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/states/{ID}?expand=expand',
            ],
            'ByProjectKeyStatesByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/states/{ID}?expand=expand',
            ],
            'ByProjectKeyStatesByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/states/{ID}?version=version',
            ],
            'ByProjectKeyStatesByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/states/{ID}?expand=expand',
            ],
            'ByProjectKeySubscriptionsGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/subscriptions?expand=expand',
            ],
            'ByProjectKeySubscriptionsGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/subscriptions?where=where',
            ],
            'ByProjectKeySubscriptionsGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/subscriptions?sort=sort',
            ],
            'ByProjectKeySubscriptionsGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/subscriptions?limit=limit',
            ],
            'ByProjectKeySubscriptionsGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/subscriptions?offset=offset',
            ],
            'ByProjectKeySubscriptionsGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/subscriptions?withTotal=withTotal',
            ],
            'ByProjectKeySubscriptionsPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/subscriptions?expand=expand',
            ],
            'ByProjectKeySubscriptionsKeyByKeyGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->withKey('key')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/subscriptions/key={key}?expand=expand',
            ],
            'ByProjectKeySubscriptionsKeyByKeyPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->withKey('key')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/subscriptions/key={key}?expand=expand',
            ],
            'ByProjectKeySubscriptionsKeyByKeyDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->withKey('key')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/subscriptions/key={key}?version=version',
            ],
            'ByProjectKeySubscriptionsKeyByKeyDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->withKey('key')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/subscriptions/key={key}?expand=expand',
            ],
            'ByProjectKeySubscriptionsByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/subscriptions/{ID}?expand=expand',
            ],
            'ByProjectKeySubscriptionsByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/subscriptions/{ID}?expand=expand',
            ],
            'ByProjectKeySubscriptionsByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/subscriptions/{ID}?version=version',
            ],
            'ByProjectKeySubscriptionsByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/subscriptions/{ID}?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/tax-categories?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/tax-categories?where=where',
            ],
            'ByProjectKeyTaxCategoriesGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/tax-categories?sort=sort',
            ],
            'ByProjectKeyTaxCategoriesGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/tax-categories?limit=limit',
            ],
            'ByProjectKeyTaxCategoriesGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/tax-categories?offset=offset',
            ],
            'ByProjectKeyTaxCategoriesGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/tax-categories?withTotal=withTotal',
            ],
            'ByProjectKeyTaxCategoriesPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/tax-categories?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/tax-categories/{ID}?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/tax-categories/{ID}?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/tax-categories/{ID}?version=version',
            ],
            'ByProjectKeyTaxCategoriesByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/tax-categories/{ID}?expand=expand',
            ],
            'ByProjectKeyTypesGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/types?expand=expand',
            ],
            'ByProjectKeyTypesGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/types?where=where',
            ],
            'ByProjectKeyTypesGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/types?sort=sort',
            ],
            'ByProjectKeyTypesGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/types?limit=limit',
            ],
            'ByProjectKeyTypesGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/types?offset=offset',
            ],
            'ByProjectKeyTypesGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/types?withTotal=withTotal',
            ],
            'ByProjectKeyTypesPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/types?expand=expand',
            ],
            'ByProjectKeyTypesKeyByKeyGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->withKey('key')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/types/key={key}?expand=expand',
            ],
            'ByProjectKeyTypesKeyByKeyPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->withKey('key')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/types/key={key}?expand=expand',
            ],
            'ByProjectKeyTypesKeyByKeyDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->withKey('key')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/types/key={key}?version=version',
            ],
            'ByProjectKeyTypesKeyByKeyDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->withKey('key')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/types/key={key}?expand=expand',
            ],
            'ByProjectKeyTypesByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/types/{ID}?expand=expand',
            ],
            'ByProjectKeyTypesByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/types/{ID}?expand=expand',
            ],
            'ByProjectKeyTypesByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/types/{ID}?version=version',
            ],
            'ByProjectKeyTypesByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/types/{ID}?expand=expand',
            ],
            'ByProjectKeyZonesGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/zones?expand=expand',
            ],
            'ByProjectKeyZonesGet_where' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->get()->withWhere('where');
                },
                'get',
                '/{projectKey}/zones?where=where',
            ],
            'ByProjectKeyZonesGet_sort' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->get()->withSort('sort');
                },
                'get',
                '/{projectKey}/zones?sort=sort',
            ],
            'ByProjectKeyZonesGet_limit' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->get()->withLimit('limit');
                },
                'get',
                '/{projectKey}/zones?limit=limit',
            ],
            'ByProjectKeyZonesGet_offset' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->get()->withOffset('offset');
                },
                'get',
                '/{projectKey}/zones?offset=offset',
            ],
            'ByProjectKeyZonesGet_withTotal' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->get()->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/zones?withTotal=withTotal',
            ],
            'ByProjectKeyZonesPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/zones?expand=expand',
            ],
            'ByProjectKeyZonesByIDGet_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->withId('ID')->get()->withExpand('expand');
                },
                'get',
                '/{projectKey}/zones/{ID}?expand=expand',
            ],
            'ByProjectKeyZonesByIDPost_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->withId('ID')->post(null)->withExpand('expand');
                },
                'post',
                '/{projectKey}/zones/{ID}?expand=expand',
            ],
            'ByProjectKeyZonesByIDDelete_version' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->withId('ID')->delete()->withVersion('version');
                },
                'delete',
                '/{projectKey}/zones/{ID}?version=version',
            ],
            'ByProjectKeyZonesByIDDelete_expand' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->withId('ID')->delete()->withExpand('expand');
                },
                'delete',
                '/{projectKey}/zones/{ID}?expand=expand',
            ],
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new RequestBuilder();
        $request = $builderFunction($builder);

        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertContains(str_replace(['{', '}'], '', $relativeUri), (string)$request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string)$request->getBody());
        };
    }
}