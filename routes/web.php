<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// PUBLIC ROUTES
Route::get('/',function(){return view('welcome');})->name('home');
Route::get('/terms',function(){return view('terms');})->name('terms');
Route::get('/privacy',function(){return view('privacy');})->name('privacy');

// AUTH ROUTES
Route::get('/dashboard',function(){return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');
//// PROFILE ROUTES
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
