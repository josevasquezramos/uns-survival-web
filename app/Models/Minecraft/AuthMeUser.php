<?php

namespace App\Models\Minecraft;

use Illuminate\Foundation\Auth\User as Authenticatable;

class AuthMeUser extends Authenticatable
{
    protected $table = 'authme';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'username', 'realname', 'name', 'password', 'ip', 'lastlogin', 
        'x', 'y', 'z', 'world', 'regdate', 'regip', 'yaw', 'pitch', 
        'email', 'isLogged', 'hasSession', 'totp'
    ];

    protected $hidden = [
        'password', 'totp', 'remember_token',
    ];

    public function getNameAttribute($value)
    {
        return $value ?? $this->username;
    }
}