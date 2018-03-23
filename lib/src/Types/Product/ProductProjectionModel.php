<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\ResourceModel;

use Commercetools\Types\Category\CategoryReference;
use Commercetools\Types\State\StateReference;
use Commercetools\Types\Category\CategoryReferenceCollection;
use Commercetools\Types\TaxCategory\TaxCategoryReference;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\ProductType\ProductTypeReference;
use Commercetools\Types\Review\ReviewRatingStatistics;
use Commercetools\Types\Common\Resource;

class ProductProjectionModel extends ResourceModel implements ProductProjection {
    /**
     * @var string
     */
    protected $key;
    /**
     * @var ProductTypeReference
     */
    protected $productType;
    /**
     * @var LocalizedString
     */
    protected $name;
    /**
     * @var LocalizedString
     */
    protected $description;
    /**
     * @var LocalizedString
     */
    protected $slug;
    /**
     * @var CategoryReferenceCollection
     */
    protected $categories;
    /**
     * @var CategoryOrderHints
     */
    protected $categoryOrderHints;
    /**
     * @var LocalizedString
     */
    protected $metaTitle;
    /**
     * @var LocalizedString
     */
    protected $metaDescription;
    /**
     * @var LocalizedString
     */
    protected $metaKeywords;
    /**
     * @var SearchKeywords
     */
    protected $searchKeywords;
    /**
     * @var mixed
     */
    protected $hasStagedChanges;
    /**
     * @var mixed
     */
    protected $published;
    /**
     * @var ProductVariant
     */
    protected $masterVariant;
    /**
     * @var ProductVariantCollection
     */
    protected $variants;
    /**
     * @var TaxCategoryReference
     */
    protected $taxCategory;
    /**
     * @var StateReference
     */
    protected $state;
    /**
     * @var ReviewRatingStatistics
     */
    protected $reviewRatingStatistics;

    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(ProductProjection::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return ProductTypeReference
     */
    public function getProductType()
    {
        if (is_null($this->productType)) {
            $value = $this->raw(ProductProjection::FIELD_PRODUCT_TYPE);
            if (is_null($value)) {
                return $this->mapData(ProductTypeReference::class, null);
            }
            $value = $this->mapData(ProductTypeReference::class, $value);

            $this->productType = $value;
        }
        return $this->productType;
    }
    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(ProductProjection::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            $value = $this->raw(ProductProjection::FIELD_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return LocalizedString
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            $value = $this->raw(ProductProjection::FIELD_SLUG);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->slug = $value;
        }
        return $this->slug;
    }
    /**
     * @return CategoryReferenceCollection
     */
    public function getCategories()
    {
        if (is_null($this->categories)) {
            $value = $this->raw(ProductProjection::FIELD_CATEGORIES);
            if (is_null($value)) {
                return $this->mapData(CategoryReferenceCollection::class, null);
            }
            $value = $this->mapData(CategoryReferenceCollection::class, $value);
            $this->categories = $value;
        }
        return $this->categories;
    }
    /**
     * @return CategoryOrderHints
     */
    public function getCategoryOrderHints()
    {
        if (is_null($this->categoryOrderHints)) {
            $value = $this->raw(ProductProjection::FIELD_CATEGORY_ORDER_HINTS);
            if (is_null($value)) {
                return $this->mapData(CategoryOrderHints::class, null);
            }
            $value = $this->mapData(CategoryOrderHints::class, $value);

            $this->categoryOrderHints = $value;
        }
        return $this->categoryOrderHints;
    }
    /**
     * @return LocalizedString
     */
    public function getMetaTitle()
    {
        if (is_null($this->metaTitle)) {
            $value = $this->raw(ProductProjection::FIELD_META_TITLE);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->metaTitle = $value;
        }
        return $this->metaTitle;
    }
    /**
     * @return LocalizedString
     */
    public function getMetaDescription()
    {
        if (is_null($this->metaDescription)) {
            $value = $this->raw(ProductProjection::FIELD_META_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->metaDescription = $value;
        }
        return $this->metaDescription;
    }
    /**
     * @return LocalizedString
     */
    public function getMetaKeywords()
    {
        if (is_null($this->metaKeywords)) {
            $value = $this->raw(ProductProjection::FIELD_META_KEYWORDS);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->metaKeywords = $value;
        }
        return $this->metaKeywords;
    }
    /**
     * @return SearchKeywords
     */
    public function getSearchKeywords()
    {
        if (is_null($this->searchKeywords)) {
            $value = $this->raw(ProductProjection::FIELD_SEARCH_KEYWORDS);
            if (is_null($value)) {
                return $this->mapData(SearchKeywords::class, null);
            }
            $value = $this->mapData(SearchKeywords::class, $value);

            $this->searchKeywords = $value;
        }
        return $this->searchKeywords;
    }
    /**
     * @return mixed
     */
    public function getHasStagedChanges()
    {
        if (is_null($this->hasStagedChanges)) {
            $value = $this->raw(ProductProjection::FIELD_HAS_STAGED_CHANGES);
            $this->hasStagedChanges = $value;
        }
        return $this->hasStagedChanges;
    }
    /**
     * @return mixed
     */
    public function getPublished()
    {
        if (is_null($this->published)) {
            $value = $this->raw(ProductProjection::FIELD_PUBLISHED);
            $this->published = $value;
        }
        return $this->published;
    }
    /**
     * @return ProductVariant
     */
    public function getMasterVariant()
    {
        if (is_null($this->masterVariant)) {
            $value = $this->raw(ProductProjection::FIELD_MASTER_VARIANT);
            if (is_null($value)) {
                return $this->mapData(ProductVariant::class, null);
            }
            $value = $this->mapData(ProductVariant::class, $value);

            $this->masterVariant = $value;
        }
        return $this->masterVariant;
    }
    /**
     * @return ProductVariantCollection
     */
    public function getVariants()
    {
        if (is_null($this->variants)) {
            $value = $this->raw(ProductProjection::FIELD_VARIANTS);
            if (is_null($value)) {
                return $this->mapData(ProductVariantCollection::class, null);
            }
            $value = $this->mapData(ProductVariantCollection::class, $value);
            $this->variants = $value;
        }
        return $this->variants;
    }
    /**
     * @return TaxCategoryReference
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            $value = $this->raw(ProductProjection::FIELD_TAX_CATEGORY);
            if (is_null($value)) {
                return $this->mapData(TaxCategoryReference::class, null);
            }
            $value = $this->mapData(TaxCategoryReference::class, $value);

            $this->taxCategory = $value;
        }
        return $this->taxCategory;
    }
    /**
     * @return StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(ProductProjection::FIELD_STATE);
            if (is_null($value)) {
                return $this->mapData(StateReference::class, null);
            }
            $value = $this->mapData(StateReference::class, $value);

            $this->state = $value;
        }
        return $this->state;
    }
    /**
     * @return ReviewRatingStatistics
     */
    public function getReviewRatingStatistics()
    {
        if (is_null($this->reviewRatingStatistics)) {
            $value = $this->raw(ProductProjection::FIELD_REVIEW_RATING_STATISTICS);
            if (is_null($value)) {
                return $this->mapData(ReviewRatingStatistics::class, null);
            }
            $value = $this->mapData(ReviewRatingStatistics::class, $value);

            $this->reviewRatingStatistics = $value;
        }
        return $this->reviewRatingStatistics;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }
    /**
     * @param ProductTypeReference $productType
     * @return $this
     */
    public function setProductType(ProductTypeReference $productType)
    {
        $this->productType = $productType;

        return $this;
    }
    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }
    /**
     * @param LocalizedString $slug
     * @return $this
     */
    public function setSlug(LocalizedString $slug)
    {
        $this->slug = $slug;

        return $this;
    }
    /**
     * @param CategoryReferenceCollection $categories
     * @return $this
     */
    public function setCategories(CategoryReferenceCollection $categories)
    {
        $this->categories = $categories;

        return $this;
    }
    /**
     * @param CategoryOrderHints $categoryOrderHints
     * @return $this
     */
    public function setCategoryOrderHints(CategoryOrderHints $categoryOrderHints)
    {
        $this->categoryOrderHints = $categoryOrderHints;

        return $this;
    }
    /**
     * @param LocalizedString $metaTitle
     * @return $this
     */
    public function setMetaTitle(LocalizedString $metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }
    /**
     * @param LocalizedString $metaDescription
     * @return $this
     */
    public function setMetaDescription(LocalizedString $metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }
    /**
     * @param LocalizedString $metaKeywords
     * @return $this
     */
    public function setMetaKeywords(LocalizedString $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }
    /**
     * @param SearchKeywords $searchKeywords
     * @return $this
     */
    public function setSearchKeywords(SearchKeywords $searchKeywords)
    {
        $this->searchKeywords = $searchKeywords;

        return $this;
    }
    /**
     * @param $hasStagedChanges
     * @return $this
     */
    public function setHasStagedChanges($hasStagedChanges)
    {
        $this->hasStagedChanges = $hasStagedChanges;

        return $this;
    }
    /**
     * @param $published
     * @return $this
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }
    /**
     * @param ProductVariant $masterVariant
     * @return $this
     */
    public function setMasterVariant(ProductVariant $masterVariant)
    {
        $this->masterVariant = $masterVariant;

        return $this;
    }
    /**
     * @param ProductVariantCollection $variants
     * @return $this
     */
    public function setVariants(ProductVariantCollection $variants)
    {
        $this->variants = $variants;

        return $this;
    }
    /**
     * @param TaxCategoryReference $taxCategory
     * @return $this
     */
    public function setTaxCategory(TaxCategoryReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }
    /**
     * @param StateReference $state
     * @return $this
     */
    public function setState(StateReference $state)
    {
        $this->state = $state;

        return $this;
    }
    /**
     * @param ReviewRatingStatistics $reviewRatingStatistics
     * @return $this
     */
    public function setReviewRatingStatistics(ReviewRatingStatistics $reviewRatingStatistics)
    {
        $this->reviewRatingStatistics = $reviewRatingStatistics;

        return $this;
    }

}