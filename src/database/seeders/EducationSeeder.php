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
                'institution' => 'Universitas XYZ',
                'degree' => 'S1 Teknik Informatika',
                'start_date' => '2022-09-01',
                'end_date' => null,
                'description' => 'Fokus pada pengembangan perangkat lunak dan sistem informasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}