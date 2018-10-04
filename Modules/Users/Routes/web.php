<?php

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

use Modules\Users\Http\Controllers\Auth\ForgotPasswordController;
use Modules\Users\Http\Controllers\Auth\LoginController;
use Modules\Users\Http\Controllers\Auth\RegisterController;
use Modules\Users\Http\Controllers\UsersController;

Route::prefix('users')->group(function() {
    Route::get('login', 'Auth\LoginController@index')->name('login');
    Route::get('register', 'Auth\RegisterController@index')->name('register');
    Route::get('fogot-password', 'Auth\ForgotPasswordController@index')->name('fogot-password');

    Route::post('register_form', [RegisterController::class, 'register'])->name('register_form');
    Route::post('login_form', [LoginController::class, 'login'])->name('login_form');
});

Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');


Route::group(['middleware' => 'auth'], function() {
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('profile', [UsersController::class, 'profile'])->name('profile');

    Route::post('updateProfile', [UsersController::class, 'updateProfile'])->name('updateProfile');


    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});



