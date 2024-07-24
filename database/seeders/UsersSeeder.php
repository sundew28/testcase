<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Add Users
         *
         */
        if (User::where('email', '=', 'admin@artlume.io')->first() === null) {

            $newUser = User::create([
                'name' => 'Charles',
                'email' => 'admin@charles.george.com',
                'password' => bcrypt('adminadmin'),
            ]);

            $newTestUser = User::create([
                'name' => 'TestAdmin',
                'email' => 'test@charles.george.com',
                'password' => bcrypt('adminadmin'),
            ]);

        }
    }
}