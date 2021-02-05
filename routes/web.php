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

Auth::routes();

//Route to return home/dashboard page
Route::get('/home', 'HomeController@index')->name('home');

//route to manage create, edit, list pages and delete and updating functionalities
Route::resource('task', 'TaskController')->middleware('auth');
