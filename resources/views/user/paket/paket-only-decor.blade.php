@include('user.layouts.header')

@php
    // NOTE: Halaman brosur (katalog) multi-halaman untuk print/PDF.
    $vendorName = 'Darwis Decor';
    $contactLine = 'Booking & Konsultasi: WhatsApp';
    $contactLink = 'https://wa.me/';

    // Ambil foto dari folder rumah saja (sesuai request)
    $rumahDir = public_path('img/rumah');

    $allowedExt = ['jpg','jpeg','png','webp','JPG','JPEG','PNG','WEBP'];
    $isImage = function(string $file) use ($allowedExt) {
        if(!$file) return false;
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        return in_array($ext, $allowedExt, true);
    };

    $fallback = 'https://images.unsplash.com/photo-1523438885200-e635ba2c371e?auto=format&fit=crop&w=1400&q=80';

    $preferredDirs = [
        public_path('img/rumah/paket 1'),
        public_path('img/rumah/paket 2'),
        public_path('img/rumah/paket 3'),
    ];

    // Ambil semua image (non-rekursif) dari sebuah folder
    $scanDirFiles = function(string $dir) use ($isImage) {
        if(!is_dir($dir)) return [];
        return array_values(array_filter(scandir($dir), function($f) use ($dir, $isImage) {
            if($f === '.' || $f === '..') return false;
            $path = $dir . DIRECTORY_SEPARATOR . $f;
            return is_file($path) && $isImage($f);
        }));
    };

    $imgPool = [];

    // 1) preferred
    foreach($preferredDirs as $dir){
        foreach($scanDirFiles($dir) as $f){
            $imgPool[] = asset('img/rumah/' . basename($dir) . '/' . $f);
        }
    }

    // 2) sisanya di rumah (scan subfolder 1 level)
    //    agar folder seperti home A / home package B dll juga terambil.
    if(is_dir($rumahDir)){
        foreach(scandir($rumahDir) as $item){
            if($item === '.' || $item === '..') continue;
            $itemPath = $rumahDir . DIRECTORY_SEPARATOR . $item;
            if(!is_dir($itemPath)) continue;

            // skip preferred yang sudah diproses
            if(in_array($itemPath, $preferredDirs, true)) continue;

            foreach($scanDirFiles($itemPath) as $f){
                $imgPool[] = asset('img/rumah/' . $item . '/' . $f);
            }
        }
    }

    // Hapus duplikat
    $imgPool = array_values(array_unique($imgPool));

    // Cover ambil dari index 0
    $coverPhoto = $imgPool[0] ?? $fallback;

    $pagePhoto = [];
    for($i = 0; $i < 9; $i++){
        $img = $imgPool[$i + 1] ?? null;
        $pagePhoto[] = $img ?: $fallback;
    }

    $gedungAFolder = public_path('img/rumah/gedung A');
    $gedungBFolder = public_path('img/rumah/gedung B');
    $gedungCFolder = public_path('img/rumah/gedung C');

    $gedungAPool = $is_dir = is_dir($gedungAFolder) ? $scanDirFiles($gedungAFolder) : [];
    if(is_dir($gedungAFolder)){
        $gedungAPool = $scanDirFiles($gedungAFolder);
        $pagePhoto[6] = asset('img/rumah/gedung A/' . ($gedungAPool[0] ?? '')) ?: $fallback;
        $pagePhoto[7] = asset('img/rumah/gedung A/' . ($gedungAPool[1] ?? $gedungAPool[0] ?? '')) ?: $fallback;
    }

    if(is_dir($gedungBFolder)){
        $gedungBPool = $scanDirFiles($gedungBFolder);
        $pagePhoto[7] = asset('img/rumah/gedung B/' . ($gedungBPool[0] ?? $gedungAPool[0] ?? '')) ?: $fallback;
    }

    if(is_dir($gedungCFolder)){
        $gedungCPool = $scanDirFiles($gedungCFolder);
        $pagePhoto[8] = asset('img/rumah/gedung C/' . ($gedungCPool[0] ?? $fallback));
    }

@endphp

<style>
    /* --- Brosur Premium Look --- */
