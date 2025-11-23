<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Services_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
            [
                'id' => 1,

                'title' => 'Aclara todas las decisiones financieras estratégicas',
                'description' => 'Con esta herramienta, puedes despedirte de los gastos excesivos, mantenerte al día con tus metas de ahorro y olvidarte de las preocupaciones financieras. ¡Prepárate para una visión más clara de tus finanzas como nunca antes!',
                'image' => 'upload/services/1844073731750021.png',

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
