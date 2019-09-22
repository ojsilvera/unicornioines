<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class inst extends Model
{
    protected $table = 'institucion';
    protected $fillable = ['nombreInstitucion', 'poblacionTotal', 'muestra'];
    protected $guarded = ['id'];
}
