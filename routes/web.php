<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');

// Profile Detail Routes
Route::get('/profil/sejarah', [HomeController::class, 'sejarah'])->name('profil.sejarah');
Route::get('/profil/visi-misi', [HomeController::class, 'visiMisi'])->name('profil.visi-misi');
Route::get('/profil/struktur', [HomeController::class, 'struktur'])->name('profil.struktur');
Route::get('/profil/sambutan', [HomeController::class, 'sambutan'])->name('profil.sambutan');
Route::get('/profil/dosen', [HomeController::class, 'dosen'])->name('profil.dosen');
Route::get('/profil/akreditasi', [HomeController::class, 'akreditasi'])->name('profil.akreditasi');

Route::get('/academic', [HomeController::class, 'academic'])->name('academic');
Route::get('/publication', [HomeController::class, 'publication'])->name('publication');
Route::get('/student', [HomeController::class, 'student'])->name('student');
Route::get('/information', [HomeController::class, 'information'])->name('information');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// News Routes
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{news:slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/news/search', [NewsController::class, 'search'])->name('news.search');

// Admin Authentication Routes
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Admin Protected Routes
Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // News Management
    Route::get('/news', [AdminController::class, 'newsIndex'])->name('news.index');
    Route::get('/news/create', [AdminController::class, 'newsCreate'])->name('news.create');
    Route::post('/news', [AdminController::class, 'newsStore'])->name('news.store');
    Route::get('/news/{news}/edit', [AdminController::class, 'newsEdit'])->name('news.edit');
    Route::put('/news/{news}', [AdminController::class, 'newsUpdate'])->name('news.update');
    Route::delete('/news/{news}', [AdminController::class, 'newsDestroy'])->name('news.destroy');
});
