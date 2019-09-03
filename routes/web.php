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


//PalmFarmers
Route::get('/palm-farmers', 'PalmFarmerController@index')->name('palmFarmerIndex');
Route::post('/palm-farmer', 'PalmFarmerController@store')->name('palmFarmerStore');
Route::get('/palm-farmer', 'PalmFarmerController@create')->name('palmFarmerCreate');
Route::get('/palm-farmer/{id}', 'PalmFarmerController@edit')->name('palmFarmerEdit');
Route::put('/palm-farmer/{id}', 'PalmFarmerController@update')->name('palmFarmerUpdate');
Route::delete('/palm-farmer/{id}', 'PalmFarmerControllerPalmFarmerController@destroy')->name('palmFarmerDelete');
