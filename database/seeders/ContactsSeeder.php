<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::insert([
            [
                'id' => 1,
                'name' => 'Enrique',
                'email' => 'enrique.sousa@gmail.com',
                'message' => 'Hola necesito ayuda ...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Juan Lopez',
                'email' => 'juanlopez@gmail.com',
                'message' => 'Necesito mas información para el proyecto de finanzas ...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Mary Hopper',
                'email' => 'disu@mailinator.com',
                'message' => 'Have a problem ...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
