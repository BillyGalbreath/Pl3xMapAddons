<?php

use App\Http\Controllers\AddonsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(WebController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/contact', 'contact')->name('contact');
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/settings', 'settings')->name('settings');
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/auth/redirect', 'redirect')->name('login');
        Route::get('/auth/callback', 'callback');
    });
    Route::middleware('auth')->group(function () {
        Route::post('/auth/logout', 'logout')->name('logout');
    });
});

Route::controller(AddonsController::class)->group(function () {
    Route::get('/addons', 'list')->name('addons');
    Route::middleware('auth')->group(function () {
        Route::get('/addons/{slug}', 'single')->name('addon');
    });
});
