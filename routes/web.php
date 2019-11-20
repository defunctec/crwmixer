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

use App\Http\Controllers\UserController;

Auth::routes();

Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
    Route::get('signup', [UserController::class, 'signup'])->name('signup');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::post('/submit-order', 'AjaxController@index')->name('submit-order');