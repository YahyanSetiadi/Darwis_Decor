@include('user.layouts.header')

<section class="bg-[#FBF9F4] py-12 min-h-screen font-sans antialiased">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <div class="bg-white rounded-3xl border border-stone-200/70 shadow-xl overflow-hidden">
            <div class="p-6 sm:p-10 bg-gradient-to-br from-stone-50 via-white to-transparent">
                <div class="inline-flex items-center gap-2 mb-3 bg-[#afa857]/10 border border-[#afa857]/20 px-3 py-1 rounded-full">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#afa857] animate-pulse"></span>
                    <span class="text-[10px] tracking-[0.25em] uppercase font-bold text-[#4b4b30]">
                        Reservasi Masuk
                    </span>
                </div>

                <h1 class="font-serif text-3xl sm:text-4xl font-light text-[#4b4b30] tracking-wide">
                    Terima kasih, pesanan Anda sedang diproses
                </h1>
                <p class="text-sm text-stone-500 font-light mt-3 leading-relaxed">
                    Kami akan menghubungi Anda melalui WhatsApp setelah admin meninjau reservasi.
                    Mohon tunggu ya.
                </p>
            </div>

            <div class="p-6 sm:p-10 space-y-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="p-4 bg-stone-50/70 border border-stone-200/70 rounded-2xl">
                        <p class="text-[11px] uppercase tracking-widest font-bold text-stone-500">Nomor Booking</p>
                        <p class="mt-2 text-lg font-semibold text-stone-800">#{{ $booking->id }}</p>
                    </div>
                    <div class="p-4 bg-stone-50/70 border border-stone-200/70 rounded-2xl">
                        <p class="text-[11px] uppercase tracking-widest font-bold text-stone-500">Status</p>
                        <p class="mt-2 text-lg font-semibold text-stone-800">{{ $booking->status }}</p>
                    </div>
                </div>

                <div class="p-4 sm:p-5 bg-white border border-stone-200 rounded-2xl">
                    <p class="text-sm font-semibold text-stone-800">Yang akan admin lakukan</p>
                    <ul class="mt-3 space-y-2 text-sm text-stone-600 list-disc pl-5">
                        <li>Memverifikasi pilihan paket & tambahan.</li>
                        <li>Menyesuaikan ketersediaan tanggal.</li>
                        <li>Mengirim invoice ke WhatsApp Anda.</li>
                    </ul>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 sm:items-center sm:justify-between">
                    <a href="{{ route('user.bookings.checkout', $booking->paket_id) }}"
                       class="px-5 py-3 rounded-xl border border-stone-200 text-stone-700 font-medium text-xs tracking-widest uppercase hover:bg-stone-50 transition-all text-center">
                        Kembali Ke Checkout
                    </a>

                    <a href="{{ route('user.index') }}"
                       class="px-5 py-3 rounded-xl bg-[#4b4b30] text-white font-medium text-xs tracking-widest uppercase shadow-lg shadow-[#4b4b30]/10 hover:bg-[#afa857] transition-all text-center">
                        Kembali Ke Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('user.layouts.footer')

