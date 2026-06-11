<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\SocialLink;
use Illuminate\Database\Seeder;

class SocialLinkSeeder extends Seeder
{
    public function run(): void
    {
        $profile = Profile::first();

        if (! $profile) {
            return;
        }

        SocialLink::insert([
            [
                'profile_id' => $profile->id,
                'name' => 'Github',
                'url' => 'https://github.com/Obyu',
                'sort_order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'profile_id' => $profile->id,
                'name' => 'LinkedIn',
                'url' => 'https://linkedin.com',
                'sort_order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}