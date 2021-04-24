<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfil extends Model
{
    protected $table="perfil";
    public $timestamps = false;
    protected $fillable = ['clave', 'nombre'];
}
