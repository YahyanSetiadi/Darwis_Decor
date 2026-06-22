@include('user.layouts.header')

<!-- HERO -->
<section class="relative pt-28 pb-16 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://plus.unsplash.com/premium_photo-1674235766088-80d8410f9523?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHdlZGRpbmclMjBiYWNrZ3JvdW5kfGVufDB8fDB8fHww" alt="Paket Gedung" class="w-full h-full object-cover scale-105" />
        <!-- Luxury vignette overlay -->
        <div class="absolute inset-0" style="background: linear-gradient(to bottom, rgba(0,0,0,0.65), rgba(0,0,0,0.25), rgba(240,234,216,1));"></div>
        <!-- Warm glows -->
        <div class="absolute -top-24 -left-24 w-72 h-72 rounded-full blur-[120px] pointer-events-none" style="background: rgba(175,168,87,0.20);"></div>
        <div class="absolute top-1/3 -right-24 w-72 h-72 rounded-full blur-[120px] pointer-events-none" style="background: rgba(75,75,48,0.18);"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 mb-5">
                <span class="w-1.5 h-1.5 rounded-full" style="background: var(--brand-golden);"></span>
                <span class="text-xs tracking-[0.25em] uppercase font-light" style="color: rgba(240,234,216,0.85);">Paket Gedung</span>
            </div>

            <h1 class="font-serif text-4xl md:text-6xl font-normal leading-tight text-white">
                PAKET GEDUNG STANDARD
            </h1>

            <p class="mt-6 text-sm md:text-base font-light leading-relaxed tracking-wide" style="color: rgba(240,234,216,0.86);">
                Pilih paket gedung yang elegan dan terorganisir. Susunan detail MUA, busana, dekorasi By Darwis Decor, serta free items dibuat agar hasil akhirnya terasa mahal.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row gap-4">
                <a href="#pilih-paket" class="px-8 py-3.5 rounded-full bg-[#d4af37] text-[#1c1c14] font-semibold text-sm tracking-wider shadow-xl transition-all duration-300 transform hover:-translate-y-1 hover:bg-[#e5c158] hover:shadow-[#d4af37]/20 text-center">
                    Pilih Paket
                </a>
                <a href="#contact" class="px-8 py-3.5 rounded-full bg-white/10 text-white border border-white/30 font-medium text-sm tracking-wider backdrop-blur-md transition-all duration-300 transform hover:-translate-y-1 hover:bg-white/20 hover:border-white/50 text-center">
                    Konsultasi Booking
                </a>
            </div>
        </div>
    </div>
</section>

{{-- PACKAGES: mengikuti style layout 'catalog' pada paket-only-decor --}}
<style>
    .catalog-card {
        background: #fff;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(75,75,48,0.05);
        border: 1px solid rgba(75,75,48,0.06);
    }
    .catalog-split {
        display: grid;
        grid-template-columns: 1fr;
    }
    @media (min-width: 768px) {
        .catalog-split {
            grid-template-columns: 1.1fr 0.9fr;
        }
    }
    .catalog-badge {
        background: rgba(240,234,216,0.14);
        border: 1px solid rgba(240,234,216,0.24);
    }
    .catalog-photo {
        background-position: center;
        background-size: cover;
    }
    .bullet-item {
        position: relative;
        padding-left: 18px;
        line-height: 1.65;
    }
    .bullet-item::before {
        content: '•';
        position: absolute;
        left: 4px;
        color: #afa857;
        font-weight: bold;
    }
</style>

<section id="pilih-paket" class="py-16 bg-brand-cream">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-3 mb-4">
                <span class="w-1.5 h-1.5 bg-brand-moss rounded-full"></span>
                <span class="text-xs tracking-[0.25em] uppercase font-light" style="color: rgba(75,75,48,0.65);">Paket All In</span>
            </div>
            <h2 class="font-serif text-3xl md:text-4xl lg:text-5xl font-normal leading-tight" style="color: var(--brand-moss);">
                Wedding Package <span class="italic font-light" style="color: rgba(75,75,48,0.60);">Catalog</span>
            </h2>
            <p class="mt-4 text-sm md:text-base font-light max-w-2xl mx-auto leading-relaxed" style="color: rgba(75,75,48,0.75);">
                Desain kartu mengikuti style katalog: kiri visual, kanan rincian, dengan tombol pilih paket di bawah.
            </p>
        </div>

        <div class="grid gap-8">

