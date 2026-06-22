{{-- Reusable buttons snippet for paket cards --}}
{{-- Expects: $paketId, $label --}}

<a href="{{ route('user.bookings.checkout', $paketId) }}" class="block w-full text-center py-3.5 rounded-full text-xs tracking-widest uppercase font-semibold transition-all duration-300 border border-[#4b4b30]/25 text-[#4b4b30] bg-white hover:bg-[#4b4b30] hover:text-white hover:border-[#4b4b30]">
    {{ $label }}
</a>
<p class="mt-3 text-[10px] text-stone-500 text-center font-light">
    *Pilih extra & booking tanggal di langkah berikutnya.
</p>