.catalog-page {
        background: #E8F5ED;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(75,75,48,0.05);
        border: 1px solid rgba(75,75,48,0.06);
    }

    .catalog-sheet {
        min-height: auto; 
        display: flex;
        flex-direction: column;
    }

    .catalog-cover {
        background: #F4F7F5;
    }

    .catalog-photo {
        background-position: center;
        background-size: cover;
    }

    .split-screen {
        display: grid;
        grid-template-columns: 1fr;
    }

    @media (min-width: 768px) {
        .split-screen {
            grid-template-columns: 1.1fr 0.9fr;
        }
    }

    .bullet-item {
        position: relative;
        padding-left: 18px;
        line-height: 1.6;
    }
    .bullet-item::before {
        content: '•';
        position: absolute;
        left: 4px;
        color: #afa857;
        font-weight: bold;
    }

    @media print {
        body { background: #fff !important; }
        .no-print { display: none !important; }
        .catalog-card-wrap { box-shadow: none !important; border-radius: 0 !important; }
    }
</style>

    {{-- HEADER UTAMA --}}
<div class="no-print max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 pt-28 pb-10" style="background: transparent;">
    <div class="w-full mb-12 border-b border-stone-200/80 pb-8">
        <!-- Grid System buat layout yang lebih lega dan proporsional -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-end">
            
            <!-- Sisi Kiri: Judul Halaman & Sub-informasi (Mengambil 7 dari 12 kolom) -->
            <div class="md:col-span-7 lg:col-span-8">
                <div class="inline-flex items-center gap-3 mb-3 bg-stone-100/80 border border-stone-200/50 px-3 py-1.5 rounded-full">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#afa857] opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-[#afa857]"></span>
                    </span>
                    <span class="text-[10px] tracking-[0.2em] uppercase font-semibold text-stone-500">
                        Katalog Paket Only Decor (2026)
                    </span>
                </div>
                
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-light tracking-wide text-[#4b4b30] leading-tight">
                    Eksplorasi Tema <span class="font-normal italic text-[#afa857]">Darwis Decor</span>
                </h2>
            </div>

            <!-- Sisi Kanan: Tombol CTA Interaktif (Mengambil 5 dari 12 kolom) -->
            <div class="md:col-span-5 lg:col-span-4 md:text-right">
                <a href="{{ $contactLink }}" target="_blank" 
                class="group inline-flex items-center justify-center gap-3 w-full sm:w-auto px-7 py-4 rounded-xl bg-[#4b4b30] text-white font-medium text-xs tracking-widest uppercase shadow-lg shadow-[#4b4b30]/10 hover:shadow-[#afa857]/20 hover:bg-[#afa857] transition-all duration-300 transform hover:-translate-y-1">
                    
                    <span>Booking via WhatsApp</span>
                    
                    <!-- Icon panah interaktif yang gerak saat di-hover -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" 
                        class="w-3 h-3 text-white/80 transition-transform duration-300 group-hover:translate-x-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
            
        </div>
    </div>

<div class="catalog-card-wrap">
    {{-- =====================
        Halaman 1: COVER
    ====================== --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-12 antialiased">
        <section class="catalog-page catalog-cover" aria-label="Halaman 1 - Cover">
            <div class="catalog-sheet overflow-hidden bg-stone-50 rounded-3xl border border-stone-200/60 shadow-xl p-4 sm:p-6 lg:p-8">
                
                <!-- Grid Layout Utama -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-stretch min-h-[550px]">
                    
                    <!-- Sisi Kiri: Informasi & Branding (Prose & Typography) -->
                    <div class="lg:col-span-5 flex flex-col justify-between py-4 lg:py-6 px-2">
                        
                        <!-- Top: Header Brand -->
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl border border-[#afa857]/40 flex items-center justify-center bg-white shadow-sm shrink-0">
                                <span class="text-[#4b4b30] font-serif font-bold text-lg tracking-wider">DD</span>
                            </div>
                            <div>
                                <p class="text-[10px] tracking-[0.3em] uppercase font-bold text-stone-400 leading-none">Catalog Book</p>
                                <h3 class="font-serif text-xl text-[#4b4b30] font-semibold mt-1">{{ $vendorName }}</h3>
                            </div>
                        </div>

                        <!-- Middle: Main Title / Hero Text -->
                        <div class="my-10 lg:my-0">
                            <div class="inline-flex items-center gap-2 bg-[#afa857]/10 border border-[#afa857]/20 rounded-full px-3 py-1 mb-4">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#afa857] animate-pulse"></span>
                                <span class="text-[10px] tracking-widest uppercase font-semibold text-[#4b4b30]">Paket Only Decor</span>
                            </div>
                            <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-light text-[#4b4b30] tracking-tight leading-tight">
                                Price List <br class="hidden sm:inline"/>Digital <span class="font-normal text-[#afa857]">2026</span>
                            </h1>
                            <p class="mt-4 text-sm text-stone-500 font-light max-w-sm leading-relaxed">{{ $contactLine }}</p>
                        </div>

                        <!-- Bottom: Contact Info -->
                        <div class="pt-6 border-t border-stone-200/80 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-3 text-xs text-stone-600 font-medium">
                            <div class="flex items-center gap-3 bg-white p-2.5 rounded-xl border border-stone-200/40">
                                <div class="w-7 h-7 rounded-lg bg-stone-100 flex items-center justify-center">
                                    <i class="fa-solid fa-envelope text-[#afa857]"></i>
                                </div>
                                <span class="truncate">info@darwisdecor.com</span>
                            </div>
                            <div class="flex items-center gap-3 bg-white p-2.5 rounded-xl border border-stone-200/40">
                                <div class="w-7 h-7 rounded-lg bg-stone-100 flex items-center justify-center">
                                    <i class="fa-solid fa-phone text-[#afa857]"></i>
                                </div>
                                <span>+62 812-3456-7890</span>
                            </div>
                        </div>
                    </div>

                    <!-- Sisi Kanan: Visual Showcase (Besar & Dominan) -->
                    <div class="lg:col-span-7 relative min-h-[350px] lg:min-h-full rounded-2xl overflow-hidden shadow-inner group">
                        <!-- Background Image -->
                        <div class="absolute inset-0 catalog-photo transition-transform duration-700 ease-out group-hover:scale-105" style="background-image: url('{{ $coverPhoto }}'); background-size: cover; background-position: center;"></div>
                        
                        <!-- Overlay Gradasi Halus -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/10 to-transparent lg:bg-gradient-to-l lg:from-transparent lg:via-transparent"></div>
                        
                        <!-- Aksen Dekoratif di Sudut Foto -->
                        <div class="absolute right-4 top-4 bg-white/20 backdrop-blur-md border border-white/30 text-white font-serif text-sm px-4 py-2 rounded-lg tracking-widest">
                            EST. 2026
                        </div>
                    </div>

                </div>
                
            </div>
        </section>
    </div>

{{-- =====================
        Halaman paket: Split Screen Balanced
        (Cover + daftar paket + Penutup)
    ====================== --}}
    @php
        $pages = [
            
            [
                'category' => 'DEKORASI WEDDING RUMAH',
                'title' => 'HOME PACKAGE 1',
                'price' => 'Rp. 4.000.000',
                'bullets' => [
                    'Dekorasi 4m Artificial Flowers (Tanpa panggung)',
                    'Set Sofa Pelaminan', 'Mini Garden', 'Lighting Standar',
                    'Welcome Gate', '1 Kotak Amplop', '1 Standing Foto', 'Lantai Melamin',
                ],
            ],
            [
                'category' => 'DEKORASI WEDDING RUMAH',
                'title' => 'HOME PACKAGE 2',
                'price' => 'Rp. 5.000.000',
                'bullets' => [
                    'Dekorasi 5m Artificial Flowers (Tanpa panggung)',
                    'Set Sofa Pelaminan', 'Mini Garden', 'Lighting Standar',
                    'Welcome Gate', '1 Kotak Amplop', '1 Standing Foto', 'Lantai Melamin',
                ],
            ],
            [
                'category' => 'DEKORASI WEDDING RUMAH',
                'title' => 'HOME PACKAGE 3',
                'price' => 'Rp. 6.000.000',
                'bullets' => [
                    'Dekorasi 6m Artificial Mix Flowers (Tanpa panggung)',
                    'Set Sofa Pelaminan', 'Mini Garden', 'Lighting Standar',
                    'Welcome Gate', '1 Kotak Amplop', '2 Standing Foto', 'Lantai Melamin',
                    'Meja dan Kursi Akad',
                ],
            ],
            [
                'category' => 'DEKORASI WEDDING RUMAH ALL IN TENDA',
                'title' => 'HOME PACKAGE A',
                'price' => 'Rp. 11.500.000',
                'bullets' => [
                    'DEKORASI: Dekorasi 4m Artificial Flowers',
                    'Set Sofa Pelaminan', 'Mini Garden', 'Lighting Standar', 'Welcome Gate',
                    '1 Kotak Amplop', '1 Standing Foto', 'Lantai Melamin',
                    'TENDA: Ukuran Tenda 4x12',
                    'Full Karpet',
                    'Panggung 4x3',
                    'Kursi 70 + Cover',
                    'Meja 6 + Cover',
                    'Lighting',
                    'Blower 1 unit',
                ],
            ],
            [
                'category' => 'DEKORASI WEDDING RUMAH ALL IN TENDA',
                'title' => 'HOME PACKAGE B',
                'price' => 'Rp. 12.500.000',
                'bullets' => [
                    'DEKORASI: Dekorasi 5m Artificial Flowers',
                    'Set Sofa Pelaminan', 'Mini Garden', 'Lighting Standar', 'Welcome Gate',
                    '1 Kotak Amplop', '1 Standing Foto', 'Lantai Melamin',
                    'TENDA: Ukuran Tenda 4x12 / 6x12',
                    'Full Karpet',
                    'Panggung 5x3',
                    'Kursi 70 + Cover',
                    'Meja 6 + Cover',
                    'Lighting',
                    'Blower 1 Unit',
                ],
            ],
            [
                'category' => 'DEKORASI WEDDING RUMAH ALL IN TENDA',
                'title' => 'HOME PACKAGE C',
                'price' => 'Rp. 13.000.000',
                'bullets' => [
                    'DEKORASI: Dekorasi 6m Artificial Mix Flowers',
                    'Set Sofa Pelaminan', 'Mini Garden', 'Lighting Standar', 'Welcome Gate',
                    '1 Kotak Amplop', '2 Standing Foto', 'Lantai Melamin',
                    'Meja dan Kursi Akad',
                    'TENDA: Ukuran Tenda 6x12',
                    'Full Karpet',
                    'Panggung 6x3',
                    'Kursi 70 + Cover',
                    'Meja 6 + Cover',
                    'Lighting',
                    'Blower 1 Unit',
                ],
            ],
            [
                'category' => 'PAKET DEKORASI GEDUNG',
                'title' => 'DEKORASI GEDUNG A',
                'price' => 'Rp. 15.500.000',
                'bullets' => [
                    'DEKORASI: Dekorasi 8m Artificial mix fresh flowers (Tanpa panggung)',
                    'Mini Garden',
                    'Set Sofa Pelaminan',
                    'Welcome Gate',
                    'Welcome Sign',
                    'Set Meja Kursi Akad',
                    'Backdrop Musik',
                    'Pergola',
                    'Standing Flowers',
                    'Penjor',
                    '2 Kotak Uang',
                    '2 Standing Foto',
                    'Lantai Melamin',
                    'Karpet Jalan',
                    'Rekomendasi Gedung: Karlita (Aquarius Hall), Arafah Tegal, SUPM Tegal, Gedung Yaumi Slawi, Gedung Wanita.',
                ],
            ],
            [
                'category' => 'PAKET DEKORASI GEDUNG',
                'title' => 'DEKORASI GEDUNG B',
                'price' => 'Rp. 18.500.000',
                'bullets' => [
                    'DEKORASI: Dekorasi 10m Artificial mix fresh flowers (Tanpa panggung)',
                    'Mini Garden',
                    'Set Sofa Pelaminan',
                    'Welcome Gate',
                    'Welcome Sign',
                    'Set Meja Kursi Akad',
                    'Backdrop Musik',
                    'Pergola 1 Lorong',
                    'Standing Flowers',
                    'Penjor',
                    '2 Kotak Uang',
                    '2 Standing Foto',
                    'Lantai Melamin',
                    'Karpet Jalan',
                    'Rekomendasi Gedung: Grandian Slawi, Grandian Brebes, Karlita (Cancer Hall), Islamic Brebes, Korpri Slawi, Korpri Brebes, Anggraeni Jatibarang, Dapur Tempoe Doeloe Margadana, Gedung Wanita.',
                ],
            ],
            [
                'category' => 'PAKET DEKORASI GEDUNG',
                'title' => 'DEKORASI GEDUNG C',
                'price' => 'Rp. 23.500.000',
                'bullets' => [
                    'DEKORASI: Dekorasi 12m Artificial mix fresh flowers (Tanpa panggung)',
                    'Mini Garden',
                    'Set Sofa Pelaminan',
                    'Welcome Gate',
                    'Welcome Sign',
                    'Set Meja Kursi Akad',
                    'Backdrop Musik',
                    'Pergola 2 Lorong',
                    'Standing Flowers',
                    'Penjor',
                    '2 Kotak Uang',
                    '2 Standing Foto',
                    'Lantai Melamin',
                    'Karpet Jalan',
                    'Lantai Akrilik',
                    'Rekomendasi Gedung: Grandian Slawi, Karlita (Cancer Hall), Korpri Slawi, Korpri Brebes, Anggraeni Jatibarang, Dapur Tempoe Doeloe Margadana, Gedung PKTJ, Islamic Brebes.',
                ],
            ],
            [
                'category' => 'DEKORASI GEDUNG EXCLUSIVE',
                'title' => 'DEKORASI GEDUNG EXCLUSIVE',
                'price' => 'Rp. 30.000.000',
                'bullets' => [
                    'DEKORASI: Dekorasi 12-14m (max 14m) Artificial mix fresh flowers (Tanpa panggung)',
                    'Mini Garden',
                    'Set Sofa Pelaminan',
                    'Welcome Gate',
                    'Welcome Sign',
                    'Set Meja Kursi Akad',
                    'Backdrop Musik',
                    'Pergola (6x6) 3 Lorong',
                    'Standing Flowers',
                    'Penjor',
                    '2 Kotak Uang',
                    '2 Standing Foto',
                    'Lantai Melamin',
                    'Karpet Jalan (bisa motif)',
                    'Lantai Akrilik',
                    '2 Fresnel, 2 Beam',
                    'Hand Bouquet Fresh Flowers',
                    'Rekomendasi Gedung: Lasnur Slawi, Bahari In, Hanggawana, Sangrila Hall.',
                ],
            ],
        ];
    @endphp

    @for ($i = 0; $i < count($pages); $i++)
        @php
            $p = $pages[$i];
            $photo = $pagePhoto[$i] ?? $pagePhoto[0];
            $pageNumber = $i + 2;
        @endphp
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-12 antialiased" aria-label="Halaman {{ $pageNumber }}">
            <section class="catalog-page">
                <div class="catalog-sheet bg-white rounded-3xl border border-stone-200/70 shadow-xl overflow-hidden">
                    
                    <div class="grid grid-cols-1 lg:grid-cols-12 items-stretch min-h-[600px]">
                        
                        {{-- Sisi Kiri: Visual Portofolio (Porsi 5 Kolom dari 12) --}}
                        <div class="lg:col-span-5 relative min-h-[380px] md:min-h-[500px] lg:min-h-full overflow-hidden group">
                            <div class="absolute inset-0 catalog-photo transition-transform duration-700 ease-out group-hover:scale-105" 
                                style="background-image:url('{{ $photo }}'); background-size: cover; background-position: center;"></div>
                            
                            <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-transparent to-black/30"></div>

                            {{-- Floating Page Indicator --}}
                            <div class="absolute top-5 left-5 right-5 flex items-center justify-between">
                                <div class="inline-flex items-center gap-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 px-3.5 py-1.5 shadow-sm">
                                    <span class="w-2 h-2 rounded-full bg-[#afa857] animate-pulse"></span>
                                    <span class="text-[10px] tracking-widest uppercase font-semibold text-white">Darwis Decor</span>
                                </div>
                                <div class="text-right text-white">
                                    <p class="text-[9px] tracking-widest uppercase opacity-60 m-0 leading-none">Page</p>
                                    <span class="font-serif text-2xl font-light leading-none block mt-1">{{ sprintf('%02d', $pageNumber) }}</span>
                                </div>
                            </div>
                        </div>

                        {{-- Sisi Kanan: Informasi Detail (Porsi 7 Kolom dari 12) --}}
                        <div class="lg:col-span-7 bg-stone-50/40 flex flex-col justify-between p-6 sm:p-10 lg:p-12 border-t lg:border-t-0 lg:border-l border-stone-200/60">
                            <div>
                                {{-- Header Info: Kategori, Judul, & Harga --}}
                                <div class="mb-8 pb-5 border-b border-stone-200/80">
                                    <span class="inline-block text-[10px] tracking-[0.2em] uppercase font-bold text-[#afa857] mb-1">
                                        {{ $p['category'] ?? 'Rincian Paket' }}
                                    </span>
                                    <h3 class="font-serif text-3xl lg:text-4xl font-normal text-[#4b4b30] tracking-wide leading-tight">
                                        {{ $p['title'] }}
                                    </h3>
                                    
                                    <div class="mt-4 inline-flex items-baseline gap-1 bg-[#4b4b30]/5 border border-[#4b4b30]/10 px-4 py-2 rounded-xl">
                                        <span class="text-xs font-semibold text-[#4b4b30]/70 uppercase tracking-wider">IDR</span>
                                        <span class="text-2xl sm:text-3xl font-bold text-[#4b4b30] tracking-tight">
                                            {{ $p['price'] }}
                                        </span>
                                    </div>
                                </div>

                                {{-- Container Item Deskripsi/Bullets --}}
                                <div class="bg-white border border-stone-200/60 rounded-2xl p-5 sm:p-6 shadow-sm">
                                    <p class="text-[11px] tracking-widest uppercase font-bold text-stone-400 mb-4 block">Fasilitas & Kelengkapan:</p>
                                    
                                    <ul class="space-y-3.5">
                                        @foreach ($p['bullets'] as $b)
                                            @php
                                                $isHeader = str_contains($b, ':');
                                                if($isHeader) {
                                                    $parts = explode(':', $b, 2);
                                                    $renderedText = '<span class="font-semibold text-stone-800">' . trim($parts[0]) . ':</span> <span class="text-stone-600">' . trim($parts[1]) . '</span>';
                                                } else {
                                                    $renderedText = '<span class="text-stone-600">' . $b . '</span>';
                                                }
                                            @endphp
                                            <li class="flex items-start gap-3 text-xs sm:text-[13px] font-light leading-relaxed">
                                                <span class="mt-1 shrink-0 flex items-center justify-center w-4 h-4 rounded-full bg-[#afa857]/10 text-[#afa857]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3 h-3">
                                                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                                <div class="bullet-item-text">
                                                    {!! $renderedText !!}
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            {{-- Tombol Aksi di Bagian Bawah --}}
@php
                                
                                $onlyDecorPakets = \App\Models\Paket::where('kategori', 'only-decor')
                                    ->orderBy('id')
                                    ->pluck('id')
                                    ->values();

                                $paketId = $onlyDecorPakets[$i] ?? ($onlyDecorPakets[0] ?? null);
                            @endphp
                            
                            <div class="mt-10 pt-6 border-t border-stone-200/80">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-start">
                                    
                                    <div class="w-full">
                                        @include('user.paket.choose-paket-actions', ['paketId' => $paketId, 'label' => 'Pilih Paket Ini'])
                                        <p class="mt-2 text-[10px] text-stone-400 text-center sm:text-left font-light">
                                            *Pilih paket & booking tanggal di langkah berikutnya.
                                        </p>
                                    </div>

                                    <div class="w-full">
                                        <a href="#" class="group flex items-center justify-center gap-2 w-full text-center py-3.5 rounded-xl text-xs tracking-widest uppercase font-semibold transition-all duration-300 border border-stone-200 bg-white text-stone-600 hover:bg-stone-50 hover:text-[#4b4b30] shadow-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-stone-400 group-hover:text-[#afa857] transition-colors">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.82l2.612-2.613m0 0l2.612 2.613M9.332 11.207V18m-5.334-3.59c0-2.333 1.908-4.225 4.262-4.225c.137 0 .274.007.41.021C9.645 6.46 13.116 4 17.325 4c4.14 0 7.5 3.313 7.5 7.4c0 .4-.03.79-.09 1.175c1.196.48 2.04 1.637 2.04 2.99c0 1.767-1.464 3.2-3.27 3.2H4.262C2.129 18.765 0 16.948 0 14.41z" />
                                            </svg>
                                            <span>Cetak Dokumen PDF</span>
                                        </a>
                                        <p class="mt-2 text-[10px] text-stone-400 text-center sm:text-left font-light">
                                            *Unduh berkas sebagai referensi offline Anda.
                                        </p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div> </div>
            </section>
        </div>
    @endfor

{{-- =====================
    Halaman 8: Penutup & S&K
====================== --}}
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-14 antialiased" aria-label="Halaman 8">
    <section class="catalog-page">
        <div class="catalog-sheet bg-white rounded-3xl border border-stone-200/70 shadow-xl p-6 sm:p-10 lg:p-12">
            
            <!-- Header Halaman Penutup -->
            <div class="flex flex-col sm:flex-row items-start justify-between gap-6 pb-8 border-b border-stone-200/80">
                <div class="max-w-3xl">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#afa857]"></span>
                        <p class="text-[10px] tracking-[0.2em] uppercase text-stone-400 font-bold">Darwis Decor 2026</p>
                    </div>
                    <h2 class="font-serif text-3xl sm:text-4xl font-light text-[#4b4b30] tracking-wide">
                        Penutup & <span class="italic font-normal text-[#afa857]">Syarat Ketentuan</span>
                    </h2>
                    <p class="mt-3 text-sm text-stone-500 font-light leading-relaxed">
                        Paket katalog ini dirancang untuk membantu Anda memvisualisasikan estetika dan kebutuhan dekorasi dasar. Untuk hasil akhir yang paling maksimal dan presisi, tim ahli kami akan menyesuaikan detail aspek *venue* serta skala acara Anda secara intim pada sesi konsultasi lanjutan.
                    </p>
                </div>
                <div class="text-left sm:text-right shrink-0 bg-stone-50 border border-stone-200/60 px-4 py-2 rounded-xl">
                    <span class="text-[9px] tracking-[0.2em] uppercase text-stone-400 block font-semibold leading-none">Page</span>
                    <span class="font-serif text-2xl font-bold text-[#4b4b30] block mt-1 leading-none">08</span>
                </div>
            </div>

            <!-- Konten Utama: Grid Poin Tambahan & S&K -->
            <div class="mt-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Sisi Kiri: Poin Tambahan / Add-ons (Mengambil 7 Kolom) -->
                <div class="lg:col-span-7 rounded-2xl border border-stone-200/60 bg-stone-50/50 p-6 sm:p-8 shadow-sm">
                    <div class="flex items-center gap-3 border-b border-stone-200 pb-3 mb-5">
                        <div class="w-6 h-6 rounded-lg bg-[#4b4b30]/5 flex items-center justify-center text-[#afa857]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </div>
                        <h3 class="font-serif text-sm font-bold text-[#4b4b30] tracking-widest uppercase">
                            Poin Tambahan (Di Luar Paket)
                        </h3>
                    </div>
                    
                    <ul class="divide-y divide-stone-200/60">
                        @foreach([
                            'Custom Decor : start from 3jt',
                            'Melamin jalan : start 3jt (menyesuaikan venue)',
                            'Mix fresh flowers : start 1.5jt',
                            'Upgrade size decor : 1jt / meter',
                            'Photobooth / center piece / Backdrop musik : start 1jt',
                            'Lighting effect : start 3jt',
                            'Pohon Decor : 1.5jt',
                            'Pergola 4x4 : 2.5jt / custom pergola 6x6 start 4jt',
                            'Kain lorong / Decor 4x6 : 6jt'
                        ] as $index => $extra)
                            @php
                                // Memisahkan nama item dan harga agar layoutnya rata kanan-kiri yang rapi
                                $parts = explode(':', $extra, 2);
                                $itemName = trim($parts[0]);
                                $itemPrice = isset($parts[1]) ? trim($parts[1]) : '';
                            @endphp
                            <li class="flex items-center justify-between gap-4 py-3 text-xs sm:text-[13px] font-light">
                                <div class="flex items-center gap-3 text-stone-600">
                                    <span class="text-[10px] font-mono text-stone-400">/{{ sprintf('%02d', $index + 1) }}</span>
                                    <span>{{ $itemName }}</span>
                                </div>
                                @if($itemPrice)
                                    <span class="font-medium text-[#4b4b30] bg-white border border-stone-200 px-2.5 py-1 rounded-md text-xs shrink-0 shadow-sm">
                                        {{ $itemPrice }}
                                    </span>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Sisi Kanan: S&K + Catatan Penting (Mengambil 5 Kolom) -->
                <div class="lg:col-span-5 space-y-6">
                    
                    <!-- Card Syarat & Ketentuan -->
                    <div class="rounded-2xl border border-stone-200/60 bg-white p-6 shadow-sm">
                        <div class="flex items-center gap-3 border-b border-stone-200 pb-3 mb-5">
                            <div class="w-6 h-6 rounded-lg bg-[#4b4b30]/5 flex items-center justify-center text-[#afa857]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                            </div>
                            <h3 class="font-serif text-sm font-bold text-[#4b4b30] tracking-widest uppercase">
                                Syarat & Ketentuan
                            </h3>
                        </div>

                        <ul class="space-y-4">
                            <li class="flex items-start gap-3 text-xs sm:text-[13px] font-light leading-relaxed text-stone-600">
                                <span class="mt-1 shrink-0 flex items-center justify-center w-4 h-4 rounded-full bg-red-50 text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3 h-3">
                                        <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                    </svg>
                                </span>
                                <span>DP (Down Payment) <strong class="text-stone-800 font-medium">tidak dapat dikembalikan</strong> apabila klien melakukan pembatalan secara sepihak.</span>
                            </li>
                            <li class="flex items-start gap-3 text-xs sm:text-[13px] font-light leading-relaxed text-stone-600">
                                <span class="mt-1 shrink-0 flex items-center justify-center w-4 h-4 rounded-full bg-[#afa857]/10 text-[#afa857]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3 h-3">
                                        <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a17.421 17.421 0 003.24-1.773c1.72-1.124 3.426-2.614 3.426-4.902V6.757c0-.522-.31-.994-.789-1.201l-5.625-2.43A1.5 1.5 0 009.69 3.12l-5.625 2.43a1.125 1.125 0 00-.789 1.2v5.489c0 2.288 1.706 3.778 3.426 4.903a17.42 17.42 0 003.24 1.772l.018.008.006.003zM10 12a1 1 0 100-2 1 1 0 000 2zm.75-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span>Klien dengan lokasi acara di luar wilayah <strong class="text-stone-800 font-medium">Tegal</strong> akan dikenakan biaya transportasi tambahan sesuai jarak.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Card Catatan Penting -->
                    <div class="rounded-2xl bg-gradient-to-br from-[#4b4b30]/5 to-[#afa857]/10 border border-[#afa857]/20 p-6 shadow-sm">
                        <div class="flex items-center gap-2.5 text-[#4b4b30]">
                            <span class="flex h-2 w-2 relative">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#afa857] opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-[#afa857]"></span>
                            </span>
                            <span class="text-xs tracking-widest uppercase font-bold text-[#4b4b30]">Catatan Penting</span>
                        </div>
                        <p class="mt-3 text-[13px] text-stone-600 font-light leading-relaxed">
                            Untuk memastikan ketersediaan jadwal tim utama serta alokasi properti dekorasi eksklusif kami, kami sangat menyarankan Anda untuk melakukan konsultasi & <em class="font-normal text-[#4b4b30] not-italic border-b border-[#afa857]/40">booking tanggal</em> sedini mungkin sebelum kuota penuh.
                        </p>
                    </div>

                </div>
            </div> <!-- End Grid -->

        </div>
    </section>
</div>
</div>

@include('user.layouts.footer')