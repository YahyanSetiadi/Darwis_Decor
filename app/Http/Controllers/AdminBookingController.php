<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::query()
            ->orderByDesc('created_at')
            ->paginate(10);

        return view('admin.bookings.index', compact('bookings'));
    }

    public function approve(Booking $booking)
    {
        $booking->status = 'approved';
        $booking->save();

        return redirect()->route('admin.bookings.index')->with('success', "Booking #{$booking->id} approved.");
    }
}

