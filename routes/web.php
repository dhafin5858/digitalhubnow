<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Landing Page Route
Route::get('/', function () {
    return view('landing');
})->name('landing-page');

// Payment Success Route
Route::get('/payment-success', function () {
    return view('payment-success');
})->name('payment.success');

// Payment Failed Route
Route::get('/payment-failed', function () {
    return view('payment-failed');
})->name('payment.failed');
