<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            // Kalau nanti user login tidak pakai tabel users default, tetap aman karena foreignId nullable
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();

            $table->foreignId('paket_id')->constrained('pakets')->cascadeOnDelete();

            $table->date('tanggal_booking');
            $table->decimal('total', 15, 2)->default(0);
            $table->string('status')->default('pending'); // pending/confirmed/canceled

            $table->timestamps();

            // Global: 1 tanggal hanya boleh 1 booking
            $table->unique('tanggal_booking');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};

