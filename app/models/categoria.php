<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $table = 'categoria';
    protected $fillable = ['descrpCategoria'];
    protected $guarded = ['id'];
}
