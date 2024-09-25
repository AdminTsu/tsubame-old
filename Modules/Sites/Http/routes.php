<?php

Route::group(['middleware' => ['web'], 'as' => 'sites.', 'namespace' => 'Modules\Sites\Http\Controllers'], function()
{
    Route::get('/', 'SitesController@index')->name('landing');

    Route::get('/overview', function(){
        return view('sites::overview');
    })->name('overview');

    Route::get('/about', function(){
        return view('sites::about');
    })->name('about');

    Route::get('/school-group', function(){
        return view('sites::schoolgroup');
    })->name('school-group');
    
    Route::get('/our-staff', function(){
        return view('sites::ourstaff');
    })->name('our-staff');
    
    Route::get('/program', function(){
        return view('sites::program');
    })->name('program');

    Route::get('/indonesia', function(){
        return view('sites::indonesia');
    })->name('indonesia');

    Route::group(['prefix'=>'id'], function(){
        Route::get('/', function(){
            App::setLocale('id');
            return view('sites::index');
        })->name('landing.id');
        Route::get('/overview', function(){
            App::setLocale('id');
            return view('sites::overview');
        })->name('overview.id');
        Route::get('/about', function(){
            App::setLocale('id');
            return view('sites::about');
        })->name('about.id');
        Route::get('/school-group', function(){
            App::setLocale('id');
            return view('sites::schoolgroup');
        })->name('school-group.id');
        Route::get('/our-staff', function(){
            App::setLocale('id');
            return view('sites::ourstaff');
        })->name('our-staff.id');
        Route::get('/program', function(){
            App::setLocale('id');
            return view('sites::program');
        })->name('program.id');
        Route::get('/indonesia', function(){
            App::setLocale('id');
            return view('sites::indonesia');
        })->name('indonesia.id');
    });

    Route::get('/logout', 'SitesController@logout')->name('logout');
    
});
