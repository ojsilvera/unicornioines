<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    protected $table = 'rol';
    protected $fillable = ['descrpRol'];
    protected $guarded = ['id'];

    public function usuarios(){
        return $this->hasMany('App\models\usuario');
    }

    public function datogeneral(){
        return $this->hasMany('App\models\datogenerales');
    }
}
