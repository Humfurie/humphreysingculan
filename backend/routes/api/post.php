<?php

use App\Http\Controllers\frontend\Article\ArticlesController;
use Illuminate\Support\Facades\Route;


Route::get('/articles', [ArticlesController::class, 'index'])->middleware('guest');
Route::get('/{article:slug}', [ArticlesController::class, 'show'])->middleware('guest');

Route::controller(ArticlesController::class)
    ->middleware('auth:sanctum')
    ->prefix('article')
    ->group(function () {
        Route::prefix('{post:slug}')->group(function () {
            Route::post('', 'store');
            Route::get('/edit', 'edit');
            Route::put('/update', 'update');
            Route::delete('/delete', 'delete');
        });


    });
