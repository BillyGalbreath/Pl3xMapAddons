<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Users\UsersController;
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

Route::get('/', [WebController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [WebController::class, 'dashboard'])->name('dashboard');
    Route::get('/settings', [WebController::class, 'settings'])->name('settings');
});

// auth
Route::middleware('guest')->group(function () {
    Route::get('/auth/redirect', [AuthController::class, 'login'])->name('login');
    Route::get('/auth/callback', [AuthController::class, 'callback']);
});

Route::middleware('auth')->group(function () {
    Route::post('/auth/logout', [AuthController::class, 'logout'])->name('logout');
});

// users
Route::middleware('auth')->group(function () {
    Route::get('/users', [UsersController::class, 'index']);
    Route::get('/users/create', [UsersController::class, 'create']);
    Route::post('/users', [UsersController::class, 'post']);
});
