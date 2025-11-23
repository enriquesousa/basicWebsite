<?php

namespace Database\Seeders;

use App\Models\Title;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Titles_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Title::insert([
            [
                'id' => 1,
                'features' => 'Características que hacen que gastos sean inteligentes',
                'reviews' => 'No tome nuestra palabra, revise las reseñas de los usuarios',
                'answers' => 'Encuentra respuestas a todas las preguntas a continuación',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
