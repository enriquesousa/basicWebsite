<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Sliders_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::insert([
            [
                'id' => 1,
                'title' => 'Administrar tus finanzas de manera efectiva',
                'description' => 'No tome nuestra palabra, revise las reseñas de los usuarios',
                'image' => 'upload/slider/1842757343805492.png',
                'link' => 'https://www.udemy.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
