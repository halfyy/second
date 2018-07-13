<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Notifiable;

class UserRequest extends Model
{   
    protected $fillable = [
        'objective', 'adress','descripton', 'timee',
    ];
}
