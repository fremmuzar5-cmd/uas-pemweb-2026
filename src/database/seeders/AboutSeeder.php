<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::updateOrCreate(
            [
                // kondisi unik
                'section_key' => 'about_main',
            ],
            [
                'title' => 'Sistem Pengajuan Sidang Skripsi Digital',
                'subtitle' => 'Tentang Aplikasi',
                'description' => 'Aplikasi berbasis web untuk mendigitalisasi proses pengajuan dan persetujuan sidang skripsi dengan dukungan Tanda Tangan Elektronik (TTE) yang sah secara hukum.',
                'image' => null, // fallback ke default image di blade
                'metadata' => [
                    'tentang' => [
                        'label' => 'Tentang Sistem',
                        'title' => 'Apa itu Sistem Pengajuan Sidang Skripsi?',
                        'content' => '<p>Sistem Pengajuan Sidang Skripsi adalah aplikasi berbasis web yang dirancang untuk mempermudah mahasiswa dalam mengajukan sidang skripsi secara online.</p>
                                      <p>Seluruh proses mulai dari pengajuan, verifikasi, hingga persetujuan dilakukan secara digital dan terintegrasi dalam satu platform.</p>',
                    ],
                    'visi' => [
                        'label' => 'Visi & Misi',
                        'title' => 'Visi dan Misi Sistem',
                        'content' => '<p><strong>Visi:</strong> Mewujudkan layanan administrasi akademik yang efisien, transparan, dan modern.</p>
                                      <p><strong>Misi:</strong></p>
                                      <ul>
                                          <li>Mempercepat proses pengajuan dan persetujuan sidang skripsi</li>
                                          <li>Mengurangi penggunaan dokumen fisik (paperless)</li>
                                          <li>Meningkatkan akurasi dan transparansi data akademik</li>
                                      </ul>',
                    ],
                    'latar' => [
                        'label' => 'Latar Belakang',
                        'title' => 'Permasalahan Administrasi Sidang Manual',
                        'content' => '<p>Proses pengajuan sidang skripsi yang masih dilakukan secara manual sering menimbulkan berbagai permasalahan, seperti waktu proses yang lama, risiko kehilangan dokumen, dan kurangnya transparansi status pengajuan.</p>
                                      <p>Sistem ini dikembangkan sebagai solusi digital dengan workflow terstruktur dan dukungan Tanda Tangan Elektronik (TTE).</p>',
                    ],
                    'tte' => [
                        'label' => 'Tanda Tangan Elektronik',
                        'title' => 'Integrasi TTE dalam Sistem',
                        'content' => '<p>Sistem ini mendukung penggunaan Tanda Tangan Elektronik (TTE) tersertifikasi yang sesuai dengan regulasi Kominfo dan UU ITE.</p>
                                      <p>Dengan TTE, dokumen akademik seperti surat tugas dan persetujuan sidang memiliki kekuatan hukum yang sah serta dilengkapi audit trail.</p>',
                    ],
                ],
            ]
        );
    }
}
