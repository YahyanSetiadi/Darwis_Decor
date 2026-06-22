<!DOCTYPE html>
<html lang="id" class="h-full bg-stone-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Darwis Decor - Admin Console' }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="h-full text-stone-800 antialiased flex">

    <div id="sidebar-backdrop" class="fixed inset-0 z-40 bg-stone-900/40 backdrop-blur-sm hidden lg:hidden transition-opacity duration-300"></div>

    <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-stone-200 flex flex-col transform -translate-x-full lg:translate-x-0 lg:static lg:flex-shrink-0 transition-transform duration-300 ease-in-out">
        
        <div class="h-16 flex items-center justify-between px-6 border-b border-stone-100 bg-stone-50/50">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-stone-900 text-white flex items-center justify-center font-serif text-xs font-light tracking-tighter shadow-sm">
                    DD
                </div>
                <div>
                    <span class="text-xs font-bold text-stone-900 tracking-wider block uppercase">Darwis Decor</span>
                    <span class="text-[9px] text-stone-400 font-semibold block uppercase">Admin Area</span>
                </div>
            </div>

            <button id="close-sidebar" class="p-1.5 rounded-lg text-stone-400 hover:text-stone-900 hover:bg-stone-100 lg:hidden transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <nav class="flex-1 overflow-y-auto px-4 py-6 space-y-1">
            <p class="px-3 text-[10px] font-bold text-stone-400 uppercase tracking-widest mb-2">Utama</p>
            
            <a href="{{ route('admin.bookings.pending') }}" class="flex items-center gap-3 px-3 py-2.5 text-xs font-bold uppercase tracking-wider text-stone-900 bg-stone-100/80 rounded-xl transition-all">
                <svg class="w-4 h-4 text-stone-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
                Dashboard
            </a>

            <p class="px-3 text-[10px] font-bold text-stone-400 uppercase tracking-widest pt-5 mb-2">Manajemen</p>

            <a href="{{ route('admin.bookings.all') }}" class="flex items-center gap-3 px-3 py-2.5 text-xs font-semibold uppercase tracking-wider text-stone-500 hover:text-stone-900 hover:bg-stone-50 rounded-xl transition-all">
                <svg class="w-4 h-4 text-stone-400 group-hover:text-stone-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H1２v-.００８zM9．７５ １５h．００８v．００８H9．７５V１５zm０ ２．２５h．００８v．００８H9．７５v－．００８zM7．５ １５h．００８v．００８H7．５V１５zm０ ２．２５h．００８v．００８H7．５v－．００８zm6．７５－４．５h．００８v．００８h－．０₀８v－．₀₀８zm₀ ２．２５h．₀₀８v．₀₀８h－．₀₀８V１５zm₀ ２．２５h．₀₀８v．₀₀８h－．₀₀８v－．₀₀８zm２．２５－４．５h．₀₀８v．₀₀８H１６．５v－．₀₀８zm₀ ２．２５h．₀₀８v．₀CppObject H１６．５V１５z"/></svg>
                Data Booking
            </a>

            <p class="px-3 text-[10px] font-bold text-stone-400 uppercase tracking-widest pt-5 mb-2">Sistem</p>

        </nav>

        <div class="p-4 border-t border-stone-100 bg-stone-50/50 text-center">
            <a href="{{ route('admin.logout') }}" class="w-full flex items-center justify-center gap-2 px-3 py-2 rounded-xl border border-red-200 hover:bg-red-50 text-xs font-bold uppercase tracking-wider text-red-600 transition-all cursor-pointer">
                Log Out
            </a>
        </div>
    </aside>

    <div class="flex-1 flex flex-col min-w-0 h-full overflow-hidden">
        
        <header class="bg-white border-b border-stone-200 sticky top-0 z-30 flex-shrink-0">
            <div class="px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between gap-4">

                <div class="flex items-center gap-3 min-w-0">
                    <button id="open-sidebar" class="p-2 -ml-2 rounded-xl text-stone-600 hover:bg-stone-100 lg:hidden focus:outline-none transition cursor-pointer">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                        </svg>
                    </button>

                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-stone-100 text-[10px] font-bold uppercase tracking-wider text-stone-600 border border-stone-200/20 hidden sm:inline-flex">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                        Production Mode
                    </span>
                </div>

                <div class="flex items-center gap-4">
                    <a href="/" class="text-[11px] font-bold uppercase tracking-wider text-stone-500 hover:text-stone-900 border border-stone-200 rounded-xl px-3 py-2 hover:bg-stone-50 transition whitespace-nowrap">
                        ← User Site
                    </a>

                    <div class="h-6 w-px bg-stone-200"></div>

                    <div class="flex items-center gap-2.5 pl-1">
                        <div class="flex items-center justify-center w-8 h-8 rounded-xl bg-stone-900 text-white font-bold text-xs shadow-sm">
                            A
                        </div>
                        <div class="hidden sm:block text-left">
                            <p class="text-xs font-bold text-stone-800 leading-none">Admin Darwis</p>
                            <p class="text-[9px] text-stone-400 font-semibold tracking-wider uppercase mt-0.5">Superadmin</p>
                        </div>
                    </div>
                </div>

            </div>
        </header>

        <main class="flex-1 overflow-y-auto p-6 lg:p-8">