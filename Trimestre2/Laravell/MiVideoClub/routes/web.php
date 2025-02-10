<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return view('home', array('nombre' => 'Pedro'));
});

Route::get('pagina1', function () {
    return "Estas en la pagina 1";
});

Route::get('pagina2/{id}', function ($id){
    return 'Usuario '.$id;
});

Route::get('pagina3/{nombre?}', function ($nombre = "null"){
    return 'Hola, '.$nombre;
});