<?php

namespace Database\Seeders;

use App\Models\Capability;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CapabilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Capability::insert([
            [
                'id' => 1,
                'team_id' => 12,
                'description' => 'Licenciatura en Economía – Sólida base en principios económicos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'team_id' => 12,
                'description' => 'MBA en Finanzas y Estrategia Empresarial – Graduado de una universidad de primer nivel con especialización en gestión financiera y estrategia corporativa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'team_id' => 12,
                'description' => 'Capacitación en liderazgo ejecutivo: completé programas de liderazgo avanzados en instituciones reconocidas a nivel mundial.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'team_id' => 12,
                'description' => 'Licenciatura en Economía – Sólida base en principios económicos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
