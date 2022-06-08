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

Route::get('/','App\Http\Controllers\HomeController@HomePage');


Route::get('/CallGitHub', 'App\Http\Controllers\LoginRegistrationController@CallGitHub');


Route::get('/GitHubCallBack','App\Http\Controllers\LoginRegistrationController@GitHubCallBack');


Route::get('/dashboard','App\Http\Controllers\DashBoardController@dashBoardPage')->middleware('check');

Route::get('/Logout', 'App\Http\Controllers\LoginRegistrationController@Logout');

