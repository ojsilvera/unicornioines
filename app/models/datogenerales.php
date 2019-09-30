<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class datogenerales extends Model
{
    protected $table = 'datogenerales';
    protected $fillable = ['fechaNacimiento','institucionid','generoid','rolid'];
    protected $guarded = ['id'];

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