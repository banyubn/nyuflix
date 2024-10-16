<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $user = [
        //     [
        //         'id' => 1,
        //         'email' => 'admin@tes',
        //         'password' => Hash::make('password'),
        //         'role' => 'admin',
        //     ],
        // ];

        User::create([
            'id' => 6,
            'email' => 'admin@tes',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);
    }
}
