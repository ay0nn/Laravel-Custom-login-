<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/logi',function(){
    return view('login2');
});

Route::get('/regi',function(){
    return view('2register');
});

Route::get('/forgetpass',function(){
    return view('forgetpassword');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
