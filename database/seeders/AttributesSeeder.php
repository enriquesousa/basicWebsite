<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attribute::insert([
            [
                'id' => 1,
                'team_id' => 12,
                'description' => 'Líder visionario: impulsa el éxito a largo plazo de la innovación con previsión estratégica.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'team_id' => 12,
                'description' => 'Orientado a resultados: se centra en lograr resultados mensurables y fomentar el crecimiento.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'team_id' => 12,
                'description' => 'Capacitación en liderazgo ejecutivo: prospera bajo presión y enfrenta desafíos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'team_id' => 12,
                'description' => 'Colaborativo: fomenta el trabajo en equipo y la comunicación interfuncional.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'team_id' => 11,
                'description' => 'Colaborativo: fomenta el trabajo en equipo y la comunicación interfuncional.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
