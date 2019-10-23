<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyProductTypes extends ApiResource
{
    /**
     * @psalm-param scalar $importSinkKey
     *
     * @param null|mixed $importSinkKey
     */
    public function importSinkKeyWithImportSinkKeyValue($importSinkKey = null): ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKey
    {
        $args = $this->getArgs();
        if (!is_null($importSinkKey)) {
            $args['importSinkKey'] = $importSinkKey;
        }

        return new ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKey($this->getUri().'/importSinkKey={importSinkKey}', $args, $this->getClient());
    }
}