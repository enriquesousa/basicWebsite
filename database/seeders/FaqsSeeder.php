<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::insert([
            [
                'id' => 1,
                'title' => '¿Mis datos financieros están seguros y protegidos?',
                'description' => 'Sí, estas aplicaciones financieras utilizan encriptación de nivel bancario, autenticación multifactor y otras medidas de seguridad para proteger su información confidencial.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => '¿Puedo vincular varias cuentas bancarias y tarjetas de crédito?',
                'description' => 'Sí, estas aplicaciones financieras utilizan encriptación de nivel bancario, autenticación multifactor y otras medidas de seguridad para proteger su información confidencial.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => '¿Cómo me ayuda la aplicación a cumplir con mi presupuesto?',
                'description' => 'Sí, estas aplicaciones financieras utilizan encriptación de nivel bancario, autenticación multifactor y otras medidas de seguridad para proteger su información confidencial.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => '¿La aplicación es gratuita o hay tarifas de suscripción?',
                'description' => 'Sí, estas aplicaciones financieras utilizan encriptación de nivel bancario, autenticación multifactor y otras medidas de seguridad para proteger su información confidencial.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
