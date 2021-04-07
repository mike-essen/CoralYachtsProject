<?php

namespace loginportal;

use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'url',
        'order',
        'category',
    ];
    public $timestamps = false;
}
