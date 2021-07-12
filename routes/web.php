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

Route::get('/admin/home', function () {
    return view('admin.dashboard');
});

Route::get('/', function () {
    return redirect('pracownicy');
});

Route::middleware(['auth'])->group(function (){
    Route::get('/home', function (){
        return view('admin.dashboard');
    })->name('home');

    Route::delete('zalacznik/usun/{id}', 'AttachmentController@destroy')->name('attachment.destroy');

    Route::get('aktualnosci/dodaj', 'NewsController@create')->name('news.add');
    Route::post('aktualnosci/dodaj', 'NewsController@store')->name('news.store');
    Route::get('aktualnosci/edit', 'NewsController@show')->name('news.show');
    Route::get('aktualnosci/edit', 'NewsController@showNews')->name('news.edit');
    Route::get('aktualnosci/edit/{id}', 'NewsController@edit')->name('news.edit.id');
    Route::put('aktualnosci/aktualizuj/{id}', 'NewsController@update')->name('news.update');
    Route::delete('aktualnosci/usun/{id}', 'NewsController@destroy')->name('news.destroy');


    Route::get('druki/dodaj', 'FormController@create')->name('form.add');
    Route::post('druki/dodaj', 'FormController@store')->name('form.store');
    Route::put('druki/aktualizuj/{id}', 'FormController@update')->name('form.update');
    Route::get('druki/edit', 'FormController@showPrints')->name('form.edit');
    Route::get('druki/edit/{id}', 'FormController@edit')->name('form.edit.id');
    Route::delete('druki/usun/{id}', 'FormController@destroy')->name('form.destroy');


    Route::get('pracownicy/dodaj', 'PeopleController@create')->name('people.add');
    Route::get('pracownicy/edit', 'PeopleController@showPersons')->name('people.edit');
    Route::get('pracownicy/edit/{id}', 'PeopleController@edit')->name('people.edit.id');
    Route::post('pracownicy/dodaj', 'PeopleController@store')->name('people.store');
    Route::put('pracownicy/aktualizuj/{id}', 'PeopleController@update')->name('people.update');
    Route::delete('pracownicy/usun/{id}', 'PeopleController@destroy')->name('people.destroy');

    Route::get('pracownicy/{id}/dydaktyczna/index', 'DidacticController@index')->name('didactic.index');
    Route::get('pracownicy/{id}/dydaktyczna/create', 'DidacticController@create')->name('didactic.create');
    Route::post('pracownicy/{id}/dydaktyczna/store', 'DidacticController@store')->name('didactic.store');
    Route::get('pracownicy/{id}/dydaktyczna/edit', 'DidacticController@edit')->name('didactic.edit');
    Route::put('pracownicy/{id}/dydaktyczna/update', 'DidacticController@update')->name('didactic.update');
    Route::delete('pracownicy/{id}/dydaktyczna/delete', 'DidacticController@destroy')->name('didactic.destroy');

    Route::get('pracownicy/{id}/naukowa/index', 'ScientificController@index')->name('scientific.index');
    Route::get('pracownicy/{id}/naukowa/create', 'ScientificController@create')->name('scientific.create');
    Route::post('pracownicy/{id}/naukowa/store', 'ScientificController@store')->name('scientific.store');
    Route::get('pracownicy/{id}/naukowa/edit', 'ScientificController@edit')->name('scientific.edit');
    Route::put('pracownicy/{id}/naukowa/update', 'ScientificController@update')->name('scientific.update');
    Route::delete('pracownicy/{id}/naukowa/delete', 'ScientificController@destroy')->name('scientific.destroy');

    Route::get('pracownicy/{id}/organizacyjna/index', 'OrganizationalController@index')->name('organizational.index');
    Route::get('pracownicy/{id}/organizacyjna/create', 'OrganizationalController@create')->name('organizational.create');
    Route::post('pracownicy/{id}/organizacyjna/store', 'OrganizationalController@store')->name('organizational.store');
    Route::get('pracownicy/{id}/organizacyjna/edit', 'OrganizationalController@edit')->name('organizational.edit');
    Route::put('pracownicy/{id}/organizacyjna/update', 'OrganizationalController@update')->name('organizational.update');
    Route::delete('pracownicy/{id}/organizacyjna/delete', 'OrganizationalController@destroy')->name('organizational.destroy');
});

Route::get('pracownicy/{id}/dydaktyczna', 'DidacticController@show')->name('didactic.show');
Route::get('pracownicy/{id}/naukowa', 'ScientificController@show')->name('scientific.show');
Route::get('pracownicy/{id}/organizacyjna', 'OrganizationalController@show')->name('organizational.show');

Route::get('aktualnosci', 'NewsController@index')->name('news');
Route::get('aktualnosci/{id}', 'NewsController@show')->name('news.show');
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

Route::group(['prefix'=>'pracownicy'], function(){
    Route::get('', 'PeopleController@index')->name('peoples.index');
    Route::get('/{id}', 'PeopleController@show')->name('peoples.show');
});

