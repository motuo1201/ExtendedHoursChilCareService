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
    return view('auth/login');
});

Auth::routes();
Route::group(['middleware' => ['auth']], function (){
    Route::post('/child/register','ChildController@register')->name('register-children');
    Route::get('/main', 'MainController@index')->name('main'); //メイン画面表示
    Route::get('/print','MainController@print')->name('print');//印刷画面表示
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});