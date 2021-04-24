<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    //inicio
    Route::get('/dash', 'adminController@index')->name('dash');

    //flotilla

    //viajes

    //empresa

    

    //sistema
        //catalogos
    Route::get('/sis/cat/edovia','EstadoViajeController@index')->name('edovia');
    Route::get('/sis/cat/ocupaciones','OcupacionesController@index')->name('ocupaciones');
    Route::get('/sis/cat/perfiles','PerfilesController@index')->name('perfiles');
    Route::get('/sis/cat/puestos','PuestosController@index')->name('puestos');
    
    //clientes
    

    //conductores


    //Vehiculos


    //promociones 



    //servicios




        //acceso usuarios empresa
    Route::get('/sis/us/alta', 'usersController@adminus')->name('sis.ac.us.alta');
        //acceso usuarios cliente
});
