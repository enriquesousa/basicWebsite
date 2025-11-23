<?php

namespace Database\Seeders;

use App\Models\MobileService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Mobile_Services_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileService::insert([
            [
                'id' => 1,

                'title' => 'Comience un nuevo nivel de gestión del dinero',
                'image' => 'upload/services/1844077472228060.png',
                'description' => 'Nuestras aplicaciones y software financieros son herramientas poderosas para administrar las finanzas personales o comerciales, ayudando a los usuarios a mantenerse organizados, realizar un seguimiento de la salud financiera y tomar decisiones informadas.',

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
