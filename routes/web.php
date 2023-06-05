<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\paymentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [userController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::post('/registrar', [userController::class, 'store'])->name('registrar');
Route::get('/positive', [paymentController::class, 'positive'])->name('postive')->middleware('auth');
Route::get('/negative', [paymentController::class, 'negative'])->name('negative')->middleware('auth');
Route::post('/balance', [userController::class, 'balance'])->name('balance');




Route::get('/chart', function () {
    return view('chart');
});