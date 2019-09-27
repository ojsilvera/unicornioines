<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $table = 'usuario';
    protected $fillable = ['documento','tpDocumentoid','rolid','primerNombre','segundoNombre','primerApellido','segundoApellido'];

    public function tpdocumento(){
        return $this->belongsTo('App\models\tpdoc');
    }

    public function rol(){
        return $this->belongsTo('App\models\rol');
    }

    public function datosaccesos(){
        return $this->belongsTo('App\models\seguridad\datoacceso');
    }

}