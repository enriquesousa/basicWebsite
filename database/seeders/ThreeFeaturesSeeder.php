<?php

namespace Database\Seeders;

use App\Models\ThreeFeatures;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThreeFeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ThreeFeatures::insert([
            [
                'id' => 1,

                'question_1' => 'Seguimiento de gastos en tiempo real',
                'answer_1' => 'Se sincroniza automáticamente con cuentas bancarias y tarjetas de crédito para proporcionar actualizaciones instantáneas sobre los gastos, lo que ayuda a los usuarios a mantenerse al tanto de todas sus transacciones diarias.',

                'question_2' => 'Panorama financiero integral',
                'answer_2' => 'Se sincroniza automáticamente con cuentas bancarias y tarjetas de crédito para proporcionar actualizaciones instantáneas sobre los gastos, lo que ayuda a los usuarios a mantenerse al tanto de todas sus transacciones diarias.',

                'question_3' => 'Automatización para reducir el estrés',
                'answer_3' => 'Se sincroniza automáticamente con cuentas bancarias y tarjetas de crédito para proporcionar actualizaciones instantáneas sobre los gastos, lo que ayuda a los usuarios a mantenerse al tanto de todas sus transacciones diarias.',

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
