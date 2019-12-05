<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class cabeceraencuesta extends Model
{
    protected $table = 'cabencuestadiligenciada';
    protected $fillable = ['descrpEncuesta', 'fchEncuesta', 'dtoGnelid'];
    protected $guarded = ['id'];


    public function gatosgenerales(){
        return $this->belongsTo('App\models\datogenerales');
    }

    public function encuesta(){
        return $this->hasMany('App\models\encuesta');
    }

}
