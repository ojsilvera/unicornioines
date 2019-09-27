<?php

namespace App\models\seguridad;

use Illuminate\Contracts\Auth  as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class datoacceso extends Model implements AuthenticatableContract 
{
    use Authenticatable;
    protected $remember_token = false;
    protected $table = 'datoacceso';
    protected $fillable = [ 'userName', 'password'];
    protected $guarded = ['id'];
}
