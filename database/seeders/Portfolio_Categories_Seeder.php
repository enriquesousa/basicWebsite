<?php

namespace Database\Seeders;

use App\Models\PortfolioCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Portfolio_Categories_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PortfolioCategory::insert([
            [
                'id' => 1,
                'name' => 'Creativo',
                'slug' => 'creativo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Finanzas',
                'slug' => 'finanzas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Aplicación y Diseño Web',
                'slug' => 'aplicacion-y-diseno-web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
