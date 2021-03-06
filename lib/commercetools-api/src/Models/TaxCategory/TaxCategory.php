<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface TaxCategory extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_RATES = 'rates';
    public const FIELD_KEY = 'key';

    /**
     * <p>The unique ID of the category.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>The current version of the category.</p>
     *
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
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|string
     */
    public function getDescription();

    /**
     * <p>The tax rates have unique IDs in the rates list</p>
     *
     * @return null|TaxRateCollection
     */
    public function getRates();

    /**
     * <p>User-specific unique identifier for the category.</p>
     *
     * @return null|string
     */
    public function getKey();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setName(?string $name): void;

    public function setDescription(?string $description): void;

    public function setRates(?TaxRateCollection $rates): void;

    public function setKey(?string $key): void;
}
