<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return "wawa";
});

$route_files = [
    $auth_files = glob(__DIR__ . '/api/Auth/*.php'),
    $frontend_files = glob(__DIR__ . '/api/frontend/*.php'),
];

foreach ($route_files as $files) {
    foreach ($files as $file) {
        require_once $file;
    }
}
