<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    public const USER = 1;

    public const TEAM = 0;

    use SoftDeletes;
    protected $table = "users";
    protected $guarded = [''];

//    protected $fillable = [
//        'name' ,
//        'email'  ,
//        'password'  ,
//        'phone' ,
//        'status' ,
//        'img'
//    ];

    public function team(){
        return $this->hasOne(Team::class , "id" , "command_id" );
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
    public function getAuthPassword(){
        return $this->password;
    }

}
