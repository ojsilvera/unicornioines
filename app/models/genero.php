<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
    protected $table = 'genero';
    protected $fillable = ['descrpGenero'];
    protected $guarded = ['id'];

    public function datogeneral(){
        return $this->hasMany('App\models\datogenerales');
    }
}
