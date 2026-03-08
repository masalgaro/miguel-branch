<?php

use Illuminate\Support\Facades\Route;

// Routes for class Phone

Route::get('/phones', 'App\Http\Controllers\PhoneController@index')->name('phone.index');

Route::get('/phones/create', 'App\Http\Controllers\PhoneController@create')->name('phone.create');

Route::post('/phones/save', 'App\Http\Controllers\PhoneController@save')->name('phone.save');

Route::get('/phones/{id}', 'App\Http\Controllers\PhoneController@show')->name('phone.show');

Route::delete('/phones/{id}','App\Http\Controllers\PhoneController@destroy')->name('phone.destroy');

Route::get('/phones/{id}/edit','App\Http\Controllers\PhoneController@edit')->name('phone.edit');

Route::put('/phones/{id}', 'App\Http\Controllers\PhoneController@update')->name('phone.update');

// Routes for class Office 

Route::get('/offices', 'App\Http\Controllers\OfficeController@index')->name('office.index');

Route::get('/offices/create', 'App\Http\Controllers\OfficeController@create')->name('office.create');

Route::post('/offices/save', 'App\Http\Controllers\OfficeController@save')->name('office.save');

Route::get('/offices/{id}','App\Http\Controllers\OfficeController@show')->name('office.show'); 

Route::delete('/offices/{id}','App\Http\Controllers\OfficeController@destroy')->name('office.destroy');

Route::get('/offices/{id}/edit','App\Http\Controllers\OfficeController@edit')->name('office.edit');

Route::put('/offices/{id}', 'App\Http\Controllers\OfficeController@update')->name('office.update');


