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
    return redirect()->route('login');
});

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@verify');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/advertise/details/{id}', 'HomeController@adddetails')->name('add.details');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile/add/delete/{id}', 'ProfileController@delete_view')->name('delete_view');
Route::post('/profile/add/delete/{id}', 'ProfileController@delete');
Route::get('/profile/adpost', 'ProfileController@adpost')->name('adpost');
Route::post('/profile/adpost', 'ProfileController@submitad');
Route::get('/profile/userinfo/{id}', 'ProfileController@information')->name('information');