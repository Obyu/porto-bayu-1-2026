<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::create([
            'name' => 'Johary',
            'headline' => 'Laravel Developer',
            'about' => 'Portfolio website built using Laravel, Filament and Livewire.',
            'email' => 'johary@example.com',
            'github' => 'https://github.com/johary',
            'linkedin' => 'https://linkedin.com',
        ]);
    }
}