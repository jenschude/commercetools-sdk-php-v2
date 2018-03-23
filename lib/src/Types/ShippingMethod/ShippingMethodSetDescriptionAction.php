<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

interface ShippingMethodSetDescriptionAction extends ShippingMethodUpdateAction {
    const FIELD_DESCRIPTION = 'description';

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description);

}