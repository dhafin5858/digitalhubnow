<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

// Authentication Routes (Automatically added by Laravel Breeze)
require __DIR__ . '/auth.php';

// Landing Page Route (for non-authenticated users)
Route::get('/', function () {
    return view('landing');
})->name('landing-page');

// Dashboard Route (Protected for logged-in users)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Payment Success Route
Route::get('/payment-success', function () {
    return view('payment-success');
})->name('payment.success');

// Payment Failed Route
Route::get('/payment-failed', function () {
    return view('payment-failed');
})->name('payment.failed');