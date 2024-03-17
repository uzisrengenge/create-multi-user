<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth', 'verified','rw'])->group(function () {
    Route::get('/rw', function () {
        return view('rw.index');
    })->name('rw');

//     Route::resource('user', UserController::class);

//    //categories
//     Route::resource('category', \App\Http\Controllers\CategoryController::class);

//     //products
//     Route::resource('product', \App\Http\Controllers\ProductController::class);
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified','normal'])
    ->name('dashboard');

    Route::view('admin', 'admin')
    ->middleware(['auth', 'verified','admin'])
    ->name('admin');

    // Route::view('rw.index', 'superadmin')
    // ->middleware(['auth', 'verified','superadmin'])
    // ->name('superadmin');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
