<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Image extends JsonObject
{
    public const FIELD_URL = 'url';
    public const FIELD_DIMENSIONS = 'dimensions';
    public const FIELD_LABEL = 'label';

    /**
     * @return null|string
     */
    public function getUrl();

    /**
     * @return null|ImageDimensions
     */
    public function getDimensions();

    /**
     * @return null|string
     */
    public function getLabel();

    public function setUrl(?string $url): void;

    public function setDimensions(?ImageDimensions $dimensions): void;

    public function setLabel(?string $label): void;
}
