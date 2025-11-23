<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Users_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'id' => 1,

                'name' => 'User',
                'email' => 'user@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$QHEiJ2Q3F0NAMbo5Lgoxh.70bcC1KJ6RQX5.0HFelipMJOC7euAK.',
                'photo' => null,
                'phone' => null,
                'address' => null,
                'role' => 'user',
                'status' => '1',
                'remember_token' => null,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,

                'name' => 'Enrique',
                'email' => 'enrique@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$qUcUIF5JcyK6I50aHg/EXuc301AqHsgLHZClhzp4DFJxDOadyVf.O',
                'photo' => '1757089689.jpg',
                'phone' => '6641880604',
                'address' => null,
                'role' => 'user',
                'status' => '1',
                'remember_token' => null,

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
