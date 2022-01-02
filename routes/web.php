<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PagesController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\SetupController;
use \App\Http\Controllers\ReviewController;
use \App\Http\Controllers\DepositController;
use \App\Http\Controllers\WithdrawalController;
use \App\Http\Controllers\StockController;
use \App\Http\Controllers\ValidationController;
use \App\Http\Controllers\Admin\BalanceController;
use \App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;
use \App\Http\Controllers\Admin\TransactionController;
use \App\Http\Controllers\Admin\StockController as  AdminStockController;
use \App\Http\Controllers\Admin\UserController as  AdminUserController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [PagesController::class, 'welcome'])->name('welcome');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/setup', [SetupController::class, 'index'])->name('setup');
Route::get('/legal', [PagesController::class, 'legal'])->name('legal');
Route::resource('/reviews', ReviewController::class);
Route::get('/contact-us', [PagesController::class, 'contactUs'])->name('contact-us');
Route::post('/contact', [PagesController::class, 'contact'])->name('contact');



Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/validation/upload', [ValidationController::class, 'upload'])->name('validation.upload');
    Route::get('/validation', [ValidationController::class, 'index'])->name('validation.index');
});

Route::group(['middleware' => ['auth', 'user']], function () {
    Route::get('/deposit/invoice/{product}', [DepositController::class, 'invoice'])->name('invoice');
    Route::post('/deposit/{product}', [DepositController::class, 'store'])->name('deposit.store');
    Route::get('/deposit', [DepositController::class, 'index'])->name('deposit');
    Route::get('/withdrawal', [WithdrawalController::class, 'index'])->name('withdrawal');
    Route::post('/withdrawal', [WithdrawalController::class, 'withdrawalRequest'])->name('withdrawal.request');
    // stock
    Route::get('/stock-deposit/invoice/{symbol}', [StockController::class, 'invoice'])->name('stock.invoice');
    Route::post('/stock-deposit/{symbol}', [StockController::class, 'store'])->name('stock_deposit.store');
    Route::get('stock', [StockController::class, 'index'])->name('stock.index');
    Route::resource('messages', MessageController::class);
});

Route::group(['middleware' => ['auth', 'admin'], 'namespace' => 'Admin'], function () {
    Route::get('/email-create/{id}', [EmailController::class, 'createEmail'])->name('email.create');
    Route::post('/email-send', [EmailController::class, 'sendEmail'])->name('email.send');
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
    Route::get('/transactions/create/{id}', [TransactionController::class, 'create'])->name('transactions.create');
    Route::post('/transactions/store', [TransactionController::class, 'store'])->name('transactions.store');
    Route::get('/transactions/edit/{id}', [TransactionController::class, 'edit'])->name('transactions.edit');
    Route::post('/transactions/update/{id}', [TransactionController::class, 'update'])->name('transactions.update');

    Route::get('/users/{userId}/messages', [AdminMessageController::class, 'index'])->name('users.messages.index');
    Route::post('/users/{userId}/messages', [AdminMessageController::class, 'store'])->name('users.messages.store');

    Route::get('/users/{id}/verify', [AdminUserController::class, 'verify'])->name('users.verify');
    Route::get('/users/{id}/unverify', [AdminUserController::class, 'unverify'])->name('users.unverify');
    Route::delete('/users/{id}', [AdminUserController::class, 'destroy'])->name('users.delete');
    Route::get('/users', [AdminUserController::class, 'index'])->name('users.index');


    //Balance
    Route::get('/balance/edit/{id}', [BalanceController::class, 'edit'])->name('balance.edit');
    Route::post('/balance/update/{id}', [BalanceController::class, 'update'])->name('balance.update');

    //    stock
    Route::get('manage-stock', [AdminStockController::class, 'index'])->name('stock.manage');
    Route::post('store-stock', [AdminStockController::class, 'store'])->name('stock.store');

});
