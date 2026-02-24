<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Usuarios\UsuarioController;

/*
|--------------------------------------------------------------------------
| Página pública (Landing ATLETIX40)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});


/*
|--------------------------------------------------------------------------
| Panel (requiere login + correo verificado)
|--------------------------------------------------------------------------
*/

Route::get('/home', [HomeController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('home');

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios');

    Route::get('/usuarios/toggle/{id}', [UsuarioController::class, 'toggle']);

    Route::get('/usuarios/rol/{id}', [UsuarioController::class, 'rol']);
});

/*
|--------------------------------------------------------------------------
| Auth Laravel
|--------------------------------------------------------------------------
*/

Auth::routes(['verify' => true]);
