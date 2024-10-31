<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/index', [AdminController::class, 'index'])->name('admin.index');



// Admin login Register //

// use App\Http\Controllers\AdminAuthController;

// Route::prefix('admin')->group(function () {
//     Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
//     Route::post('login', [AdminAuthController::class, 'login'])->name('admin.login');
//     Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

//     Route::middleware('auth.admin')->group(function () {
//         Route::get('dashboard', function () {
//             return view('admin.dashboard');
//         })->name('admin.dashboard');
//     });
// });

// Route::middleware(['auth.admin'])->group(function () {
//     Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
// });



