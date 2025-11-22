<?php

namespace Database\Seeders;

use App\Models\Financial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinancialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Financial::insert([
            [
                'id' => 1,

                'title' => 'Obtenga todas sus actualizaciones financieras en un solo lugar',
                'description' => 'Esta función le permite mantenerse al tanto de sus finanzas fácilmente al consolidar todas las actualizaciones en un solo panel.',
                'title_tab1' => 'Control Unificado',
                'description_tab1' => 'Visualiza todas tus cuentas, transacciones e inversiones en un solo lugar. Consulta cada transacción de crédito y débito en tiempo real en todas tus cuentas. Obtén una visión completa de tus gastos con categorías de gastos.',
                'title_tab2' => 'Tiempo Real',
                'description_tab2' => 'Esta función le garantiza que puede mantenerse al tanto de sus finanzas fácilmente al consolidar todas las actualizaciones en un solo panel. Vea todas sus cuentas, transacciones y una vista de sus gastos con categorías de gastos.',
                'image' => 'upload/financial/1842993949347466.png',

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
