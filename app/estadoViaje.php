<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class estadoViaje extends Model
{
    protected $table="estadoviaje";
    public $timestamps = false;

    protected $fillable = ['clave', 'nombre'];




}
