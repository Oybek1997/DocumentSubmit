<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table='users';
    public $timestamps=false;
    protected $fillable = [
        'first_name', 'last_name','password', 'phone_number','Role'
    ];
}

