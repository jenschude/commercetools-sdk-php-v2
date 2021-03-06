<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Location extends JsonObject
{
    public const FIELD_COUNTRY = 'country';
    public const FIELD_STATE = 'state';

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCountry();

    /**
     * @return null|string
     */
    public function getState();

    public function setCountry(?string $country): void;

    public function setState(?string $state): void;
}
