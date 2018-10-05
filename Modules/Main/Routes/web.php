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

use Modules\Projects\Http\Controllers\ProjectsController;

Route::get('/', 'MainController@index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', [ProjectsController::class, 'index'])->name('home');
});