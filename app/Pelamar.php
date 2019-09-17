<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Pelamar as Authenticatable;

class Pelamar extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    
    protected $table = 'pelamar';
    protected $fillable = [
        'name_lamar', 'email_lamar', 'pass_lamar',
    ];
    protected $hidden = [
        'password','remember_token'
    ];
    public function setPasswordAttribute($val){
        return $this->attribute['password'] = bcrypt($val);
    }
}
