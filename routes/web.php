<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardSalesController;
use App\Http\Controllers\DashboardOmsetController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [LoginController::class, 'signin'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'signup'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', function()
{
    return view('dashboard.index');
})->middleware('auth');
Route::resource('dashboard/sales', DashboardSalesController::class)->middleware('auth');
Route::resource('dashboard/omset', DashboardOmsetController::class)->middleware('auth');