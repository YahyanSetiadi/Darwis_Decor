@php
    /** @var \Illuminate\Pagination\LengthAwarePaginator|\Illuminate\Support\Collection $bookings */
@endphp

@include('admin.layouts.header')

@section('title', 'Admin - Approve Booking')

@section('page_header')
    <div class="flex items-center justify-between gap-4">
        <div class="min-w-0">
            <div class="flex items-center gap-2 text-sm text-gray-500">
                <span class="font-medium text-stone-900">Admin</span>
                <span>/</span>
                <span>Bookings</span>
                <span>/</span>
                <span class="text-gray-700">Pending</span>
            </div>
            <h1 class="text-2xl font-semibold text-gray-800 leading-tight mt-1">Daftar Booking (Pending)</h1>
            <p class="text-sm text-gray-600 mt-1">Admin dapat menyetujui booking agar invoice bisa diakses user.</p>
        </div>

        <div class="flex items-center gap-3 flex-shrink-0">
            <div class="hidden md:block rounded-2xl bg-gray-50 border border-gray-200 px-4 py-2">
                <div class="text-xs text-gray-500">Total</div>
                <div class="text-lg font-semibold text-gray-900">{{ $bookings->count() }}</div>
            </div>

            <a href="{{ route('admin.bookings.pending') }}" class="rounded-xl border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 transition">
                Refresh
            </a>
        </div>
    </div>
@endsection

@section('content')
    <div class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
        <div class="p-4 border-b border-gray-200 bg-gray-50">
            <div class="flex items-center justify-between gap-4">
                <span class="text-sm font-medium text-gray-700">Antrian persetujuan</span>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="table-auto w-full text-sm">
                <thead class="bg-gray-50 text-gray-600">
                    <tr>
                        <th class="text-left px-4 py-3 font-semibold">ID</th>
                        <th class="text-left px-4 py-3 font-semibold">Tanggal</th>
                        <th class="text-left px-4 py-3 font-semibold">Paket</th>
                        <th class="text-left px-4 py-3 font-semibold">Customer</th>
                        <th class="text-left px-4 py-3 font-semibold">Total</th>
                        <th class="text-left px-4 py-3 font-semibold">Status</th>
                        <th class="text-right px-4 py-3 font-semibold">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($bookings as $b)
                        <tr class="border-t border-gray-100 hover:bg-gray-50 transition">
                            <td class="px-4 py-3 text-gray-800 font-medium">#{{ $b->id }}</td>
                            <td class="px-4 py-3 text-gray-700">{{ optional($b->tanggal_booking)->format('d-m-Y') }}</td>
                            <td class="px-4 py-3 text-gray-700">{{ $b->paket->nama ?? '-' }}</td>
                            <td class="px-4 py-3 text-gray-700">
                                <div class="font-medium text-gray-800">{{ $b->nama_customer }}</div>
                                <div class="text-xs text-gray-500">{{ $b->no_hp }}</div>
                            </td>
                            <td class="px-4 py-3 text-gray-800">Rp {{ number_format((float)$b->total, 0, ',', '.') }}</td>
                            <td class="px-4 py-3">
                                @php
                                    $isPendingRow = $b->status === 'pending';
                                    $badgeClass = $isPendingRow
                                        ? 'bg-yellow-50 text-yellow-800 border-yellow-100'
                                        : 'bg-green-50 text-green-800 border-green-100';
                                @endphp
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold border {{ $badgeClass }}">
                                    {{ $b->status }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-right whitespace-nowrap">
                                @if($b->status === 'pending')
                                    <form method="POST" action="{{ route('admin.bookings.approve', $b->id) }}" class="inline">
                                        @csrf
                                        <button type="submit" class="px-4 py-2 rounded-xl bg-green-600 text-white text-xs font-semibold hover:bg-green-700 transition">
                                            Approve
                                        </button>
                                    </form>
                                @else
                                    <span class="text-xs text-gray-400">Sudah diproses</span>
                                @endif

                                <a href="{{ route('user.bookings.invoice', $b->id) }}" class="ml-3 px-3 py-2 rounded-xl bg-stone-100 text-gray-700 text-xs font-semibold hover:bg-stone-200 transition">
                                    Lihat Invoice
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-12 text-center text-gray-500">Belum ada booking pending.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@include('admin.layouts.footer')

