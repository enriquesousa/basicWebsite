<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            AboutSeeder::class,
            AppSeeder::class,
            AttributesSeeder::class,
            BlogCategoriesSeeder::class,
            BlogPostsSeeder::class,
            CapabilitiesSeeder::class,
            CentricsSeeder::class,
            ClarifiesSeeder::class,
            ThreeFeaturesSeeder::class,
            ConnectsSeeder::class,
            ContactsSeeder::class,
            CoresSeeder::class,
            FaqsSeeder::class,
            FeaturesSeeder::class,
            FinancialsSeeder::class,
            Member_Details_Seeder::class,
            Mobile_Services_Seeder::class,
            Portfolio_Categories_Seeder::class,
            Portfolios_Seeder::class,
            Reviews_Seeder::class,
            Services_Seeder::class,
            Skills_Seeder::class,
            Sliders_Seeder::class,
        ]);

    }
}
