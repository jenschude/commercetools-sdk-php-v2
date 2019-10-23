<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class TaxCategoryAddTaxRateActionModel extends JsonObjectModel implements TaxCategoryAddTaxRateAction
{
    const DISCRIMINATOR_VALUE = 'addTaxRate';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?TaxRateDraft
     */
    protected $taxRate;

    public function __construct(
        string $action = null,
        TaxRateDraft $taxRate = null
    ) {
        $this->action = $action;
        $this->taxRate = $taxRate;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TaxCategoryUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|TaxRateDraft
     */
    public function getTaxRate()
    {
        if (is_null($this->taxRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TaxCategoryAddTaxRateAction::FIELD_TAX_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->taxRate = TaxRateDraftModel::of($data);
        }

        return $this->taxRate;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setTaxRate(?TaxRateDraft $taxRate): void
    {
        $this->taxRate = $taxRate;
    }
}