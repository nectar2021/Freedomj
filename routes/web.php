<?php

use Illuminate\Support\Facades\Route;
Illuminate\Support\Facades\Auth::routes();

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::get('/dashboard', function () {
    return view('admin_backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', function () {
    return view('user_interface.index');
})->middleware(['auth', 'verified'])->name('home');





// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
