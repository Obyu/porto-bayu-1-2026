<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::insert([
            [
                'title' => 'Academic Technical Portfolio',
                'slug' => Str::slug('Academic Technical Portfolio'),
                'short_description' => 'Portfolio website menggunakan Laravel dan Filament.',
                'description' => 'Website portfolio pribadi yang dibangun menggunakan Laravel 12, Filament V3, Livewire dan Tailwind CSS.',
                'status' => 'completed',
                'is_featured' => true,
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sistem Informasi Akademik',
                'slug' => Str::slug('Sistem Informasi Akademik'),
                'short_description' => 'Manajemen data akademik mahasiswa.',
                'description' => 'Aplikasi pengelolaan data mahasiswa, dosen, jadwal dan nilai berbasis Laravel.',
                'status' => 'completed',
                'is_featured' => true,
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Aplikasi Kasir Cafe',
                'slug' => Str::slug('Aplikasi Kasir Cafe'),
                'short_description' => 'POS System untuk cafe dan restoran.',
                'description' => 'Sistem kasir dengan fitur order, pembayaran dan laporan penjualan.',
                'status' => 'completed',
                'is_featured' => true,
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'HR Management System',
                'slug' => Str::slug('HR Management System'),
                'short_description' => 'Sistem pengelolaan data pegawai.',
                'description' => 'Aplikasi HR untuk mengelola data pegawai, absensi dan pengajuan cuti.',
                'status' => 'completed',
                'is_featured' => false,
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}