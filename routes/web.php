<?php

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

/* Definiendo un nueva ruta*/

Route::get('/miprimeraruta',function(){
	return 'Hola Mundo!!!';
});
/* Ruta con paramentros */ 

Route::get('/name/{name}',function($name){
	return 'Hola soy '.$name;
});

/* ruta con mas parametros y se le establece como reaccionar si no esta */

Route::get('/name/{name}/lastname/{lastname?}',function($name,$lastname='apellido'){
	return 'Hola Soy '.$name.' '.$lastname;
});


