<?php

Route::group(['middleware' => 'web','as' => 'accounts.', 'namespace' => 'Modules\Accounts\Http\Controllers'], function()
{
    Route::get('/accounts', 'AccountsController@index')->name('index');
    Route::get('/id/accounts', 'AccountsController@indexID')->name('index.id');

    Route::put('/accounts/update', 'AccountsController@update')->name('update');

});
