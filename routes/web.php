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
Route::get('/register', 'PublicController@showRegister');
Route::post('/register', 'PublicController@register');
Route::get('/logout', 'PublicController@logout');

//Client
Route::group(['prefix' => 'user', 'middleware' => 'user'], function () {
    Route::get('/', 'UserController@showUser');

    Route::group(['prefix' => 'presence'], function () {
        Route::get('/in', 'UserController@showPresenceIn');
        Route::post('/in', 'UserController@presenceIn');
        Route::get('/out', 'UserController@showPresenceOut');
        Route::post('/out', 'UserController@presenceOut');
        Route::get('/info', 'UserController@presenceInfo');
    });

    Route::get('/profile', 'UserController@showProfile');
    Route::post('/profile', 'UserController@profile');
    Route::get('profile/update', 'UserController@ShowUpdateProfile');
    Route::patch('profile/update', 'UserController@updateProfile');
    Route::get('/logout', 'PublicController@logout');
});

//Admin
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'AdminController@showDashboard');

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'AdminUsersController@showUsers');
        Route::get('/validated', 'AdminUsersController@showValidatedUsers');
        Route::get('/unvalidated', 'AdminUsersController@showUnvalidatedUsers');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('/validate/{id}', 'AdminUserController@validateUser');
        Route::get('/unvalidate/{id}', 'AdminUserController@unvalidateUser');
        Route::get('/update/{id}', 'AdminUserController@showUpdateUser');
        Route::patch('/update/{id}', 'AdminUserController@updateUser');
        Route::get('/delete/{id}', 'AdminUserController@deleteUser');
    });

    /// Bariki konflik dari Fathil

    Route::group(['prefix' => 'presence'], function () {
        Route::get('/', 'AdminPresenceController@showPresence');
        Route::get('/statistic', 'AdminPresenceController@showStatistic');
        Route::get('/day', 'AdminPresenceController@statisticDay');
        Route::get('/violations', 'AdminPresenceController@showViolations');
        // Route::get('/violations/access', 'AdminPresenceController@showAccess');
        Route::get('/violations/{id}', 'AdminPresenceController@violationAccess');
        Route::get('/violation-logs', 'AdminPresenceController@showViolationLogs');
    });

    Route::get('/logout', 'PublicController@logout');
});

//Host
Route::group(['prefix' => 'host', 'middleware' => 'host'], function () {
    Route::get('/', 'HostController@showHost');

    Route::group(['prefix' => 'presence'], function () {
        Route::get('/in', 'HostController@showPresenceIn');
        Route::get('/out', 'HostController@showPresenceOut');
    });

    Route::get('/logout', 'PublicController@logout');
});

// Auth::routes();
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/', 'Auth\LoginController@login');
// Route::get('/home', 'HomeController@index')->name('home');
