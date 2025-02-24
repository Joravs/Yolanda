<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

Route::get('/', function () {
    return view('home');
});
Route::get('login', function ($username) {
    return view('auth.login',array('username'=>$username));
});
Route::get('logout', function () {
    return 'Logout';
});
Route::get('catalog', [MoviesController::class, 'index'])->name('index');
Route::get('catalog/show/{id}', [MoviesController::class, 'show'])->name('show');
Route::get('catalog/create', [MoviesController::class, 'create'])->name('create');
Route::get('catalog/edit/{id}', [MoviesController::class, 'edit'])->name('edit');
