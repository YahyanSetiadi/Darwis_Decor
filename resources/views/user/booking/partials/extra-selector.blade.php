@php
    /**
     * Expected variables:
     * - $extras: Collection|array of Extra
     */
@endphp

<div>
    <div class="mb-4">
        <h2 class="text-sm uppercase tracking-widest font-semibold" style="color: rgba(75,75,48,0.85);">Tambahan (Extra)</h2>
        <p class="text-xs mt-2" style="color: rgba(75,75,48,0.65);">Klik + untuk menambahkan ke form booking.</p>
    </div>

{{-- Card list extra (dipisah dengan ringkasan supaya UX mirip "shoppe") --}}
    <div class="rounded-[2rem] border border-stone-200/80 bg-stone-50 p-4 shadow-sm">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">


        @foreach($extras as $extra)
            @php
                $img = match(strtolower($extra->nama)) {
                    'kursi' => 'https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=800&q=80',
                    'meja make up' , 'meja make-up' => 'https://images.unsplash.com/photo-1519710164239-da123dc03ef4?auto=format&fit=crop&w=800&q=80',
                    'panggung' => 'https://images.unsplash.com/photo-1501612780327-45045538702b?auto=format&fit=crop&w=800&q=80',
                    default => 'https://images.unsplash.com/photo-1526481280695-3c687fd5432c?auto=format&fit=crop&w=800&q=80'
                };
            @endphp

            <div class="rounded-[1.6rem] border border-stone-200/80 bg-stone-50 overflow-hidden shadow-sm"
                 data-extra-id="{{ $extra->id }}">

                <div class="h-28 w-full bg-white/40">
                    <img src="{{ $img }}" alt="{{ $extra->nama }}" class="w-full h-full object-cover" />
                </div>

                <div class="p-4">
                    <div class="flex items-start justify-between gap-3">
                        <div>
                            <p class="font-semibold text-sm" style="color: rgba(75,75,48,0.92);">{{ $extra->nama }}</p>
                            <p class="text-xs mt-1" style="color: rgba(75,75,48,0.70);">{{ $extra->deskripsi }}</p>
                            <p class="text-xs mt-2 font-semibold" style="color: rgba(75,75,48,0.85);">Rp {{ number_format((float)$extra->harga, 0, ',', '.') }}</p>
                        </div>
                    </div>

                    <div class="mt-4 flex items-center justify-between gap-3">
                        <div class="flex items-center gap-2">
                            <button type="button"
                                    class="px-3 py-2 rounded-xl bg-white border border-stone-200/80 text-stone-700 text-sm font-semibold"
                                    onclick="window.__bbAdd(this)" aria-label="tambah">+</button>

                            <button type="button"
                                    class="px-3 py-2 rounded-xl bg-white border border-stone-200/80 text-stone-700 text-sm font-semibold"
                                    onclick="window.__bbRemove(this)" aria-label="hapus">Hapus</button>

                            <span class="text-[10px] tracking-widest uppercase text-stone-500">(qty)</span>
                        </div>

                        <span class="text-[10px] tracking-widest uppercase text-stone-500">(klik +)</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="mt-8 border-t border-stone-200/80 pt-6">
    <h3 class="text-sm uppercase tracking-widest font-semibold" style="color: rgba(75,75,48,0.85);">Ringkasan Tambahan Dipilih</h3>

    <div id="__bbSelectedSummary" class="mt-4 space-y-2">
        <p class="text-sm text-stone-500">Belum ada tambahan dipilih.</p>
    </div>
</div>

<script>
// Generate payload that matches backend:
    // extras[0][extra_id] and extras[0][qty]
    window.__bbSelected = window.__bbSelected || new Map();
    const __bbSelected = window.__bbSelected;


    function __bbSyncHiddenInputs() {
        const form = document.querySelector('form[action="{{ route('user.bookings.store') }}"]')
            || document.querySelector('form');
        if (!form) return;

        form.querySelectorAll('input[data-bb-generated="1"]').forEach(el => el.remove());

        let idx = 0;
        for (const [extraId, qty] of __bbSelected.entries()) {
            if (qty <= 0) continue;

            const inputId = document.createElement('input');
            inputId.type = 'hidden';
            inputId.name = `extras[${idx}][extra_id]`;
            inputId.value = extraId;
            inputId.setAttribute('data-bb-generated', '1');
            form.appendChild(inputId);

            const inputQty = document.createElement('input');
            inputQty.type = 'hidden';
            inputQty.name = `extras[${idx}][qty]`;
            inputQty.value = qty;
            inputQty.setAttribute('data-bb-generated', '1');
            form.appendChild(inputQty);

            idx++;
        }

        __bbRenderSummary();
    }

    function __bbRenderSummary() {
        const summary = document.getElementById('__bbSelectedSummary');
        if (!summary) return;

        summary.innerHTML = '';

        if (__bbSelected.size === 0) {
            const p = document.createElement('p');
            p.className = 'text-sm text-stone-500';
            p.textContent = 'Belum ada tambahan dipilih.';
            summary.appendChild(p);
            return;
        }

        for (const [extraId, qty] of __bbSelected.entries()) {
            if (qty <= 0) continue;

            // ambil nama/price dari card
                const card = document.querySelector(`[data-extra-id="${extraId}"]`);
                const nameEl = card?.querySelector('p.font-semibold');
                const priceEl = card?.querySelector('p.text-xs.mt-2');
                // catatan: jika markup berbeda, ringkasan tetap jalan.

            const name = nameEl ? nameEl.textContent.trim() : `Extra #${extraId}`;
            const priceText = priceEl ? priceEl.textContent.trim() : '';

            const row = document.createElement('div');
            row.className = 'flex items-center justify-between gap-4 text-sm';

            const left = document.createElement('div');
            left.className = 'min-w-0';
            left.innerHTML = `<span class="font-medium text-stone-800">${name}</span><span class="text-stone-500"> × ${qty}</span>`;

            const right = document.createElement('div');
            right.className = 'text-stone-800 font-semibold';
            right.textContent = priceText ? priceText.replace('Rp', 'Rp (') + ')' : '';

            row.appendChild(left);
            row.appendChild(right);
            summary.appendChild(row);
        }
    }

    window.__bbAdd = function(btn) {
        const wrapper = btn.closest('[data-extra-id]');
        if (!wrapper) return;
        const extraId = wrapper.getAttribute('data-extra-id');
        const current = __bbSelected.get(extraId) || 0;
        __bbSelected.set(extraId, current + 1);
        __bbSyncHiddenInputs();
    };

    window.__bbRemove = function(btn) {
        const wrapper = btn.closest('[data-extra-id]');
        if (!wrapper) return;
        const extraId = wrapper.getAttribute('data-extra-id');
        __bbSelected.set(extraId, 0);
        __bbSelected.delete(extraId);
        __bbSyncHiddenInputs();
    };
</script>

