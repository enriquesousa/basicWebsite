<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run(): void
        {
            // Disable foreign key checks for truncation (if applicable)
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');

            // Truncate the table using the DB facade or the model
            // DB::table('abouts')->truncate();
            // Or using the model:
            About::truncate();

            // Re-enable foreign key checks
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

            About::insert([
                [
                    'id' => 1,
                    'title' => 'Nuestra misión es brindar bienestar financiero.',
                    'description' => '<p>Creemos que el <strong>bienestar financiero</strong> es clave para una vida mejor. Nuestra misión es brindar a personas y empresas las herramientas necesarias para comprender, gestionar y mejorar su salud financiera.</p><p><br></p><p>Con nuestra aplicación, puede controlar fácilmente sus gastos, establecer presupuestos, automatizar sus ahorros y obtener información financiera en tiempo real.</p><p><br></p><p>Para las empresas, nuestro software se integra perfectamente con sus herramientas actuales para garantizar que la contabilidad, la facturación y los informes financieros se realicen de forma sencilla y organizada.</p>',
                    'image' => 'upload/about/1843740184723144.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
}
