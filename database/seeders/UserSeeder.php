<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'User1',
            'email' => 'user1@email.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'user2',
            'email' => 'user2@email.com',
            'password' => bcrypt('password'),
        ]);
    }
}
