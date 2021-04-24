<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puesto extends Model
{
    protected $table="puesto";
    public $timestamps = false;
    protected $fillable = ['clave', 'nombre'];
}
