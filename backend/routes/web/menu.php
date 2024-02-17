<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')
    ->prefix('menu')
    ->as('menu.')
    ->group(function () {
        Route::get('', \App\Livewire\Menu\MenuIndex::class)->name('index');
        Route::get('create', \App\Livewire\Menu\CreateMenu::class)->name('create');
        Route::prefix('{menu:slug}')->group(function () {
//            Route::get('show','show')->name('show');
//            Route::get('edit','edit')->name('edit');
//            Route::put('update','update')->name('update');
//            Route::delete('delete', 'delete')->name('delete');
        });
    });
