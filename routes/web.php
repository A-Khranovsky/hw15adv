<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/edit', [HomeController::class, 'form'])->name('advts.create')->middleware('auth');
Route::post('/edit', [HomeController::class, 'create'])->name('advts.create')->middleware('auth');

Route::get('/{id}', [HomeController::class, 'advt'])->whereNumber('id');
Route::get('/delete/{id}', [HomeController::class, 'delete'])->middleware('auth');
Route::get('/edit/{id}', [HomeController::class, 'form'])->whereNumber('id')->middleware('auth');
Route::post('/edit/{id}', [HomeController::class, 'edit'])->whereNumber('id')->middleware('auth');

Route::post('login', [AuthController::class, 'login'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
