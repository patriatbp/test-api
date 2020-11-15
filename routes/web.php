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

Route::get('/', function () {
    return view('items.index');
});

Route::get('/test/{angka}', function($angka){
    return view('test', ["angka" => $angka]);
});

Route::get('/halo/{nama}', function($nama){
    return "halo $nama";
});

Route::get('/form', 'RegisterController@form');

Route::get('/sapa', 'RegisterController@sapa');

Route::post('/sapa', 'RegisterController@sapa_post');

Route::get('/register', 'AuthController@register');

Route::post('/welcome', 'AuthController@welcome');

Route::get('/master', function(){
    return view('adminlte.master');
});

Route::get('/items/create', function() {
    return view('items.create');
});

Route::get('items/data-table', function() {
    return view('items.data-table');
});

Route::get('/posts', 'PostController@index');

Route::post('/posts', 'PostController@store');

Route::get('/posts/create', 'PostController@create');

Route::get('/posts/{posts_id}', 'PostController@show');

Route::get('/posts/{posts_id}/edit', 'PostController@edit');

Route::put('/posts/{posts_id}', 'PostController@update');

Route::delete('/posts/{posts_id}', 'PostController@destroy');