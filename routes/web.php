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

Route::get('/', "HomeController@getHome");
Route::get('chat/chat/{id}', "ChatController@getChat");
Route::post('chat/chat/{id}', "ChatController@getChat");
Route::get('chat/crear', "ChatController@getCrear");
Route::post('chat/crear', "ChatController@groupCreate");
