<?php

namespace Dropsolid\UnomiSdkPhp\Serializer;

use Dropsolid\UnomiSdkPhp\Serializer\FieldDescription;
use Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\FieldDescriptionDenormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Class SerializerFactory
 *
 * @package Dropsolid\UnomiSdkPhp\Serializer
 */
class SerializerFactory
{
    /**
     * @return Serializer
     */
    public static function create()
    {
        $fieldDescriptionDenormalizer = new FieldDescriptionDenormalizer(
            [
                // Segment
                new FieldDescription\Model\Segment\SegmentFieldDescription(),
                new FieldDescription\Model\Segment\SegmentListViewFieldDescription(),
                new FieldDescription\Model\Rules\RulesListViewFieldDescription(),
                new FieldDescription\Model\Rules\RulesStatisticsViewFieldDescription(),
                new FieldDescription\Model\Profile\ProfileSearchFieldDescription(),
                new FieldDescription\Model\Events\EventsSearchFieldDescription(),
            ]
        );

        $normalizers = [
            new DateTimeNormalizer(),
            new ParseDataDenormalizer(),
            $fieldDescriptionDenormalizer,
            new ArrayDenormalizer(),
        ];
        $encoders = [
            new JsonEncoder(),
        ];

        return new Serializer($normalizers, $encoders);
    }
}
