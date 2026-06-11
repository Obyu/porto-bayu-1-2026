<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Academic Technical Portfolio',
            'slug' => Str::slug('Academic Technical Portfolio'),
            'short_description' => 'Portfolio website',
            'description' => 'Portfolio website built using Laravel, Filament and Livewire.',
            'status' => 'completed',
            'is_featured' => true,
            'published_at' => now(),
        ]);
    }
}