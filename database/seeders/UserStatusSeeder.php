<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserStatus;

class UserStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserStatus::create([
            'name' => 'Privated',
        ]);
        UserStatus::create([
            'name' => 'Published',
        ]);
        UserStatus::create([
            'name' => 'Blocked',
        ]);
    }
}
