<?php

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
Route::get('/palm-farmer-show/{id}', 'PalmFarmerController@show')->name('palmFarmerShow');
Route::put('/palm-farmer/{id}', 'PalmFarmerController@update')->name('palmFarmerUpdate');
Route::delete('/palm-farmer/{id}', 'PalmFarmerControllerPalmFarmerController@destroy')->name('palmFarmerDelete');

//Grounds
Route::get('/grounds', 'GroundController@index')->name('groundIndex');
Route::get('/ground', 'GroundController@create')->name('groundCreate');
Route::post('/ground', 'GroundController@store')->name('groundStore');

//Captures
Route::post('/capture', 'PalmCaptureController@store')->name('captureStore');
Route::get('/capture', 'PalmCaptureController@create')->name('captureCreate');

//Reports

Route::get('/capture-report', 'CaptureGroundController@index')->name('captureReport');
Route::get('/download-capture-report', 'DownloadCaptureReportController')->name('downloadCaptureReport');



