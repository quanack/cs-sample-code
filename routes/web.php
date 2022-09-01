<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
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

Route::get('/', [MainController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::post('addbookmark', [MainController::class, 'addBookmark']);
});

Route::prefix('user')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('signup', 'signup');
        Route::post('register', 'register');
        Route::get('/logout', 'logout');
        Route::get('/login', 'login');
        Route::post('/login', 'loginPost');
    });
});
