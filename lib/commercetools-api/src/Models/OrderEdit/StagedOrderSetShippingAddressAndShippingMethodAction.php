<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderSetShippingAddressAndShippingMethodAction extends StagedOrderUpdateAction
{
    public const FIELD_ADDRESS = 'address';
    public const FIELD_SHIPPING_METHOD = 'shippingMethod';
    public const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';

    /**
     * @return null|Address
     */
    public function getAddress();

    /**
     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod();

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    public function setAddress(?Address $address): void;

    public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void;

    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;
}
