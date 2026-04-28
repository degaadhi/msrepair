<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing Price List data to prevent duplicates when re-seeding
        \App\Models\PriceList::truncate();

        // Comprehensive iPhone Price List Data
        $services = [
            // iPhone 17 Series
            ['service_name' => 'Ganti LCD / Layar (OLED)', 'device_model' => 'iPhone 17 Pro Max', 'category' => 'Display', 'price' => 6500000, 'description' => 'Ganti LCD/OLED panel original dengan TrueTone.'],
            ['service_name' => 'Ganti LCD / Layar (OLED)', 'device_model' => 'iPhone 17 Pro', 'category' => 'Display', 'price' => 6000000, 'description' => 'Ganti LCD/OLED panel original dengan TrueTone.'],
            ['service_name' => 'Ganti Baterai', 'device_model' => 'iPhone 17 Series', 'category' => 'Internal', 'price' => 1800000, 'description' => 'Ganti baterai original, cycle count kembali 0.'],
            ['service_name' => 'Ganti Kaca Belakang', 'device_model' => 'iPhone 17 Series', 'category' => 'Housing', 'price' => 1500000, 'description' => 'Penggantian backglass menggunakan mesin laser.'],

            // iPhone 16 Series
            ['service_name' => 'Ganti LCD / Layar (OLED)', 'device_model' => 'iPhone 16 Pro Max', 'category' => 'Display', 'price' => 6000000, 'description' => 'Ganti LCD/OLED panel original dengan TrueTone.'],
            ['service_name' => 'Ganti LCD / Layar (OLED)', 'device_model' => 'iPhone 16 Pro', 'category' => 'Display', 'price' => 5500000, 'description' => 'Ganti LCD/OLED panel original dengan TrueTone.'],
            ['service_name' => 'Ganti Baterai', 'device_model' => 'iPhone 16 Series', 'category' => 'Internal', 'price' => 1600000, 'description' => 'Ganti baterai original, cycle count kembali 0.'],
            ['service_name' => 'Ganti Kaca Belakang', 'device_model' => 'iPhone 16 Series', 'category' => 'Housing', 'price' => 1300000, 'description' => 'Penggantian backglass menggunakan mesin laser.'],

            // iPhone 15 Series
            ['service_name' => 'Ganti LCD / Layar (OLED)', 'device_model' => 'iPhone 15 Pro Max', 'category' => 'Display', 'price' => 5500000, 'description' => 'Ganti LCD/OLED panel original dengan TrueTone.'],
            ['service_name' => 'Ganti LCD / Layar (OLED)', 'device_model' => 'iPhone 15 Pro', 'category' => 'Display', 'price' => 5000000, 'description' => 'Ganti LCD/OLED panel original dengan TrueTone.'],
            ['service_name' => 'Ganti Baterai', 'device_model' => 'iPhone 15 Series', 'category' => 'Internal', 'price' => 1500000, 'description' => 'Ganti baterai original, cycle count kembali 0.'],
            ['service_name' => 'Ganti Kaca Belakang', 'device_model' => 'iPhone 15 Series', 'category' => 'Housing', 'price' => 1200000, 'description' => 'Penggantian backglass menggunakan mesin laser.'],

            // iPhone 14 Series
            ['service_name' => 'Ganti LCD / Layar (OLED)', 'device_model' => 'iPhone 14 Pro Max', 'category' => 'Display', 'price' => 4800000, 'description' => 'Penggantian layar original cabutan.'],
            ['service_name' => 'Ganti LCD / Layar (OLED)', 'device_model' => 'iPhone 14 Pro', 'category' => 'Display', 'price' => 4500000, 'description' => 'Penggantian layar original cabutan.'],
            ['service_name' => 'Ganti Baterai', 'device_model' => 'iPhone 14 Series', 'category' => 'Internal', 'price' => 1250000, 'description' => 'Ganti baterai tahan lama.'],
            ['service_name' => 'Ganti Kaca Belakang', 'device_model' => 'iPhone 14 Series', 'category' => 'Housing', 'price' => 900000, 'description' => 'Reparasi kaca belakang pecah.'],

            // iPhone 13 Series
            ['service_name' => 'Ganti LCD / Layar', 'device_model' => 'iPhone 13 Pro Max', 'category' => 'Display', 'price' => 4200000, 'description' => 'Layar original dengan refresh rate tinggi.'],
            ['service_name' => 'Ganti LCD / Layar', 'device_model' => 'iPhone 13 / 13 Pro', 'category' => 'Display', 'price' => 3500000, 'description' => 'Perbaikan layar retak atau rusak.'],
            ['service_name' => 'Ganti Baterai', 'device_model' => 'iPhone 13 Series', 'category' => 'Internal', 'price' => 950000, 'description' => 'Baterai baru kualitas OEM/Original.'],
            ['service_name' => 'Perbaikan Face ID', 'device_model' => 'iPhone 13 Series', 'category' => 'Internal', 'price' => 1100000, 'description' => 'Kalibrasi dan perbaikan modul Face ID.'],

            // iPhone 12 Series
            ['service_name' => 'Ganti LCD / Layar', 'device_model' => 'iPhone 12 Pro Max', 'category' => 'Display', 'price' => 2800000, 'description' => 'Ganti layar.'],
            ['service_name' => 'Ganti LCD / Layar', 'device_model' => 'iPhone 12 / 12 Pro', 'category' => 'Display', 'price' => 2200000, 'description' => 'Ganti layar.'],
            ['service_name' => 'Ganti Baterai', 'device_model' => 'iPhone 12 Series', 'category' => 'Internal', 'price' => 650000, 'description' => 'Penggantian baterai.'],
            ['service_name' => 'Perbaikan Kamera Belakang', 'device_model' => 'iPhone 12 Pro Max', 'category' => 'Camera', 'price' => 1500000, 'description' => 'Ganti modul kamera getar/blur.'],

            // iPhone 11 Series
            ['service_name' => 'Ganti LCD / Layar', 'device_model' => 'iPhone 11 Pro Max', 'category' => 'Display', 'price' => 1800000, 'description' => 'Layar OEM/Original available.'],
            ['service_name' => 'Ganti LCD / Layar', 'device_model' => 'iPhone 11', 'category' => 'Display', 'price' => 950000, 'description' => 'Ganti LCD incell kualitas atas.'],
            ['service_name' => 'Ganti Baterai', 'device_model' => 'iPhone 11 Series', 'category' => 'Internal', 'price' => 450000, 'description' => 'Baterai kualitas terbaik.'],
            ['service_name' => 'Perbaikan Port Charger', 'device_model' => 'iPhone 11 Series', 'category' => 'Internal', 'price' => 400000, 'description' => 'Ganti konektor charger / mic.'],

            // iPhone X Series
            ['service_name' => 'Ganti LCD / Layar', 'device_model' => 'iPhone XS Max', 'category' => 'Display', 'price' => 1300000, 'description' => 'Ganti OLED panel.'],
            ['service_name' => 'Ganti LCD / Layar', 'device_model' => 'iPhone X / XS', 'category' => 'Display', 'price' => 900000, 'description' => 'Ganti OLED panel.'],
            ['service_name' => 'Ganti LCD / Layar', 'device_model' => 'iPhone XR', 'category' => 'Display', 'price' => 650000, 'description' => 'Ganti LCD.'],
            ['service_name' => 'Ganti Baterai', 'device_model' => 'iPhone X Series', 'category' => 'Internal', 'price' => 350000, 'description' => 'Ganti Baterai.'],
            
            // Lain-lain
            ['service_name' => 'Mati Total (Motherboard)', 'device_model' => 'Semua iPhone', 'category' => 'Logic Board', 'price' => 500000, 'description' => 'Biaya pengecekan ringan/jasa ic dasar. Harga menyesuaikan IC yg rusak.'],
            ['service_name' => 'Water Damage Treatment', 'device_model' => 'Semua iPhone', 'category' => 'Logic Board', 'price' => 350000, 'description' => 'Pembersihan karat dan ultrasonik.'],
        ];

        foreach ($services as $service) {
            \App\Models\PriceList::create($service);
        }
    }
}
