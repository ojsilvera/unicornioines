<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class prresp extends Model
{
    protected $table = 'prresp';
    protected $fillable = ['preguntaid', 'respuestaid'];
    protected $guarded = ['id'];


    public function pregutas(){
        return $this->belongsTo('App\models\pregunta');
    }


    public function respuestas(){
        return $this->belongsTo('App\models\respuesta');
    }

    public function prresp(){
        return $this->hasMany('App\models\cabeceraencuesta');
    }


}
