<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'users';
    public $timestamps = true;
    /**DocumentCreate
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','password', 'phone_number','Role'
    ];
}

