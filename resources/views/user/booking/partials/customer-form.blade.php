@csrf

<input type="hidden" name="paket_id" value="{{ $paket->id }}" />

<div class="mb-8">
    <h2 class="text-sm uppercase tracking-widest font-semibold" style="color: rgba(75,75,48,0.85);">Data Diri</h2>
    <div class="mt-4 grid md:grid-cols-3 gap-4">
        <div>
            <label class="block text-[11px] tracking-widest uppercase font-medium" style="color: rgba(75,75,48,0.75);">Nama</label>
            <input type="text" name="nama_customer" value="{{ old('nama_customer') }}"
                   class="mt-2 w-full px-4 py-3.5 rounded-xl bg-white border border-stone-200/80 text-sm font-light text-stone-800 focus:outline-none focus:border-stone-800" required />
        </div>
        <div>
            <label class="block text-[11px] tracking-widest uppercase font-medium" style="color: rgba(75,75,48,0.75);">Email</label>
            <input type="email" name="email_customer" value="{{ old('email_customer') }}"
                   class="mt-2 w-full px-4 py-3.5 rounded-xl bg-white border border-stone-200/80 text-sm font-light text-stone-800 focus:outline-none focus:border-stone-800" />
        </div>
        <div>
            <label class="block text-[11px] tracking-widest uppercase font-medium" style="color: rgba(75,75,48,0.75);">No HP</label>
            <input type="text" name="no_hp" value="{{ old('no_hp') }}"
                   class="mt-2 w-full px-4 py-3.5 rounded-xl bg-white border border-stone-200/80 text-sm font-light text-stone-800 focus:outline-none focus:border-stone-800" required />
        </div>
    </div>
</div>

