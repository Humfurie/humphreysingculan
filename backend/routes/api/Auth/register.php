<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')
    ->controller(\App\Http\Controllers\frontend\User\UsersRegistrationController::class)
    ->prefix('register')
    ->group(function () {
    Route::post('', 'register');
});

