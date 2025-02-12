<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/', function () {
    return view('catalog.index');
});
Route::get('/', function () {
    return view('catalog.show');
});
Route::get('/', function () {
    return view('catalog.create');
});
Route::get('/', function () {
    return view('catalog.edit');
});
