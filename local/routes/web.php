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

Route::view('index','index');
Route::view('contact','contact');

Route::namespace('Admin')->group(function () {

    Route::get('/login','loginController@getLogin');
    Route::get('/setlogin','loginController@setLogin');

    
});