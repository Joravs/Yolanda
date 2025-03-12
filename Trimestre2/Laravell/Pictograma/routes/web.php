<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagenesController;

Route::get('/', [HomeController::class, 'getIndex']);
Route::get('/catalog', [ImagenesController::class, 'getContent']);