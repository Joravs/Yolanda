<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('login', function ($username) {
    return view('auth.login',array('username'=>$username));
});
Route::get('logout', function () {
    return 'Logout';
});
Route::get('catalog', function () {
    return view('catalog.index');
});
Route::get('catalog/show/{id}', function ($id) {
    return view('catalog.show',array('id'=>$id));
});
Route::get('catalog/create', function () {
    return view('catalog.create');
});
Route::get('catalog/edit/{id}', function ($id) {
    return view('catalog.edit',array('id'=>$id));
});
