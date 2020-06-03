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
    // return view('portfolio.main');
    return view('index');
});

Route::get('/', function () {
    return redirect('/index');
});

Route::get('/cv', ['as' => 'cv', 'uses' =>  'MyController@getCv']);
Route::get('/gallery', ['as' => 'gallery', 'uses' =>  'MyController@getGallery']);

Route::get('/index', ['as' => 'index', 'uses' =>  'MyController@getIndex']);