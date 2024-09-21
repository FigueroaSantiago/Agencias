<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\MetodoPController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('viajes', ViajeController::class);
    Route::resource('metodo-ps', MetodoPController::class);
    Route::resource('reservas', ReservaController::class);
    Route::resource('roles', RoleController::class);
});

require __DIR__.'/auth.php';
