<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\frontend\Role\RolesController::class)
    ->middleware('auth:sanctum')
    ->prefix('role')
    ->group(function () {
        Route::get('', 'index');
        Route::post('', 'store');
        Route::prefix('{role:slug}')
            ->group(function () {
                Route::get('', 'show');
                Route::get('/edit', 'edit');
                Route::put('/update', 'update');
                Route::delete('/delete', 'delete');
            });
    });
