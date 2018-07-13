<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRequest extends Model
{
    protected $fillable = [
        'objective', 'descripton', 'smallDesc',
    ];

    protected $hidden = [
        'userid',
    ];
}
