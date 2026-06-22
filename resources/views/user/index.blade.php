@include('user.layouts.header')

    <!-- HERO -->
    <section id="beranda" class="relative h-[95vh] min-h-[750px] flex items-center justify-center overflow-hidden">
        <!-- Background & Aesthetic Overlays -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=1920&q=80" class="w-full h-full object-cover scale-105 animate-[fade-in_2s_ease-out]" alt="Wedding Celebration" />
            <!-- Luxury Soft Vignette Overlay -->
            <div class="absolute inset-0" style="background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.3), rgba(40,40,25,0.7));"></div>
            <!-- Soft Warm Glows -->
            <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] rounded-full blur-[120px] pointer-events-none" style="background: rgba(175,168,87,0.15);"></div>
        </div>

        <!-- Content Container -->
        <div class="relative z-10 text-center text-white px-6 max-w-4xl mx-auto flex flex-col items-center">
            
            <!-- Elegant Subtitle / Premium Tag -->
            <span class="text-xs md:text-sm tracking-[0.3em] uppercase font-light mb-6 block drop-shadow-sm" style="color: rgba(212,175,55,0.9);">
                Professional Wedding Planner & Organizer
            </span>

            <!-- Luxury Typography Headline -->
            <h1 class="font-serif text-4xl md:text-6xl lg:text-7xl font-normal leading-[1.15] mb-6 tracking-wide" style="color: rgba(255,255,255,0.95);">
                Mewujudkan Pernikahan <br class="hidden md:inline"/>
                <span class="italic font-light" style="color: rgba(212,175,55,0.9);">Impian Tanpa Cela</span>
            </h1>

            <!-- Clean, Breathable Description -->
            <p class="text-sm md:text-base lg:text-lg mb-10 max-w-xl mx-auto font-light leading-relaxed tracking-wide" style="color: rgba(255,255,255,0.85);">
                Eksklusif, transparan, dan terorganisir dengan sempurna. Kami mengawal setiap detail hari bahagia Anda dengan ketenangan mutlak.
            </p>

            <!-- Minimalist Luxury Buttons (FIXED & BEAUTIFIED) -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center w-full sm:w-auto mb-16 z-20">
                <!-- Button Utama: Menggunakan warna Gold/Champagne Mewah dengan Teks Gelap Kontras -->
                <a href="#contact" class="px-8 py-3.5 rounded-full bg-[#d4af37] text-[#1c1c14] font-semibold text-sm tracking-wider shadow-xl transition-all duration-300 transform hover:-translate-y-1 hover:bg-[#e5c158] hover:shadow-[#d4af37]/20 text-center min-w-[180px]">
                    Konsultasi Gratis
                </a>
                
                <!-- Button Kedua: Efek Glassmorphism Transparan dengan Teks Putih Solid agar Kontras -->
                <a href="#portfolio" class="px-8 py-3.5 rounded-full bg-white/10 text-white border border-white/30 font-medium text-sm tracking-wider backdrop-blur-md transition-all duration-300 transform hover:-translate-y-1 hover:bg-white/20 hover:border-white/50 text-center min-w-[180px]">
                    Lihat Portofolio
                </a>
            </div>

            <!-- Sleek, High-End Trust Indicators -->
            <div class="w-full max-w-3xl border-t border-white/10 pt-8 grid grid-cols-3 gap-4 text-center">
                <div>
                    <p class="text-xs tracking-widest uppercase mb-1 font-medium" style="color: rgba(212,175,55,0.85);">Guaranteed</p>
                    <p class="text-xs md:text-sm text-white/80">Anti Double Booking</p>
                </div>
                <div class="border-x border-white/10">
                    <p class="text-xs tracking-widest uppercase mb-1 font-medium" style="color: rgba(212,175,55,0.85);">Transparent</p>
                    <p class="text-xs md:text-sm text-white/80">Tanpa Biaya Siluman</p>
                </div>
                <div>
                    <p class="text-xs tracking-widest uppercase mb-1 font-medium" style="color: rgba(212,175,55,0.85);">Meticulous</p>
                    <p class="text-xs md:text-sm text-white/80">Timeline Rapi & Detail</p>
                </div>
            </div>

        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="py-24 bg-brand-cream font-sans overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            <div class="grid lg:grid-cols-12 gap-16 items-center">
                
                <!-- KOLOM KIRI: TEKS INFORMASI (6 Kolom) -->
                <div class="lg:col-span-6 flex flex-col justify-center">
                    <!-- Premium Muted Tag -->
                    <div class="inline-flex items-center gap-2 self-start mb-6">
                        <span class="w-1.5 h-1.5 rounded-full" style="background: var(--brand-moss);"></span>
                        <span class="text-xs tracking-[0.25em] uppercase font-light" style="color: rgba(75,75,48,0.65);">Our Philosophy</span>
                    </div>
                    
                    <!-- Headline Cantik dengan Font Serif -->
                    <h2 class="font-serif text-3xl md:text-4xl lg:text-5xl font-normal leading-tight mb-6" style="color: var(--brand-moss);">
                        Di Balik Setiap Momen <br />
                        <span class="italic font-light" style="color: rgba(75,75,48,0.65);">Pernikahan yang Sempurna</span>
                    </h2>
                    
                    <!-- Deskripsi yang Mengalir & Profesional -->
                    <p class="text-sm md:text-base font-light leading-relaxed mb-10 max-w-xl" style="color: rgba(75,75,48,0.75);">
                        Darwis Decor hadir untuk mewujudkan impian para pasangan yang mendambakan hari bahagia penuh kemewahan tanpa dibebani proses yang membingungkan. Kami percaya bahwa transparansi, komunikasi berkala, dan eksekusi yang presisi adalah kunci utama kedamaian hati Anda.
                    </p>

                    <!-- Nilai Utama / Features List -->
                    <div class="space-y-6 max-w-lg">
                        <!-- Fitur 1 -->
                        <div class="flex gap-4 items-start">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center text-sm shrink-0 shadow-md" style="background:var(--brand-moss); color: var(--brand-cream);">
                                <i class="fa-solid fa-users-gear" style="color: var(--brand-cream);"></i>
                            </div>
                            <div>
                                <h3 class="font-medium text-base mb-1" style="color: var(--brand-moss);">Manajemen Tim Terpadu</h3>
                                <p class="text-xs md:text-sm font-light leading-relaxed" style="color: rgba(75,75,48,0.65);">
                                    Setiap detail dikawal oleh perencana dan eksekutor profesional yang bergerak dalam satu komando terkoordinasi.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Fitur 2 -->
                        <div class="flex gap-4 items-start">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center text-sm shrink-0 shadow-md" style="background:var(--brand-moss); color: var(--brand-cream);">
                                <i class="fa-solid fa-signature" style="color: var(--brand-cream);"></i>
                            </div>
                            <div>
                                <h3 class="font-medium text-base mb-1" style="color: var(--brand-moss);">Komitmen Transparansi</h3>
                                <p class="text-xs md:text-sm font-light leading-relaxed" style="color: rgba(75,75,48,0.65);">
                                    Kepastian jadwal kerja, laporan berkala, dan rincian harga yang jujur tanpa ada biaya silang tersembunyi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KOLOM KANAN: MULTI-IMAGE GRID PREMIUM (6 Kolom) -->
                <div class="lg:col-span-6 relative mt-12 lg:mt-0 flex justify-center items-center">
                    <!-- Dekorasi Background Lingkaran Elegan -->
                    <div class="absolute -top-10 -right-10 w-72 h-72 bg-stone-200/50 rounded-full blur-3xl pointer-events-none"></div>
                    <div class="absolute -bottom-10 -left-10 w-60 h-60 bg-stone-300/30 rounded-full blur-2xl pointer-events-none"></div>

                    <!-- Susunan Foto Estetik (Overlapping Layout) -->
                    <div class="relative w-full max-w-[480px] h-[540px]">
                        
                        <!-- Foto Utama (Belakang) -->
                        <div class="absolute top-0 left-0 w-[80%] h-[85%] rounded-[2rem] overflow-hidden shadow-2xl border-4 border-white transform -rotate-2">
                            <img src="https://images.unsplash.com/photo-1594551801881-297d7bd749d9?w=800&auto=format&fit=crop&q=80" alt="Wedding Detail" class="w-full h-full object-cover" />
                        </div>

                        <!-- Foto Kedua (Depan - Bertumpuk Menyilang) -->
                        <div class="absolute bottom-0 right-0 w-[65%] h-[65%] rounded-[2rem] overflow-hidden shadow-2xl border-4 border-white transform rotate-3">
                            <img src="https://images.unsplash.com/photo-1519225495810-7512c696505a?w=800&auto=format&fit=crop&q=80" alt="Wedding Event" class="w-full h-full object-cover" />
                        </div>

                        <!-- Floating Card Kecil yang Elegan (Kaca Blur) -->
                        <div class="absolute bottom-[20%] -left-6 bg-white/80 backdrop-blur-md rounded-2xl p-4 shadow-xl border border-white/40 max-w-[210px] transform -translate-x-2 animate-bounce-slow">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full flex items-center justify-center text-xs shrink-0" style="background:var(--brand-moss); color: var(--brand-cream);">
                                    <i class="fa-solid fa-wand-magic-sparkles" style="color: var(--brand-cream);"></i>
                                </div>
                                <div>
                                    <p class="font-serif italic text-xs text-stone-900 font-semibold mb-0.5">"Nikmati Momen Anda"</p>
                                    <p class="text-[10px] text-stone-500 font-light leading-tight">Serahkan seluruh detail teknis ke tangan kami.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SERVICES & PACKAGES -->
    <section id="services" class="py-24 bg-brand-cream font-sans">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#4b4b30]"></span>
                    <span class="text-xs tracking-[0.25em] uppercase font-light text-[#4b4b30]/70">Our Packages</span>
                </div>
                
                <h2 class="font-serif text-3xl md:text-4xl lg:text-5xl font-normal leading-tight mb-5 text-[#4b4b30]">
                    Pilihan Paket <span class="italic font-light text-[#4b4b30]/70">Pernikahan Eksklusif</span>
                </h2>
                
                <p class="text-sm md:text-base font-light max-w-2xl mx-auto leading-relaxed text-[#4b4b30]/80">
                    Pilih kelompok paket yang paling sesuai dengan kebutuhan impian hari bahagia Anda. Kami menyediakan opsi dekorasi estetik hingga layanan lengkap tanpa repot.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 items-stretch max-w-5xl mx-auto">
                
                <div class="rounded-[2rem] overflow-hidden flex flex-col justify-between p-8 md:p-10 transition-all duration-300 transform hover:-translate-y-2 bg-white border border-[#afa857]/20 shadow-[0_10px_30px_rgba(175,168,87,0.06)]">
                    <div>
                        <div class="w-12 h-12 rounded-full flex items-center justify-center text-lg mb-6 shadow-sm bg-[#afa857]/10 text-[#4b4b30]">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                        
                        <h3 class="font-serif text-xl md:text-2xl font-normal mb-1 text-[#4b4b30]">Paket Only Decor</h3>
                        <p class="text-xs tracking-wider uppercase font-light text-[#afa857] mb-4">Decoration Only Packages</p>
                        
                        <p class="text-xs md:text-sm font-light leading-relaxed mb-8 text-[#4b4b30]/80">
                            Fokus pada estetika visual venue Anda. Solusi sempurna jika Anda sudah memiliki vendor MUA dan Fotografer pilihan sendiri namun menginginkan dekorasi pelaminan yang megah dan estetik.
                        </p>
                        
                        <ul class="space-y-4 text-xs md:text-sm font-light text-[#4b4b30]/80">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-minus mt-1.5 text-[#afa857] text-[10px]"></i>
                                <span>Konsep & Desain Dekorasi Pelaminan Eksklusif</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-minus mt-1.5 text-[#afa857] text-[10px]"></i>
                                <span>Area Penerima Tamu, Gate Entrance, & Photo Booth</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-minus mt-1.5 text-[#afa857] text-[10px]"></i>
                                <span>Standing Flower & Karpet Jalan Menuju Pelaminan</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-minus mt-1.5 text-[#afa857] text-[10px]"></i>
                                <span>Set Kursi Pengantin & Orang Tua / Wali</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="pt-10">
                        <a href="{{ route('user.paket.decor-only') }}" class="block w-full text-center py-3.5 rounded-full text-xs tracking-widest uppercase font-semibold transition-all duration-300 border border-[#4b4b30]/30 text-[#4b4b30] hover:bg-[#4b4b30] hover:text-white hover:border-[#4b4b30]">
                            Detail Paket Decor
                        </a>
                    </div>
                </div>

                <div class="rounded-[2rem] overflow-hidden shadow-2xl flex flex-col justify-between p-8 md:p-10 relative transition-all duration-300 transform hover:-translate-y-2 bg-[#1c1c18] border border-[#d4af37]/20 text-white">
                    <div class="absolute top-6 right-6 text-[9px] tracking-widest uppercase font-semibold px-3 py-1 rounded-full bg-[#d4af37]/20 text-[#d4af37]">
                        Best Value All-in
                    </div>

                    <div>
                        <div class="w-12 h-12 rounded-full flex items-center justify-center text-lg mb-6 shadow-md bg-white/10 text-[#d4af37]">
                            <i class="fa-solid fa-crown"></i>
                        </div>
                        
                        <h3 class="font-serif text-xl md:text-2xl font-normal mb-1 text-white">Paket Full (All-In)</h3>
                        <p class="text-xs tracking-wider uppercase font-light text-[#d4af37] mb-4">Decor, MUA, & Photography Packages</p>
                        
                        <p class="text-xs md:text-sm font-light leading-relaxed mb-6 text-white/80">
                            Sinergi total layanan pernikahan premium tanpa batas. Paket lengkap mencakup dekorasi mewah, riasan wajah (*makeup artist*), serta tim dokumentasi profesional untuk mengabadikan momen berharga Anda.
                        </p>
                        
                        <div class="rounded-2xl p-4 mb-6 bg-white/5 border border-white/10">
                            <h4 class="text-xs uppercase font-semibold text-[#d4af37] mb-1">Fasilitas All-In Lengkap</h4>
                            <p class="text-[11px] text-white/70 font-light leading-relaxed">Nikmati kemudahan koordinasi satu pintu untuk seluruh kebutuhan inti pesta pernikahan Anda tanpa pusing memikirkan manajemen vendor terpisah.</p>
                        </div>
                        
                        <ul class="space-y-4 text-xs md:text-sm font-light text-white/80">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check mt-1 text-[#d4af37] text-xs"></i>
                                <span>Dekorasi Pelaminan Megah (Custom Desain)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check mt-1 text-[#d4af37] text-xs"></i>
                                <span>Tata Rias (MUA) Pengantin, Busana & Aksesoris Lengkap</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check mt-1 text-[#d4af37] text-xs"></i>
                                <span>Foto & Video Liputan Hari-H oleh Photographer (FG) Pro</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="pt-10">
                        <a href="{{ route('user.paket.full-service') }}" class="block w-full text-center py-3.5 rounded-full text-xs tracking-widest uppercase font-bold transition-all duration-300 bg-[#d4af37] text-[#1c1c14] shadow-lg hover:bg-[#e5c158] hover:-translate-y-0.5">
                            Detail Paket Full Service
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PORTFOLIO -->
    <section id="portfolio" class="py-24 bg-white font-sans">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">

            <!-- Lightbox Modal -->
            <div
                id="portfolioLightbox"
                class="fixed inset-0 z-[1000] hidden"
                aria-hidden="true"
            >
                <div class="absolute inset-0 bg-black/80 backdrop-blur-sm"></div>

                <div class="relative z-[1001] w-full h-full flex items-center justify-center px-4">
                    <div class="relative max-w-5xl w-full">
                        <!-- Top bar -->
                        <div class="flex items-center justify-between gap-4 mb-4">
                            <div class="text-white/90 text-xs tracking-widest uppercase font-light">
                                <span class="inline-flex items-center gap-2">
                                    <span id="portfolioLightboxThemeDot" class="w-1.5 h-1.5 rounded-full bg-[#afa857]"></span>
                                    <span id="portfolioLightboxTitle">—</span>
                                </span>
                            </div>
                            <button
                                type="button"
                                id="portfolioLightboxClose"
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 border border-white/20 text-white hover:bg-white/15 transition"
                                aria-label="Tutup"
                            >
                                <i class="fa-solid fa-xmark text-sm"></i>
                            </button>
                        </div>

                        <img
                            id="portfolioLightboxImg"
                            alt="Portfolio"
                            class="w-full max-h-[78vh] object-contain rounded-[1.4rem] border border-white/20 shadow-2xl bg-stone-950/10"
                            src=""
                        />

                        <!-- Prev / Next -->
                        <button
                            type="button"
                            id="portfolioLightboxPrev"
                            class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-2 sm:translate-x-0 inline-flex items-center justify-center w-12 h-12 rounded-full bg-white/10 border border-white/20 text-white hover:bg-white/15 transition"
                            aria-label="Sebelumnya"
                        >
                            <i class="fa-solid fa-chevron-left text-sm"></i>
                        </button>

                        <button
                            type="button"
                            id="portfolioLightboxNext"
                            class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-2 sm:translate-x-0 inline-flex items-center justify-center w-12 h-12 rounded-full bg-white/10 border border-white/20 text-white hover:bg-white/15 transition"
                            aria-label="Berikutnya"
                        >
                            <i class="fa-solid fa-chevron-right text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Header Section -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 mb-4">
                    <span class="w-1.5 h-1.5 bg-stone-700 rounded-full"></span>
                    <span class="text-xs tracking-[0.25em] uppercase font-light text-stone-500">Visual Journey</span>
                </div>
                
                <h2 class="font-serif text-3xl md:text-4xl lg:text-5xl font-normal text-stone-900 leading-tight mb-5">
                    Kisah & <span class="italic text-stone-600 font-light">Karya Kami</span>
                </h2>
                
                <p class="text-sm md:text-base text-stone-500 font-light max-w-2xl mx-auto leading-relaxed">
                    Dokumentasi eksklusif mahakarya dekorasi, keheningan prosesi akad, hingga kemegahan resepsi dari berbagai konsep pernikahan yang telah kami abadikan.
                </p>
            </div>
            
            <div class="mb-12 flex flex-wrap items-center justify-center gap-3">
                <button data-filter="all" class="filter-btn px-5 py-2 rounded-full bg-stone-900 text-stone-100 text-xs tracking-widest uppercase font-medium transition-all duration-300 shadow-sm">All Concepts</button>
                <button data-filter="Tradisional" class="filter-btn px-5 py-2 rounded-full bg-stone-50 border border-stone-200/60 text-stone-600 text-xs tracking-widest uppercase font-light hover:bg-stone-100 hover:text-stone-900 transition-all duration-300">Tradisional</button>
                <button data-filter="Intimate" class="filter-btn px-5 py-2 rounded-full bg-stone-50 border border-stone-200/60 text-stone-600 text-xs tracking-widest uppercase font-light hover:bg-stone-100 hover:text-stone-900 transition-all duration-300">Intimate</button>
                <button data-filter="Outdoor" class="filter-btn px-5 py-2 rounded-full bg-stone-50 border border-stone-200/60 text-stone-600 text-xs tracking-widest uppercase font-light hover:bg-stone-100 hover:text-stone-900 transition-all duration-300">Outdoor</button>
                <button data-filter="Modern" class="filter-btn px-5 py-2 rounded-full bg-stone-50 border border-stone-200/60 text-stone-600 text-xs tracking-widest uppercase font-light hover:bg-stone-100 hover:text-stone-900 transition-all duration-300">Modern</button>
            </div>

            <!-- Gallery Grid Area -->
            <!-- Menggunakan grid yang lebih fleksibel, rapi, dan responsif -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php $gals = [
                    ['img'=>'https://images.unsplash.com/photo-1715588837113-80441978e93e?w=600&auto=format&fit=crop&q=80','theme'=>'Tradisional', 'title'=>'The Royal Javanese'],
                    ['img'=>'https://images.unsplash.com/photo-1523438885200-e635ba2c371e?auto=format&fit=crop&w=800&q=80','theme'=>'Modern', 'title'=>'Minimalist Elegance'],
                    ['img'=>'https://images.unsplash.com/photo-1607190074257-dd4b7af0309f?auto=format&fit=crop&w=800&q=80','theme'=>'Intimate', 'title'=>'Warm Rustic Love'],
                    ['img'=>'https://images.unsplash.com/photo-1583939411023-14783179e581?w=600&auto=format&fit=crop&q=80','theme'=>'Outdoor', 'title'=>'Botanical Garden'],
                    ['img'=>'https://images.unsplash.com/photo-1523437626977-ff7c8b3f5a9a?auto=format&fit=crop&w=800&q=80','theme'=>'Modern', 'title'=>'The White Symphony'],
                    ['img'=>'https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=800&q=80','theme'=>'Tradisional', 'title'=>'Classic Minang Vows'],
                    ['img'=>'https://images.unsplash.com/photo-1521791055366-0d553872150a?auto=format&fit=crop&w=800&q=80','theme'=>'Intimate', 'title'=>'Ethereal Dinner'],
                    ['img'=>'https://images.unsplash.com/photo-1511285560929-80b456fea0bc?w=600&auto=format&fit=crop&q=80','theme'=>'Outdoor', 'title'=>'Sunset Serenade'],
                ]; @endphp

                @foreach($gals as $gal)
                    <!-- Card Item dengan Smooth Hover Transition -->
                    <div class="group relative h-80 overflow-hidden rounded-[1.8rem] bg-stone-100 shadow-sm cursor-pointer border border-stone-100">
                        
                        <!-- Image component (click opens lightbox) -->
                        <img
                            src="{{ $gal['img'] }}"
                            alt="Gallery {{ $gal['theme'] }}"
                            class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110"
                            loading="lazy"
                            data-img="{{ $gal['img'] }}"
                            data-title="{{ $gal['title'] }}"
                            data-theme="{{ $gal['theme'] }}"
                        />
                        
                        <!-- Luxury Vignette Overlay (Makin gelap saat di-hover) -->
                        <div class="absolute inset-0 bg-gradient-to-t from-stone-950/80 via-stone-950/20 to-transparent opacity-90 group-hover:from-stone-950/95 transition-all duration-300"></div>
                        
                        <!-- Top Badge (Pindah ke kanan atas dengan style kaca minimalis) -->
                        <div class="absolute top-4 right-4 z-10">
                            <span class="px-3 py-1 rounded-full bg-white/10 backdrop-blur-md text-white/90 border border-white/10 text-[10px] tracking-widest uppercase font-light">
                                {{ $gal['theme'] }}
                            </span>
                        </div>

                        <!-- Bottom Text Info (Slide Up effect saat di-hover) -->
                        <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="font-serif text-lg text-white font-normal tracking-wide mb-1 opacity-90 group-hover:opacity-100 transition-opacity">
                                {{ $gal['title'] }}
                            </h3>
                            <p class="text-[11px] tracking-widest uppercase font-light opacity-0 group-hover:opacity-100 transition-all duration-500 delay-70" style="color: rgba(175,168,87,0.9);">
                                View Showcase <i class="fa-solid fa-arrow-right text-[9px] ml-1"></i>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            
        </div>
    </section>

    <!-- AVAILABILITY -->
    <section id="availability" class="py-24 bg-brand-cream font-sans">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            
            <!-- Header Section -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 mb-4">
                    <span class="w-1.5 h-1.5 rounded-full" style="background:var(--brand-moss);"></span>
                    <span class="text-xs tracking-[0.25em] uppercase font-light" style="color:rgba(75,75,48,0.7);">Availability Calendar</span>
                </div>

                <h2 class="font-serif text-3xl md:text-4xl lg:text-5xl font-normal leading-tight mb-5" style="color:var(--brand-moss);">
                    Ketersediaan <span class="italic font-light" style="color:rgba(109,113,92,0.85);">Tanggal Pernikahan</span>
                </h2>

                <p class="text-sm md:text-base font-light max-w-2xl mx-auto leading-relaxed" style="color:rgba(75,75,48,0.75);">
                    Sistem kalender real-time untuk mempermudah Anda melihat slot kosong. Amankan tanggal bahagia Anda sebelum terisi oleh calon mempelai lain.
                </p>
            </div>

            <div class="grid lg:grid-cols-12 gap-8 items-start">
                
                <!-- KIRI: RINGKASAN & LEGEND (5 Col) -->
                <div class="lg:col-span-4 space-y-6">
                    <!-- Legend Card -->
                    <div class="rounded-[2rem] border border-stone-200/80 bg-white p-6 md:p-8 shadow-sm">
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <p class="text-[10px] uppercase tracking-[0.25em] text-stone-400 font-bold">Indikator</p>
                                <h3 class="font-serif text-xl font-normal mt-1" style="color:var(--brand-moss);">Status Kalender</h3>
                            </div>
                            <div class="inline-flex items-center justify-center w-11 h-11 rounded-2xl bg-[#d4af37]/10 text-[#4b4b30]">
                                <i class="fa-solid fa-calendar-check text-base"></i>
                            </div>
                        </div>

                        <!-- Legend Status Wrapper -->
                        <div class="space-y-3">
                            <div class="flex items-center gap-4 rounded-2xl border border-stone-100 bg-stone-50/50 p-3.5">
                                <span class="w-3 h-3 rounded-full bg-white border-2 border-stone-300 shadow-sm flex-shrink-0"></span>
                                <div>
                                    <p class="text-xs font-semibold" style="color:var(--brand-moss);">Tersedia (Available)</p>
                                    <p class="text-[11px] text-stone-500 mt-0.5">Slot kosong, bebas Anda pilih untuk hari H.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center gap-4 rounded-2xl border border-[#d4af37]/20 bg-[#fdfaf2] p-3.5">
                                <span class="w-3 h-3 rounded-full bg-[#d4af37] flex-shrink-0"></span>
                                <div>
                                    <p class="text-xs font-semibold" style="color:var(--brand-moss);">Dipesan (Reserved)</p>
                                    <p class="text-[11px] text-stone-500 mt-0.5">Sedang di-hold / menunggu kelengkapan DP.</p>
                                </div>
                            </div>

                            <!-- UPGRADED: Legend Booked Premium Look -->
                            <div class="flex items-center gap-4 rounded-2xl border border-stone-200 bg-stone-50 p-3.5">
                                <span class="w-3 h-3 rounded-md flex-shrink-0" style="background: linear-gradient(135deg, #a8a29e 25%, #d6d3d1 25%, #d6d3d1 50%, #a8a29e 50%, #a8a29e 75%, #d6d3d1 75%, #d6d3d1 100%); background-size: 8px 8px;"></span>
                                <div>
                                    <p class="text-xs font-semibold text-stone-400">Sudah Dibooking (Booked)</p>
                                    <p class="text-[11px] text-stone-400 mt-0.5">Slot terkunci penuh oleh pasangan lain.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Notice Card -->
                    <div class="rounded-[2rem] border border-stone-200/80 bg-white p-6 md:p-8 shadow-sm">
                        <p class="text-[10px] uppercase tracking-[0.25em] text-stone-400 font-bold mb-3">Saran Konsultan</p>
                        <div class="flex gap-3 items-start text-xs text-stone-600 leading-relaxed bg-[#f8f6ee] p-4 rounded-2xl border border-[#4b4b30]/10">
                            <i class="fa-solid fa-circle-info text-[#4b4b30] mt-0.5"></i>
                            <p>Weekend di bulan **Juni & Juli** adalah *High-Season*. Jika Anda mengincar tanggal akhir pekan, sangat disarankan untuk melakukan *lock down* tanggal minggu ini.</p>
                        </div>
                    </div>
                </div>

                <!-- KANAN: LIVE VISUAL CALENDAR GRAPHIC (8 Col) -->
                <div class="lg:col-span-8">
                    <div class="rounded-[2rem] border border-stone-200 bg-[#1c2118] text-white overflow-hidden shadow-xl">
                        
                        <!-- Calendar Header Banner -->
                        <div class="px-6 py-6 md:px-8 bg-[#262c22] border-b border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                            <div class="flex items-start gap-3">
                                <div>
                                    <p class="text-[10px] uppercase tracking-[0.3em] font-medium" style="color:var(--brand-moss);">Interactive Grid</p>
                                    <h3 class="font-serif text-2xl font-normal mt-1 text-white" id="calMonthTitle">—</h3>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <button type="button" id="calPrevBtn" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/5 border border-white/10 text-stone-200 hover:bg-white/10 transition">
                                    <i class="fa-solid fa-chevron-left text-sm"></i>
                                </button>
                                <button type="button" id="calNextBtn" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/5 border border-white/10 text-stone-200 hover:bg-white/10 transition">
                                    <i class="fa-solid fa-chevron-right text-sm"></i>
                                </button>
                            </div>
                            <span class="inline-flex items-center gap-2 rounded-full bg-white/5 border border-white/10 px-4 py-1.5 text-[10px] uppercase tracking-[0.15em] text-stone-300 self-start sm:self-auto">
                                <i class="fa-solid fa-clock-rotate-left text-[#d4af37]"></i> Terakhir Diperbarui: Hari Ini
                            </span>
                        </div>

                        <!-- Real Calendar Interface Area -->
                        <div class="p-6 md:p-8 bg-[#1b2119]">

                            <!-- Days Of Week Header Grid -->
                            <div class="grid grid-cols-7 gap-2 mb-4 text-center text-[11px] uppercase tracking-widest font-semibold text-stone-400 border-b border-white/5 pb-3">
                                <div>Min</div>
                                <div>Sen</div>
                                <div>Sel</div>
                                <div>Rab</div>
                                <div>Kam</div>
                                <div>Jum</div>
                                <div>Sab</div>
                            </div>

@php
                            use App\Models\Booking;
                            use Carbon\Carbon;

                            // 12 bulan dimulai dari bulan sekarang
                            $start = Carbon::now()->startOfMonth();
                            $months = [];
                            for ($i = 0; $i < 12; $i++) {
                                $m = $start->copy()->addMonthsNoOverflow($i)->startOfMonth();
                                $months[] = $m;
                            }

                            $startDate = $months[0]->copy()->startOfMonth();
                            $endDate = $months[count($months)-1]->copy()->endOfMonth();

                                $bookings = Booking::query()
                                		->whereBetween('tanggal_booking', [$startDate->toDateString(), $endDate->toDateString()])
                                ->select(['tanggal_booking'])
                                ->get();

                                // map booked days per bulan: ['YYYY-MM' => [day1, day2, ...]]
                            // catatan: aturan status tidak digunakan (semua tanggal dari tabel bookings akan dianggapBooked)
                            $bookedMap = [];
                            foreach ($bookings as $b) {
                                $d = Carbon::parse($b->tanggal_booking);
                                $key = $d->format('Y-m');
                                $day = (int)$d->day;
                                if (!isset($bookedMap[$key])) {
                                    $bookedMap[$key] = [];
                                }
                                $bookedMap[$key][$day] = true;
                            }

                            // render 12 bulan (hanya 1 yang visible via JS)
                            $monthBoxesHtml = '';
                            foreach ($months as $idx => $m) {
                                $key = $m->format('Y-m');
                                $title = $m->translatedFormat('F Y'); // en locale fallback

                                // jumlah hari dalam bulan
                                $daysInMonth = $m->daysInMonth;

                                // offset grid: kita pakai Monday sebagai kolom pertama (Min/ Sen...)
                                // Carbon: isoWeekday(1=Mon..7=Sun)
                                $firstIso = $m->isoWeekday();
                                $leadingEmpty = $firstIso - 1; // 0..6

                                // buat array dayData 1..daysInMonth
                                $calendarDays = [];
                                for ($dnum = 1; $dnum <= $daysInMonth; $dnum++) {
                                    $dt = $m->copy()->day($dnum);
                                    $isBooked = isset($bookedMap[$key]) && isset($bookedMap[$key][$dnum]);
                                    $calendarDays[$dnum] = [
                                        'status' => $isBooked ? 'Booked' : 'Available',
                                        'note' => $isBooked ? 'Sudah dibooking oleh pasangan lain.' : 'Slot Weekday Bebas',
                                    ];
                                    // note weekend simple
                                    if (!$isBooked) {
                                        $dow = $dt->dayOfWeekIso; // 1..7
                                        if ($dow >= 6) {
                                            $calendarDays[$dnum]['note'] = 'Weekend Slot';
                                        }
                                        if ($dow === 5 && $m->month === 6 && $m->year === $m->year) {
                                            // no-op (biar kompatibel display)
                                        }
                                    }
                                }

                                $monthBoxesHtml .= '<div class="calMonthBox ' . ($idx === 0 ? 'is-active' : '') . '" data-month-index="' . $idx . '" data-month-key="' . $key . '">';

                                $monthBoxesHtml .= '<div class="grid grid-cols-7 gap-2 md:gap-3">';

                                for ($i = 0; $i < $leadingEmpty; $i++) {
                                    $monthBoxesHtml .= '<div class="bg-transparent rounded-2xl aspect-square"></div>';
                                }

                                foreach ($calendarDays as $dateNum => $dayData) {
                                    $boxStyle = "bg-white/5 border border-white/10 hover:bg-white/10 text-white cursor-pointer";
                                    $customInlineStyle = "";
                                    $badgeIcon = "";
                                    $statusColor = "text-[#32412f]";

                                    if ($dayData['status'] === 'Booked') {
                                        $boxStyle = "border border-stone-800 text-stone-500/70 hover:border-stone-600 transition-colors duration-300";
                                        $customInlineStyle = "background: linear-gradient(135deg, rgba(38,44,34,0.4) 25%, rgba(27,33,25,0.4) 25%, rgba(27,33,25,0.4) 50%, rgba(38,44,34,0.4) 50%, rgba(38,44,34,0.4) 75%, rgba(27,33,25,0.4) 75%, rgba(27,33,25,0.4) 100%); background-size: 12px 12px;";
                                        $badgeIcon = "<span class='text-[8px] tracking-wider font-bold text-stone-600 px-1.5 py-0.5 rounded bg-stone-900/40 uppercase'>Sold</span>";
                                        $statusColor = "text-stone-400 font-semibold";
                                    }

                                    $opacityClass = $dayData['status'] === 'Booked' ? 'opacity-30' : '';

                                    $monthBoxesHtml .= "<div class='group relative rounded-xl md:rounded-2xl p-2.5 md:p-3 aspect-square flex flex-col justify-between transition-all duration-200 {$boxStyle}' style='{$customInlineStyle}'>";
                                    $monthBoxesHtml .= "<div class='flex items-start justify-between w-full'>";
                                    $monthBoxesHtml .= "<span class='text-xs md:text-sm font-medium tracking-wide {$opacityClass}'>" . sprintf('%02d', $dateNum) . "</span>";
                                    $monthBoxesHtml .= $badgeIcon;
                                    $monthBoxesHtml .= "</div>";
                                    $monthBoxesHtml .= "<div class='absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover:block w-48 bg-stone-900 text-stone-200 text-[10px] p-2.5 rounded-xl border border-stone-700 shadow-2xl z-30 pointer-events-none text-center'>";
                                    $monthBoxesHtml .= "<p class='uppercase tracking-wider text-[9px] {$statusColor}'>● {$dayData['status']}</p>";
                                    $monthBoxesHtml .= "<p class='text-stone-300 mt-1 leading-normal font-light'>{$dayData['note']}</p>";
                                    $monthBoxesHtml .= "<div class='absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-stone-900'></div>";
                                    $monthBoxesHtml .= "</div>";
                                    $monthBoxesHtml .= "</div>";
                                }

                                $monthBoxesHtml .= '</div>'; // grid

                                $monthBoxesHtml .= '</div>'; // calMonthBox
                            }

                            echo $monthBoxesHtml;
                        @endphp

                            <!-- Action Bottom Bar inside calendar -->
                            <div class="mt-8 pt-6 border-t border-white/5 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs">
                                <p class="text-stone-400 font-light text-center sm:text-left">Menemukan slot tanggal yang cocok? Hubungi kami untuk langsung hold.</p>
                                <a href="#contact" class="px-5 py-2.5 rounded-full bg-[#d4af37] text-[#1c1c14] font-semibold tracking-wider hover:bg-[#e5c158] transition duration-300 text-center w-full sm:w-auto">
                                    Hubungi WO & Lock Tanggal
                                </a>
                            </div>

                            <style>
                                .calMonthBox { display:none; }
                                .calMonthBox.is-active { display:block; }
                            </style>

                            <script>
                                (function(){
                                    const boxes = Array.from(document.querySelectorAll('.calMonthBox'));
                                    const titleEl = document.getElementById('calMonthTitle');
                                    const prevBtn = document.getElementById('calPrevBtn');
                                    const nextBtn = document.getElementById('calNextBtn');

                                    let idx = 0;
                                    function setActive(newIdx){
                                        if(newIdx < 0 || newIdx >= boxes.length) return;
                                        boxes.forEach((b, i)=>{
                                            if(i === newIdx) b.classList.add('is-active');
                                            else b.classList.remove('is-active');
                                        });
                                        idx = newIdx;

                                        const key = boxes[idx]?.dataset.monthKey; // YYYY-MM
                                        if(titleEl && key){
                                            const [y,m] = key.split('-');
                                            const monthNames = [
                                                'Januari','Februari','Maret','April','Mei','Juni',
                                                'Juli','Agustus','September','Oktober','November','Desember'
                                            ];
                                            const mi = parseInt(m,10)-1;
                                            const mm = monthNames[mi] || key;
                                            titleEl.textContent = mm + ' ' + y;
                                        }
                                    }

                                    // init title
                                    setActive(0);

                                    if(prevBtn){
                                        prevBtn.addEventListener('click', (e)=>{ e.preventDefault(); setActive(idx-1); });
                                    }
                                    if(nextBtn){
                                        nextBtn.addEventListener('click', (e)=>{ e.preventDefault(); setActive(idx+1); });
                                    }

                                    // swipe support
                                    const container = document.querySelector('#availability');
                                    let startX = 0;
                                    let isDown = false;
                                    if(container){
                                        container.addEventListener('touchstart', (ev)=>{
                                            if(ev.touches && ev.touches.length){ startX = ev.touches[0].clientX; isDown = true; }
                                        }, {passive:true});

                                        container.addEventListener('touchend', (ev)=>{
                                            if(!isDown) return;
                                            isDown = false;
                                            const endX = (ev.changedTouches && ev.changedTouches.length) ? ev.changedTouches[0].clientX : startX;
                                            const dx = endX - startX;
                                            if(Math.abs(dx) < 50) return;
                                            if(dx > 0) setActive(idx-1); else setActive(idx+1);
                                        });
                                    }
                                })();
                            </script>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- REVIEWS -->
    <section id="reviews" class="py-24 bg-stone-100/60 font-sans">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 mb-4">
                    <span class="w-1.5 h-1.5 bg-stone-700 rounded-full"></span>
                    <span class="text-xs tracking-[0.25em] uppercase font-light text-stone-500">Love Stories</span>
                </div>
                
                <h2 class="font-serif text-3xl md:text-4xl lg:text-5xl font-normal text-stone-900 leading-tight mb-5">
                    Apa Kata <span class="italic text-stone-600 font-light">Mereka?</span>
                </h2>
                
                <p class="text-sm md:text-base text-stone-500 font-light max-w-2xl mx-auto leading-relaxed">
                    Untaian kisah bahagia dan apresiasi jujur dari para pasangan yang telah mempercayakan hari sakral mereka di tangan kami.
                </p>
            </div>

            <div class="relative">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between mb-8">
                    <div class="text-sm text-stone-500">Review pasangan kami dalam format carousel.</div>
                    <div class="flex items-center gap-3">
                        <button type="button" class="review-prev inline-flex items-center justify-center w-11 h-11 rounded-full border border-stone-300 bg-white text-stone-700 hover:border-stone-500 hover:text-stone-900 transition duration-300 disabled:opacity-35 disabled:cursor-not-allowed" aria-label="Sebelumnya">
                            <i class="fas fa-chevron-left text-sm"></i>
                        </button>
                        <button type="button" class="review-next inline-flex items-center justify-center w-11 h-11 rounded-full border border-stone-300 bg-white text-stone-700 hover:border-stone-500 hover:text-stone-900 transition duration-300 disabled:opacity-35 disabled:cursor-not-allowed" aria-label="Berikutnya">
                            <i class="fas fa-chevron-right text-sm"></i>
                        </button>
                    </div>
                </div>

                <div class="overflow-hidden pb-4">
                    <div class="reviews-track flex gap-8 transition-transform duration-500 ease-in-out">
                        @php $reviews = [
                            ['name'=>'Nadia & Rafi','role'=>'Akad + Resepsi Modern','text'=>'Konsepnya pas banget sama yang kami bayangkan. Timnya responsif, timeline aman, dan eksekusinya rapi. Rasanya tenang sekali karena semua detail terorganisir dengan sempurna.','stars'=>5],
                            ['name'=>'Salsa & Dimas','role'=>'Intimate Rustic Wedding','text'=>'Dari awal planning sampai hari H berjalan tanpa drama. Harga transparan dan detailnya jelas. Dekorasi benar-benar memberikan kesan mewah dan hangat di mata seluruh tamu undangan.','stars'=>5],
                            ['name'=>'Rina & Kevin','role'=>'Outdoor Botanical Wedding','text'=>'Kami suka cara mereka mengatur susunan acara yang sangat fluid. Tidak ada momen yang terlewat. Dari prosesi akad hingga resepsi semuanya mengalir smooth, dan hasilnya kece banget.','stars'=>5],
                            ['name'=>'Siti & Supri','role'=>'Outdoor Botanical Wedding','text'=>'Kami suka cara mereka mengatur susunan acara yang sangat fluid. Tidak ada momen yang terlewat. Dari prosesi akad hingga resepsi semuanya mengalir smooth, dan hasilnya kece banget.','stars'=>5],
                        ]; @endphp

                        @foreach($reviews as $rev)
                            <article class="review-card w-full sm:w-[calc(50%-16px)] lg:w-[calc(33.3333%-21.3333px)] flex-none bg-white rounded-[2rem] border border-stone-200/60 shadow-xl shadow-stone-200/30 p-8 flex flex-col justify-between relative overflow-hidden group hover:border-stone-400 transition-all duration-300">
                                <div class="absolute -top-2 -right-2 text-stone-100 text-8xl font-serif pointer-events-none select-none group-hover:text-stone-200/70 transition-colors duration-300">”</div>
                                <div class="relative z-10">
                                    <div class="flex text-amber-400 gap-1 mb-6 text-xs">
                                        @for($i=0; $i<$rev['stars']; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                    </div>
                                    <p class="text-stone-600 text-sm md:text-base font-light leading-relaxed italic mb-8">“{{ $rev['text'] }}”</p>
                                </div>
                                <div class="border-t border-stone-100 pt-5 relative z-10">
                                    <h3 class="font-serif text-base font-medium text-stone-900 mb-0.5">{{ $rev['name'] }}</h3>
                                    <p class="text-[11px] tracking-wider uppercase font-medium text-stone-400">{{ $rev['role'] }}</p>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var track = document.querySelector('.reviews-track');
                    var cards = track ? Array.from(track.children) : [];
                    var prevBtn = document.querySelector('.review-prev');
                    var nextBtn = document.querySelector('.review-next');
                    var activeIndex = 0;
                    var visibleCount = 1;
                    var gap = 0;

                    if (!track || !prevBtn || !nextBtn || cards.length === 0) {
                        return;
                    }

                    var calculateVisibleCount = function () {
                        if (window.innerWidth >= 1024) {
                            return 3;
                        }
                        if (window.innerWidth >= 640) {
                            return 2;
                        }
                        return 1;
                    };

                    var calculateDimensions = function () {
                        gap = parseFloat(getComputedStyle(track).gap) || 32;
                        visibleCount = calculateVisibleCount();
                        activeIndex = Math.min(activeIndex, Math.max(0, cards.length - visibleCount));
                        updateCarousel();
                    };

                    var updateButtons = function () {
                        prevBtn.disabled = activeIndex === 0;
                        nextBtn.disabled = activeIndex >= cards.length - visibleCount;
                    };

                    var updateCarousel = function () {
                        if (cards.length === 0) {
                            return;
                        }
                        var cardWidth = cards[0].getBoundingClientRect().width;
                        var offset = (cardWidth + gap) * activeIndex;
                        track.style.transform = 'translateX(-' + offset + 'px)';
                        updateButtons();
                    };

                    // Tambahkan parameter 'e' dan e.preventDefault() di bawah ini
                    prevBtn.addEventListener('click', function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        activeIndex = Math.max(0, activeIndex - 1);
                        updateCarousel();
                    });

                    nextBtn.addEventListener('click', function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        activeIndex = Math.min(cards.length - visibleCount, activeIndex + 1);
                        updateCarousel();
                    });

                    window.addEventListener('resize', calculateDimensions);
                    calculateDimensions();
                });
            </script>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="py-24 bg-stone-50 font-sans">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            <div class="grid lg:grid-cols-12 gap-16 items-start">
                
                <!-- KOLOM KIRI: INFORMASI KONTAK (5 Kolom) -->
                <div class="lg:col-span-5 flex flex-col justify-center">
                    <!-- Premium Tag -->
                    <div class="inline-flex items-center gap-2 self-start mb-4">
                        <span class="w-1.5 h-1.5 bg-stone-700 rounded-full"></span>
                        <span class="text-xs tracking-[0.25em] uppercase font-light text-stone-500">Inquiry & Consultation</span>
                    </div>
                    
                    <!-- Title Serif Style -->
                    <h2 class="font-serif text-3xl md:text-4xl lg:text-5xl font-normal text-stone-900 leading-tight mb-5">
                        Mulai Langkah <br />
                        <span class="italic text-stone-600 font-light">Hari Bahagia Anda</span>
                    </h2>
                    
                    <p class="text-sm md:text-base text-stone-500 font-light leading-relaxed mb-10 max-w-md">
                        Diskusikan konsep impian Anda bersama tim perencana kami. Sampaikan rincian awal acara, dan kami akan meracik opsi penawaran terbaik khusus untuk Anda.
                    </p>

                    <!-- Clean & Unified Contact Cards -->
                    <div class="space-y-4">
                        <!-- WhatsApp Component -->
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-white border border-stone-200/60 shadow-sm hover:border-stone-400 transition-all duration-300">
                            <div class="w-10 h-10 rounded-full bg-stone-800 text-stone-100 flex items-center justify-center text-sm shrink-0 shadow-sm">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xs tracking-wider uppercase font-semibold text-stone-800">WhatsApp Business</h3>
                                <p class="text-[11px] md:text-xs text-stone-500 font-light">Respons cepat untuk reservasi & ketersediaan jadwal.</p>
                            </div>
                            <a href="https://wa.me/" class="text-stone-400 hover:text-stone-800 p-2 transition-colors">
                                <i class="fa-solid fa-chevron-right text-xs"></i>
                            </a>
                        </div>

                        <!-- Email Component -->
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-white border border-stone-200/60 shadow-sm hover:border-stone-400 transition-all duration-300">
                            <div class="w-10 h-10 rounded-full bg-stone-800 text-stone-100 flex items-center justify-center text-sm shrink-0 shadow-sm">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xs tracking-wider uppercase font-semibold text-stone-800">Official Email</h3>
                                <p class="text-[11px] md:text-xs text-stone-500 font-light">Kirim berkas acuan konsep atau lampiran proposal.</p>
                            </div>
                            <a href="mailto:hello@example.com" class="text-stone-400 hover:text-stone-800 p-2 transition-colors">
                                <i class="fa-solid fa-chevron-right text-xs"></i>
                            </a>
                        </div>

                        <!-- Instagram Component -->
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-white border border-stone-200/60 shadow-sm hover:border-stone-400 transition-all duration-300">
                            <div class="w-10 h-10 rounded-full bg-stone-800 text-stone-100 flex items-center justify-center text-sm shrink-0 shadow-sm">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xs tracking-wider uppercase font-semibold text-stone-800">Instagram</h3>
                                <p class="text-[11px] md:text-xs text-stone-500 font-light">Eksplorasi galeri visual dan *update* proyek terbaru.</p>
                            </div>
                            <a href="#" class="text-stone-400 hover:text-stone-800 p-2 transition-colors">
                                <i class="fa-solid fa-chevron-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- KOLOM KANAN: FORMULIR KONSULTASI PREMIUM (7 Kolom) -->
                <div class="lg:col-span-7 w-full">
                    <div class="bg-white rounded-[2rem] border border-stone-200/80 shadow-xl shadow-stone-200/40 p-8 md:p-10">
                        <h3 class="font-serif text-xl text-stone-900 font-normal mb-1">Formulir Perencanaan</h3>
                        <p class="text-xs text-stone-400 font-light mb-8">Silakan isi data awal untuk mempermudah perhitungan kalkulasi estimasi.</p>
                        
                        <form class="space-y-6">
                            <!-- Input Nama -->
                            <div>
                                <label class="block text-xs tracking-widest uppercase font-medium text-stone-700 mb-2">Nama Lengkap</label>
                                <input type="text" placeholder="Contoh: Chelsea & Glenn" class="w-full px-4 py-3.5 rounded-xl bg-stone-50/50 border border-stone-200/80 text-sm font-light text-stone-800 placeholder-stone-400 focus:outline-none focus:border-stone-800 focus:bg-white transition-all" />
                            </div>

                            <!-- Row Dua Kolom (Tanggal & Lokasi) -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-xs tracking-widest uppercase font-medium text-stone-700 mb-2">Tanggal Pernikahan</label>
                                    <input type="date" class="w-full px-4 py-3.5 rounded-xl bg-stone-50/50 border border-stone-200/80 text-sm font-light text-stone-800 focus:outline-none focus:border-stone-800 focus:bg-white transition-all" />
                                </div>
                                <div>
                                    <label class="block text-xs tracking-widest uppercase font-medium text-stone-700 mb-2">Lokasi / Venue</label>
                                    <input type="text" placeholder="Contoh: Hotel / Outdoor Jakarta" class="w-full px-4 py-3.5 rounded-xl bg-stone-50/50 border border-stone-200/80 text-sm font-light text-stone-800 placeholder-stone-400 focus:outline-none focus:border-stone-800 focus:bg-white transition-all" />
                                </div>
                            </div>

                            <!-- Input Jumlah Tamu -->
                            <div>
                                <label class="block text-xs tracking-widest uppercase font-medium text-stone-700 mb-2">Estimasi Jumlah Undangan (Tamu)</label>
                                <input type="number" min="0" placeholder="Contoh: 500" class="w-full px-4 py-3.5 rounded-xl bg-stone-50/50 border border-stone-200/80 text-sm font-light text-stone-800 placeholder-stone-400 focus:outline-none focus:border-stone-800 focus:bg-white transition-all" />
                            </div>

                            <!-- Elegant CTA Button (Warna Coklat Susu Hangat Terpadu - FIXED) -->
                            <div class="pt-2">
                                <button type="button" class="w-full bg-stone-700 hover:bg-stone-800 text-white py-4 rounded-full font-medium text-xs tracking-widest uppercase transition-all duration-300 shadow-md hover:shadow-xl hover:shadow-stone-900/10 transform hover:-translate-y-0.5 border border-stone-600">
                                    Kirim Data & Konsultasi
                                </button>
                            </div>

                            <!-- Disclaimer Catatan Kecil Lembut -->
                            <p class="text-[10px] text-stone-400 font-light text-center leading-relaxed mt-4">
                                * Data Anda aman bersama kami. Seluruh informasi di atas akan dijadikan bahan rujukan awal bagi *wedding consultant* kami sebelum menghubungi Anda kembali.
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('user.layouts.footer')

    <!-- about animation -->
    <style>
        @keyframes bounceSlow {
            0%, 100% { transform: translateY(0) translateX(-8px); }
            50% { transform: translateY(-6px) translateX(-8px); }
        }
        .animate-bounce-slow {
            animation: bounceSlow 4s ease-in-out infinite;
        }
    </style>

    <script>
        (function(){
            const run = () => {
                const lightbox = document.getElementById('portfolioLightbox');
                if(!lightbox) return;

                const imgEl = document.getElementById('portfolioLightboxImg');
                const titleEl = document.getElementById('portfolioLightboxTitle');
                const themeDotEl = document.getElementById('portfolioLightboxThemeDot');

                const closeBtn = document.getElementById('portfolioLightboxClose');
                const prevBtn = document.getElementById('portfolioLightboxPrev');
                const nextBtn = document.getElementById('portfolioLightboxNext');

                const thumbnails = Array.from(document.querySelectorAll('#portfolio img[data-img][data-title][data-theme]'));
                const state = { index: 0, open: false };

                const clampIndex = (i) => {
                    const n = thumbnails.length;
                    if(!n) return 0;
                    return (i + n) % n;
                };

                const render = (index) => {
                    state.index = clampIndex(index);
                    const t = thumbnails[state.index];
                    if(!t || !imgEl) return;

                    imgEl.src = t.dataset.img;
                    imgEl.alt = t.alt || 'Portfolio';
                    if(titleEl) titleEl.textContent = t.dataset.title || '';
                    if(themeDotEl) themeDotEl.style.backgroundColor = '#afa857';
                };

                const open = (index) => {
                    if(!thumbnails.length) return;
                    render(index);
                    lightbox.classList.remove('hidden');
                    lightbox.setAttribute('aria-hidden', 'false');
                    document.body.style.overflow = 'hidden';
                    state.open = true;
                };

                const close = () => {
                    lightbox.classList.add('hidden');
                    lightbox.setAttribute('aria-hidden', 'true');
                    document.body.style.overflow = '';
                    state.open = false;
                };

                // click thumbnails
                thumbnails.forEach((t, i) => {
                    t.style.cursor = 'pointer';
                    // prevent duplicate bindings
                    if(t.dataset.lightboxBound === '1') return;
                    t.dataset.lightboxBound = '1';

                    t.addEventListener('click', (e) => {
                        e.preventDefault();
                        e.stopPropagation();
                        open(i);
                    });
                });

                if(closeBtn) closeBtn.addEventListener('click', (e) => { e.preventDefault(); close(); });

                // backdrop close
                lightbox.addEventListener('click', (e) => {
                    // click pada backdrop atau area dalam wrapper pertama
                    if(e.target === lightbox || e.target === lightbox.firstElementChild) close();
                });

                if(prevBtn) prevBtn.addEventListener('click', (e) => { e.preventDefault(); render(state.index - 1); });
                if(nextBtn) nextBtn.addEventListener('click', (e) => { e.preventDefault(); render(state.index + 1); });

                // keyboard
                document.addEventListener('keydown', (e) => {
                    if(!state.open) return;
                    if(e.key === 'Escape') close();
                    if(e.key === 'ArrowLeft') render(state.index - 1);
                    if(e.key === 'ArrowRight') render(state.index + 1);
                });
            };

            if(document.readyState === 'loading'){
                document.addEventListener('DOMContentLoaded', run);
            } else {
                run();
            }
        })();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
        // Ambil elemen-elemen DOM utama
        const lightbox = document.getElementById('portfolioLightbox');
        const lightboxImg = document.getElementById('portfolioLightboxImg');
        const lightboxTitle = document.getElementById('portfolioLightboxTitle');
        const lightboxClose = document.getElementById('portfolioLightboxClose');
        const lightboxPrev = document.getElementById('portfolioLightboxPrev');
        const lightboxNext = document.getElementById('portfolioLightboxNext');
        
        // Ambil semua card portfolio yang bisa diklik
        const portfolioCards = document.querySelectorAll('#portfolio .group.cursor-pointer');
        
        let currentIndex = 0;
        const galleryData = [];

        // 1. Kumpulkan data dari elemen HTML ke dalam Array JavaScript
        portfolioCards.forEach((card, index) => {
            const imgEl = card.querySelector('img');
            if (imgEl) {
                galleryData.push({
                    img: imgEl.getAttribute('data-img'),
                    title: imgEl.getAttribute('data-title'),
                    theme: imgEl.getAttribute('data-theme')
                });

                // Tambahkan event click pada setiap card item
                card.addEventListener('click', () => {
                    openLightbox(index);
                });
            }
        });

        // 2. Fungsi untuk membuka Lightbox sesuai index gambar
        function openLightbox(index) {
            currentIndex = index;
            updateLightboxContent();
            
            // Tampilkan modal (hapus class hidden, ganti ke flex/block)
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
            lightbox.setAttribute('aria-hidden', 'false');
            
            // Kunci scroll body utama agar tidak ikut gerak di background
            document.body.style.overflow = 'hidden';
        }

        // 3. Fungsi untuk memperbarui konten di dalam Lightbox
        function updateLightboxContent() {
            const currentItem = galleryData[currentIndex];
            if (!currentItem) return;

            // Set src gambar, title, dan modifikasi teks sesuai tema
            lightboxImg.src = currentItem.img;
            lightboxImg.alt = currentItem.title;
            lightboxTitle.textContent = `${currentItem.theme} — ${currentItem.title}`;
        }

        // 4. Fungsi untuk menutup Lightbox
        function closeLightbox() {
            lightbox.classList.add('hidden');
            lightbox.classList.remove('flex');
            lightbox.setAttribute('aria-hidden', 'true');
            
            // Kembalikan scroll body utama
            document.body.style.overflow = '';
            
            // Reset src biar tidak berbayang saat dibuka kembali
            lightboxImg.src = '';
        }

        // 5. Fungsi Navigasi (Next & Prev)
        function showNext() {
            // Jika di akhir, dia akan melompat kembali ke gambar pertama (looping)
            currentIndex = (currentIndex + 1) % galleryData.length;
            updateLightboxContent();
        }

        function showPrev() {
            // Jika di awal, dia akan melompat ke gambar paling terakhir (looping)
            currentIndex = (currentIndex - 1 + galleryData.length) % galleryData.length;
            updateLightboxContent();
        }

        // 6. Pasang Event Listener ke Tombol Kontrol
        lightboxClose.addEventListener('click', closeLightbox);
        lightboxNext.addEventListener('click', (e) => { e.stopPropagation(); showNext(); });
        lightboxPrev.addEventListener('click', (e) => { e.stopPropagation(); showPrev(); });

        // Close modal ketika klik area background hitam (backdrop)
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox || e.target.classList.contains('bg-black/80')) {
                closeLightbox();
            }
        });

        // Fitur Tambahan: Navigasi Keyboard (Esc, Arrow Left, Arrow Right)
        document.addEventListener('keydown', (e) => {
            if (lightbox.classList.contains('hidden')) return;

            if (e.key === 'Escape') {
                closeLightbox();
            } else if (e.key === 'ArrowRight') {
                showNext();
            } else if (e.key === 'ArrowLeft') {
                showPrev();
            }
        });
    });

    // filter 
    document.addEventListener('DOMContentLoaded', () => {
        // Elemen Lightbox
        const lightbox = document.getElementById('portfolioLightbox');
        const lightboxImg = document.getElementById('portfolioLightboxImg');
        const lightboxTitle = document.getElementById('portfolioLightboxTitle');
        const lightboxClose = document.getElementById('portfolioLightboxClose');
        const lightboxPrev = document.getElementById('portfolioLightboxPrev');
        const lightboxNext = document.getElementById('portfolioLightboxNext');
        
        // Elemen Filter & Card
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioCards = document.querySelectorAll('#portfolio .group.cursor-pointer');
        
        let currentIndex = 0;
        let activeGalleryData = []; // Menyimpan gambar yang lolos filter saja

        // Fungsi untuk memperbarui data list gambar yang sedang aktif/tampil di layar
        function updateActiveGalleryData() {
            activeGalleryData = [];
            portfolioCards.forEach((card) => {
                // Hanya ambil card yang tidak tersembunyi (tidak punya class 'hidden')
                if (!card.classList.contains('hidden')) {
                    const imgEl = card.querySelector('img');
                    if (imgEl) {
                        activeGalleryData.push({
                            img: imgEl.getAttribute('data-img'),
                            title: imgEl.getAttribute('data-title'),
                            theme: imgEl.getAttribute('data-theme'),
                            element: card // referensi ke elemen HTML-nya
                        });
                    }
                }
            });
        }

        // Inisialisasi awal data gambar
        updateActiveGalleryData();

        // Event Klik pada Card Portfolio
        portfolioCards.forEach((card) => {
            card.addEventListener('click', () => {
                // Cari tahu index card ini di dalam list gambar yang sedang aktif
                const imgEl = card.querySelector('img');
                const currentSrc = imgEl.getAttribute('data-img');
                const index = activeGalleryData.findIndex(item => item.img === currentSrc);
                
                if (index !== -1) {
                    openLightbox(index);
                }
            });
        });

        // ================= FILTER LOGIC =================
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const filterValue = button.getAttribute('data-filter');

                // 1. Ubah Styling Aktif pada Tombol
                filterButtons.forEach(btn => {
                    btn.className = "filter-btn px-5 py-2 rounded-full bg-stone-50 border border-stone-200/60 text-stone-600 text-xs tracking-widest uppercase font-light hover:bg-stone-100 hover:text-stone-900 transition-all duration-300";
                });
                // Tombol yang diklik jadi hitam/aktif
                button.className = "filter-btn px-5 py-2 rounded-full bg-stone-900 text-stone-100 text-xs tracking-widest uppercase font-medium transition-all duration-300 shadow-sm";

                // 2. Show / Hide Card dengan animasi opacity simple
                portfolioCards.forEach(card => {
                    const imgEl = card.querySelector('img');
                    const theme = imgEl.getAttribute('data-theme');

                    if (filterValue === 'all' || theme === filterValue) {
                        card.classList.remove('hidden');
                        // Tambahan efek smooth appearance saat muncul
                        setTimeout(() => { card.style.opacity = '1'; }, 10);
                    } else {
                        card.classList.add('hidden');
                    }
                });

                // 3. Update data Lightbox agar sinkron dengan hasil filter terbaru
                updateActiveGalleryData();
            });
        });

        // ================= LIGHTBOX LOGIC =================
        function openLightbox(index) {
            currentIndex = index;
            updateLightboxContent();
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
            lightbox.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        function updateLightboxContent() {
            const currentItem = activeGalleryData[currentIndex];
            if (!currentItem) return;

            lightboxImg.src = currentItem.img;
            lightboxImg.alt = currentItem.title;
            lightboxTitle.textContent = `${currentItem.theme} — ${currentItem.title}`;
        }

        function closeLightbox() {
            lightbox.classList.add('hidden');
            lightbox.classList.remove('flex');
            lightbox.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
            lightboxImg.src = '';
        }

        function showNext() {
            if (activeGalleryData.length === 0) return;
            currentIndex = (currentIndex + 1) % activeGalleryData.length;
            updateLightboxContent();
        }

        function showPrev() {
            if (activeGalleryData.length === 0) return;
            currentIndex = (currentIndex - 1 + activeGalleryData.length) % activeGalleryData.length;
            updateLightboxContent();
        }

        // Event Listener Kontrol Lightbox
        lightboxClose.addEventListener('click', closeLightbox);
        lightboxNext.addEventListener('click', (e) => { e.stopPropagation(); showNext(); });
        lightboxPrev.addEventListener('click', (e) => { e.stopPropagation(); showPrev(); });

        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox || e.target.classList.contains('bg-black/80')) {
                closeLightbox();
            }
        });

        // Keyboard Navigasi
        document.addEventListener('keydown', (e) => {
            if (lightbox.classList.contains('hidden')) return;
            if (e.key === 'Escape') closeLightbox();
            else if (e.key === 'ArrowRight') showNext();
            else if (e.key === 'ArrowLeft') showPrev();
        });
    });
    </script>