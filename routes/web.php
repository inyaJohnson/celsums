<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PagesController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\SetupController;
//use \App\Http\Controllers\ReviewController;
use \App\Http\Controllers\DepositController;
use \App\Http\Controllers\WithdrawalController;
use \App\Http\Controllers\StockController;
use \App\Http\Controllers\ValidationController;
use \App\Http\Controllers\Admin\BalanceController;
use \App\Http\Controllers\Admin\EmailController;
use \App\Http\Controllers\Admin\ProductTransactionController;
use \App\Http\Controllers\Admin\StockController as  AdminStockController;
use \App\Http\Controllers\Admin\StockTransactionController;
use \App\Http\Controllers\Admin\UserController as  AdminUserController;

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
Route::resource('/reviews', 'ReviewController');
Route::post('/contact', [PagesController::class, 'contact'])->name('contact');



Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/validation/upload', [ValidationController::class, 'upload'])->name('validation.upload');
    Route::get('/validation', [ValidationController::class, 'index'])->name('validation.index');

});

Route::group(['middleware' => ['auth', 'user']], function () {
    Route::get('/deposit', [DepositController::class, 'index'])->name('deposit');
    Route::get('/withdrawal', [WithdrawalController::class, 'index'])->name('withdrawal');
    Route::post('/withdrawal', [WithdrawalController::class, 'withdrawalRequest'])->name('withdrawal.request');
// stock
    Route::get('stock', [StockController::class, 'index'])->name('stock.index');
});

Route::group(['middleware' => ['auth', 'admin'], 'namespace' => 'Admin'], function () {
    Route::get('/email-create/{id}', [EmailController::class, 'createEmail'])->name('email.create');
    Route::post('/email-send', [EmailController::class, 'sendEmail'])->name('email.send');
    Route::get('/payment', [ProductTransactionController::class, 'index'])->name('payment.index');
    Route::get('/payment-create/{id}', [ProductTransactionController::class, 'create'])->name('payment.create');
    Route::post('/payment-store', [ProductTransactionController::class, 'store'])->name('payment.store');
    Route::get('/payment-edit/{id}', [ProductTransactionController::class,'edit'])->name('payment.edit');
    Route::post('/payment-update/{id}', [ProductTransactionController::class,'update'])->name('payment.update');

    Route::get('/users/{id}/verify', [AdminUserController::class, 'verify'])->name('user.verify');
    Route::get('/user-delete/{id}', [AdminUserController::class,'destroy'])->name('user.delete');
    Route::get('/users', [AdminUserController::class, 'index'])->name('users.index');


//Balance
    Route::get('/balance/edit/{id}', [BalanceController::class, 'edit'])->name('balance.edit');
    Route::post('/balance/update/{id}', [BalanceController::class, 'update'])->name('balance.update');

//    stock
    Route::get('manage-stock', [AdminStockController::class, 'index'])->name('stock.manage');
    Route::post('store-stock', [AdminStockController::class, 'store'])->name('stock.store');

    Route::get('/stock-payment', [StockTransactionController::class, 'index'])->name('stock-payment.index');
    Route::get('/stock-payment/create/{id}', [StockTransactionController::class, 'create'])->name('stock-payment.create');
    Route::post('/stock-payment/store', [StockTransactionController::class,'store'])->name('stock-payment.store');
    Route::get('/stock-payment/edit/{id}', [StockTransactionController::class, 'edit'])->name('stock-payment.edit');
    Route::post('/stock-payment/update/{id}', [StockTransactionController::class, 'update'])->name('stock-payment.update');

});
