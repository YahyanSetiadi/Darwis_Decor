<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Darwis Decor - Dashboard' }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .font-serif {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>
<body class="bg-[#FBFFA] text-stone-800 antialiased">

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');
            
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        }
    </script>

    <section class="min-h-screen bg-[#FBFFA] flex flex-col justify-center items-center px-4 py-12 antialiased font-sans">
    
    <div class="w-full max-w-md mb-6 px-2 flex justify-between items-end">
        <div class="flex items-center gap-2 text-xs tracking-wider uppercase font-semibold text-stone-400">
            <span class="text-stone-700">Admin</span>
            <span>/</span>
            <span class="text-stone-400">Login</span>
        </div>
        <span class="h-1 w-12 bg-stone-200 rounded-full"></span>
    </div>

    <div class="w-full max-w-md bg-white border border-stone-200/80 shadow-xl shadow-stone-100/50 rounded-2xl overflow-hidden transition-all duration-300">
        
        <div class="p-6 bg-stone-50 border-b border-stone-100 flex items-center justify-between">
            <div class="flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-xl bg-stone-900 text-white flex items-center justify-center font-serif text-lg font-light tracking-tighter shadow-md shadow-stone-900/10">
                    DD
                </div>
                <div>
                    <h2 class="text-sm font-bold text-stone-900 tracking-wide">Darwis Decor</h2>
                    <p class="text-xs text-stone-400 font-medium">Admin Dashboard</p>
                </div>
            </div>
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-stone-100 text-[10px] uppercase font-bold tracking-wider text-stone-600">
                Secure Console
            </span>
        </div>

        <div class="p-6 sm:p-8">
            <div class="mb-6">
                <h1 class="text-xl font-bold text-stone-800 tracking-tight">Masuk ke Admin Console</h1>
                <p class="text-xs text-stone-500 mt-1 font-light">Masukkan kredensial email dan password Anda yang terdaftar.</p>
            </div>

            @if($errors->any())
                <div class="mb-5 rounded-xl border border-red-100 bg-red-50/60 p-4 text-xs text-red-700">
                    <div class="flex items-center gap-2 font-semibold mb-1">
                        <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                        Terjadi kesalahan login:
                    </div>
                    <ul class="list-disc pl-5 space-y-0.5 font-light">
                        @foreach($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.post') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-stone-600 mb-1.5" for="email">
                        Alamat Email
                    </label>
                    <div class="relative">
                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            placeholder="admin@example.com"
                            class="w-full pl-3 pr-4 py-2.5 rounded-xl border border-stone-200 bg-stone-50/30 focus:bg-white focus:outline-none focus:ring-4 focus:ring-stone-900/5 focus:border-stone-900 text-sm text-stone-800 placeholder-stone-400 transition-all duration-200"
                            autocomplete="email"
                            required
                        />
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-center mb-1.5">
                        <label class="block text-xs font-semibold uppercase tracking-wider text-stone-600" for="password">
                            Password
                        </label>
                    </div>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="••••••••"
                        class="w-full px-3 py-2.5 rounded-xl border border-stone-200 bg-stone-50/30 focus:bg-white focus:outline-none focus:ring-4 focus:ring-stone-900/5 focus:border-stone-900 text-sm text-stone-800 placeholder-stone-400 transition-all duration-200"
                        autocomplete="current-password"
                        required
                    />
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full px-4 py-3 rounded-xl bg-stone-900 hover:bg-stone-800 text-white text-xs font-bold uppercase tracking-widest shadow-md shadow-stone-900/10 active:scale-[0.98] transition-all duration-150">
                        Login Admin
                    </button>
                </div>

                <div class="pt-4 border-t border-stone-100 flex items-center justify-center gap-2 text-[11px] text-stone-400 font-light">
                    <svg class="w-3.5 h-3.5 text-stone-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>Status akun wajib aktif (<code class="font-mono text-stone-500">is_active = 1</code>)</span>
                </div>
            </form>
        </div>
    </div>
</section>

</body>
</html>