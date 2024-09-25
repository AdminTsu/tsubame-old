<?php

Route::group(['middleware' => 'web', 'prefix' => 'panels', 'as' => 'panels.', 'namespace' => 'Modules\Panels\Http\Controllers'], function()
{
    Route::get('/', 'PanelsController@index')->name('index');
    Route::get('/users_in_company', 'PanelsController@users_in')->name('profiles_in');
    Route::get('/users_not_in_company', 'PanelsController@users_not_in')->name('profiles_not_in');

    
    Route::resource('users', 'UsersController');


});
