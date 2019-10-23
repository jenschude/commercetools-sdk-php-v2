<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use DateTimeImmutable;

interface ResourceUpdatedDelivery extends SubscriptionDelivery
{
    const FIELD_VERSION = 'version';
    const FIELD_OLD_VERSION = 'oldVersion';
    const FIELD_MODIFIED_AT = 'modifiedAt';

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|int
     */
    public function getOldVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getModifiedAt();

    public function setVersion(?int $version): void;

    public function setOldVersion(?int $oldVersion): void;

    public function setModifiedAt(?DateTimeImmutable $modifiedAt): void;
}