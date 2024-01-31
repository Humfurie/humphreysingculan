<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')
    ->controller(\App\Http\Controllers\Auth\RegistrationController::class)
    ->prefix('register')
    ->group(function () {
    Route::post('', 'register');
});

