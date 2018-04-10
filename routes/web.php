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

Route::get('login/facebook', 'Auth\LoginSocialiteController@redirectToProvider')->name('facebook.login');
Route::get('login/facebook/callback', 'Auth\LoginSocialiteController@handleProviderCallback')->name('facebook.callback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
