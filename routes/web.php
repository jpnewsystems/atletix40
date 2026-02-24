<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/*
|--------------------------------------------------------------------------
| Auth Laravel
|--------------------------------------------------------------------------
*/

Auth::routes(['verify' => true]);
