<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SocialController;
// Route for homepage and jobs
Route::get('/', [JobController::class, 'index']);
Route::get('/jobs/{id}', [JobController::class, 'show']);
Route::post('/apply', [ApplicationController::class, 'store']);
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');

Route::prefix('admin')->middleware('auth', 'admin')->group(function () {
    Route::get('/users', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/users/{id}', [AdminController::class, 'show'])->name('admin.show');
    Route::delete('/users/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/send-message', [MessageController::class, 'send']);
    Route::get('/messages/{receiverId}', [MessageController::class, 'getMessages']);
    Route::get('/search-resumes', [ResumeController::class, 'search']);
    Route::get('/share-job/{jobId}', [SocialController::class, 'shareJob']);
});
// Authentication routes
Route::middleware('web')->group(function () {
    // Registration routes
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    // Login routes
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // Logout route
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // الصفحة الرئيسية
Route::get('/', function () {
    return view('home'); // يعرض ملف home.blade.php
});

// صفحة الوظائف
Route::get('/jobs', function () {
    return view('jobs'); // يعرض ملف jobs.blade.php
});

});
