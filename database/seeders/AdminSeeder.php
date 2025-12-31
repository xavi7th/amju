<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Admin::create([
            'full_name' => 'Super Admin',
            'email' => 'admin@amjuunique.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role_id' => 1,
            'verified_at' => now(),
        ]);
    }
}
