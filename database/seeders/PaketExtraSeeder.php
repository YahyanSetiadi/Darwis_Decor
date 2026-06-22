<?php

namespace Database\Seeders;

use App\Models\Extra;
use App\Models\Paket;
use Illuminate\Database\Seeder;

class PaketExtraSeeder extends Seeder
{
    public function run(): void
    {
        // Reset data
        Paket::query()->delete();
        Extra::query()->delete();

        // 1. SEEDING PAKET
        $pakets = [
            // Only Decor
            ['nama' => 'Home Package 1', 'kategori' => 'only-decor', 'deskripsi' => 'Dekorasi 4m artificial flowers (tanpa panggung), set sofa pelaminan, mini garden, lighting standar, welcome gate, 1 kotak amplop, 1 standing foto, lantai melamin', 'harga_mulai' => 4000000],
            ['nama' => 'Home Package 2', 'kategori' => 'only-decor', 'deskripsi' => 'Dekorasi 5m artificial flowers (tanpa panggung), set sofa pelaminan, mini garden, lighting standar, welcome gate, 1 kotak amplop, 1 standing foto, lantai melamin', 'harga_mulai' => 5000000],
            ['nama' => 'Home Package 3', 'kategori' => 'only-decor', 'deskripsi' => 'Dekorasi 6m artificial mix flowers (tanpa panggung), set sofa pelaminan, mini garden, lighting standar, welcome gate, 1 kotak amplop, 2 standing foto, lantai melamin, meja & kursi akad', 'harga_mulai' => 6000000],
            ['nama' => 'Home Package A', 'kategori' => 'only-decor', 'deskripsi' => 'Dekorasi 4m, set sofa pelaminan, mini garden, lighting standar, welcome gate, 1 kotak amplop, 1 standing foto, lantai melamin, Tenda 4x12, full karpet, panggung 4x3, Kursi 70 + cover, meja 6 + cover, lighting, blower 1 unit', 'harga_mulai' => 11500000],
            ['nama' => 'Home Package B', 'kategori' => 'only-decor', 'deskripsi' => 'Dekorasi 5m, set sofa pelaminan, mini garden, lighting standar, welcome gate, 1 kotak amplop, 1 standing foto, lantai melamin, Tenda 4x12/6x12, full karpet, panggung 5x3, Kursi 70 + cover, meja 6 + cover, lighting, blower 1 unit', 'harga_mulai' => 12500000],
            ['nama' => 'Home Package C', 'kategori' => 'only-decor', 'deskripsi' => 'Dekorasi 6m mix flowers, set sofa pelaminan, mini garden, lighting standar, welcome gate, 1 kotak amplop, 2 standing foto, lantai melamin, meja & kursi akad, Tenda 6x12, full karpet, panggung 6x3, Kursi 70 + cover, meja 6 + cover, lighting, blower 1 unit', 'harga_mulai' => 13000000],
            ['nama' => 'Dekorasi Gedung A', 'kategori' => 'only-decor', 'deskripsi' => 'Dekorasi 8m artificial mix fresh flowers, mini garden, set sofa pelaminan, welcome gate + welcome sign, Set meja kursi akad, backdrop musik, pergola, standing flowers, penjor, 2 kotak uang, 2 standing foto, lantai melamin, karpet jalan', 'harga_mulai' => 15500000],
            ['nama' => 'Dekorasi Gedung B', 'kategori' => 'only-decor', 'deskripsi' => 'Dekorasi 10m artificial mix fresh flowers, mini garden, set sofa pelaminan, welcome gate + welcome sign, Set meja kursi akad, backdrop musik, pergola 1 lorong, standing flowers, penjor, 2 kotak uang, 2 standing foto, lantai melamin, karpet jalan', 'harga_mulai' => 18500000],
            ['nama' => 'Dekorasi Gedung C', 'kategori' => 'only-decor', 'deskripsi' => 'Dekorasi 12m artificial mix fresh flowers, mini garden, set sofa pelaminan, welcome gate + welcome sign, Set meja kursi akad, backdrop musik, pergola 2 lorong, standing flowers, penjor, 2 kotak uang, 2 standing foto, lantai melamin, karpet jalan, lantai akrilik', 'harga_mulai' => 23500000],
            ['nama' => 'Dekorasi Gedung Exclusive', 'kategori' => 'only-decor', 'deskripsi' => 'Dekorasi 12-14m artificial mix fresh flowers, mini garden, set sofa pelaminan, welcome gate + welcome sign, Set meja kursi akad, backdrop musik, pergola (6x6) 3 lorong, standing flowers, penjor, 2 kotak uang, 2 standing foto, lantai melamin, karpet jalan, lantai akrilik, 2 Fresnel + 2 Beam, Hand Bouquet Fresh Flowers', 'harga_mulai' => 30000000],

            // All In
            ['nama' => 'Paket Rumah A', 'kategori' => 'all-in', 'deskripsi' => 'MUA & Busana (1 makeup, 2 pasang busana, ronce melati, 2 pagar ayu), dekorasi 4m, mini taman, lantai melamin, welcome gate, artificial hand bouquet, 1 kotak angpau', 'harga_mulai' => 12500000],
            ['nama' => 'Paket Rumah B', 'kategori' => 'all-in', 'deskripsi' => 'MUA & Busana (1 makeup, 2 pasang busana, ronce melati, 2 pagar ayu, makeup ortu & besan), dekorasi 6m, mini taman, lantai melamin, welcome gate, hand bouquet, 1 kotak angpau, standing photo frame', 'harga_mulai' => 15000000],
            ['nama' => 'Paket Gedung A', 'kategori' => 'all-in', 'deskripsi' => 'MUA lengkap, dekorasi 10m mix fresh flowers, mini taman, meja kursi akad, 1 penjor, welcome gate & mirror sign, standing photo frame, backdrop musik, karpet jalan, 2 kotak angpau, hand bouquet fresh flowers, standing flowers, pergola, lorong 1 pcs', 'harga_mulai' => 33000000],
            ['nama' => 'Paket Gedung B', 'kategori' => 'all-in', 'deskripsi' => 'MUA lengkap, adat panggih, dekorasi 10m mix fresh flowers, mini taman, meja kursi akad, 1 penjor, backdrop musik, karpet jalan, welcome gate & mirror sign, standing photo frame, 2 kotak angpau, hand bouquet fresh flowers, standing flower, pergola, lorong 2 pcs, lantai akrilik, bunga mobil', 'harga_mulai' => 37000000],
            ['nama' => 'Paket Gedung Premium', 'kategori' => 'all-in', 'deskripsi' => 'MUA lengkap + adat panggih, dekorasi 10-14m mix bunga segar, meja kursi akad, 1 penjor, backdrop musik, karpet jalan, welcome gate & mirror sign, standing photo frame, 2 kotak angpau, hand bouquet fresh flowers, standing flowers, pergola 4x4, lorong 3 pcs, lantai akrilik, lighting (beam), bunga mobil', 'harga_mulai' => 45000000],
            ['nama' => 'Paket Gedung GOLD', 'kategori' => 'all-in', 'deskripsi' => 'MUA lengkap, WO (One day service, 7 personel), Entertainment (Full band, sound system), Dokumentasi (3 album + cinematic video), Dekorasi 8-10m, Welcome gate, Backdrop music, Mirror sign, dll. Benefit: Free MC, Henna & Fake nails, Buku tamu', 'harga_mulai' => 50500000],
        ];

        foreach ($pakets as $p) { Paket::create($p); }

        // 2. SEEDING EXTRAS
        $extras = [
            ['nama' => 'Custom Decor', 'deskripsi' => '3jt (untuk 3 meter, untuk penambahan 1 jt/meter)', 'harga' => 3000000, 'aktif' => true],
            ['nama' => 'Melamin Jalan', 'deskripsi' => '3jt (untuk 3 meter)', 'harga' => 3000000, 'aktif' => true],
            ['nama' => 'Mix Fresh Flowers', 'deskripsi' => '1.5jt per paket', 'harga' => 1500000, 'aktif' => true],
            ['nama' => 'Upgrade Size Decor', 'deskripsi' => '1jt/meter', 'harga' => 1000000, 'aktif' => true],
            ['nama' => 'Photobooth/Music', 'deskripsi' => '1jt (band dan 2 penyanyi)', 'harga' => 1000000, 'aktif' => true],
            ['nama' => 'Lighting Effect', 'deskripsi' => '3jt (untuk ..)', 'harga' => 3000000, 'aktif' => true],
            ['nama' => 'Pohon Decor', 'deskripsi' => '1.5jt per unit', 'harga' => 1500000, 'aktif' => true],
            ['nama' => 'Pergola', 'deskripsi' => '4x4=2.5jt / 6x6=4jt', 'harga' => 2500000, 'aktif' => true],
            ['nama' => 'Kain Lorong/Decor', 'deskripsi' => 'Harga total 6jt (4x6)', 'harga' => 6000000, 'aktif' => true],
            ['nama' => 'Meja', 'deskripsi' => '30 rb /pcs', 'harga' => 30000, 'aktif' => true],
            ['nama' => 'Kursi', 'deskripsi' => '15 rb /pcs', 'harga' => 15000, 'aktif' => true],
        ];

        foreach ($extras as $e) {
            Extra::updateOrCreate(['nama' => $e['nama']], $e);
        }
    }
}