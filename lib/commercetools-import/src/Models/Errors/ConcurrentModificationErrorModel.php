<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ConcurrentModificationErrorModel extends JsonObjectModel implements ConcurrentModificationError
{
    const DISCRIMINATOR_VALUE = 'ConcurrentModification';

    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?JsonObject
     */
    protected $conflictedResource;

    /**
     * @var ?int
     */
    protected $specifiedVersion;

    /**
     * @var ?int
     */
    protected $currentVersion;

    public function __construct(
        string $code = null,
        string $message = null,
        JsonObject $conflictedResource = null,
        int $specifiedVersion = null,
        int $currentVersion = null
    ) {
        $this->code = $code;
        $this->message = $message;
        $this->conflictedResource = $conflictedResource;
        $this->specifiedVersion = $specifiedVersion;
        $this->currentVersion = $currentVersion;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * @return null|JsonObject
     */
    public function getConflictedResource()
    {
        if (is_null($this->conflictedResource)) {
            /** @psalm-var ?stdClass $data */
            $data = $this->raw(ConcurrentModificationError::FIELD_CONFLICTED_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $this->conflictedResource = JsonObjectModel::of($data);
        }

        return $this->conflictedResource;
    }

    /**
     * @return null|int
     */
    public function getSpecifiedVersion()
    {
        if (is_null($this->specifiedVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ConcurrentModificationError::FIELD_SPECIFIED_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->specifiedVersion = (int) $data;
        }

        return $this->specifiedVersion;
    }

    /**
     * @return null|int
     */
    public function getCurrentVersion()
    {
        if (is_null($this->currentVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ConcurrentModificationError::FIELD_CURRENT_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->currentVersion = (int) $data;
        }

        return $this->currentVersion;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setConflictedResource(?JsonObject $conflictedResource): void
    {
        $this->conflictedResource = $conflictedResource;
    }

    public function setSpecifiedVersion(?int $specifiedVersion): void
    {
        $this->specifiedVersion = $specifiedVersion;
    }

    public function setCurrentVersion(?int $currentVersion): void
    {
        $this->currentVersion = $currentVersion;
    }
}
