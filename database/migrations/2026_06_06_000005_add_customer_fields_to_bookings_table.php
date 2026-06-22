<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('nama_customer')->nullable()->after('id');
            $table->string('email_customer')->nullable()->after('nama_customer');
            $table->string('no_hp')->nullable()->after('email_customer');
        });
    }

    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn(['nama_customer', 'email_customer', 'no_hp']);
        });
    }
};

