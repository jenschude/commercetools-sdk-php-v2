<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<CategorySlugChangedMessagePayload>
 */
final class CategorySlugChangedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $slug;

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
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        return $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug;
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
    public function withSlug(?LocalizedString $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSlugBuilder(?LocalizedStringBuilder $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    public function build(): CategorySlugChangedMessagePayload
    {
        return new CategorySlugChangedMessagePayloadModel(
            $this->type,
            ($this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug)
        );
    }

    public static function of(): CategorySlugChangedMessagePayloadBuilder
    {
        return new self();
    }
}