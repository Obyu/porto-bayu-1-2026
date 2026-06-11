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
        ]);
    }
}