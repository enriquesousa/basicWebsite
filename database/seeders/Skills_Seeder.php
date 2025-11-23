<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Skills_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::insert([
            [
                'id' => 1,
                'team_id' => 12,
                'name' => 'Resolución de problemas',
                'percentage' => 86,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'team_id' => 12,
                'name' => 'Habilidades para establecer contactos',
                'percentage' => 99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'team_id' => 12,
                'name' => 'Habilidades de liderazgo',
                'percentage' => 92,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'team_id' => 12,
                'name' => 'Leadership Skills',
                'percentage' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
