<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;

// ✅ Auth routes
Auth::routes();

// ✅ Home page (public homepage)
Route::get('/', [HomeController::class, 'index'])->name('home');

// ✅ Dashboard for admin/staff (only after login)
Route::get('/dashboard', function () {
    return view('admin_backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// ✅ Property detail page
Route::get('/property/{id}', [PropertyController::class, 'show'])->name('property.show');
