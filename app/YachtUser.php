<?php

namespace loginportal;

use Illuminate\Database\Eloquent\Model;

class YachtUser extends Model
{
    use Notifiable;

    protected $guard = 'yachtuser';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
