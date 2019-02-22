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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('index',function (){
   return view('pages.mainpage');
});
Route::get('addinformation',function (){
    return view('pages.addperson');
});
Route::get('update',function (){
    return view('pages.update');
});
Route::get('/master', function (){
    return view('layouts.master');
});
Route::get('/createperson', function (){
    return view('pages.create');
});
Route::get('/createroom', function (){
    return view('pages.createroom');
});
Route::resource('people', 'PersonController');
Route::resource('room', 'RoomController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
