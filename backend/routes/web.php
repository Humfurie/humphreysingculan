<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/mail', [\App\Http\Controllers\frontend\Mail\MailController::class, "store"])->name('mail');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

$route_files = [
    $frontend_files = glob(__DIR__ . '/web/*.php'),
];

foreach ($route_files as $files) {
    foreach ($files as $file) {
        require_once $file;
    }
}
