<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;

// --------------------
// Public Routes
// --------------------
Route::get('/', [HomeController::class, 'index'])->name('blog.home');
Route::get('/post/{id}', [HomeController::class, 'readMore'])->name('post.readmore');
Route::get('/blogs', [HomeController::class, 'allblogs'])->name('all.blogs');

// --------------------
// Auth Routes (User)
// --------------------
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.page');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout.store');

// --------------------
// User Authenticated Routes
// --------------------
Route::middleware(['auth:web'])->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

    // Edit Profile
    Route::get('/profile/edit', [UserDashboardController::class, 'editProfile'])->name('profile.edit');
    Route::post('/profile/update', [UserDashboardController::class, 'updateProfile'])->name('profile.update');

    // Blog Post CRUD
    Route::get('/blog/create', [BlogPostController::class, 'create'])->name('post.create');
    Route::post('/blog', [BlogPostController::class, 'store'])->name('post.store');
    Route::get('/blog/{id}/edit', [BlogPostController::class, 'edit'])->name('post.edit');
    Route::get('/blog/{id}', [BlogPostController::class, 'show'])->name('post.show');
    Route::put('/blog/{id}', [BlogPostController::class, 'update'])->name('post.update');
    Route::delete('/blog/{id}', [BlogPostController::class, 'destroy'])->name('post.delete');
});

// --------------------
// Admin Routes
// --------------------

// Admin Login Routes (no session yet)
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login.page');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

// Admin Authenticated Routes
Route::middleware(['web', 'admin.auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    // View Users and Posts
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/user/{id}/posts', [AdminController::class, 'userPosts'])->name('admin.user.posts');
    Route::get('/posts', [AdminController::class, 'posts'])->name('admin.posts');
    Route::post('/post/{id}/verify', [AdminController::class, 'verifyPost'])->name('admin.post.verify');
});
