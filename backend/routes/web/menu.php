<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Backend\Menu\MenuController::class)
    ->middleware('auth:sanctum')
    ->prefix('menu')
    ->group(function () {
        Route::get('', 'index');
    });
