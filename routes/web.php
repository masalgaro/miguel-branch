<?php

use Illuminate\Support\Facades\Route;

// Routes for class Phone

Route::get('/phone', 'App\Http\Controllers\PhoneController@index')->name('phone.index');
Route::get('/phone/create', 'App\Http\Controllers\PhoneController@create')->name('phone.create');
Route::post('/phone/save', 'App\Http\Controllers\PhoneController@save')->name('phone.save');
Route::get('/phone/{id}', 'App\Http\Controllers\PhoneController@show')->name('phone.show');
Route::delete('/phone/{id}', 'App\Http\Controllers\PhoneController@destroy')->name('phone.destroy');
Route::get('/phone/{id}/edit', 'App\Http\Controllers\PhoneController@edit')->name('phone.edit');
Route::put('/phone/{id}', 'App\Http\Controllers\PhoneController@update')->name('phone.update');

// Routes for class Office

Route::get('/office', 'App\Http\Controllers\OfficeController@index')->name('office.index');
Route::get('/office/create', 'App\Http\Controllers\OfficeController@create')->name('office.create');
Route::post('/office/save', 'App\Http\Controllers\OfficeController@save')->name('office.save');
Route::get('/office/{id}', 'App\Http\Controllers\OfficeController@show')->name('office.show');
Route::delete('/office/{id}', 'App\Http\Controllers\OfficeController@destroy')->name('office.destroy');
Route::get('/office/{id}/edit', 'App\Http\Controllers\OfficeController@edit')->name('office.edit');
Route::put('/office/{id}', 'App\Http\Controllers\OfficeController@update')->name('office.update');
