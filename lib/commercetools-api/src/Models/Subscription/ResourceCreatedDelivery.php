<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ResourceCreatedDelivery extends SubscriptionDelivery
{
    public const FIELD_VERSION = 'version';
    public const FIELD_MODIFIED_AT = 'modifiedAt';

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getModifiedAt();

    public function setVersion(?int $version): void;

    public function setModifiedAt(?DateTimeImmutable $modifiedAt): void;
}
