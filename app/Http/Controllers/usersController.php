<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    public function adminUs(){
        return view('backend.modulos.registro_us');
    }
}
