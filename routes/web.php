<?php

use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $blogs = Blog::all();
    $categories = Category::all();
    return view('welcome', compact('blogs', 'categories'));
})->name('home');



Route::group(['prefix' => 'account'], function () {
    // Guest middleware
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', [LoginController::class, 'index'])->name('account.login');
        
        Route::post('login', [LoginController::class, 'authenticate'])->name('account.authenticate');
        Route::get('register', [LoginController::class, 'register'])->name('account.register');
        Route::post('register', [LoginController::class, 'processRegister'])->name('account.processRegister');
    });
    // Authenticate middleware
    Route::group(['middleware' => 'auth'], function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('account.logout');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('account.dashboard');
        Route::get('category/blogs/{id}', [BlogController::class, 'categoryblog'])->name('account.category.blogs');
        Route::get('blogs/{slug}', [BlogController::class, 'blogdetails'])->name('blog.details');
        
        Route::get('blogs/search', [BlogController::class, 'search'])->name('blog.search');
    });
});



Route::group(['prefix' => 'admin'], function () {
    // Guest middleware for admin
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('login', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });
    // Authenticate middleware for admin
    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
        Route::get('blogs', [BlogController::class, 'index'])->name('admin.blog.show');
        Route::post('blog/store', [BlogController::class, 'store'])->name('admin.blog.store');
        Route::post('blog/delete', [BlogController::class, 'delete'])->name('admin.blog.delete');
        Route::get('categories', [CategoryController::class, 'index'])->name('admin.category.show');
        Route::post('category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    });
});
