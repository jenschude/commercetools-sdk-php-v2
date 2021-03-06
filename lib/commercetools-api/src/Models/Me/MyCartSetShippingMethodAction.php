<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCartSetShippingMethodAction extends MyCartUpdateAction
{
    public const FIELD_SHIPPING_METHOD = 'shippingMethod';
    public const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';

    /**
     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod();

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void;

    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;
}
