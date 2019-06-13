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
    return redirect('/login');
});

Auth::routes();
Route::group(['middleware' => ['auth']], function (){
    Route::get('/main'              ,'MainController@index'           )->name('main'); //メイン画面表示
    Route::post('/child/register'   ,'ChildController@register'       )->name('register-children');
    Route::post('/register-schedule','MainController@registerSchedule')->name('registerSchedule');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/print','PrintController@print')->name('print');
});
