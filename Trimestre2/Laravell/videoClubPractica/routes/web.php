<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Pantalla Principal";
});
Route::get('login', function () {
    return "Login usuario";
});
Route::get('logout', function () {
    return "Logout usuario";
});
Route::get('catalog', function () {
    return "Listado de Peliculas";
});
Route::get('catalog/show/{id}', function ($id) {
    return "Vista detalle pelicula {$id}";
});
Route::get('catalog/create', function () {
    return "Añadir pelicula";
});
Route::get('catalog/edit/{id}', function ($id) {
    return "Modificar pelicula {$id}";
});