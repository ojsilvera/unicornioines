<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class factor extends Model
{
    protected $table = 'factor';
    protected $fillable = ['descrpFactor', 'preguntaid'];
    protected $guarded = ['id'];


    public function fatcat(){
        return $this->hasMany('App\models\factcat');
    }

    public function preguntas(){
        return $this->belongsTo('App\models\pregunta');
    }
}
