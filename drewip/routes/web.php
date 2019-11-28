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
Route::get('/', 'MemosController@index'); 

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');
Route::get('/topics/{topic}/memos/create', 'MemosController@create')->name('memos.create');
Route::post('/topics/{topic}/memos', 'MemosController@store')->name('memos.store');
Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'create','show']]);
    Route::resource('topics', 'TopicsController', ['only' => ['index', 'store', 'show','destroy']]);
    Route::resource('memos', 'MemosController', ['only' => ['index', 'destroy']]);
});
