<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class, 'getHome']);
Route::get('login', function ($username) {
    return view('auth.login',array('username'=>$username));
});
Route::get('logout', function () {
    return 'Logout';
});
Route::get('/catalog', [CatalogController::class, 'getIndex']);
Route::get('/catalog/show/{id}', [CatalogController::class, 'getShow']);
Route::get('/catalog/create', [CatalogController::class, 'getCreate']);
Route::get('/catalog/edit/{id}', [CatalogController::class, 'getEdit']);
Route::post('/catalog/editar', [CatalogController::class, 'postEdit']);