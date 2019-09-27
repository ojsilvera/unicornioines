<?php

namespace App\models\seguridad;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class datoacceso extends Authenticatable
{
    use Notifiable;
    protected $table = 'datoacceso';
    protected $fillable = ['userName','password','documento'];
    protected $guarded = ['id'];

    public function usuario(){
        return $this->belongsTo('App\models\usuario');
    }
}
