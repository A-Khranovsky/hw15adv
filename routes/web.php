<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvtController;
use App\Http\Controllers\HomeController;

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

Route::prefix('advts')->group(function () {
    Route::get('/', [AdvtController::class, 'index']);

    Route::match(['get', 'post'], '/create', [AdvtController::class, 'form']);
    Route::match(['get', 'post'], '/update/{id}', [AdvtController::class, 'form']);

    Route::get('/delete/{id}', [AdvtController::class, 'delete']);
});

//Route::get('/', function () {
//    return view('layout');
//});
