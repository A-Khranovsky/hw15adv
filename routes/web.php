<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvtController;
use App\Http\Controllers\AuthController;

Route::get('/', [AdvtController::class, 'index'])->name('home');
Route::get('/{id}', [AdvtController::class, 'advt'])->whereNumber('id')->name('advts.show');
Route::post('login', [AuthController::class, 'login'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/edit/{advt?}', [AdvtController::class, 'form'])->name('advts.create');
    Route::post('/edit/{advt?}', [AdvtController::class, 'edit'])->whereNumber('advt');
    Route::get('/delete/{id}', [AdvtController::class, 'delete'])->name('advts.delete');
});
