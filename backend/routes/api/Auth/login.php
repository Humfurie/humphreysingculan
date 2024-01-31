<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Auth\LoginController::class)
    ->middleware('guest')
    ->prefix('login')
    ->group(function () {
        Route::post('', 'login');

    });

Route::controller(\App\Http\Controllers\Auth\LoginController::class)
    ->middleware('auth:sanctum')
    ->prefix('logout')
    ->group(function () {
        Route::post('', 'logout');
    });
