<?php

use Illuminate\Support\Facades\Route;

// Routes for class Phone

Route::get('/phones', 'App\Http\Controllers\PhoneController@index')->name('phone.index');

Route::get('/phones/create', 'App\Http\Controllers\PhoneController@create')->name("phone.create");

Route::post('/phones/save', 'App\Http\Controllers\PhoneController@save')->name("phone.save");

Route::get('/phones/{id}', 'App\Http\Controllers\PhoneController@show')->name('phone.show');