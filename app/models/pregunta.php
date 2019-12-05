<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class pregunta extends Model
{
    protected $table = 'pregunta';
    protected $fillable = ['descrpPregunta'];
    protected $guarded = ['id'];


    public function prresp(){
        return $this->hasMany('App\models\prresp');
    }


    public function factor(){
        return $this->hasMany('App\models\factor');
    }

}
