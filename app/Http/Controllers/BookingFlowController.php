<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\Paket;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingFlowController extends Controller
{
    public function checkout(Request $request, int $paket_id)
    {
        $paket = Paket::findOrFail($paket_id);

        $extras = Extra::where('aktif', true)->orderBy('nama')->get();

        // Ambil tanggal yang sudah ter-booking untuk memberi info di form (display saja).
        $bookedDates = Booking::query()
            ->pluck('tanggal_booking')
            ->map(fn ($d) => Carbon::parse($d)->toDateString())
            ->all();

        return view('user.booking.checkout', [
            'paket' => $paket,
            'extras' => $extras,
            'bookedDates' => $bookedDates,
        ]);
    }
}

