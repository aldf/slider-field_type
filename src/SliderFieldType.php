<?php namespace Streams\Addon\FieldType\Slider;

use Streams\Core\Addon\FieldTypeAbstract;

class SliderFieldType extends FieldTypeAbstract
{
    /**
     * The database column type this field type uses.
     *
     * @var string
     */
    public $columnType = 'slider';
}