@php
                $pagePhoto = [
                    'https://images.unsplash.com/photo-1529634806980-85c44a7d7f39?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1506846732259-39cc68a7f7f0?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1523438885200-e635ba2c371e?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1515168833906-7c3c3c3c3c3c?auto=format&fit=crop&w=1200&q=80',
                ];
            @endphp

            {{-- Catatan: Bagian katalog sudah ter-render dalam layout split. Bagian card lama yang tersisa sengaja saya hapus agar tidak dobel. --}}

            {{-- Foto kecil untuk memvisualisasikan paket (sebelah tombol pilih paket) --}}

            @php
                $onlyDecorThumbs = [
                    'https://images.unsplash.com/photo-1529634806980-85c44a7d7f39?auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1506846732259-39cc68a7f7f0?auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1523438885200-e635ba2c371e?auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1515168833906-7c3c3c3c3c3c?auto=format&fit=crop&w=800&q=80',
                ];
            @endphp



            {{-- Paket Rumah A --}}
            <article class="xl:col-span-1 rounded-[2rem] overflow-hidden bg-white border border-[#afa857]/25 shadow-[0_20px_50px_rgba(75,75,48,0.10)]">
                <div class="px-8 pt-8">
                    <div class="flex items-start justify-between gap-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center text-lg shadow-sm" style="background: rgba(175,168,87,0.10); color: var(--brand-moss);">
                            <i class="fa-solid fa-house"></i>
                        </div>
                        <span class="text-[10px] tracking-widest uppercase font-semibold px-3 py-1 rounded-full" style="background: rgba(175,168,87,0.18); color: var(--brand-golden); border: 1px solid rgba(175,168,87,0.22);">Paket Rumah A</span>
                    </div>
                    <h3 class="mt-6 font-serif text-3xl md:text-4xl font-normal leading-tight" style="color: var(--brand-moss);">Paket Rumah A</h3>
                    <p class="mt-2 text-xs tracking-wider uppercase font-light" style="color: rgba(175,168,87,0.85);">Warm • Rapi • Budget Smart</p>

                    <div class="mt-6">
                        <p class="text-[11px] tracking-widest uppercase font-semibold" style="color: rgba(75,75,48,0.65);">Harga Paket</p>
                        <p class="text-3xl md:text-4xl font-semibold" style="color: var(--brand-moss);">Rp 12.500.000,-</p>
                    </div>
                </div>

                <div class="px-8 pb-8 pt-6">
                    <div class="rounded-2xl bg-brand-cream/60 border border-stone-200/80 p-5">
                        <h4 class="text-xs uppercase tracking-widest font-semibold mb-3" style="color: rgba(75,75,48,0.82);">Komposisi Paket</h4>

                        <div class="space-y-4">
                            <div class="space-y-2">
                                <div class="flex gap-3 items-start">
                                    <span class="w-5 h-5 rounded-full bg-[#d4af37]/20 border border-[#d4af37]/30 flex items-center justify-center mt-0.5">
                                        <i class="fa-solid fa-check text-[11px]" style="color: var(--brand-golden);"></i>
                                    </span>
                                    <div>
                                        <p class="text-xs md:text-sm font-semibold" style="color: rgba(75,75,48,0.92);">MUA & Busana</p>
                                        <ul class="mt-2 space-y-2 text-xs md:text-sm font-light" style="color: rgba(75,75,48,0.78);">
                                            <li>• 1x Make up pengantin</li>
                                            <li>• 2 pasang busana pengantin</li>
                                            <li>• 1 set ronce melati</li>
                                            <li>• Make up & busana 2 pagar ayu</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <div class="flex gap-3 items-start">
                                    <span class="w-5 h-5 rounded-full bg-[#d4af37]/20 border border-[#d4af37]/30 flex items-center justify-center mt-0.5">
                                        <i class="fa-solid fa-check text-[11px]" style="color: var(--brand-golden);"></i>
                                    </span>
                                    <div>
                                        <p class="text-xs md:text-sm font-semibold" style="color: rgba(75,75,48,0.92);">Dekorasi By Darwis Decor</p>
                                        <ul class="mt-2 space-y-2 text-xs md:text-sm font-light" style="color: rgba(75,75,48,0.78);">
                                            <li>• Dekorasi pelaminan 4 m (Tanpa Panggung) Artifical Premium flowers</li>
                                            <li>• MiniTaman</li>
                                            <li>• Lantai Melamin</li>
                                            <li>• Welcome Gate</li>
                                            <li>• Artificial hand bouquet (dipinjamkan)</li>
                                            <li>• 1 kotak angpau</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <div class="flex gap-3 items-start">
                                    <span class="w-5 h-5 rounded-full bg-[#4b4b30]/10 border border-[#4b4b30]/15 flex items-center justify-center mt-0.5">
                                        <i class="fa-solid fa-gift text-[11px]" style="color: var(--brand-moss);"></i>
                                    </span>
                                    <div>
                                        <p class="text-xs md:text-sm font-semibold" style="color: rgba(75,75,48,0.92);">FREE</p>
                                        <ul class="mt-2 space-y-2 text-xs md:text-sm font-light" style="color: rgba(75,75,48,0.78);">
                                            <li>• Soflens (normal)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                            <div class="mt-8">
                        @php($paketIdRumahA = 117)

                        <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                            <div class="w-full sm:w-[120px]">
                                <img
                                    src="{{ $onlyDecorThumbs[0] ?? ($onlyDecorThumbs[1] ?? null) }}"
                                    alt="Paket Rumah A"
                                    class="w-full h-[88px] object-cover rounded-xl border border-stone-200/70 shadow-sm bg-white"
                                />
                            </div>
                            <div class="flex-1">
                                <a href="{{ route('user.bookings.checkout', $paketIdRumahA) }}" class="block w-full text-center py-3.5 rounded-full text-xs tracking-widest uppercase font-semibold transition-all duration-300 border border-[#4b4b30]/25 text-[#4b4b30] bg-white hover:bg-[#4b4b30] hover:text-white hover:border-[#4b4b30]">
                                    Pilih Paket Rumah A
                                </a>
                                <p class="mt-3 text-[10px] text-stone-500 text-center font-light">*Klik untuk konsultasi & booking tanggal.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            {{-- Paket Rumah B --}}
            <article class="xl:col-span-1 rounded-[2rem] overflow-hidden bg-white border border-[#afa857]/25 shadow-[0_20px_50px_rgba(75,75,48,0.10)]">
                <div class="px-8 pt-8">
                    <div class="flex items-start justify-between gap-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center text-lg shadow-sm" style="background: rgba(175,168,87,0.10); color: var(--brand-moss);">
                            <i class="fa-solid fa-house"></i>
                        </div>
                        <span class="text-[10px] tracking-widest uppercase font-semibold px-3 py-1 rounded-full" style="background: rgba(175,168,87,0.18); color: var(--brand-golden); border: 1px solid rgba(175,168,87,0.22);">Paket Rumah B</span>
                    </div>
                    <h3 class="mt-6 font-serif text-3xl md:text-4xl font-normal leading-tight" style="color: var(--brand-moss);">Paket Rumah B</h3>
                    <p class="mt-2 text-xs tracking-wider uppercase font-light" style="color: rgba(175,168,87,0.85);">Elegan • Lebih Lengkap</p>

                    <div class="mt-6">
                        <p class="text-[11px] tracking-widest uppercase font-semibold" style="color: rgba(75,75,48,0.65);">Harga Paket</p>
                        <p class="text-3xl md:text-4xl font-semibold" style="color: var(--brand-moss);">Rp 15.000.000,-</p>
                    </div>
                </div>

                <div class="px-8 pb-8 pt-6">
                    <div class="rounded-2xl bg-brand-cream/60 border border-stone-200/80 p-5">
                        <h4 class="text-xs uppercase tracking-widest font-semibold mb-3" style="color: rgba(75,75,48,0.82);">Komposisi Paket</h4>

                        <div class="space-y-4">
                            <div class="space-y-2">
                                <div class="flex gap-3 items-start">
                                    <span class="w-5 h-5 rounded-full bg-[#d4af37]/20 border border-[#d4af37]/30 flex items-center justify-center mt-0.5">
                                        <i class="fa-solid fa-check text-[11px]" style="color: var(--brand-golden);"></i>
                                    </span>
                                    <div>
                                        <p class="text-xs md:text-sm font-semibold" style="color: rgba(75,75,48,0.92);">MUA & Busana</p>
                                        <ul class="mt-2 space-y-2 text-xs md:text-sm font-light" style="color: rgba(75,75,48,0.78);">
                                            <li>• 1x Make up pengantin</li>
                                            <li>• 2 pasang busana pengantin</li>
                                            <li>• 1 set ronce melati</li>
                                            <li>• Make up & busana 2 pagar ayu</li>
                                            <li>• Make up & busana ortu dan besan</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <div class="flex gap-3 items-start">
                                    <span class="w-5 h-5 rounded-full bg-[#d4af37]/20 border border-[#d4af37]/30 flex items-center justify-center mt-0.5">
                                        <i class="fa-solid fa-check text-[11px]" style="color: var(--brand-golden);"></i>
                                    </span>
                                    <div>
                                        <p class="text-xs md:text-sm font-semibold" style="color: rgba(75,75,48,0.92);">Dekorasi By Darwis Decor</p>
                                        <ul class="mt-2 space-y-2 text-xs md:text-sm font-light" style="color: rgba(75,75,48,0.78);">
                                            <li>• Dekorasi pelaminan 6 m (Tanpa Panggung) Artifical Premium flowers</li>
                                            <li>• Mini taman</li>
                                            <li>• Lantai Melamin</li>
                                            <li>• Welcome Gate</li>
                                            <li>• Artificial hand bouquet (dipinjamkan)</li>
                                            <li>• 1 Kotak angpau</li>
                                            <li>• Standing photo frame</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <div class="flex gap-3 items-start">
                                    <span class="w-5 h-5 rounded-full bg-[#4b4b30]/10 border border-[#4b4b30]/15 flex items-center justify-center mt-0.5">
                                        <i class="fa-solid fa-gift text-[11px]" style="color: var(--brand-moss);"></i>
                                    </span>
                                    <div>
                                        <p class="text-xs md:text-sm font-semibold" style="color: rgba(75,75,48,0.92);">FREE</p>
                                        <ul class="mt-2 space-y-2 text-xs md:text-sm font-light" style="color: rgba(75,75,48,0.78);">
                                            <li>• Soflens (normal)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <a href="{{ route('user.bookings.checkout', 118) }}" class="block w-full text-center py-3.5 rounded-full text-xs tracking-widest uppercase font-semibold transition-all duration-300 border border-[#4b4b30]/25 text-[#4b4b30] bg-white hover:bg-[#4b4b30] hover:text-white hover:border-[#4b4b30]">
                            Pilih Paket Rumah B
                        </a>
                        <p class="mt-3 text-[10px] text-stone-500 text-center font-light">*Klik untuk konsultasi & booking tanggal.</p>
                    </div>
                </div>
            </article>

            {{-- Paket Gedung (MUA & Dekorasi) Paket A --}}
            <article class="xl:col-span-1 rounded-[2rem] overflow-hidden bg-[#1c2118] border border-[#d4af37]/25 shadow-[0_20px_60px_rgba(28,33,24,0.35)]">
                <div class="px-8 pt-8">
                    <div class="flex items-start justify-between gap-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center text-lg shadow-sm bg-white/5" style="color: #d4af37; border: 1px solid rgba(212,175,55,0.25);">
                            <i class="fa-solid fa-building"></i>
                        </div>
                        <span class="text-[10px] tracking-widest uppercase font-semibold px-3 py-1 rounded-full" style="background: rgba(212,175,55,0.18); color: #d4af37; border: 1px solid rgba(212,175,55,0.22);">Gedung • Paket A</span>
                    </div>

                    <h3 class="mt-6 font-serif text-3xl md:text-4xl font-normal leading-tight" style="color: #ffffff;">Paket Gedung (MUA & Dekorasi)</h3>
                    <p class="mt-2 text-xs tracking-wider uppercase font-light" style="color: rgba(212,175,55,0.90);">Standard • Balanced • Ready</p>

                    <div class="mt-6">
                        <p class="text-[11px] tracking-widest uppercase font-semibold" style="color: rgba(240,234,216,0.72);">Harga Paket</p>
                        <p class="text-3xl md:text-4xl font-semibold" style="color: #ffffff;">Rp 33.000.000,-</p>
                    </div>
                </div>

                <div class="px-8 pb-8 pt-6">
                    <div class="rounded-2xl bg-white/5 border border-white/10 p-5">
                        <h4 class="text-xs uppercase tracking-widest font-semibold mb-3" style="color: rgba(212,175,55,0.92);">Komposisi Paket</h4>

                        <div class="space-y-4">
                            <div class="space-y-2">
                                <div class="flex gap-3 items-start">
                                    <span class="w-5 h-5 rounded-full bg-[#d4af37]/20 border border-[#d4af37]/30 flex items-center justify-center mt-0.5">
                                        <i class="fa-solid fa-check text-[11px]" style="color: #d4af37;"></i>
                                    </span>
                                    <div>
                                        <p class="text-xs md:text-sm font-semibold" style="color: rgba(255,255,255,0.95);">MUA</p>
                                        <ul class="mt-2 space-y-2 text-xs md:text-sm font-light" style="color: rgba(240,234,216,0.80);">
                                            <li>• 1x make up pengantin</li>
                                            <li>• 1 busana akad & 1 busana resepsi</li>
                                            <li>• 1 set Ronce melati</li>
                                            <li>• free soflens (normal)</li>
                                            <li>• Make up & busana ortu & besan</li>
                                            <li>• Make up & 4 busana pagar ayu</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <div class="flex gap-3 items-start">
                                    <span class="w-5 h-5 rounded-full bg-[#d4af37]/20 border border-[#d4af37]/30 flex items-center justify-center mt-0.5">
                                        <i class="fa-solid fa-check text-[11px]" style="color: #d4af37;"></i>
                                    </span>
                                    <div>
                                        <p class="text-xs md:text-sm font-semibold" style="color: rgba(255,255,255,0.95);">Dekorasi By Darwis Decor</p>
                                        <ul class="mt-2 space-y-2 text-xs md:text-sm font-light" style="color: rgba(240,234,216,0.80);">
                                            <li>• Dekorasi 10 m artificial mix fresh flowers (tanpa panggung)</li>
                                            <li>• Mini taman</li>
                                            <li>• Satu set meja kursi akad</li>
                                            <li>• 1 penjor</li>
                                            <li>• Welcome gate & Mirror sign</li>
                                            <li>• Standing photo frame</li>
                                            <li>• Backdrop musik</li>
                                            <li>• Karpet jalan</li>
                                            <li>• 2 kotak angpau</li>
                                            <li>• Hand bouquet fresh flowers</li>
                                            <li>• Standing flower</li>
                                            <li>• Pergola</li>
                                            <li>• Lorong 1 pcs</li>
                                            <li>• Bunga Mobil Pengantin</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <div class="flex gap-3 items-start">
                                    <span class="w-5 h-5 rounded-full bg-[#d4af37]/20 border border-[#d4af37]/30 flex items-center justify-center mt-0.5">
                                        <i class="fa-solid fa-gift text-[11px]" style="color: #d4af37;"></i>
                                    </span>
                                    <div>
                                        <p class="text-xs md:text-sm font-semibold" style="color: rgba(255,255,255,0.95);">FREE</p>
                                        <ul class="mt-2 space-y-2 text-xs md:text-sm font-light" style="color: rgba(240,234,216,0.80);">
                                            <li>• Soflens</li>
                                            <li>• Fake Nails</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <a href="{{ route('user.bookings.checkout', 120) }}" class="block w-full text-center py-3.5 rounded-full text-xs tracking-widest uppercase font-semibold transition-all duration-300 border border-[#d4af37]/40 text-[#d4af37] bg-transparent hover:bg-[#d4af37] hover:text-[#1c1c18]">
                            Pilih Paket Gedung A
                        </a>
                        <p class="mt-3 text-[10px] text-stone-300 text-center font-light">*Klik untuk konsultasi & booking tanggal.</p>
                    </div>
                </div>
            </article>

            {{-- Paket Gedung Premium --}}
            <article class="xl:col-span-1 rounded-[2rem] overflow-hidden bg-[#1c2118] border border-[#d4af37]/25 shadow-[0_20px_60px_rgba(28,33,24,0.35)]">
                <div class="px-8 pt-8">
                    <div class="flex items-start justify-between gap-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center text-lg shadow-sm bg-white/5" style="color: #d4af37; border: 1px solid rgba(212,175,55,0.25);">
                            <i class="fa-solid fa-crown"></i>
                        </div>
                        <span class="text-[10px] tracking-widest uppercase font-semibold px-3 py-1 rounded-full" style="background: rgba(212,175,55,0.18); color: #d4af37; border: 1px solid rgba(212,175,55,0.22);">Gedung • Premium</span>
                    </div>

                    <h3 class="mt-6 font-serif text-3xl md:text-4xl font-normal leading-tight" style="color: #ffffff;">Paket Gedung Premium</h3>
                    <p class="mt-2 text-xs tracking-wider uppercase font-light" style="color: rgba(212,175,55,0.90);">Ultra • Grand • Exquisite</p>

                    <div class="mt-6">
                        <p class="text-[11px] tracking-widest uppercase font-semibold" style="color: rgba(240,234,216,0.72);">Harga Paket</p>
                        <p class="text-3xl md:text-4xl font-semibold" style="color: #ffffff;">Rp 45.000.000,-</p>
                    </div>
                </div>

                <div class="px-8 pb-8 pt-6">
                    <div class="rounded-2xl bg-white/5 border border-white/10 p-5">
                        <h4 class="text-xs uppercase tracking-widest font-semibold mb-3" style="color: rgba(212,175,55,0.92);">Komposisi Paket</h4>

                        <div class="space-y-4">
                            <div class="space-y-2">
                                <div class="flex gap-3 items-start">
                                    <span class="w-5 h-5 rounded-full bg-[#d4af37]/20 border border-[#d4af37]/30 flex items-center justify-center mt-0.5">
                                        <i class="fa-solid fa-check text-[11px]" style="color: #d4af37;"></i>
                                    </span>
                                    <div>
                                        <p class="text-xs md:text-sm font-semibold" style="color: rgba(255,255,255,0.95);">MUA</p>
                                        <ul class="mt-2 space-y-2 text-xs md:text-sm font-light" style="color: rgba(240,234,216,0.80);">
                                            <li>• 1x make up pengantin</li>
                                            <li>• 1 busana akad & 1 busana resepsi</li>
                                            <li>• 1 Set Ronce melati</li>
                                            <li>• Make up & busana ortu & besan</li>
                                            <li>• Make up & 4 busana pagar ayu</li>
                                            <li>• Make up & 4 pasang among tamu</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <div class="flex gap-3 items-start">
                                    <span class="w-5 h-5 rounded-full bg-[#d4af37]/20 border border-[#d4af37]/30 flex items-center justify-center mt-0.5">
                                        <i class="fa-solid fa-check text-[11px]" style="color: #d4af37;"></i>
                                    </span>
                                    <div>
                                        <p class="text-xs md:text-sm font-semibold" style="color: rgba(255,255,255,0.95);">Adat Panggih</p>
                                        <ul class="mt-2 space-y-2 text-xs md:text-sm font-light" style="color: rgba(240,234,216,0.80);">
                                            <li>• Alat panggih</li>
                                            <li>• Pranotocoro + cucuk lampah</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <div class="flex gap-3 items-start">
                                    <span class="w-5 h-5 rounded-full bg-[#d4af37]/20 border border-[#d4af37]/30 flex items-center justify-center mt-0.5">
                                        <i class="fa-solid fa-check text-[11px]" style="color: #d4af37;"></i>
                                    </span>
                                    <div>
                                        <p class="text-xs md:text-sm font-semibold" style="color: rgba(255,255,255,0.95);">Dekorasi By Darwis Decor</p>
                                        <ul class="mt-2 space-y-2 text-xs md:text-sm font-light" style="color: rgba(240,234,216,0.80);">
                                            <li>• Dekorasi 10-14 m mix bunga segar (tanpa panggung)</li>
                                            <li>• Mini Taman</li>
                                            <li>• Satu set meja kursi akad</li>
                                            <li>• 1 penjor</li>
                                            <li>• Backdrop musik</li>
                                            <li>• Karpet Jalan</li>
                                            <li>• Welcome gate & Mirror Sign</li>
                                            <li>• standing photo frame</li>
                                            <li>• 2 kotak angpau</li>
                                            <li>• Hand bouquet Fresh Flowers</li>
                                            <li>• Standing flowers</li>
                                            <li>• Pergola 4x4</li>
                                            <li>• Lorong 3</li>
                                            <li>• Lantai akrilik</li>
                                            <li>• Lighting (beem)</li>
                                            <li>• Bunga Mobil Pengantin</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <div class="flex gap-3 items-start">
                                    <span class="w-5 h-5 rounded-full bg-[#d4af37]/20 border border-[#d4af37]/30 flex items-center justify-center mt-0.5">
                                        <i class="fa-solid fa-gift text-[11px]" style="color: #d4af37;"></i>
                                    </span>
                                    <div>
                                        <p class="text-xs md:text-sm font-semibold" style="color: rgba(255,255,255,0.95);">FREE</p>
                                        <ul class="mt-2 space-y-2 text-xs md:text-sm font-light" style="color: rgba(240,234,216,0.80);">
                                            <li>• Free Soflens (normal)</li>
                                            <li>• Free Henna & Fake nails</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <a href="{{ route('user.bookings.checkout', 122) }}" class="block w-full text-center py-3.5 rounded-full text-xs tracking-widest uppercase font-semibold transition-all duration-300 border border-[#d4af37]/40 text-[#d4af37] bg-transparent hover:bg-[#d4af37] hover:text-[#1c1c18]">
                            Pilih Paket Gedung Premium
                        </a>
                        <p class="mt-3 text-[10px] text-stone-300 text-center font-light">*Klik untuk konsultasi & booking tanggal.</p>
                    </div>
                </div>
            </article>
        </div>

        <!-- NOTE BOX -->
        <div class="mt-10 rounded-[2rem] border border-stone-200/80 bg-white p-6 md:p-8 shadow-sm">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <div class="inline-flex items-center gap-2 mb-2">
                        <i class="fa-solid fa-shield-heart" style="color: var(--brand-golden);"></i>
                        <span class="text-xs tracking-[0.25em] uppercase font-light" style="color: rgba(75,75,48,0.65);">Transparan & Terorganisir</span>
                    </div>
                    <p class="text-sm md:text-base font-light leading-relaxed" style="color: rgba(75,75,48,0.80);">
                        Harga yang tertera adalah paket dasar. Saat konsultasi, tim kami akan menyesuaikan kebutuhan venue/ukuran acara agar hasil akhirnya tetap maksimal.
                    </p>
                </div>
                <a href="https://wa.me/" class="px-6 py-3 rounded-full bg-[#d4af37] text-[#1c1c14] font-semibold text-sm tracking-widest uppercase shadow-lg hover:bg-[#e5c158] transition-all duration-300 text-center">
                    Booking via WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>


@include('user.layouts.footer')

