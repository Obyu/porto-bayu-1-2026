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
                'company' => 'PT Contoh Indonesia',
                'position' => 'Web Developer Intern',
                'start_date' => '2024-01-01',
                'end_date' => '2024-06-30',
                'description' => 'Mengembangkan aplikasi web menggunakan Laravel dan Filament.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}