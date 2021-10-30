<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdvtController;
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


//Route::get('/', [HomeController::class, 'index'])->name('home');
//Route::get('/edit', [HomeController::class, 'form'])->name('advts.create')->middleware('auth');
//Route::post('/edit', [HomeController::class, 'create'])->name('advts.create')->middleware('auth');
//
//Route::get('/{id}', [HomeController::class, 'advt'])->whereNumber('id');
//Route::get('/delete/{id}', [HomeController::class, 'delete'])->middleware('auth');
//Route::get('/edit/{id}', [HomeController::class, 'form'])->whereNumber('id')->middleware('auth');
//Route::post('/edit/{id}', [HomeController::class, 'edit'])->whereNumber('id')->middleware('auth');
//
//Route::post('login', [AuthController::class, 'login'])->middleware('guest');
//Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/', [AdvtController::class, 'index'])->name('home');
Route::get('/{id}', [AdvtController::class, 'advt'])->whereNumber('id')->name('advts.show');
Route::post('login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/edit/{id?}', [AdvtController::class, 'form'])->whereNumber('id')->name('advts.create');
Route::post('/edit/{id?}', [AdvtController::class, 'edit'])->whereNumber('id');
Route::get('/delete/{id}', [AdvtController::class, 'delete'])->name('advts.delete');
