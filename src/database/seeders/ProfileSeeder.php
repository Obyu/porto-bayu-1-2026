<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::create([
        'name' => 'Bayu Ahmad Johari',
        'headline' => 'Laravel & Filament Developer',
        'about' => 'Mahasiswa Teknik Informatika yang berfokus pada pengembangan aplikasi web menggunakan Laravel, Filament, Livewire, dan MariaDB. Berpengalaman membangun sistem akademik, kasir, HR, dan portfolio berbasis Laravel.',
        'email' => 'bayujohari4@gmail.com',
        'github' => 'https://github.com/obyu',
        'linkedin' => 'https://www.linkedin.com/in/bayu-ahmad-johari-4a1a71327',
    ]);
    }
}