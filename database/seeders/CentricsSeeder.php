<?php

namespace Database\Seeders;

use App\Models\Centric;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CentricsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Centric::insert([
            [
                'id' => 1,
                'title' => 'Transparencia',
                'description' => 'Diseñamos nuestras aplicaciones y software pensando en nuestros usuarios, evolucionando constantemente para satisfacer sus necesidades y soluciones financieras.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'Innovación centrada en el usuario',
                'description' => 'Creemos en la comunicación clara y la transparencia total en todas nuestras prácticas, proporcionando a los usuarios información financiera precisa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'Integridad y confianza',
                'description' => 'Construimos relaciones duraderas con nuestros usuarios al brindar constantemente servicios confiables, éticos y también dignos de confianza.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'Seguridad en la que puede confiar',
                'description' => 'Your financial data is protected with top-level encryption and security protocols to ensure your information is always secure.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
