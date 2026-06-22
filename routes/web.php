<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\BookingListController as AdminBookingListController;

Route::get('/', [UserController::class, 'index'])->name('home');

Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');

    Route::get('/paket/decor-only', [UserController::class, 'paketOnlyDecor'])->name('user.paket.decor-only');
    Route::get('/paket/full-service', [UserController::class, 'paketAllIn'])->name('user.paket.full-service');

    Route::get('/bookings/checkout/{paket_id}', [\App\Http\Controllers\BookingFlowController::class, 'checkout'])
        ->name('user.bookings.checkout');

    Route::post('/bookings', [\App\Http\Controllers\BookingController::class, 'store'])
        ->name('user.bookings.store');

    Route::get('/bookings/{booking}/status', [\App\Http\Controllers\BookingController::class, 'status'])
        ->name('user.bookings.status');

    Route::get('/bookings/{booking}/invoice', [\App\Http\Controllers\BookingController::class, 'invoice'])
        ->name('user.bookings.invoice');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [\App\Http\Controllers\AdminAuthController::class, 'showLogin'])
        ->name('admin.login');

    Route::post('/login', [\App\Http\Controllers\AdminAuthController::class, 'login'])
        ->name('admin.login.post');

    Route::match(['get', 'post'], '/logout', [\App\Http\Controllers\AdminAuthController::class, 'logout'])
        ->name('admin.logout');


    Route::get('/bookings/pending', [AdminBookingListController::class, 'pending'])
        ->name('admin.bookings.pending');


    Route::get('/bookings/all', [AdminBookingListController::class, 'all'])
        ->name('admin.bookings.all');



    Route::post('/bookings/{booking}/approve', function (\App\Models\Booking $booking) {
        if (!\Illuminate\Support\Facades\Auth::check() || (int) (\Illuminate\Support\Facades\Auth::user()->is_active ?? 0) !== 1) {
            return redirect()->route('admin.login');
        }

        return app(\App\Http\Controllers\AdminBookingController::class)->approve($booking);
    })->name('admin.bookings.approve');
});

