<?php

namespace Database\Seeders;

use App\Models\Core;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Core::insert([
            [
                'id' => 1,
                'title' => 'Nuestros valores fundamentales sirven como nuestra fuerza motriz',
                'description' => 'Nuestros valores fundamentales son la base de todo lo que hacemos: garantizar la integridad, seguridad y privacidad de sus datos, innovación y herramientas de vanguardia para simplificar la gestión financiera.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
