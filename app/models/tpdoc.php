<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class tpdoc extends Model
{
    protected $table = 'tp_documento';
    protected $fillable = ['descrpTpDocumento'];
    protected $guarded = ['id'];
}
