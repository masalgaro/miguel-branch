<?php

use App\Http\Controllers\SavingsAccountController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/savingsAccounts/create', [SavingsAccountController::class, 'create'])->name('savingsAccount.create');
Route::post('/savingsAccounts/save', [SavingsAccountController::class, 'save'])->name('savingsAccount.save');
Route::get('/savingsAccounts/list', [SavingsAccountController::class, 'list'])->name('savingsAccount.list');
Route::get('/savingsAccounts/{id}', [SavingsAccountController::class, 'show'])->name('savingsAccount.show');
Route::get('/savingsAccounts/delete/{id}', [SavingsAccountController::class, 'delete'])->name('savingsAccount.delete');

Route::get('user/create', [UserController::class, 'create'])->name('user.create');
Route::post('user/save', [UserController::class, 'save'])->name('user.save');
Route::get('user/list', [UserController::class, 'list'])->name('user.list');
Route::get('user/show/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

// Route::get('/users/{id}/purchase-history', [UserController::class,'consultPurchaseHistory'])->name('user.purchaseHistory');
