@include('user.layouts.header')

<style>
    /* Fix navbar text not visible on checkout page */
    #navbar { color: #4b4b30; }
    #navbar .nav-link { color: #f0ead8 !important; }
    #navbar .brand-title { color: #f0ead8 !important; }

    /* Custom Focus State & Form Styling Premium */
    .form-input-premium {
        width: 100%;
        padding: 0.875rem 1.25rem;
        border-radius: 1rem;
        background-color: #fff;
        border: 4px solid rgba(120, 113, 108, 0.25);
        font-size: 0.875rem;
        font-weight: 300;
        color: #1c1c14;
        transition: all 0.30s ease;
    }
    .form-input-premium:focus {
        outline: none;
        border-color: #4b4b30;
        box-shadow: 0 0 0 4px rgba(75, 75, 48, 0.05);
    }
    input[type="date"]::-webkit-calendar-picker-indicator {
        opacity: 0.6;
        cursor: pointer;
        filter: invert(24%) sepia(8%) saturate(1067%) hue-rotate(20deg) brightness(93%) contrast(88%);
    }
</style>

<section class="py-12 sm:py-16 bg-[#FBF9F4] font-sans min-h-screen antialiased">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Section Header --}}
        <div class="mb-10 text-center sm:text-left">
            <div class="inline-flex items-center gap-2 mb-2 bg-[#afa857]/10 border border-[#afa857]/20 px-3 py-1 rounded-full">
                <span class="w-1.5 h-1.5 rounded-full bg-[#afa857] animate-pulse"></span>
                <span class="text-[10px] tracking-[0.25em] uppercase font-bold text-[#4b4b30]">Checkout Reservasi</span>
            </div>
            <h1 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-light text-[#4b4b30] tracking-wide">
                Lengkapi Detail <span class="italic font-normal text-[#afa857]">Acara Anda</span>
            </h1>
            <p class="text-sm text-stone-500 font-light mt-2 max-w-xl leading-relaxed">
                Silakan isi data, tentukan tanggal pelaksanaan, dan pilih opsi kustomisasi tambahan dalam satu langkah mudah.
            </p>
        </div>

        {{-- Main Form Element --}}
        <form method="POST" action="{{ route('user.bookings.store') }}">
            @csrf
            <input type="hidden" name="paket_id" value="{{ $paket->id }}" />

            {{-- MASTER FULL CONTAINER CARD --}}
            <div class="bg-white rounded-3xl border border-stone-200/70 shadow-xl overflow-hidden divide-y divide-stone-100">
                
                {{-- SECTION 1: RINGKASAN PAKET UTAMA --}}
                <div class="p-6 sm:p-8 lg:p-10 bg-gradient-to-br from-stone-50 via-white to-transparent">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div>
                            <span class="text-[9px] tracking-[0.2em] uppercase font-bold text-[#afa857] block mb-1">Paket yang Anda Pilih</span>
                            <h3 class="font-serif text-2xl lg:text-3xl font-medium text-[#4b4b30]">{{ $paket->nama }}</h3>
                        </div>
                        <div class="sm:text-right bg-white border border-stone-200/60 px-5 py-3 rounded-2xl shadow-sm">
                            <span class="text-[10px] text-stone-400 block font-light uppercase tracking-wider mb-0.5">Harga Dasar Paket</span>
                            <span class="text-xl sm:text-2xl font-bold text-[#4b4b30]">
                                Rp {{ number_format((float)$paket->harga_mulai, 0, ',', '.') }}
                            </span>
                        </div>
                    </div>
                </div>

                {{-- SECTION 2: INFORMASI CUSTOMER --}}
                <div class="p-6 sm:p-8 lg:p-10 space-y-6">
                    <div class="flex items-center gap-3">
                        <span class="w-6 h-6 rounded-lg bg-[#4b4b30]/5 flex items-center justify-center text-[#afa857] text-xs font-mono font-bold">01</span>
                        <h2 class="text-xs uppercase tracking-widest font-bold text-stone-500">Informasi Pelanggan</h2>
                    </div>
                    
                    <div class="premium-form-wrapper">
                        @include('user.booking.partials.customer-form')
                    </div>
                </div>

                {{-- SECTION 3: TANGGAL BOOKING --}}
                <div class="p-6 sm:p-8 lg:p-10 space-y-6">
                    <div class="flex items-center gap-3">
                        <span class="w-6 h-6 rounded-lg bg-[#4b4b30]/5 flex items-center justify-center text-[#afa857] text-xs font-mono font-bold">02</span>
                        <h2 class="text-xs uppercase tracking-widest font-bold text-stone-500">Tanggal Pelaksanaan</h2>
                    </div>
                    
                    <div class="max-w-md">
                        <label class="block text-xs tracking-wider uppercase font-semibold text-stone-500 mb-2">Pilih Hari & Tanggal Acara</label>
                        <div class="relative">
                            <input type="date" name="tanggal_booking" value="{{ old('tanggal_booking') }}" class="form-input-premium" required />
                        </div>
                        
                        @error('tanggal_booking')
                            <p class="text-xs mt-2.5 text-red-600 font-medium flex items-center gap-1.5 bg-red-50 p-2.5 rounded-xl border border-red-100">
                                <i class="fa-solid fa-circle-exclamation"></i> {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                
                {{-- SECTION 4: TAMBAHAN PAKET (Extra dari DB) --}}
                <div class="p-6 sm:p-8 lg:p-10 space-y-6 bg-stone-50/40">
                    <div class="flex items-center gap-3 border-b border-stone-200/60 pb-4">
                        <span class="w-6 h-6 rounded-lg bg-[#4b4b30]/5 flex items-center justify-center text-[#afa857] text-xs font-mono font-bold">03</span>
                        <h2 class="text-xs uppercase tracking-widest font-bold text-stone-500">Pilih Tambahan & Kuantitas</h2>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        {{-- LIST TAMBAHAN --}}
                        @php
                            $options = [
                                ['id' => 'mix_fresh_flowers', 'name' => 'Mix Fresh Flowers', 'desc' => '1.5jt untuk decor 4 meter'],
                                ['id' => 'photobooth_musik', 'name' => 'Photobooth/Center Piece/Backdrop Musik', 'desc' => '1jt (band dan 2 penyanyi)'],
                                ['id' => 'lighting_effect', 'name' => 'Lighting Effect', 'desc' => '3jt (untuk 5 titik lampu)'],
                                ['id' => 'pergola', 'name' => 'Pergola 4x4 / 6x6', 'desc' => '4x4 2.5jt / 6x6 4jt'],
                                ['id' => 'kain_lorong', 'name' => 'Kain Lorong / Decor 4x6', 'desc' => '6jt'],
                            ];
                        @endphp


                        @foreach($options as $opt)
                            <label class="flex flex-col p-4 bg-white border border-stone-200 rounded-2xl cursor-pointer hover:border-[#afa857] transition-all has-[:checked]:border-[#4b4b30] has-[:checked]:bg-[#4b4b30]/5 shadow-sm">
                                <div class="flex items-center mb-2">
                                    <input type="checkbox" name="addons[]" value="{{ $opt['id'] }}" class="w-4 h-4 accent-[#4b4b30] mr-3">
                                    <span class="text-sm font-semibold text-stone-800">{{ $opt['name'] }}</span>
                                </div>
                                <span class="text-[10px] text-stone-500 pl-7 leading-tight italic">{{ $opt['desc'] }}</span>
                            </label>
                        @endforeach

                        {{-- INPUT KUANTITAS (4 item diminta: pakai QTY seperti meja-kursi) --}}
                        @foreach([
                            'custom_decor' => ['name' => 'Custom Decor', 'desc' => '3jt (untuk 3 meter, penambahan 1 jt/meter)', 'min' => 0],
                            'melamin_jalan' => ['name' => 'Melamin Jalan', 'desc' => '3jt (untuk 3 meter)', 'min' => 0],
                            'upgrade_size_decor' => ['name' => 'Upgrade Size Decor', 'desc' => '1jt/meter', 'min' => 0],
                            'pohon_decor' => ['name' => 'Pohon Decor', 'desc' => '1.5jt/pohon', 'min' => 0],
                            'meja' => ['name' => 'Meja', 'desc' => '30 rb /pcs', 'min' => 0],
                            'kursi' => ['name' => 'Kursi', 'desc' => '15 rb/pcs', 'min' => 0],
                        ] as $id => $item)
                            <div class="p-4 bg-white border border-stone-200 rounded-2xl flex items-center justify-between shadow-sm">
                                <div>
                                    <p class="text-sm font-semibold text-stone-800">{{ $item['name'] }}</p>
                                    <p class="text-[10px] text-stone-400 italic">{{ $item['desc'] }}</p>
                                </div>
                                <input type="number" name="qty[{{ $id }}]" min="{{ $item['min'] }}" placeholder="0" 
                                    class="w-16 p-2 text-center border border-stone-200 rounded-xl text-sm focus:border-[#afa857] focus:ring-1 focus:ring-[#afa857] outline-none">
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- SECTION 5: FINAL ACTION AREA --}}
                <div class="p-6 sm:p-8 bg-stone-50/70 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="flex items-center gap-2 text-[11px] text-stone-400 font-light order-2 sm:order-1">
                        <i class="fa-solid fa-shield-halved text-[#afa857]"></i>
                        <span>Sistem enkripsi menjamin privasi data pemesanan Anda.</span>
                    </div>

                    <div class="w-full sm:w-auto order-1 sm:order-2">
                        <button type="submit" class="group flex items-center justify-center gap-3 w-full sm:w-auto px-10 py-4 rounded-xl bg-[#4b4b30] text-white font-medium tracking-widest text-xs uppercase shadow-lg shadow-[#4b4b30]/10 hover:bg-[#afa857] hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5 text-center">
                            <span>Ajukan Reservasi Sekarang</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3.5 h-3.5 text-white/80 transition-transform duration-300 group-hover:translate-x-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div> {{-- END MASTER FULL CONTAINER CARD --}}
            
            {{-- Global Error Alert Box --}}
            @if(session('error') || $errors->any())
                <div class="mt-6 p-4 rounded-2xl bg-red-50/80 border border-red-200 text-red-700">
                    <div class="flex gap-2">
                        <i class="fa-solid fa-triangle-exclamation mt-0.5 shrink-0"></i>
                        <div class="text-xs space-y-1">
                            @if(session('error'))
                                <p class="font-semibold">{{ session('error') }}</p>
                            @endif
                            @if($errors->any())
                                <ul class="list-disc pl-4 space-y-0.5 font-light">
                                    @foreach($errors->all() as $e)
                                        <li>{{ $e }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            @endif

        </form>

    </div>
</section>

@include('user.layouts.footer')