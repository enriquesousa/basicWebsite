<?php

namespace Database\Seeders;

use App\Models\Connect;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConnectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Connect::insert([
            [
                'id' => 1,
                'title' => 'Mejor gestor monetario',
                'description' => 'Nuestras aplicaciones y software financieros son herramientas poderosas para administrar las finanzas personales o comerciales, ayudando a los usuarios a mantenerse organizados, realizar un seguimiento de la salud financiera y tomar decisiones informadas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'Presupuestos y Objetivos',
                'description' => 'Define tus límites de gasto y objetivos de ahorro para categorías como comestibles, facturas o inversiones futuras para mantenerte en el buen camino.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'Monitorear y automatizar',
                'description' => 'Revise su panel financiero para ver actualizaciones periódicas y configure pagos o ahorros automáticos para simplificar la administración.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
