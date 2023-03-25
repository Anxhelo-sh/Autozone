<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\GuestMiddleware;
use App\Http\Middleware\UserMiddleware;
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

Auth::routes();

Route::get('/',[HomeController::class, 'index']);

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::resource('admin', AdminController::class)->only(['index']);
});

Route::middleware([UserMiddleware::class])->group(function () {
    // User-only routes
});

Route::middleware([GuestMiddleware::class])->group(function () {
    // Guest-only routes
});

