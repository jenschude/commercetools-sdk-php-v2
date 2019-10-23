<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Message\MessageConfigurationDraft;

interface ProjectChangeMessagesConfigurationAction extends ProjectUpdateAction
{
    const FIELD_MESSAGES_CONFIGURATION = 'messagesConfiguration';

    /**
     * @return null|MessageConfigurationDraft
     */
    public function getMessagesConfiguration();

    public function setMessagesConfiguration(?MessageConfigurationDraft $messagesConfiguration): void;
}