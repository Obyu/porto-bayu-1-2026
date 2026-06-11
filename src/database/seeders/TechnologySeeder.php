<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    public function run(): void
    {
        Technology::insert([
            [
                'name' => 'Laravel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Filament',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Livewire',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MariaDB',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Docker',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}