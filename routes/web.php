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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/update-password/{email}', 'Auth\LoginController@update_password')->name('login.update_password');
Route::post('/update-password-email', 'Auth\LoginController@update_password_email')->name('login.update_password_email');

// Route::get('/home', 'HomeController@index')->name('home');
