<?php

namespace Database\Seeders;

use App\Models\Pricing;
use Illuminate\Database\Seeder;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pricing::updateOrCreate(
            ['section_key' => 'pricing_main'],
            [
                'small_title' => 'Layanan',
                'title' => 'Paket Layanan Sistem',
                'description' => 'Pilihan paket layanan sistem pengajuan dan persetujuan sidang skripsi sesuai kebutuhan institusi.',
                'plans' => [
                    [
                        'name' => 'Basic',
                        'description' => 'Untuk uji coba sistem',
                        'price' => 0,
                        'currency' => 'Rp',
                        'duration' => '/bulan',
                        'featured' => false,
                        'features' => [
                            ['text' => 'Pengajuan sidang online', 'active' => true],
                            ['text' => 'Tracking status pengajuan', 'active' => true],
                            ['text' => 'Notifikasi dasar', 'active' => true],
                        ],
                    ],
                    [
                        'name' => 'Standard',
                        'description' => 'Paket standar program studi',
                        'price' => 150000,
                        'currency' => 'Rp',
                        'duration' => '/bulan',
                        'featured' => true,
                        'features' => [
                            ['text' => 'Manajemen pengajuan sidang', 'active' => true],
                            ['text' => 'Plotting dosen penguji', 'active' => true],
                            ['text' => 'Dashboard monitoring admin', 'active' => true],
                            ['text' => 'Notifikasi otomatis', 'active' => true],
                        ],
                    ],
                    [
                        'name' => 'Premium',
                        'description' => 'Solusi lengkap institusi',
                        'price' => 500000,
                        'currency' => 'Rp',
                        'duration' => '/tahun',
                        'featured' => false,
                        'features' => [
                            ['text' => 'Integrasi Tanda Tangan Elektronik (TTE)', 'active' => true],
                            ['text' => 'Audit trail dokumen resmi', 'active' => true],
                            ['text' => 'Reporting & export data', 'active' => true],
                            ['text' => 'Support & maintenance prioritas', 'active' => true],
                        ],
                    ],
                ],
            ]
        );
    }
}
