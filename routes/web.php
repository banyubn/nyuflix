<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\AuthRole;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
})->middleware('guest')->name('landing-page');

// Login Route
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login/submit', [LoginController::class, 'login'])->name('login.attempt');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Register Route
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register/submit', [RegisterController::class, 'store'])->name('register.store');

Route::name('member.')->middleware(['authRole:member'])->group(function () {
    //Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
    Route::post('/profile/submit', [ProfileController::class, 'store'])->name('profile.store');
    Route::get('/profile/manage', [ProfileController::class, 'manage'])->name('profile.manage');
    Route::get('/profile/{profile}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/{profile}/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/{profile}/delete', [ProfileController::class, 'destroy'])->name('profile.delete');
    // Route::get('/profile/{profile}', [MemberController::class, 'choose'])->name('profile.choose');

    Route::get('/select/{profile}', [MemberController::class, 'selectProfile'])->name('select-profile');
    Route::get('/dashboard', [MemberController::class, 'dashboard'])->name('dashboard');
});

Route::prefix('/admin')->name('admin.')->middleware(['authRole:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});