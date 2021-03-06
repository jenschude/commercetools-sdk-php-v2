<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingMethodDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_LOCALIZED_DESCRIPTION = 'localizedDescription';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_ZONE_RATES = 'zoneRates';
    public const FIELD_IS_DEFAULT = 'isDefault';
    public const FIELD_PREDICATE = 'predicate';

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|string
     */
    public function getDescription();

    /**
     * @return null|LocalizedString
     */
    public function getLocalizedDescription();

    /**
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    /**
     * @return null|ZoneRateDraftCollection
     */
    public function getZoneRates();

    /**
     * <p>If <code>true</code> the shipping method will be the default one in a project.</p>
     *
     * @return null|bool
     */
    public function getIsDefault();

    /**
     * <p>A Cart predicate which can be used to more precisely select a shipping method for a cart.</p>
     *
     * @return null|string
     */
    public function getPredicate();

    public function setKey(?string $key): void;

    public function setName(?string $name): void;

    public function setDescription(?string $description): void;

    public function setLocalizedDescription(?LocalizedString $localizedDescription): void;

    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;

    public function setZoneRates(?ZoneRateDraftCollection $zoneRates): void;

    public function setIsDefault(?bool $isDefault): void;

    public function setPredicate(?string $predicate): void;
}
