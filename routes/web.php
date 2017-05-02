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

        Route::group(['middleware' => ['permission:users']], function () {
            Route::resource('users', 'UsersController');
        });

        Route::group(['middleware' => ['permission:roles']], function () {
            Route::resource('roles', 'RolesController');
        });

        Route::group(['middleware' => ['permission:permissions']], function () {
            Route::resource('permissions', 'PermissionsController');
        });

        Route::group(['middleware' => ['role:admin']], function () {
            Route::resource('whiteips', 'WhiteIpController');
            Route::get('user_logs', 'UserLogController@index')->name('user_log');
            Route::resource('clients', 'ClientsController');
            Route::resource('client_fields/groups', 'Client\ClientFieldGroupController');
            Route::resource('client_fields/types', 'Client\ClientFieldTypesController');
        });

        /**
         * Кредитные продукты
         */
        Route::group(['middleware' => ['permission:products']], function () {
            Route::resource('product', 'Products\ProductController');
        });

        // makeup
        Route::get('/application', function () {
            return view('makeup.application');
        });
        Route::get('/solutions', function () {
            return view('makeup.solutions');
        });
        Route::get('/services', function () {
            return view('makeup.services');
        });
        Route::get('/reports', function () {
            return view('makeup.reports');
        });
        Route::get('/application_create', function () {
            return view('makeup.create');
        });

    });
