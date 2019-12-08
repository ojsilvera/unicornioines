<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class encuesta extends Model
{
    protected $table = 'cuerpoencuestadiligenciada';
    protected $fillable = ['cabEncuestaDilid','prrespid'];
    protected $guarded = ['id'];


    public function cabeceras(){
        return $this->belongsTo('App\models\cabeceraencuesta');
    }


    public function prresps(){
        return $this->belongsTo('App\models\prresp');
    }

    public function scopeFiltroedad($query,$edad){
        if($name){
            return $query
        }
    }

  
}
