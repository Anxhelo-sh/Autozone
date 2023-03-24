<?php

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

Route::get('/', function () {
    return view('home');
});

Route::middleware([AdminMiddleware::class])->group(function () {
    // Admin-only routes
});

Route::middleware([UserMiddleware::class])->group(function () {
    // User-only routes
});

Route::middleware([GuestMiddleware::class])->group(function () {
    // Guest-only routes
});

