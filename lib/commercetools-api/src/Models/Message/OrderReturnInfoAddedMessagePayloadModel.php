<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\ReturnInfo;
use Commercetools\Api\Models\Order\ReturnInfoModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class OrderReturnInfoAddedMessagePayloadModel extends JsonObjectModel implements OrderReturnInfoAddedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'ReturnInfoAdded';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?ReturnInfo
     */
    protected $returnInfo;

    public function __construct(
        string $type = null,
        ReturnInfo $returnInfo = null
    ) {
        $this->type = $type;
        $this->returnInfo = $returnInfo;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|ReturnInfo
     */
    public function getReturnInfo()
    {
        if (is_null($this->returnInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderReturnInfoAddedMessagePayload::FIELD_RETURN_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->returnInfo = ReturnInfoModel::of($data);
        }

        return $this->returnInfo;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setReturnInfo(?ReturnInfo $returnInfo): void
    {
        $this->returnInfo = $returnInfo;
    }
}