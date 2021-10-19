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

Route::get('/', [HomeController::class, 'index']);
//Route::get('/edit', [HomeController::class, 'edit']);

Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);

Route::prefix('advts')->group(function () {
    Route::get('/', [AdvtController::class, 'index'])->middleware('auth');

    Route::match(['get', 'post'], '/create', [AdvtController::class, 'form'])->middleware('auth');
    Route::match(['get', 'post'], '/update/{id}', [AdvtController::class, 'form'])->middleware('auth');

    Route::get('/delete/{id}', [AdvtController::class, 'delete'])->middleware('auth');
});

//Route::get('/', function () {
//    return view('layout');
//});
