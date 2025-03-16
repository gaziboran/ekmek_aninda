<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\DonorController;
use App\Http\Controllers\DonationDeliveryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FoodRequestController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ReceiverController;
use App\Http\Controllers\AuthController;

// Ana sayfa route'u
Route::get('/', function () {
    return view('auth.select-user-type');
});

// Mevcut auth route'larını guest middleware'e taşıyalım
Route::middleware('guest')->group(function () {
    // Restoran routes
    Route::get('/restaurant/register', [App\Http\Controllers\Auth\RestaurantController::class, 'showRegisterForm'])->name('restaurant.register');
    Route::get('/restaurant/login', [App\Http\Controllers\Auth\RestaurantController::class, 'showLoginForm'])->name('restaurant.login');
    
    // Donor routes
    Route::get('/donor/register', [DonorController::class, 'showRegisterForm'])->name('donor.register');
    Route::post('/donor/register', [DonorController::class, 'register']);
    Route::get('/donor/login', [DonorController::class, 'showLoginForm'])->name('donor.login');
    Route::post('/donor/login', [DonorController::class, 'login']);
    
    // Receiver routes
    Route::get('/receiver/register', [App\Http\Controllers\Auth\ReceiverController::class, 'showRegisterForm'])->name('receiver.register');
    Route::get('/receiver/login', [App\Http\Controllers\Auth\ReceiverController::class, 'showLoginForm'])->name('receiver.login');
});

// Auth Routes (Breeze tarafından otomatik eklenir)
require __DIR__.'/auth.php';

// Protected Routes
Route::middleware(['auth'])->group(function () {
    // Yemek İsteyen Routes
    Route::middleware(['role:yemek-isteyen'])->group(function () {
        Route::get('/yemek-talepleri', [FoodRequestController::class, 'index'])->name('food-requests.index');
    });

    // Bağışçı Routes
    Route::middleware(['role:bagisci'])->group(function () {
        Route::get('/bagislarim', [DonationController::class, 'index'])->name('donations.index');
    });

    // Restoran Routes
    Route::middleware(['role:restoran'])->group(function () {
        Route::get('/restoran-panel', [RestaurantController::class, 'index'])->name('restaurant.index');
    });

    // Profil Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/donations/{donation}/generate-code', [DonationDeliveryController::class, 'generateCode'])
        ->name('donation.generate-code');
    Route::get('/donations/{donation}/qr', [DonationDeliveryController::class, 'showQr'])
        ->name('donation.qr');
    Route::get('/verify/{code}', [DonationDeliveryController::class, 'verify'])
        ->name('donation.verify');
    Route::post('/verify/{code}/confirm', [DonationDeliveryController::class, 'confirm'])
        ->name('donation.confirm');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

// Restoran Routes
Route::prefix('restaurant')->group(function () {
    Route::post('register', [RestaurantController::class, 'register']);
    Route::post('login', [RestaurantController::class, 'login']);
});

// Bağışçı Routes
Route::prefix('donor')->group(function () {
    Route::post('register', [DonorController::class, 'register']);
    Route::post('login', [DonorController::class, 'login']);
});

// Yemek İsteyen Routes
Route::prefix('receiver')->group(function () {
    Route::post('register', [ReceiverController::class, 'register']);
    Route::post('login', [ReceiverController::class, 'login']);
});

// Ortak logout route
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard route'u (giriş yapınca yönlendirilecek sayfa)
Route::middleware('auth')->group(function () {
    Route::get('/receiver/dashboard', function () {
        return view('receiver.dashboard');
    })->name('receiver.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/donor/dashboard', [DonorController::class, 'dashboard'])->name('donor.dashboard');
});
