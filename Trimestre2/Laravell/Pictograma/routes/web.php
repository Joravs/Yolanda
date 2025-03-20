<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\AgendaController;


Route::get('/', [ImagenesController::class, 'getContent']);
Route::get('/catalog', [ImagenesController::class, 'getContent']);
Route::get('/agenda/add', [AgendaController::class, 'getAdd'])->name('agenda.add');
Route::post('/agenda/add', [AgendaController::class, 'postAdd']);
Route::get('/agenda/buscar', [AgendaController::class, 'getBuscar']);
Route::post('/agenda/buscar', [AgendaController::class, 'postMostrar']);