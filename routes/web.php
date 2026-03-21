<?php

use Illuminate\Support\Facades\Route;

// User Routes 

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/phone', 'App\Http\Controllers\PhoneController@index')->name('phone.index');
Route::get('/phone/{id}', 'App\Http\Controllers\PhoneController@show')->name('phone.show');

Route::get('/office', 'App\Http\Controllers\OfficeController@index')->name('office.index');
Route::get('/office/{id}', 'App\Http\Controllers\OfficeController@show')->name('office.show');

Route::get('/invoice', 'App\Http\Controllers\InvoiceController@index')->name('invoice.index');
Route::get('/invoice/{id}', 'App\Http\Controllers\InvoiceController@show')->name('invoice.show');

Route::get('/invoiceLine', 'App\Http\Controllers\InvoiceLineController@index')->name('invoiceLine.index');
Route::get('/invoiceLine/{id}', 'App\Http\Controllers\InvoiceLineController@show')->name('invoiceLine.show');

// Admin Routes using MiddleWare

Route::middleware('admin')->group(function () {

    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name('admin.home.index');

    // Phone
    Route::get('admin/phone', 'App\Http\Controllers\AdminPhoneController@index')->name('admin.phone.index');
    Route::get('admin/phone/create', 'App\Http\Controllers\AdminPhoneController@create')->name('admin.phone.create');
    Route::post('admin/phone/save', 'App\Http\Controllers\AdminPhoneController@save')->name('admin.phone.save');
    Route::get('admin/phone/{id}', 'App\Http\Controllers\AdminPhoneController@show')->name('admin.phone.show');
    Route::delete('admin/phone/{id}', 'App\Http\Controllers\AdminPhoneController@destroy')->name('admin.phone.destroy');
    Route::get('admin/phone/{id}/edit', 'App\Http\Controllers\AdminPhoneController@edit')->name('admin.phone.edit');
    Route::put('admin/phone/{id}', 'App\Http\Controllers\AdminPhoneController@update')->name('admin.phone.update');

    // Office
    Route::get('admin/office', 'App\Http\Controllers\AdminOfficeController@index')->name('admin.office.index');
    Route::get('admin/office/create', 'App\Http\Controllers\AdminOfficeController@create')->name('admin.office.create');
    Route::post('admin/office/save', 'App\Http\Controllers\AdminOfficeController@save')->name('admin.office.save');
    Route::get('admin/office/{id}', 'App\Http\Controllers\AdminOfficeController@show')->name('admin.office.show');
    Route::delete('admin/office/{id}', 'App\Http\Controllers\AdminOfficeController@destroy')->name('admin.office.destroy');
    Route::get('admin/office/{id}/edit', 'App\Http\Controllers\AdminOfficeController@edit')->name('admin.office.edit');
    Route::put('admin/office/{id}', 'App\Http\Controllers\AdminOfficeController@update')->name('admin.office.update');

    // Invoice
    Route::get('admin/invoice', 'App\Http\Controllers\AdminInvoiceController@index')->name('admin.invoice.index');
    Route::get('admin/invoice/create', 'App\Http\Controllers\AdminInvoiceController@create')->name('admin.invoice.create');
    Route::post('admin/invoice/save', 'App\Http\Controllers\AdminInvoiceController@save')->name('admin.invoice.save');
    Route::get('admin/invoice/{id}', 'App\Http\Controllers\AdminInvoiceController@show')->name('admin.invoice.show');
    Route::get('admin/invoice/{id}/edit', 'App\Http\Controllers\AdminInvoiceController@edit')->name('admin.invoice.edit');
    Route::put('admin/invoice/{id}', 'App\Http\Controllers\AdminInvoiceController@update')->name('admin.invoice.update');
    Route::delete('admin/invoice/{id}', 'App\Http\Controllers\AdminInvoiceController@destroy')->name('admin.invoice.destroy');

    // InvoiceLine
    Route::get('admin/invoiceLine', 'App\Http\Controllers\AdminInvoiceLineController@index')->name('admin.invoiceLine.index');
    Route::get('admin/invoiceLine/create', 'App\Http\Controllers\AdminInvoiceLineController@create')->name('admin.invoiceLine.create');
    Route::post('admin/invoiceLine/save', 'App\Http\Controllers\AdminInvoiceLineController@save')->name('admin.invoiceLine.save');
    Route::get('admin/invoiceLine/{id}', 'App\Http\Controllers\AdminInvoiceLineController@show')->name('admin.invoiceLine.show');
    Route::delete('admin/invoiceLine/{id}', 'App\Http\Controllers\AdminInvoiceLineController@destroy')->name('admin.invoiceLine.destroy');
    Route::get('admin/invoiceLine/{id}/edit', 'App\Http\Controllers\AdminInvoiceLineController@edit')->name('admin.invoiceLine.edit');
    Route::put('admin/invoiceLine/{id}', 'App\Http\Controllers\AdminInvoiceLineController@update')->name('admin.invoiceLine.update');

    // SavingsAccount
    Route::get('admin/savingsAccount', 'App\Http\Controllers\AdminSavingsAccountController@index')->name('admin.savingsAccount.index');
    Route::get('admin/savingsAccount/create', 'App\Http\Controllers\AdminSavingsAccountController@create')->name('admin.savingsAccount.create');
    Route::post('admin/savingsAccount', 'App\Http\Controllers\AdminSavingsAccountController@save')->name('admin.savingsAccount.save');
    Route::get('admin/savingsAccount/{id}', 'App\Http\Controllers\AdminSavingsAccountController@show')->name('admin.savingsAccount.show');
    Route::delete('admin/savingsAccount/{id}', 'App\Http\Controllers\AdminSavingsAccountController@destroy')->name('admin.savingsAccount.destroy');
    Route::get('admin/savingsAccount/{id}/edit', 'App\Http\Controllers\AdminSavingsAccountController@edit')->name('admin.savingsAccount.edit');
    Route::put('admin/savingsAccount/{id}', 'App\Http\Controllers\AdminSavingsAccountController@update')->name('admin.savingsAccount.update');

    // User 
    Route::get('admin/user', 'App\Http\Controllers\AdminUserController@index')->name('admin.user.index');
    Route::get('admin/user/create', 'App\Http\Controllers\AdminUserController@create')->name('admin.user.create');
    Route::post('admin/user', 'App\Http\Controllers\AdminUserController@save')->name('admin.user.save');
    Route::get('admin/user/{id}', 'App\Http\Controllers\AdminUserController@show')->name('admin.user.show');
    Route::delete('admin/user/{id}', 'App\Http\Controllers\AdminUserController@destroy')->name('admin.user.destroy');
    Route::get('admin/user/{id}/edit', 'App\Http\Controllers\AdminUserController@edit')->name('admin.user.edit');
    Route::put('admin/user/{id}', 'App\Http\Controllers\AdminUserController@update')->name('admin.user.update');

});

//Auth::routes();



