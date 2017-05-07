<?php

    /**
     * Авторизация
     */
    Route::group(['middleware' => ['guest']], function () {
        Route::get('/', 'Auth\LoginController@loginForm');
        Route::post('/login', 'Auth\LoginController@login');
    });

    /**
     * Админ панель
     */
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/dashboard', 'DashboardController@index');
        Route::get('/logout', 'Auth\LoginController@logout');

        // web users
        Route::group(['middleware' => ['permission:users']], function () {
            Route::resource('users', 'UsersController');
        });

        //roles
        Route::group(['middleware' => ['permission:roles']], function () {
            Route::resource('roles', 'RolesController');
        });

        // permissions
        Route::group(['middleware' => ['permission:permissions']], function () {
            Route::resource('permissions', 'PermissionsController');
        });

        // vacansy
        Route::group(['middleware' => ['permission:vacancy']], function () {
            Route::resource('vacancy', 'VacancysController');
        });

        // resume
        Route::group(['middleware' => ['permission:resume']], function () {
            Route::resource('resumes', 'ResumesController');
        });

        Route::group(['middleware' => ['role:admin']], function () {

        });

    });
