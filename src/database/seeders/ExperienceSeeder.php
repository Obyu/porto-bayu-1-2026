<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        Experience::insert([
            [
                'company' => 'Freelance',
                'position' => 'Laravel Developer',
                'start_date' => '2024-01-01',
                'end_date' => null,
                'description' => 'Mengembangkan aplikasi berbasis Laravel, Filament V3, Livewire, dan MariaDB.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company' => 'Academic Project',
                'position' => 'Fullstack Developer',
                'start_date' => '2024-06-01',
                'end_date' => '2024-12-31',
                'description' => 'Membangun sistem informasi akademik menggunakan Laravel dan Bootstrap.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company' => 'Personal Project',
                'position' => 'Backend Developer',
                'start_date' => '2025-01-01',
                'end_date' => null,
                'description' => 'Membangun REST API, autentikasi, dan integrasi payment gateway menggunakan Laravel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}