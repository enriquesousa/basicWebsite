<?php

namespace Database\Seeders;

use App\Models\MemberDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Member_Details_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MemberDetail::insert([
            [
                'id' => 1,
                'team_id' => 12,
                'description' => '<p>Como <strong>Experto en marketing</strong> de <strong>TJweb</strong>, <strong>Martina Smith</strong> aporta más de una década de liderazgo y experiencia en finanzas y tecnología.</p><p><br></p><p>Con una pasión por la innovación, ha sido fundamental para dar forma a la visión de la compañía de empoderar a personas y empresas con soluciones financieras más inteligentes. Bajo su liderazgo, Lonyo se ha convertido en una empresa de confianza en la industria del software financiero, conocida por su diseño centrado en el usuario y su tecnología de vanguardia.</p><p><br></p><p>El enfoque estratégico de Michael y su dedicación a fomentar una cultura de excelencia han sido clave para el éxito de la compañía. A Michael le gusta asesorar a jóvenes emprendedores y mantenerse al día de las últimas tendencias en tecnología financiera para mantener a Lonyo a la vanguardia.</p>',
                'image' => 'upload/team/1844254523925829.png',

                'facebook_url' => 'https://www.facebook.com/',
                'facebook_status' => 1,

                'x_url' => 'https://x.com/home',
                'x_status' => 1,

                'instagram_url' => 'https://www.instagram.com/',
                'instagram_status' => 1,

                'linkedin_url' => 'https://www.linkedin.com/',
                'linkedin_status' => 1,

                'whatsapp_url' => 'https://web.whatsapp.com',
                'whatsapp_status' => 1,

                'web_url' => 'https://www.tjweb.com/',
                'web_status' => 1,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'team_id' => 11,
                'description' => '<p>Como <strong>Experto en marketing</strong> de <strong>TJweb</strong>, <strong>Martina Smith</strong> aporta más de una década de liderazgo y experiencia en finanzas y tecnología.</p><p><br></p><p>Con una pasión por la innovación, ha sido fundamental para dar forma a la visión de la compañía de empoderar a personas y empresas con soluciones financieras más inteligentes. Bajo su liderazgo, Lonyo se ha convertido en una empresa de confianza en la industria del software financiero, conocida por su diseño centrado en el usuario y su tecnología de vanguardia.</p><p><br></p><p>El enfoque estratégico de Michael y su dedicación a fomentar una cultura de excelencia han sido clave para el éxito de la compañía. A Michael le gusta asesorar a jóvenes emprendedores y mantenerse al día de las últimas tendencias en tecnología financiera para mantener a Lonyo a la vanguardia.</p>',
                'image' => 'upload/team/1844254523925829.png',

                'facebook_url' => 'https://www.facebook.com/',
                'facebook_status' => 1,

                'x_url' => 'https://x.com/home',
                'x_status' => 1,

                'instagram_url' => 'https://www.instagram.com/',
                'instagram_status' => 1,

                'linkedin_url' => 'https://www.linkedin.com/',
                'linkedin_status' => 1,

                'whatsapp_url' => 'https://web.whatsapp.com',
                'whatsapp_status' => 1,

                'web_url' => 'https://www.tjweb.com/',
                'web_status' => 1,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'team_id' => 10,
                'description' => '<p>Como <strong>Experto en marketing</strong> de <strong>TJweb</strong>, <strong>Martina Smith</strong> aporta más de una década de liderazgo y experiencia en finanzas y tecnología.</p><p><br></p><p>Con una pasión por la innovación, ha sido fundamental para dar forma a la visión de la compañía de empoderar a personas y empresas con soluciones financieras más inteligentes. Bajo su liderazgo, Lonyo se ha convertido en una empresa de confianza en la industria del software financiero, conocida por su diseño centrado en el usuario y su tecnología de vanguardia.</p><p><br></p><p>El enfoque estratégico de Michael y su dedicación a fomentar una cultura de excelencia han sido clave para el éxito de la compañía. A Michael le gusta asesorar a jóvenes emprendedores y mantenerse al día de las últimas tendencias en tecnología financiera para mantener a Lonyo a la vanguardia.</p>',
                'image' => 'upload/team/1844254523925829.png',

                'facebook_url' => 'https://www.facebook.com/',
                'facebook_status' => 1,

                'x_url' => 'https://x.com/home',
                'x_status' => 1,

                'instagram_url' => 'https://www.instagram.com/',
                'instagram_status' => 1,

                'linkedin_url' => 'https://www.linkedin.com/',
                'linkedin_status' => 1,

                'whatsapp_url' => 'https://web.whatsapp.com',
                'whatsapp_status' => 1,

                'web_url' => 'https://www.tjweb.com/',
                'web_status' => 1,

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
