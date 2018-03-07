<?php

use Illuminate\Support\Facades\Route;

/**
 * Auth Routes
 */
Route::get('login', [
    'as' => 'login',
    'uses' => 'Admin\LoginController@showLoginForm',
]);
Route::post('login', [
    'uses' => 'Admin\LoginController@login',
    'middleware' => 'admin'
]);
Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Admin\LoginController@logout'
]);

/**
 * Admin Routes
 */
Route::group([
    'prefix' => 'dashboard',
    'middleware' => ['auth', 'auth.admin'],
    'as' => 'dashboard'
], function () {
    Route::get('/', [
        'as' => '',
        'uses' => 'Admin\AdminController@index'
    ]);
});