<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CustomLineItemCollection;
use Commercetools\Api\Models\Cart\DiscountCodeInfoCollection;
use Commercetools\Api\Models\Cart\LineItemCollection;
use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\Order\PaymentInfo;
use Commercetools\Api\Models\Order\ReturnInfoCollection;
use Commercetools\Api\Models\Order\SyncInfoCollection;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface MyOrder extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_COMPLETED_AT = 'completedAt';
    public const FIELD_ORDER_NUMBER = 'orderNumber';
    public const FIELD_CUSTOMER_ID = 'customerId';
    public const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';
    public const FIELD_STORE = 'store';
    public const FIELD_LINE_ITEMS = 'lineItems';
    public const FIELD_CUSTOM_LINE_ITEMS = 'customLineItems';
    public const FIELD_TOTAL_PRICE = 'totalPrice';
    public const FIELD_TAXED_PRICE = 'taxedPrice';
    public const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    public const FIELD_BILLING_ADDRESS = 'billingAddress';
    public const FIELD_TAX_MODE = 'taxMode';
    public const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_ORDER_STATE = 'orderState';
    public const FIELD_STATE = 'state';
    public const FIELD_SHIPMENT_STATE = 'shipmentState';
    public const FIELD_PAYMENT_STATE = 'paymentState';
    public const FIELD_SHIPPING_INFO = 'shippingInfo';
    public const FIELD_SYNC_INFO = 'syncInfo';
    public const FIELD_RETURN_INFO = 'returnInfo';
    public const FIELD_DISCOUNT_CODES = 'discountCodes';
    public const FIELD_LAST_MESSAGE_SEQUENCE_NUMBER = 'lastMessageSequenceNumber';
    public const FIELD_CART = 'cart';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_PAYMENT_INFO = 'paymentInfo';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_INVENTORY_MODE = 'inventoryMode';
    public const FIELD_ORIGIN = 'origin';
    public const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';
    public const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';
    public const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';
    public const FIELD_REFUSED_GIFTS = 'refusedGifts';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCompletedAt();

    /**
     * @return null|string
     */
    public function getOrderNumber();

    /**
     * @return null|string
     */
    public function getCustomerId();

    /**
     * @return null|string
     */
    public function getCustomerEmail();

    /**
     * @return null|string
     */
    public function getAnonymousId();

    /**
     * @return null|StoreKeyReference
     */
    public function getStore();

    /**
     * @return null|LineItemCollection
     */
    public function getLineItems();

    /**
     * @return null|CustomLineItemCollection
     */
    public function getCustomLineItems();

    /**
     * @return null|TypedMoney
     */
    public function getTotalPrice();

    /**
     * @return null|TaxedPrice
     */
    public function getTaxedPrice();

    /**
     * @return null|Address
     */
    public function getShippingAddress();

    /**
     * @return null|Address
     */
    public function getBillingAddress();

    /**
     * @return null|string
     */
    public function getTaxMode();

    /**
     * @return null|string
     */
    public function getTaxRoundingMode();

    /**
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * @return null|string
     */
    public function getCountry();

    /**
     * @return null|string
     */
    public function getOrderState();

    /**
     * @return null|StateReference
     */
    public function getState();

    /**
     * @return null|string
     */
    public function getShipmentState();

    /**
     * @return null|string
     */
    public function getPaymentState();

    /**
     * @return null|ShippingInfo
     */
    public function getShippingInfo();

    /**
     * @return null|SyncInfoCollection
     */
    public function getSyncInfo();

    /**
     * @return null|ReturnInfoCollection
     */
    public function getReturnInfo();

    /**
     * @return null|DiscountCodeInfoCollection
     */
    public function getDiscountCodes();

    /**
     * @return null|int
     */
    public function getLastMessageSequenceNumber();

    /**
     * @return null|CartReference
     */
    public function getCart();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @return null|PaymentInfo
     */
    public function getPaymentInfo();

    /**
     * @return null|string
     */
    public function getLocale();

    /**
     * @return null|string
     */
    public function getInventoryMode();

    /**
     * @return null|string
     */
    public function getOrigin();

    /**
     * @return null|string
     */
    public function getTaxCalculationMode();

    /**
     * @return null|ShippingRateInput
     */
    public function getShippingRateInput();

    /**
     * @return null|AddressCollection
     */
    public function getItemShippingAddresses();

    /**
     * @return null|CartDiscountReferenceCollection
     */
    public function getRefusedGifts();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setCompletedAt(?DateTimeImmutable $completedAt): void;

    public function setOrderNumber(?string $orderNumber): void;

    public function setCustomerId(?string $customerId): void;

    public function setCustomerEmail(?string $customerEmail): void;

    public function setAnonymousId(?string $anonymousId): void;

    public function setStore(?StoreKeyReference $store): void;

    public function setLineItems(?LineItemCollection $lineItems): void;

    public function setCustomLineItems(?CustomLineItemCollection $customLineItems): void;

    public function setTotalPrice(?TypedMoney $totalPrice): void;

    public function setTaxedPrice(?TaxedPrice $taxedPrice): void;

    public function setShippingAddress(?Address $shippingAddress): void;

    public function setBillingAddress(?Address $billingAddress): void;

    public function setTaxMode(?string $taxMode): void;

    public function setTaxRoundingMode(?string $taxRoundingMode): void;

    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;

    public function setCountry(?string $country): void;

    public function setOrderState(?string $orderState): void;

    public function setState(?StateReference $state): void;

    public function setShipmentState(?string $shipmentState): void;

    public function setPaymentState(?string $paymentState): void;

    public function setShippingInfo(?ShippingInfo $shippingInfo): void;

    public function setSyncInfo(?SyncInfoCollection $syncInfo): void;

    public function setReturnInfo(?ReturnInfoCollection $returnInfo): void;

    public function setDiscountCodes(?DiscountCodeInfoCollection $discountCodes): void;

    public function setLastMessageSequenceNumber(?int $lastMessageSequenceNumber): void;

    public function setCart(?CartReference $cart): void;

    public function setCustom(?CustomFields $custom): void;

    public function setPaymentInfo(?PaymentInfo $paymentInfo): void;

    public function setLocale(?string $locale): void;

    public function setInventoryMode(?string $inventoryMode): void;

    public function setOrigin(?string $origin): void;

    public function setTaxCalculationMode(?string $taxCalculationMode): void;

    public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void;

    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void;

    public function setRefusedGifts(?CartDiscountReferenceCollection $refusedGifts): void;
}
