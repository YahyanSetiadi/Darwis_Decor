<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AdminBookingListController extends Controller
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
        $bookings = Booking::query()
            ->with('paket')
            ->latest('id')
            ->get();

        return view('admin.bookings.all', compact('bookings'));
    }
}


