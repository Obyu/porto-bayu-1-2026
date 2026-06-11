<?php

namespace Database\Seeders;

use App\Models\Certification;
use Illuminate\Database\Seeder;

class CertificationSeeder extends Seeder
{
    public function run(): void
    {
        Certification::insert([
            [
                'name' => 'Laravel Web Development',
                'issuer' => 'Dicoding',
                'issued_at' => '2024-05-01',
                'certificate_url' => 'https://example.com/certificate',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}