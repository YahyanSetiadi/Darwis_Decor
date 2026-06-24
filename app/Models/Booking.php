<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'paket_id',
        'tanggal_booking',
        'total',
        'status',
        'nama_customer',
        'email_customer',
        'no_hp',
        'alamat',
    ];


    protected $casts = [
        'tanggal_booking' => 'date',
    ];

    public function paket(): BelongsTo
    {
        return $this->belongsTo(Paket::class);
    }

    public function bookingExtras(): HasMany
    {
        return $this->hasMany(BookingExtra::class);
    }
}

