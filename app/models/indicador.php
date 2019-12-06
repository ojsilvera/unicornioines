<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class indicador extends Model
{
    protected $table = 'indicador';
    protected $fillable = ['descrpIndicador', 'factorId'];
    protected $guarded = ['id'];


    public function factores(){
        return $this->belongsTo('App\models\factor');
    }

    
}
