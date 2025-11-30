<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable=[
        'name',
        'email','username','password','confirm_password','date_of_birth'
    ];
    protected $primaryKey = 'u_id';
}
