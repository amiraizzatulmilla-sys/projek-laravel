<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// 1. Halaman Utama (Landing Page) - Bisa diakses siapa saja (tanpa login)
Route::get('/', function () {
    return Inertia::render('LandingPage');
})->name('landing');

// 2. Halaman yang butuh Login (Dashboard Posts)
Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    
    // Alias untuk dashboard
    Route::get('/dashboard', function () {
        return redirect()->route('posts.index');
    })->name('dashboard');

    // Route CRUD Posts
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});

// Route Bawaan Auth (Login, Register, Logout)
require __DIR__.'/auth.php';