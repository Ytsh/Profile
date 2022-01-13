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

Auth::routes();

Route::post('/upload', 'HomeController@uploadAvatar');

Route::get('/personal', 'PersonalController@index');
Route::post('/personal', 'PersonalController@store');
Route::put('/personal/update', 'PersonalController@update');

Route::get('/professional', 'ProfessionalController@index');
Route::post('/professional', 'ProfessionalController@store');
Route::put('/professional/update', 'ProfessionalController@update');

Route::get('/academic','AcademicController@index');
Route::post('/academic', 'AcademicController@store');
Route::put('/academic/update', 'AcademicController@update');









Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
