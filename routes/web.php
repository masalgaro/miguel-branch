<?php

use Illuminate\Support\Facades\Route;

# Routes for class Phone

Route::get('/phones','App\Http\Controllers\PhoneController@index')->name("phone.index"); 