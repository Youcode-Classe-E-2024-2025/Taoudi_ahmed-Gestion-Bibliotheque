<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creating an admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@readly.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Normal User',
            'email' => 'ahmed@readly.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);

        // Creating 5 regular users
        User::factory(5)->create();
    }
}
