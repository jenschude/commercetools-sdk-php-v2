<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\PriceDraft;
use Commercetools\Api\Models\Common\PriceDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductChangePriceActionModel extends JsonObjectModel implements ProductChangePriceAction
{
    public const DISCRIMINATOR_VALUE = 'changePrice';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $priceId;

    /**
     * @var ?PriceDraft
     */
    protected $price;

    /**
     * @var ?bool
     */
    protected $staged;


    public function __construct(
        string $priceId = null,
        PriceDraft $price = null,
        bool $staged = null
    ) {
        $this->priceId = $priceId;
        $this->price = $price;
        $this->staged = $staged;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>ID of the <a href="#price">Price</a></p>
     *
     * @return null|string
     */
    public function getPriceId()
    {
        if (is_null($this->priceId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRICE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->priceId = (string) $data;
        }

        return $this->priceId;
    }

    /**
     * @return null|PriceDraft
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price = PriceDraftModel::of($data);
        }

        return $this->price;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }


    public function setPriceId(?string $priceId): void
    {
        $this->priceId = $priceId;
    }

    public function setPrice(?PriceDraft $price): void
    {
        $this->price = $price;
    }

    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}
