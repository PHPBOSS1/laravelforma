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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'	=>	'auth'], function(){

    Route::get('/settings', 'SettingsController@edit')->name("settings");

    Route::post('settings/store', "SettingsController@store");
    Route::get('/settings/store', function () {
        return redirect()-route('setting')->with('info', 'Данные сохранены');
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
