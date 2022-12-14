<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;

Route::redirect('/','/formulario');
Route::get('/formulario',[FormularioController::class, 'index']);
Route::post('/formulario',[FormularioController::class, 'index']);


