<?php

use \App\Http\Controllers\DaftarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\PasienController;

Route::middleware(Authenticate::class)->group(function () {
    Route::resource('pasien', PasienController::class);
        Route::resource('daftar', DaftarController::class);

});

Route::resource('pasien', PasienController::class);


// Route::resource('pasien', PasienController::class)->except(['show']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
