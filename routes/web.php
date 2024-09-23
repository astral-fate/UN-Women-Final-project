<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Authentication routes with email verification
Auth::routes(['verify' => true]);

// Public routes
Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/topics', [PublicController::class, 'topicsListing'])->name('topics.listing');
Route::get('/topics/{topic}', [PublicController::class, 'showTopic'])->name('topics.show');
Route::get('/testimonials', [PublicController::class, 'testimonials'])->name('testimonials');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::post('/contact', [MessageController::class, 'store'])->name('messages.store');
Route::get('/topics-listing', [PublicController::class, 'topicsListing'])->name('topics.listing');
Route::get('/topics-detail', [PublicController::class, 'topicsDetail'])->name('topics.detail');

// Explicit logout route
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Admin routes with auth and email verification middleware
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/', [TopicController::class, 'index'])->name('dashboard');

    // Users
    Route::resource('users', UserController::class);

    // Categories
    Route::resource('categories', CategoryController::class);
    
    // Topics
    Route::resource('topics', TopicController::class);

    // Admin Testimonials
    Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
    Route::resource('testimonials', TestimonialController::class)->except(['index']);

    // Messages
    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    Route::get('/messages/{message}', [MessageController::class, 'show'])->name('messages.show');
    Route::delete('/messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
});

// Public topic routes
Route::get('/topics/{topic}', [TopicController::class, 'show'])->name('topics.show');

// Fallback route for 404
Route::fallback(function () {
    return view('public.404');
});