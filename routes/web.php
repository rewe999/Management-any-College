<?php

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

Route::get('/', function () {
    return redirect('peoples');
});

Route::get('aktualnosci', 'NewsController@index')->name('news');
Route::get('druki', 'FormController@index')->name('print');

//Auth::routes();

// Authentication Routes...
Route::group(['prefix'=>'admin'], function(){
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register')->middleware('auth');
    Route::post('register', 'Auth\RegisterController@register')->middleware('auth');

// Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
});

Route::group(['prefix'=>'peoples'], function(){
    Route::get('', 'PeopleController@index')->name('peoples.index');
    Route::get('/{id}', 'PeopleController@show')->name('peoples.show');
});



Route::get('/home', 'HomeController@index')->name('home');
