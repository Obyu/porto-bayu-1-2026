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
                'name' => 'Belajar Dasar Pemrograman Web',
                'issuer' => 'Dicoding',
                'issued_at' => '2024-01-10',
                'certificate_url' => 'https://www.dicoding.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laravel Web Development',
                'issuer' => 'Dicoding',
                'issued_at' => '2024-05-01',
                'certificate_url' => 'https://www.dicoding.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Belajar Dasar Git dan GitHub',
                'issuer' => 'Dicoding',
                'issued_at' => '2024-07-15',
                'certificate_url' => 'https://www.dicoding.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cloud Practitioner Essentials',
                'issuer' => 'AWS',
                'issued_at' => '2025-01-20',
                'certificate_url' => 'https://aws.amazon.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}