<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Portfolios_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::insert([
            [
                'id' => 1,

                'title' => 'Pista de riqueza',
                'description_es' => '<h2>Descripción del proyecto:</h2><p><strong>BudgetEase</strong> (<em>Camino libre de deudas</em>) es una innovadora aplicación de finanzas personales diseñada para simplificar la gestión financiera de personas y familias. Con su interfaz intuitiva y potentes funciones, <strong><em>BudgetEase</em></strong> ayuda a los usuarios a controlar sus finanzas, controlar sus gastos y alcanzar sus objetivos financieros sin esfuerzo.</p><h2>Características principales:</h2><ol><li>Seguimiento de gastos: Categoriza y monitoriza automáticamente tus gastos para identificar áreas de ahorro.</li><li>Presupuesto inteligente: Establece presupuestos personalizables y recibe actualizaciones en tiempo real para mantenerte al día.</li><li>Objetivos de ahorro: Crea y gestiona objetivos para crear tu fondo de emergencia o ahorrar para grandes compras.</li><li>Recordatorios de facturas: No te pierdas ninguna fecha de vencimiento con alertas y seguimiento de facturas.</li><li>Información financiera: Accede a informes y gráficos detallados para comprender tus hábitos financieros.</li></ol><p><br></p><h2>Misión:</h2><p><strong>BudgetEase</strong> se dedica a empoderar a los usuarios para que tomen el control de su futuro financiero mediante herramientas fáciles de usar, información personalizada y automatización que simplifica la gestión financiera.</p><h2>Público objetivo:</h2><p><strong>BudgetEase</strong> es perfecto para personas, familias y jóvenes profesionales que buscan una forma sencilla de presupuestar, ahorrar y lograr estabilidad financiera. ¡Con <strong>BudgetEase</strong>, administrar tu dinero nunca ha sido tan fácil!</p>',
                'description_en' => '<p>Descripción en <strong>Español</strong> para Título 3</p>',
                'image' => 'upload/portfolio/1845633190958638.jpg',
                'foto1' => 'upload/portfolio/1845633429194692.jpg',
                'foto2' => NULL,
                'category_id' => 3,
                'client' => 'TJWeb',
                'services' => 'Aplicaciones Web',
                'website' => 'https://tjweb.com.mx',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,

                'title' => 'Gastar inteligentemente',
                'description_es' => '<p>Descripción en <strong>Español</strong> Título 2</p>',
                'description_en' => '<p>Descripción en <strong>Español</strong> para Título 3</p>',
                'image' => 'upload/portfolio/1845516495459242.jpg',
                'foto1' => 'upload/portfolio/1845633429194692.jpg',
                'foto2' => NULL,
                'category_id' => 2,
                'client' => 'TJWeb',
                'services' => 'Finanzas',
                'website' => 'https://tjweb.com.mx',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,

                'title' => 'Presupuesto Fácil',
                'description_es' => '<p>Descripción en <strong>Español</strong> Título 1</p>',
                'description_en' => '<p>Descripción en <strong>Inglés</strong> Título 1</p>',
                'image' => 'upload/portfolio/1845633543454912.jpg',
                'foto1' => 'upload/portfolio/1845633543600970.jpg',
                'foto2' => NULL,
                'category_id' => 2,
                'client' => 'TJWeb',
                'services' => 'Aplicaciones Web',
                'website' => 'https://tjweb.com.mx',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,

                'title' => 'Pulso del dinero',
                'description_es' => '<p>Pulso del dinero <strong>Español</strong> Duis sunt officia es.</p>',
                'description_en' => '<p>Pulso del dinero <strong>Inglés</strong> Dolor sed veniam, no.</p>',
                'image' => 'upload/portfolio/1845633957061219.jpg',
                'foto1' => 'upload/portfolio/1845633957142150.jpg',
                'foto2' => NULL,
                'category_id' => 1,
                'client' => 'TJWeb',
                'services' => 'Aplicaciones Web',
                'website' => 'https://tjweb.com.mx',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 12,

                'title' => 'Camino libre de deudas',
                'description_es' => '<h2>Descripción del proyecto:</h2><p><strong>BudgetEase</strong> (<em>Camino libre de deudas</em>) es una innovadora aplicación de finanzas personales diseñada para simplificar la gestión financiera de personas y familias. Con su interfaz intuitiva y potentes funciones, <strong><em>BudgetEase</em></strong> ayuda a los usuarios a controlar sus finanzas, controlar sus gastos y alcanzar sus objetivos financieros sin esfuerzo.</p><h2>Características principales:</h2><ol><li>Seguimiento de gastos: Categoriza y monitoriza automáticamente tus gastos para identificar áreas de ahorro.</li><li>Presupuesto inteligente: Establece presupuestos personalizables y recibe actualizaciones en tiempo real para mantenerte al día.</li><li>Objetivos de ahorro: Crea y gestiona objetivos para crear tu fondo de emergencia o ahorrar para grandes compras.</li><li>Recordatorios de facturas: No te pierdas ninguna fecha de vencimiento con alertas y seguimiento de facturas.</li><li>Información financiera: Accede a informes y gráficos detallados para comprender tus hábitos financieros.</li></ol><p><br></p><h2>Misión:</h2><p><strong>BudgetEase</strong> se dedica a empoderar a los usuarios para que tomen el control de su futuro financiero mediante herramientas fáciles de usar, información personalizada y automatización que simplifica la gestión financiera.</p><h2>Público objetivo:</h2><p><strong>BudgetEase</strong> es perfecto para personas, familias y jóvenes profesionales que buscan una forma sencilla de presupuestar, ahorrar y lograr estabilidad financiera. ¡Con <strong>BudgetEase</strong>, administrar tu dinero nunca ha sido tan fácil!</p>',
                'description_en' => '<p>Camino libre de deudas - <strong>Inglés</strong> Sint et aliquam et a.</p>',
                'image' => 'upload/portfolio/1845634095321864.jpg',
                'foto1' => 'upload/portfolio/1845634122165067.jpg',
                'foto2' => NULL,
                'category_id' => 1,
                'client' => 'TJWeb',
                'services' => 'Diseño Web',
                'website' => 'https://tjweb.com.mx',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 13,

                'title' => 'Finanzas inteligentes',
                'description_es' => '<p>Finanzas inteligentes - <strong>Español</strong> </p>',
                'description_en' => '<p>Finanzas inteligentes - <strong>Inglés</strong> </p>',
                'image' => 'upload/portfolio/1845634253917762.jpg',
                'foto1' => 'upload/portfolio/1845634253979437.jpg',
                'foto2' => NULL,
                'category_id' => 3,
                'client' => 'TJWeb',
                'services' => 'Aplicaciones Web',
                'website' => 'https://tjweb.com.mx',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 15,

                'title' => 'Deserunt voluptate l',
                'description_es' => '<h2>Descripción del proyecto:</h2><p><strong>BudgetEase</strong> (<em>Camino libre de deudas</em>) es una innovadora aplicación de finanzas personales diseñada para simplificar la gestión financiera de personas y familias. Con su interfaz intuitiva y potentes funciones, <strong><em>BudgetEase</em></strong> ayuda a los usuarios a controlar sus finanzas, controlar sus gastos y alcanzar sus objetivos financieros sin esfuerzo.</p><h2>Características principales:</h2><ol><li>Seguimiento de gastos: Categoriza y monitoriza automáticamente tus gastos para identificar áreas de ahorro.</li><li>Presupuesto inteligente: Establece presupuestos personalizables y recibe actualizaciones en tiempo real para mantenerte al día.</li><li>Objetivos de ahorro: Crea y gestiona objetivos para crear tu fondo de emergencia o ahorrar para grandes compras.</li><li>Recordatorios de facturas: No te pierdas ninguna fecha de vencimiento con alertas y seguimiento de facturas.</li><li>Información financiera: Accede a informes y gráficos detallados para comprender tus hábitos financieros.</li></ol><p><br></p><h2>Misión:</h2><p><strong>BudgetEase</strong> se dedica a empoderar a los usuarios para que tomen el control de su futuro financiero mediante herramientas fáciles de usar, información personalizada y automatización que simplifica la gestión financiera.</p><h2>Público objetivo:</h2><p><strong>BudgetEase</strong> es perfecto para personas, familias y jóvenes profesionales que buscan una forma sencilla de presupuestar, ahorrar y lograr estabilidad financiera. ¡Con <strong>BudgetEase</strong>, administrar tu dinero nunca ha sido tan fácil!</p>',
                'description_en' => '<p>Doloribus ratione qu.</p>',
                'image' => 'upload/portfolio/1845635061987822.jpg',
                'foto1' => 'upload/portfolio/1845635062066698.jpg',
                'foto2' => NULL,
                'category_id' => 1,
                'client' => 'TJWeb',
                'services' => 'Aplicaciones Web',
                'website' => 'https://tjweb.com.mx',

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
