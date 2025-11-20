<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogCategory::insert([
            [
                'id' => 1,
                'category_name' => 'Finanzas',
                'category_slug' => 'finanzas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'category_name' => 'Negocio',
                'category_slug' => 'negocio',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'category_name' => 'Tecnología',
                'category_slug' => 'tecnología',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'category_name' => 'Desarrollo',
                'category_slug' => 'desarrollo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'category_name' => 'Sin Categoría',
                'category_slug' => 'sin-categoría',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
