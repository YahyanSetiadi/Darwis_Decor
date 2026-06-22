<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Darwis Decor - wedding decoration organizer dengan paket lengkap, harga transparan, dan kepastian jadwal." />
    <meta property="og:title" content="Darwis Decor - Elegant Wedding Decoration" />
    <meta property="og:description" content="Paket dekorasi wedding dengan harga transparan dan anti double booking." />

    <title>Darwis Decor - Elegant Wedding Decoration</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Plus+Jakarta+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        :root{
            --brand-cream: #f0ead8;
            --brand-golden: #afa857;
            --brand-moss: #4b4b30;
            --brand-moss-opaque: rgba(75,75,48,0.85);
        }

        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        h1, h2, h3 { font-family: 'Playfair Display', serif; }

        /* Global brand utilities */
        .bg-brand-cream { background-color: var(--brand-cream) !important; }
        .text-brand-moss { color: var(--brand-moss) !important; }
        .text-brand-golden { color: var(--brand-golden) !important; }
        .bg-brand-moss-opaque { background-color: var(--brand-moss-opaque) !important; }
        .border-brand-golden { border-color: var(--brand-golden) !important; }

        /* Navigation specific */
        /* Default (over hero / transparent): light text for contrast on images */
        .nav-link { color: var(--brand-cream); }
        .nav-link:hover { color: var(--brand-golden); }

        .brand-title { color: var(--brand-cream); }

        /* CTA button (default over hero) keeps golden style with cream text */
        .btn-cta { background-color: var(--brand-moss); color: var(--brand-cream); }
        .btn-cta:hover { filter:brightness(.95); }

        /* Mobile menu drawer */
        .mobile-menu { background-color: rgba(75,75,48,0.95); }
        .mobile-menu a { color: var(--brand-cream); }

        /* Toggle (hamburger) default color */
        #navToggle { color: var(--brand-cream); }

        /* When navbar is scrolled (dark background applied by script): switch to dark text */
        .navbar-scrolled { background-color: var(--brand-moss-opaque) !important; }
        .navbar-scrolled .nav-link { color: #ffffff !important; }
        .navbar-scrolled .brand-title { color: #ffffff !important; }
        .navbar-scrolled .btn-cta { background-color: var(--brand-cream) !important; color: var(--brand-moss) !important; border-color: rgba(175,168,87,0.15) !important; }
        .navbar-scrolled #navToggle { color: #ffffff !important; }

        /* smooth scroll offset for fixed nav */
        html { scroll-padding-top: 5rem; }
    </style>
</head>

<body class="bg-brand-cream text-brand-moss">

    <!-- NAV -->
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-500 top-0 left-0 bg-transparent">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            <div class="flex justify-between h-24 items-center transition-all duration-500" id="navContainer">
                
                <!-- Brand Logo Area -->
                <div class="flex items-center">
                    <a href="#beranda" class="flex items-center gap-3 group focus:outline-none">
                        <!-- Logo dibuat melingkar halus dengan border tipis estetik -->
                        <div class="w-12 h-12 rounded-full border border-white/20 overflow-hidden bg-white backdrop-blur-sm transition-all duration-300 flex items-center justify-center group-hover:border-brand-golden">
                            <img src="/img/logo.png" alt="Darwis Decor" class="w-full h-full object-cover" />
                        </div>
                        <!-- Ditambahkan Teks Brand dengan Font Serif agar kesan Luxury menonjol -->
                        <span class="font-serif text-lg tracking-widest brand-title transition-colors duration-300 id-nav-text group-hover:text-brand-golden">
                            DARWIS DECOR
                        </span>
                    </a>
                </div>

                <!-- Desktop Navigation Links -->
                <div class="hidden md:flex items-center space-x-8">
                    <!-- Font diubah ke font-light dengan tracking-wide khas brand premium -->
                    <a href="{{ route('user.index') }}#beranda" class="nav-link text-xs tracking-widest uppercase font-light transition-all duration-300 relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[1px] after:bg-brand-golden hover:after:w-full after:transition-all">Beranda</a>
                    <a href="{{ route('user.index') }}#about" class="nav-link text-xs tracking-widest uppercase font-light transition-all duration-300 relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[1px] after:bg-brand-golden hover:after:w-full after:transition-all">About</a>
                    <a href="{{ route('user.index') }}#services" class="nav-link text-xs tracking-widest uppercase font-light transition-all duration-300 relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[1px] after:bg-brand-golden hover:after:w-full after:transition-all">Paket</a>
                    <a href="{{ route('user.index') }}#portfolio" class="nav-link text-xs tracking-widest uppercase font-light transition-all duration-300 relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[1px] after:bg-brand-golden hover:after:w-full after:transition-all">Portofolio</a>
                    <a href="{{ route('user.index') }}#reviews" class="nav-link text-xs tracking-widest uppercase font-light transition-all duration-300 relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[1px] after:bg-brand-golden hover:after:w-full after:transition-all">Testimoni</a>
                    <a href="{{ route('user.index') }}#contact" class="nav-link text-xs tracking-widest uppercase font-light transition-all duration-300 relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[1px] after:bg-brand-golden hover:after:w-full after:transition-all">Kontak</a>
                    
                    <!-- Elegant Call to Action Button -->
                    <a href="https://wa.me/" class="btn-cta px-6 py-2.5 rounded-full transition-all duration-300 text-xs tracking-widest uppercase font-medium shadow-md transform hover:-translate-y-0.5 border border-brand-golden/30">
                        Booking
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="navToggle" class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-full border border-white/20 bg-white/5 backdrop-blur-md hover:bg-white/10 transition-all text-white focus:outline-none" aria-label="Menu">
                    <i class="fa-solid fa-bars-staggered text-sm"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Drawer (Slide Down) -->
        <div id="mobileMenu" class="md:hidden hidden border-b border-brand-golden bg-brand-moss-opaque backdrop-blur-lg transition-all duration-300 animate-fade-in mobile-menu">
            <div class="px-6 py-6 flex flex-col gap-4 text-center">
                <a href="{{ route('user.index') }}#beranda" class="py-2 nav-link hover:text-brand-golden text-xs tracking-widest uppercase font-light transition-colors">Beranda</a>
                <a href="{{ route('user.index') }}#about" class="py-2 nav-link hover:text-brand-golden text-xs tracking-widest uppercase font-light transition-colors">About</a>
                <a href="{{ route('user.index') }}#services" class="py-2 nav-link hover:text-brand-golden text-xs tracking-widest uppercase font-light transition-colors">Paket</a>
                <a href="{{ route('user.index') }}#portfolio" class="py-2 nav-link hover:text-brand-golden text-xs tracking-widest uppercase font-light transition-colors">Portofolio</a>
                <a href="{{ route('user.index') }}#reviews" class="py-2 nav-link hover:text-brand-golden text-xs tracking-widest uppercase font-light transition-colors">Testimoni</a>
                <a href="{{ route('user.index') }}#contact" class="py-2 nav-link hover:text-brand-golden text-xs tracking-widest uppercase font-light transition-colors">Kontak</a>
                <a href="https://wa.me/" class="mt-2 py-3 rounded-full btn-cta transition text-xs tracking-widest uppercase font-medium">
                    Booking
                </a>
            </div>
        </div>
    </nav>

    
    <script>
        const navbar = document.getElementById('navbar');
        const navContainer = document.getElementById('navContainer');
        const navToggle = document.getElementById('navToggle');
        const mobileMenu = document.getElementById('mobileMenu');

        // Efek Interaktif Saat Halaman Di-scroll
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                    // Saat di-scroll kebawah — beri background gelap brand
                    navbar.classList.remove('bg-transparent', 'py-0');
                    navbar.classList.add('bg-brand-moss-opaque', 'backdrop-blur-md', 'border-b', 'shadow-lg', 'navbar-scrolled');
                    navContainer.classList.remove('h-24');
                    navContainer.classList.add('h-20');
                } else {
                    // Kembali ke kondisi awal (transparan sempurna di atas hero image)
                    navbar.classList.add('bg-transparent');
                    navbar.classList.remove('bg-brand-moss-opaque', 'backdrop-blur-md', 'border-b', 'shadow-lg', 'navbar-scrolled');
                    navContainer.classList.remove('h-20');
                    navContainer.classList.add('h-24');
                }
        });

        // Fitur Buka/Tutup Menu Mobile
        navToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

