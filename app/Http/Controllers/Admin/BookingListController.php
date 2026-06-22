<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;

class BookingListController extends Controller
{
    public function pending()
    {
        $bookings = Booking::query()
            ->where('status', 'pending')
            ->with('paket')
            ->latest('id')
            ->get();

        return view('admin.bookings.pending', compact('bookings'));
    }

    public function all()
    {
        // Tambahkan proteksi ini di baris paling atas method controller:
        if (!auth()->check() || (int)(auth()->user()->is_active ?? 0) !== 1) {
            return redirect()->route('admin.login');
        }

        $bookings = Booking::query()
            ->with('paket')
            ->latest('id')
            ->get();

        return view('admin.bookings.all', compact('bookings'));
    }
}

