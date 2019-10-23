<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\JsonObject;

interface StoreDraft extends JsonObject
{
    const FIELD_KEY = 'key';
    const FIELD_NAME = 'name';

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    public function setKey(?string $key): void;

    public function setName(?LocalizedString $name): void;
}