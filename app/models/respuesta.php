<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class respuesta extends Model
{
    protected $table = 'respuesta';
    protected $fillable = ['descrpRespuesta'];
    protected $guarded = ['id'];


    public function prresp(){
        return $this->hasMany('App\models\prresp');
    }
}
