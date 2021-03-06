<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Message\UserProvidedIdentifiers;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SubscriptionDelivery extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'notificationType';
    public const FIELD_PROJECT_KEY = 'projectKey';
    public const FIELD_NOTIFICATION_TYPE = 'notificationType';
    public const FIELD_RESOURCE = 'resource';
    public const FIELD_RESOURCE_USER_PROVIDED_IDENTIFIERS = 'resourceUserProvidedIdentifiers';

    /**
     * @return null|string
     */
    public function getProjectKey();

    /**
     * @return null|string
     */
    public function getNotificationType();

    /**
     * @return null|Reference
     */
    public function getResource();

    /**
     * @return null|UserProvidedIdentifiers
     */
    public function getResourceUserProvidedIdentifiers();

    public function setProjectKey(?string $projectKey): void;

    public function setResource(?Reference $resource): void;

    public function setResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers): void;
}
