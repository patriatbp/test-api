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

    // Route::post('register', 'RegisterController');
    // Route::post('login', 'LoginController');

Route::get('/movies', 'MovieController@index');

Route::post('/movies', 'MovieController@store');

Route::get('/movies/{movies_id}', 'MovieController@show');

Route::patch('/movies/{movies_id}', 'MovieController@update');

Route::delete('/movies/{movies_id}', 'MovieController@destroy');
