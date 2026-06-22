<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('booking_extras', function (Blueprint $table) {
            $table->id();

            $table->foreignId('booking_id')->constrained('bookings')->cascadeOnDelete();
            $table->foreignId('extra_id')->constrained('extras')->cascadeOnDelete();

            $table->unsignedInteger('qty')->default(1);
            $table->decimal('subtotal', 15, 2)->default(0);

            $table->timestamps();

            // opsional: supaya 1 booking tidak punya extra yang sama dobel
            $table->unique(['booking_id', 'extra_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('booking_extras');
    }
};

