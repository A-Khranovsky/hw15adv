<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvtController;
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

//Route::get('/', function () {
//    $ = App\User::paginate(15);
//
//    $users->withPath('custom/url');
//
//    //
//});

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'home']);
//Route::get('/edit', [HomeController::class, 'form']);
Route::post('/create', [HomeController::class, 'create']);

Route::get('/{id}', [HomeController::class, 'advt'])->whereNumber('id');
Route::get('/delete/{id}', [HomeController::class, 'delete']);
Route::get('/edit/{id}', [HomeController::class, 'form']);
Route::post('/edit/{id}', [HomeController::class, 'edit']);

Route::post('login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
