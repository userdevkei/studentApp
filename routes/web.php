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

Route::get('/home', 'HomeController@index')->name('home');

Route::any('/intakeIndex', 'Applicationmodule@intakeIndex')->name('intakeIndex');
Route::any('/coursesIndex', 'Applicationmodule@coursesIndex')->name('coursesIndex');
Route::any('/studylevelIndex', 'Applicationmodule@studylevelIndex')->name('studylevelIndex');
Route::any('/attedanceIndex', 'Applicationmodule@attedanceIndex')->name('attedanceIndex');
Route::any('/intakeCreate', 'Applicationmodule@intakeCreate')->name('intakeCreate');
