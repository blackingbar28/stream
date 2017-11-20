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

Route::auth();

Route::group(['middleware' => 'auth:web'], function() {
    Route::get('/admin', 'DashboardController@index')->name('admin');
    Route::resource('/admin/league', 'LeagueController');
    Route::resource('/admin/match', 'MatchController');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/matchs', 'SiteController@match');