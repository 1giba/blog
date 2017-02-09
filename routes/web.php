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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group([
        'middleware' => 'auth',
    ], function () {
        Route::get('/posts', 'PostController@index');
        Route::get('/posts/{id}', 'PostController@show')
            ->where('id', '[0-9]+');
        Route::get('/posts/create', 'PostController@create');
        Route::post('/posts', 'PostController@store');
        Route::get('/posts/{id}/edit', 'PostController@edit');
        Route::put('/posts/{id}', 'PostController@update')
            ->where('id', '[0-9]+');
        Route::delete('/posts/{id}', 'PostController@delete')
            ->where('id', '[0-9]+');
    }
);
