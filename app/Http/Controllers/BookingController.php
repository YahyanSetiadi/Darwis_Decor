<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingExtra;
use App\Models\Extra;
use App\Models\Paket;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;



class BookingController extends Controller
{
    public function createFromClient(Request $request)
    {
        // Placeholder kalau nanti dibuat UI step booking.
        abort(404);
    }

    public function status(Booking $booking)
    {
        $booking->load([
            'paket',
            'bookingExtras.extra',
        ]);

        return view('user.booking.status', [
            'booking' => $booking,
        ]);
    }

    public function invoice(Booking $booking)
    {
        $booking->load([
            'paket',
            'bookingExtras.extra',
        ]);

        $hargaPaket = (float) ($booking->paket->harga_mulai ?? 0);

        $bookingExtras = $booking->bookingExtras ?? collect();

        $hargaTambahan = (float) $bookingExtras->sum(fn ($row) => (float) ($row->subtotal ?? 0));

        $total = (float) ($booking->total ?? ($hargaPaket + $hargaTambahan));

        return view('admin.bookings.invoice', [
            'booking' => $booking,
            'hargaPaket' => $hargaPaket,
            'hargaTambahan' => $hargaTambahan,
            'total' => $total,
        ]);

    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'paket_id' => ['required', 'integer', 'exists:pakets,id'],
            'tanggal_booking' => ['required', 'date'],

            'nama_customer' => ['required', 'string', 'max:255'],
            'email_customer' => ['nullable', 'email', 'max:255'],
            'no_hp' => ['required', 'string', 'max:50'],
            'alamat' => ['required', 'string', 'max:255'],


            // payload dari form checkout:
            // - addons[] (checkbox)
            // - qty[meja], qty[kursi] (jumlah pcs)
            // - (bisa juga) extras[*][extra_id], extras[*][qty] kalau nanti UI diperbarui
            'addons' => ['nullable', 'array'],
            // addons[] dari blade berisi string key (custom_decor, melamin_jalan, dst)
            'addons.*' => ['nullable','string','max:100'],


            'qty' => ['nullable', 'array'],
            'qty.*' => ['nullable', 'integer', 'min:0'],

            'extras' => ['nullable', 'array'],
            'extras.*.extra_id' => ['required_with:extras', 'integer', 'exists:extras,id'],
            'extras.*.qty' => ['nullable', 'integer', 'min:0'],
        ]);

        $tanggal = $data['tanggal_booking'];


        $addons = $data['addons'] ?? [];
        $qtyMap = $data['qty'] ?? [];

        
        $extrasInput = $data['extras'] ?? null;

        if (is_array($extrasInput) && count($extrasInput) > 0) {
            $extras = array_values(array_filter($extrasInput, function ($row) {
                $qty = (int)($row['qty'] ?? 0);
                return $qty > 0;
            }));
        } else {
            $keyToExtraName = [
                'custom_decor' => 'Custom Decor',
                'melamin_jalan' => 'Melamin Jalan',
                'mix_fresh_flowers' => 'Mix Fresh Flowers',
                'upgrade_size_decor' => 'Upgrade Size Decor',
                'photobooth_musik' => 'Photobooth/Music',
                'lighting_effect' => 'Lighting Effect',
                'pohon_decor' => 'Pohon Decor',
                'pergola' => 'Pergola',
                'kain_lorong' => 'Kain Lorong/Decor',
            ];

            $extras = [];
            foreach ($addons as $addonKey) {
                $addonKey = (string)$addonKey;
                $extraName = $keyToExtraName[$addonKey] ?? null;
                if (!$extraName) continue;

                $extra = Extra::whereRaw('LOWER(nama) = ?', [mb_strtolower(trim($extraName))])->first();
                if (!$extra) continue;

                $extras[] = [
                    'extra_id' => $extra->id,
                    'qty' => 1,
                ];
            }

            $mejaQty = (int)($qtyMap['meja'] ?? 0);
            $kursiQty = (int)($qtyMap['kursi'] ?? 0);

            if ($mejaQty > 0) {
                $mejaExtra = Extra::where('nama', 'Meja')
                    ->orWhere('nama', 'meja')
                    ->orWhereRaw('LOWER(nama)=?', ['meja'])
                    ->first();
                if ($mejaExtra) {
                    $extras[] = ['extra_id' => $mejaExtra->id, 'qty' => $mejaQty];
                }
            }

            if ($kursiQty > 0) {
                $kursiExtra = Extra::where('nama', 'Kursi')
                    ->orWhere('nama', 'kursi')
                    ->orWhereRaw('LOWER(nama)=?', ['kursi'])
                    ->first();
                if ($kursiExtra) {
                    $extras[] = ['extra_id' => $kursiExtra->id, 'qty' => $kursiQty];
                }
            }
            
            $customDecorQty = (int)($qtyMap['custom_decor'] ?? 0);
            if ($customDecorQty > 0) {
                $extraCustom = Extra::whereRaw('LOWER(nama) = ?', [mb_strtolower('Custom Decor')])->first();
                if ($extraCustom) {
                    $extras[] = ['extra_id' => $extraCustom->id, 'qty' => $customDecorQty];
                }
            }

            // qty[melamin_jalan] => "Melamin Jalan"
            $melaminJalanQty = (int)($qtyMap['melamin_jalan'] ?? 0);
            if ($melaminJalanQty > 0) {
                $extraMelamin = Extra::whereRaw('LOWER(nama) = ?', [mb_strtolower('Melamin Jalan')])->first();
                if ($extraMelamin) {
                    $extras[] = ['extra_id' => $extraMelamin->id, 'qty' => $melaminJalanQty];
                }
            }

            // qty[upgrade_size_decor] => "Upgrade Size Decor"
            $upgradeSizeQty = (int)($qtyMap['upgrade_size_decor'] ?? 0);
            if ($upgradeSizeQty > 0) {
                $extraUpgrade = Extra::whereRaw('LOWER(nama) = ?', [mb_strtolower('Upgrade Size Decor')])->first();
                if ($extraUpgrade) {
                    $extras[] = ['extra_id' => $extraUpgrade->id, 'qty' => $upgradeSizeQty];
                }
            }

            // qty[pohon_decor] => "Pohon Decor"
            $pohonDecorQty = (int)($qtyMap['pohon_decor'] ?? 0);
            if ($pohonDecorQty > 0) {
                $extraPohon = Extra::whereRaw('LOWER(nama) = ?', [mb_strtolower('Pohon Decor')])->first();
                if ($extraPohon) {
                    $extras[] = ['extra_id' => $extraPohon->id, 'qty' => $pohonDecorQty];
                }
            }


            // filter qty>0
            $extras = array_values(array_filter($extras, function ($row) {
                $qty = (int)($row['qty'] ?? 0);
                return $qty > 0;
            }));
        }


        // Global unique tanggal_booking (1 tanggal cuma 1 booking)
        if (Booking::whereDate('tanggal_booking', $tanggal)->exists()) {
            return back()->withErrors([
                'tanggal_booking' => 'Tanggal sudah ter-booking, silakan pilih tanggal lain.',
            ])->withInput();
        }

        return DB::transaction(function () use ($data, $tanggal, $extras) {
            $paket = Paket::findOrFail($data['paket_id']);


            $total = 0;
            $namaCustomer = $data['nama_customer'];
            $emailCustomer = $data['email_customer'] ?? null;
            $noHp = $data['no_hp'];
            $extraRows = [];

            foreach ($extras as $row) {
                $extra = Extra::findOrFail($row['extra_id']);
                $qty = $row['qty'] ?? 1;

                $subtotal = (float) $extra->harga * (int) $qty;
                $total += $subtotal;

                $extraRows[] = [
                    'extra_id' => $extra->id,
                    'qty' => $qty,
                    'subtotal' => $subtotal,
                ];
            }

            // total mulai dari paket (harga_mulai) + extras (kalau kamu mau extras menggantikan total, tinggal sesuaikan)
            $total += (float) $paket->harga_mulai;

            $booking = Booking::create([
                'user_id' => Auth::id(),
                'paket_id' => $paket->id,
                'tanggal_booking' => $tanggal,
                'total' => $total,
                'status' => 'pending',
                'nama_customer' => $namaCustomer,
                'email_customer' => $emailCustomer,
                'no_hp' => $noHp,
                'alamat' => $data['alamat'],
            ]);


            foreach ($extraRows as $r) {
                BookingExtra::create([
                    'booking_id' => $booking->id,
                    'extra_id' => $r['extra_id'],
                    'qty' => $r['qty'],
                    'subtotal' => $r['subtotal'],
                ]);
            }

            return redirect()
                ->route('user.bookings.status', $booking)
                ->with('success', 'Booking berhasil diajukan. Tunggu admin menghubungi Anda.');
        });
    }
}

