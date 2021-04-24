<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ocupacion extends Model
{
    protected $table="ocupacion";
    public $timestamps = false;

    protected $fillable = ['nombre'];
}
