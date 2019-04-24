<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\TimeTracking;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedSubject;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedUser;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedWorkType;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class TimeTrackingFieldDescriptionBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\TimeTracking
 */
abstract class TimeTrackingFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'user' => ['target_class' => LinkedUser::class],
            'work_type' => ['target_class' => LinkedWorkType::class],
            'started_on',
            'started_at' => ['target_class' => \DateTime::class],
            'ended_at' => ['target_class' => \DateTime::class],
            'duration',
            'description',
            'subject' => ['target_class' => LinkedSubject::class],
            'invoiceable',
        ];
    }
}