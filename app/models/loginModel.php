<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class loginModel extends Model
{
    protected $table = 'login_models';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $fillable = ['id','user_email','user_password','created_at','updated_at','created_by','updated_by'];
}
