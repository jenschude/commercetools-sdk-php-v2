<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Productvariants\ProductVariantImportCollection;

/**
 * @implements Builder<ProductVariantImportRequest>
 */
final class ProductVariantImportRequestBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?ProductVariantImportCollection
     */
    private $resources;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <p>The individual product variants to import.</p>.
     *
     * @return null|ProductVariantImportCollection
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResources(?ProductVariantImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }

    public function build(): ProductVariantImportRequest
    {
        return new ProductVariantImportRequestModel(
            $this->type,
            $this->resources
        );
    }

    public static function of(): ProductVariantImportRequestBuilder
    {
        return new self();
    }
}
