<?php

use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;

Route::get('/prueba',[PruebaController::class, 'index']);