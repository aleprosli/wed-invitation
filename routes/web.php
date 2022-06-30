<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('main.index');
Route::get('/kehadiran', [App\Http\Controllers\AttendanceController::class, 'index'])->name('attendance.index');
Route::post('/kehadiran/simpan', [App\Http\Controllers\AttendanceController::class, 'store'])->name('attendance.store');
Route::get('/hadiah', [App\Http\Controllers\GiftController::class, 'index'])->name('gift.index');
Route::post('/hantar/hadiah', [App\Http\Controllers\GiftController::class, 'store'])->name('gift.store');
Route::get('/returnURL', [App\Http\Controllers\GiftController::class, 'returnURL'])->name('gift.returnURL');
Route::get('/callbackURL', [App\Http\Controllers\GiftController::class, 'callbackURL'])->name('gift.callbackURL');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
