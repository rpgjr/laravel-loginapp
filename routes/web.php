<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\PagesController;
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

Route::controller(PagesController::class)->group(function() {
    Route::get('/', 'getLoginPage')->name('login-page')->middleware('guest');
    Route::get('/register', 'getRegisterPage')->name('register-page')->middleware('guest');
    Route::get('/forgot-password', 'getForgotPasswordPage')->name('forgot-password-page')->middleware('guest');
    Route::get('/home', 'getDashboard')->name('dashboard')->middleware('auth');
});

Route::controller(AccountsController::class)->group(function() {
    Route::post('/register-account', 'registerAccount')->name('register-account');
    Route::post('/login-account', 'loginAccount')->name('login-account');
    Route::delete('/logout', 'logout')->name('logout');
});
