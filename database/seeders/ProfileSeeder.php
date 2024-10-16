<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profiles = [
            [
                'user_id' => 1,  // Assuming user with ID 1 exists
                'name' => 'Michael',
                'uuid' => Str::uuid(),
                'avatar' => null, // You can add avatar path or leave it as null
            ],
            [
                'user_id' => 1,
                'name' => 'Sarah',
                'uuid' => Str::uuid(),
                'avatar' => null,
            ],
            [
                'user_id' => 2, // Assuming user with ID 2 exists
                'name' => 'John',
                'uuid' => Str::uuid(),
                'avatar' => null,
            ],
            // Add more profiles as needed
        ];

        foreach ($profiles as $profile) {
            Profile::create($profile);
        }
    }
}
