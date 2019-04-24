<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\TaxRate;

use Nascom\TeamleaderApiClient\Model\TaxRate\TaxRateListView;

/**
 * Class TaxRateListViewFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\TaxRate
 */
class TaxRateListViewFieldDescription extends TaxRateFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return TaxRateListView::class;
    }
}