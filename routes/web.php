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
Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'UserController@showUser');

    Route::group(['prefix' => 'absence'], function () {
        Route::get('/in', 'UserController@absenceIn');
        Route::get('/out', 'UserController@absenceOut');
        Route::get('/info', 'UserController@absenceInfo');
    });

    Route::get('/logout', 'PublicController@logout');
});

//Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@showDashboard');

    Route::group(['prefix' => 'users'], function () {
        Route::get('/table', 'AdminUsersController@showUsers');
        Route::get('/validated', 'AdminUsersController@showValidatedUsers');
        Route::get('/unvalidated', 'AdminUsersController@showUnvalidatedUsers');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('/validate/{id}', 'AdminUserController@validateUser');
        Route::get('/unvalidate/{id}', 'AdminUserController@unvalidateUser');
        Route::get('/update/{id}', 'AdminUserController@updateUser');
        Route::post('/update/{id}', 'AdminUserController@updateUser');
        Route::get('/delete/{id}', 'AdminUserController@deleteUser');
    });

    /// Bariki konflik dari Fathil

    Route::group(['prefix' => 'absence'], function () {
        Route::get('/', 'AdminAbsenceController@showAbsence');
        Route::get('/statistic-day', 'AdminAbsenceController@statisticDay');
        Route::get('/statistic-month', 'AdminAbsenceController@statisticMonth');
        Route::get('/violations', 'AdminAbsenceController@showViolations');
    });

    Route::get('/logout', 'PublicController@logout');
});

//Host
Route::group(['prefix' => 'host'], function () {
    Route::get('/', 'HostController@showHost');

    Route::group(['prefix' => 'absence'], function () {
        Route::get('/in', 'HostController@showAbsenceIn');
        Route::post('/in', 'HostController@absenceIn');
        Route::get('/out', 'HostController@showAbsenceOut');
        Route::post('/out', 'HostController@absenceOut');
    });

    Route::get('/logout', 'PublicController@logout');
});
