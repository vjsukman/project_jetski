<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/', [LoginController::class, 'signin']);
Route::get('/register', [RegisterController::class, 'signup']);
Route::post('/register', [RegisterController::class, 'store']);