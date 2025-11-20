<?php

namespace Database\Seeders;

use App\Models\App;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        App::insert([
            [
                'id' => 1,
                'title' => 'Transparencia',
                'description' => 'Diseñamos nuestras aplicaciones y software pensando en nuestros usuarios, evolucionando constantemente para satisfacer sus necesidades y soluciones financieras.',
                'image' => 'upload/apps/1843347534385505.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
