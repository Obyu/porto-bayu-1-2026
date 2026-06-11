<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    public function run(): void
    {
        Education::insert([
            [
                'institution' => 'MNC University',
                'degree' => 'S1 Teknik Informatika',
                'start_date' => '2023-09-01',
                'end_date' => null,
                'description' => 'Mempelajari pengembangan perangkat lunak, basis data, algoritma, dan rekayasa sistem informasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'institution' => 'SMK Negeri',
                'degree' => 'Rekayasa Perangkat Lunak',
                'start_date' => '2020-07-01',
                'end_date' => '2023-06-01',
                'description' => 'Mempelajari dasar pemrograman, database, dan pengembangan aplikasi berbasis web.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}