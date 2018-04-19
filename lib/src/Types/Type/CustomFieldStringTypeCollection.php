<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollection;


interface CustomFieldStringTypeCollection extends FieldTypeCollection
{
    /**
     * @param $index
     * @return CustomFieldStringType
     */
    public function at($index);

    /**
     * @return CustomFieldStringType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomFieldStringType
     */
    public function map($data, $index);
}