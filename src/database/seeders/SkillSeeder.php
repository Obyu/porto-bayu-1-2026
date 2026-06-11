<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        Skill::insert([
            [
                'name' => 'Laravel',
                'category' => 'backend',
                'level' => 90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Filament',
                'category' => 'backend',
                'level' => 85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MariaDB',
                'category' => 'database',
                'level' => 80,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}