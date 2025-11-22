<?php

namespace Database\Seeders;

use App\Models\Clarifie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClarifiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Clarifie::insert([
            [
                'id' => 1,
                'title' => 'Hace que las decisiones financieras estratégicas se clarifiquen',
                'description' => 'Con esta herramienta, puede decir adiós al gasto excesivo, mantenerse al día con sus objetivos de ahorro y decir adiós a las preocupaciones financieras. ¡Prepárate para tener una visión más clara de tus finanzas como nunca antes!',
                'image' => 'upload/clarifie/1842976726594974.png',

                // **Nota**: Las tres preguntas question_1, answer_1 etc. están en la tabla ***three_features***
                // Estas preguntas ya no tienen sentido aqui porque las pase a la tabla ***three_features***
                'question_1' => 'Seguimiento de gastos en tiempo real',
                'answer_1' => 'Se sincroniza automáticamente con cuentas bancarias y tarjetas de crédito para proporcionar actualizaciones instantáneas sobre los gastos, lo que ayuda a los usuarios a mantenerse al tanto de todas sus transacciones diarias.',

                'question_2' => 'Panorama financiero integral',
                'answer_2' => 'Automatically and syncs with bank accounts and credit cards to provide instant updates on spending, helping users stay aware of their all daily transactions.',

                'question_3' => 'Automatización para reducir el estrés',
                'answer_3' => 'Automatically and syncs with bank accounts and credit cards to provide instant updates on spending, helping users stay aware of their all daily transactions.',

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
