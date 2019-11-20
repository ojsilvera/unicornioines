<?php

namespace App\models;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;
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

    public function datogeneral(){
        return $this->belongsTo('App\models\datogenerales');
    }


    public function scopeBusqueda($q, $doc) {
        
            //  if($doc){

                $resul= $q->where('documento','=', "%".$doc."%")->count();
                if ($resul!=0){
                    echo('ya existe');
                }else{
                    echo('no estas en la bd');
                }
                              
            return $resul;
           

    


} 
}
