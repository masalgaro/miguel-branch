<?php

use Illuminate\Support\Facades\Route;

Route::get('savingsAccounts', 'App\Http\Controllers\SavingsAccountController@index')->name('savingsAccounts.index');
Route::get('savingsAccounts/create', 'App\Http\Controllers\SavingsAccountController@create')->name('savingsAccounts.create');
Route::post('savingsAccounts', 'App\Http\Controllers\SavingsAccountController@save')->name('savingsAccounts.save');
Route::get('savingsAccounts/{id}', 'App\Http\Controllers\SavingsAccountController@show')->name('savingsAccounts.show');
Route::delete('savingsAccounts/{id}', 'App\Http\Controllers\SavingsAccountController@destroy')->name('savingsAccounts.destroy');

Route::get('users', 'App\Http\Controllers\UserController@index')->name('users.index');
Route::get('users/create', 'App\Http\Controllers\UserController@create')->name('users.create');
Route::post('users', 'App\Http\Controllers\UserController@save')->name('users.save');
Route::get('users/{id}', 'App\Http\Controllers\UserController@show')->name('users.show');
Route::delete('users/{id}', 'App\Http\Controllers\UserController@destroy')->name('users.destroy');
