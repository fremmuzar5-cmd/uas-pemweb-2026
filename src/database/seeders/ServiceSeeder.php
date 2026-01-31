<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Pengajuan Online',
                'icon' => 'lni lni-write',
                'description' => 'Mahasiswa dapat mengajukan sidang skripsi secara online.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Approval Terintegrasi',
                'icon' => 'lni lni-checkmark-circle',
                'description' => 'Proses verifikasi dan persetujuan oleh admin dan dosen.',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Tanda Tangan Digital',
                'icon' => 'lni lni-pencil-alt',
                'description' => 'Dokumen ditandatangani secara elektronik (TTE).',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Notifikasi Status',
                'icon' => 'lni lni-alarm',
                'description' => 'Status pengajuan dapat dipantau secara real-time.',
                'order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
