<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group( ['middleware' => 'auth:api'], function() {

    // Account
    Route::get('account', 'AccountController@index');
    Route::patch('account/{id}', 'AccountController@update');

    // Users
    Route::get('users', 'UsersController@index');
    Route::get('users/create', 'UsersController@create');
    Route::post('users', 'UsersController@store');
    Route::get('users/{id}', 'UsersController@show');
    Route::get('users/{id}/edit', 'UsersController@edit');
    Route::put('users/{id}', 'UsersController@update');
    Route::delete('users/{id}', 'UsersController@destroy');

});



