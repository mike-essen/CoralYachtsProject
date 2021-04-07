<?php

namespace loginportal;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'id',
        'title',
        'image_en',
        'url',
        'order',
        'width',
        'image_nl',
    ];
    public $timestamps = false;

    /**
     * @param $value
     * @return string
     */
    // Function to set the correct width of the banner images
    public static function defineCorrectWidth($value)
    {
        switch ($value) {
            case '1/3':
                return 'col-md-4';
            case '2/3' :
                return 'col-md-8';
            default:
                return 'col-md-12';
        }

    }
}
