<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRequest extends Model
{
    
    use Notifiable;
    
    protected $fillable = [
        'objective', 'place','descripton', 'time',
    ];

    protected $hidden = [
        'userid',
    ];
}
