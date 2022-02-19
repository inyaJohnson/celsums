<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PagesController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\SetupController;
use \App\Http\Controllers\ReviewController;
use \App\Http\Controllers\ValidationController;
use \App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;
use \App\Http\Controllers\Admin\UserController as  AdminUserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeamController;
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
Route::resource('/reviews', ReviewController::class);
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact', [PagesController::class, 'sendContactMessage'])->name('contactMessage');

Route::resource('events', EventsController::class);
// Route::resource('blogs', BlogController::class);
Route::resource('faqs', FAQController::class);
Route::resource('galleries', GalleryController::class);
Route::resource('/teams', TeamController::class);
Route::get('/donors-partners', [PagesController::class, 'donorsAndPartners'])->name('donorsAndPartners');
Route::get('/voluteers', [PagesController::class, 'voluteers'])->name('voluteers');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/validation/upload', [ValidationController::class, 'upload'])->name('validation.upload');
    Route::get('/validation', [ValidationController::class, 'index'])->name('validation.index');

    Route::post('/profile', [SettingController::class, 'updateProfile'])->name('profile.update');
    Route::get('/profile', [SettingController::class, 'profile'])->name('profile.index');

    Route::resource('messages', MessageController::class);
});


Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('events', [EventsController::class, 'adminIndex'])->name('admin.events.index');
    Route::get('blogs', [BlogController::class, 'adminIndex'])->name('admin.blogs.index');
    Route::get('faqs', [FAQController::class, 'adminIndex'])->name('admin.faqs.index');
    Route::get('galleries', [GalleryController::class, 'adminIndex'])->name('admin.galleries.index');
    Route::get('teams', [TeamController::class, 'adminIndex'])->name('admin.teams.index');

    Route::group(['namespace' => 'Admin'], function () {
        Route::get('/email-create/{id}', [EmailController::class, 'createEmail'])->name('email.create');
        Route::post('/email-send', [EmailController::class, 'sendEmail'])->name('email.send');

        Route::get('/users/{userId}/messages', [AdminMessageController::class, 'index'])->name('users.messages.index');
        Route::post('/users/{userId}/messages', [AdminMessageController::class, 'store'])->name('users.messages.store');

        Route::get('/users/{id}/verify', [AdminUserController::class, 'verify'])->name('users.verify');
        Route::get('/users/{id}/unverify', [AdminUserController::class, 'unverify'])->name('users.unverify');
        Route::delete('/users/{id}', [AdminUserController::class, 'destroy'])->name('users.delete');
        Route::get('/users', [AdminUserController::class, 'index'])->name('users.index');
    });
});

Route::resource('blogs', BlogController::class);

