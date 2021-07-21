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


Route::get('/', 'PagesController@OddEven');
Route::get('/about', 'PagesController@about');
Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{student}', 'StudentsController@show');
Route::post('/students', 'StudentsController@store');

Route::get('/oddeven', 'PagesController@oddeven');
Route::get('/grade', 'PagesController@grade');
Route::get('/palindrome', 'PagesController@palindrome');
Route::get('/censored', 'PagesController@censored');
Route::get('/pingpongtuing', 'PagesController@pingpongtuing');
Route::get('/bubblesort', 'PagesController@bubblesort');
