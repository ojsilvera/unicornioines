<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class factor extends Model
{
    protected $table = 'factor';
    protected $fillable = ['descrpFactor'];
    protected $guarded = ['id'];
}
