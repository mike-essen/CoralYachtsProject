<?php

namespace loginportal;

use Illuminate\Database\Eloquent\Model;

class Importantdates extends Model
{
    protected $fillable = [
        'id',
        'title',
        'link',
        'pubdate',
        'category',
        'description',
    ];
    public $timestamps = false;
}
