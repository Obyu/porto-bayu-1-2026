<?php

namespace Database\Seeders;

use App\Models\Research;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ResearchSeeder extends Seeder
{
    public function run(): void
    {
        Research::insert([
            [
                'title' => 'Implementasi Laravel pada Sistem Informasi Akademik',
                'slug' => Str::slug('Implementasi Laravel pada Sistem Informasi Akademik'),
                'abstract' => 'Penelitian mengenai implementasi framework Laravel dalam pengembangan sistem akademik.',
                'journal' => 'Jurnal Teknologi Informasi',
                'publication_date' => '2025-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pemanfaatan Filament Admin Panel untuk Pengembangan Sistem Informasi',
                'slug' => Str::slug('Pemanfaatan Filament Admin Panel untuk Pengembangan Sistem Informasi'),
                'abstract' => 'Analisis efektivitas Filament sebagai admin panel modern pada framework Laravel.',
                'journal' => 'Jurnal Sistem Informasi',
                'publication_date' => '2025-06-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Implementasi Livewire dalam Membangun Aplikasi Reactive',
                'slug' => Str::slug('Implementasi Livewire dalam Membangun Aplikasi Reactive'),
                'abstract' => 'Penelitian mengenai penggunaan Livewire untuk meningkatkan interaktivitas aplikasi Laravel.',
                'journal' => 'Jurnal Informatika Modern',
                'publication_date' => '2025-08-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}