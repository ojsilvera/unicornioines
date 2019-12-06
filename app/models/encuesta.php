<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class encuesta extends Model
{
    protected $table = 'cuerpoencuestadiligenciada';
    protected $fillable = ['cabEncuestaDilid', 'prrespid', 'prresp2id', 'prresp3id', 'prresp4id'];
    protected $guarded = ['id'];


    public function cabeceras(){
        return $this->belongsTo('App\models\cabeceraencuesta');
    }


    public function prresps(){
        return $this->belongsTo('App\models\prresp');
    }
}
