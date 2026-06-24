<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice #{{ $booking->id }} - Darwis Decor</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome v6.x CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #fcfcfc;
        }
        @media print {
            body { background: #ffffff !important; }
            .no-print { display: none !important; }
            .print-shadow-none { box-shadow: none !important; border: none !important; }
        }
    </style>
</head>
<body class="text-stone-800 antialiased p-4 sm:p-8">

@php
    // format Rupiah (global helper lokal di view)
    if (!function_exists('formatRupiah')) {
        function formatRupiah($val) {
            return number_format((float) $val, 0, ',', '.');
        }
    }

    $bookingId = $booking->id;
    $tanggalAcara = optional($booking->tanggal_booking)->format('d-m-Y') ?? ' - ';

    // ambil field dari bookings
    $customerNama = $booking->nama_customer ?? 'Klien';
    $customerAlamat = $booking->alamat ?? 'Bumijawa';

    // Paket
    $paketNama = $booking->paket->nama ?? '-';
    $hargaPaket = (float) ($booking->paket->harga_mulai ?? 0);

    // Item extras dari booking_extras
    $bookingExtras = $booking->bookingExtras ?? collect();

    // bangun listItems persis dari booking_extras + paket
    $listItems = collect();

    if ($hargaPaket > 0) {
        $listItems->push([
            'keterangan' => $paketNama,
            'qty' => 1,
            'harga' => $hargaPaket,
            'total' => $hargaPaket,
        ]);
    }

    foreach ($bookingExtras as $row) {
        $extra = $row->extra;
        $namaExtra = $extra->nama ?? 'Tambahan';

        $qty = (int) ($row->qty ?? 1);
        $subtotal = (float) ($row->subtotal ?? 0);

        // harga per item di tabel dibuat konsisten dengan subtotal
        $hargaPerItem = $qty > 0 ? ($subtotal / $qty) : (float) ($extra->harga ?? 0);

        $listItems->push([
            'keterangan' => $namaExtra,
            'qty' => $qty,
            'harga' => $hargaPerItem,
            'total' => $subtotal,
        ]);
    }

    // Total: pakai booking->total jika ada (agar sama dengan data invoice asli)
    $totalKeseluruhan = (float) ($booking->total ?? $listItems->sum(fn($i) => (float) $i['total']));

    // DP: pakai dp_amount jika ada; kalau tidak ada kolom dp_amount di tabel, ini akan fallback 0/2jt sesuai yang kamu mau.
    $dpPembayaran = (float) ($booking->dp_amount ?? 2000000);
    $sisaPembayaran = $totalKeseluruhan - $dpPembayaran;
@endphp

<div class="no-print max-w-4xl mx-auto mb-6 flex justify-end">
    <button onclick="window.print()" class="px-5 py-2.5 bg-stone-900 text-white rounded-xl text-xs font-bold uppercase tracking-wider shadow-sm hover:bg-stone-800 transition cursor-pointer">
        🖨️ Cetak / Simpan PDF
    </button>

    <a href="#" onclick="return false;" class="px-5 py-2.5 bg-emerald-700 text-white rounded-xl text-xs font-bold uppercase tracking-wider shadow-sm hover:bg-emerald-600 transition cursor-pointer">
        <i class="fa-brands fa-whatsapp"></i> Kirim WA
    </a>

    <button type="submit" style="display:none"></button>
</div>


<div class="max-w-4xl mx-auto bg-white border border-stone-200/60 rounded-3xl p-8 sm:p-12 print-shadow-none shadow-xl shadow-stone-100 relative overflow-hidden">
    <div class="flex flex-col sm:flex-row justify-between items-start gap-6 border-b border-stone-100 pb-8">
        <div>
            <h1 class="text-4xl font-light font-serif tracking-wide text-stone-900 italic">Invoice</h1>
            <div class="mt-4 space-y-1 text-sm text-stone-600">
                <p><span class="inline-block w-28 text-stone-400">Ditujukan kepada</span>: <span class="font-semibold text-stone-900">{{ $customerNama }}</span></p>
                <p><span class="inline-block w-28 text-stone-400">Alamat</span>: <span class="text-stone-800">{{ $customerAlamat }}</span></p>
                <p><span class="inline-block w-28 text-stone-400">Tanggal Acara</span>: <span class="font-medium text-stone-800">{{ $tanggalAcara }}</span></p>
                <p><span class="inline-block w-28 text-stone-400">No. Invoice</span>: <span class="text-stone-700">#{{ $bookingId }}</span></p>
            </div>
        </div>

        <div class="text-center sm:text-right flex flex-col items-center sm:items-end self-center sm:self-start">
            <div class="w-16 h-16 rounded-full border border-stone-900 flex items-center justify-center font-serif text-2xl font-semibold tracking-tighter text-stone-900 shadow-inner">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </div>
            <span class="text-xs font-bold tracking-widest text-stone-900 uppercase mt-2 block">Darwis Decor</span>
        </div>
    </div>

    <div class="mt-8 overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-stone-50 text-stone-600 text-xs font-bold uppercase tracking-wider border-b border-stone-200/60">
                    <th class="px-4 py-3.5 rounded-l-xl w-1/2">Keterangan</th>
                    <th class="px-4 py-3.5 text-center w-16">QTY</th>
                    <th class="px-4 py-3.5 text-right w-36">Harga</th>
                    <th class="px-4 py-3.5 text-right rounded-r-xl w-40">Total</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-stone-100 text-sm">
                @forelse($listItems as $item)
                    <tr class="hover:bg-stone-50/50 transition">
                        <td class="px-4 py-4 text-stone-800 font-medium">{{ $item['keterangan'] }}</td>
                        <td class="px-4 py-4 text-center text-stone-500 font-medium">{{ $item['qty'] ?: 1 }}</td>
                        <td class="px-4 py-4 text-right text-stone-600">Rp {{ formatRupiah($item['harga']) }}</td>
                        <td class="px-4 py-4 text-right text-stone-900 font-semibold">Rp {{ formatRupiah($item['total']) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-12 text-center text-stone-400 italic">Tidak ada rincian item dekorasi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-8 pt-6 border-t border-stone-100 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="space-y-4 self-end">
            <div class="text-xs">
                <p class="font-bold uppercase tracking-wider text-stone-900">Pembayaran Via:</p>
                <div class="mt-1.5 p-3.5 bg-stone-50 border border-stone-200/50 rounded-2xl inline-block min-w-[240px]">
                    <p class="font-semibold text-stone-800 text-sm">BCA 0471238596</p>
                    <p class="text-stone-500 mt-0.5">a.n. Megawati</p>
                </div>
            </div>
        </div>

        <div class="space-y-8">
            <div class="space-y-2 text-sm max-w-xs ml-auto">
                <div class="flex justify-between items-center text-stone-600">
                    <span class="font-medium">Total</span>
                    <span class="font-bold text-stone-900 border-b border-stone-900 pb-0.5 min-w-[120px] text-right">Rp {{ formatRupiah($totalKeseluruhan) }}</span>
                </div>
                {{-- <div class="flex justify-between items-center text-stone-500">
                    <span>DP</span>
                    <span class="font-medium text-stone-800 min-w-[120px] text-right">-</span>
                </div>
                <div class="flex justify-between items-center text-stone-900 pt-1 border-t border-dashed border-stone-200">
                    <span class="font-bold">Sisa pembayaran</span>
                    <span class="font-extrabold text-stone-950 border-b-2 border-stone-900 pb-0.5 min-w-[120px] text-right">-</span>
                </div> --}}

            </div>

            <div class="text-right text-xs text-stone-600 pr-2">
                <p class="text-stone-500">Tegal, {{ now()->translatedFormat('d F Y') }}</p>
                <p class="mt-1">Tertanda,</p>
                <div class="h-20"></div>
                <p class="font-bold text-stone-900 underline decoration-stone-400 decoration-1">Megawati</p>
                <p class="text-[10px] text-stone-400 uppercase tracking-wider mt-0.5">Owner Darwis Decor</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>

