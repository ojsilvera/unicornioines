<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class datogenerales extends Model
{
    protected $table = 'datogenerales';
    protected $fillable = ['edad','institucionid','generoid','rolid','cargo','dependencia','antinst','antcargo','facultad','departamento','vinculacion','horasemana','carrera','semestre','semestreing','ingreso'];
    protected $guarded = ['id'];

    public function usuario(){
        return $this->belongsTo('App\models\usuario');
    }

    public function institucionnes(){
        return $this->belongsTo('App\models\tpdoc');
    }

    public function roles(){
        return $this->belongsTo('App\models\rol');
    }

    public function generos(){
        return $this->belongsTo('App\models\genero');
    }

}


