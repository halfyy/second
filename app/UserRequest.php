<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRequest extends Model
{
    
    use Notifiable;
    
    protected $fillable = [
        'objective', 'descripton', 'smallDesc',
    ];

    protected $hidden = [
        'userid',
    ];
}
