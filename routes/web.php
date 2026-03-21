<?php

use Illuminate\Support\Facades\Route;

Route::get('/' , 'App\Http\Controllers\HomeController@index')->name('home.index');

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

// Routes for class InvoiceLine

Route::get('/invoiceLine', 'App\Http\Controllers\InvoiceLineController@index')->name('invoiceLine.index');
Route::get('/invoiceLine/create', 'App\Http\Controllers\InvoiceLineController@create')->name('invoiceLine.create');
Route::post('/invoiceLine/save', 'App\Http\Controllers\InvoiceLineController@save')->name('invoiceLine.save');
Route::get('/invoiceLine/{id}', 'App\Http\Controllers\InvoiceLineController@show')->name('invoiceLine.show');
Route::delete('/invoiceLine/{id}', 'App\Http\Controllers\InvoiceLineController@destroy')->name('invoiceLine.destroy');
Route::get('/invoiceLine/{id}/edit', 'App\Http\Controllers\InvoiceLineController@edit')->name('invoiceLine.edit');
Route::put('/invoiceLine/{id}', 'App\Http\Controllers\InvoiceLineController@update')->name('invoiceLine.update');

// Routes for savingsAccount class

Route::get('/savingsAccount', 'App\Http\Controllers\SavingsAccountController@index')->name('savingsAccount.index');
Route::get('/savingsAccount/create', 'App\Http\Controllers\SavingsAccountController@create')->name('savingsAccount.create');
Route::post('/savingsAccount', 'App\Http\Controllers\SavingsAccountController@save')->name('savingsAccount.save');
Route::get('/savingsAccount/{id}', 'App\Http\Controllers\SavingsAccountController@show')->name('savingsAccount.show');
Route::delete('/savingsAccount/{id}', 'App\Http\Controllers\SavingsAccountController@destroy')->name('savingsAccount.destroy');
Route::get('/savingsAccount/{id}/edit' , 'App\Http\Controllers\SavingsAccountController@edit' )->name('savingsAccount.edit');
Route::put('/savingsAccount/{id}' , 'App\Http\Controllers\SavingsAccountController@update' )->name('savingsAccount.update');

// Routes for user Class

<<<<<<< HEAD
Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user.index');
Route::get('/user/create', 'App\Http\Controllers\UserController@create')->name('user.create');
Route::post('/user', 'App\Http\Controllers\UserController@save')->name('user.save');
Route::get('/user/{id}', 'App\Http\Controllers\UserController@show')->name('user.show');
Route::delete('/user/{id}', 'App\Http\Controllers\UserController@destroy')->name('user.destroy');
Route::get('/user/{id}/edit', 'App\Http\Controllers\UserController@edit')->name('user.edit');
Route::put('/user/{id}', 'App\Http\Controllers\UserController@update')->name('user.update');
=======
Route::get('users', 'App\Http\Controllers\UserController@index')->name('users.index');
Route::get('users/create', 'App\Http\Controllers\UserController@create')->name('users.create');
Route::post('users', 'App\Http\Controllers\UserController@save')->name('users.save');
Route::get('users/{id}', 'App\Http\Controllers\UserController@show')->name('users.show');
Route::delete('users/{id}', 'App\Http\Controllers\UserController@destroy')->name('users.destroy');


>>>>>>> b3622da7d4559dcf5008f17baf8850ccfe5b81f1
