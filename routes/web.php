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

Route::prefix('services')->name('services.')->group(function () {
    Route::view('/integrated-facilities-management', 'services.integrated-facilities-management')->name('ifm');
    Route::view('/property-management-services', 'services.property-management-services')->name('pms');
    Route::view('/maintenance-management-services', 'services.maintenance-management-services')->name('mms');
    Route::view('/estate-agency-brokerage-services', 'services.estate-agency-brokerage-services')->name('eabs');
    Route::view('/asset-management-services', 'services.asset-management-services')->name('ams');
    Route::view('/property-development-services', 'services.property-development-services')->name('pds');
    Route::view('/land-administration', 'services.land-administration')->name('la');
});
