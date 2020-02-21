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



//Public
Route::get('/', 'PublicController@showLogin');
Route::post('/', 'PublicController@login');
Route::get('/register', 'PublicController@showRegister');
Route::post('/register', 'PublicController@register');
Route::get('/logout', 'PublicController@logout');

//Client
Route::group(['prefix' => 'user'], function(){
    Route::get('/', 'UserController@showUser');

    Route::group(['prefix' => 'absence'], function(){
        Route::get('/in', 'UserController@absenceIn');
        Route::get('/out', 'UserController@absenceOut');
        Route::get('/info', 'UserController@absenceInfo');
    });

    Route::get('/logout', 'PublicController@logout');
});

//Admin
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'AdminController@showDashboard');

    Route::group(['prefix' => 'users'], function(){
        Route::get('/table', 'AdminController@showUsers');
        Route::get('/validated', 'AdminController@showValidatedUsers');
        Route::get('/unvalidated', 'AdminController@showUnvalidatedUsers');
    });

    Route::group(['prefix' => 'user'], function(){
        Route::get('/validate/{id}', 'AdminController@validateUser');
        Route::get('/unvalidate/{id}', 'AdminController@unvalidateUser');
        Route::get('/update/{id}', 'AdminController@updateUser');
        Route::post('/update/{id}', 'AdminController@updateUser');
        Route::get('/delete/{id}', 'AdminController@deleteUser');
    });

    Route::group(['prefix' => 'absence'], function(){
        Route::get('/', 'AdminController@showAbsence');
        Route::get('/statistic-day', 'AdminController@statisticDay');
        Route::get('/statistic-month', 'AdminController@statisticMonth');
        Route::get('/violations', 'AdminController@showViolations');
    });

    Route::get('/logout', 'PublicController@logout');
});

//Host
Route::group(['prefix' => 'host'], function(){
    Route::get('/', 'HostController@showHost');

    Route::group(['prefix' => 'absence'], function(){
        Route::get('/in', 'HostController@showAbsenceIn');
        Route::post('/in', 'HostController@absenceIn');
        Route::get('/out', 'HostController@showAbsenceOut');
        Route::post('/out', 'HostController@absenceOut');
    });

    Route::get('/logout', 'PublicController@logout');
});