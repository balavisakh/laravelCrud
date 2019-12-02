<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class userProfileModel extends Model
{
    protected $table = 'users_profile';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $fillable = ['id','name','user_age','user_email','user_details','created_at','updated_at','created_by','updated_by'];
}
