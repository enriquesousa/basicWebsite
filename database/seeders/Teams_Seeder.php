<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Teams_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::insert([
            [
                'id' => 1,
                'name' => 'Michael Chen',
                'position' => 'Chief Executive Officer',
                'image' => 'upload/team/1843611854370302.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Alex Jonny',
                'position' => 'Head of Product',
                'image' => 'upload/team/1843610045508177.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'William Smith',
                'position' => 'Lead Software Engineer',
                'image' => 'upload/team/1843610283944169.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Frederick Taylor',
                'position' => 'Data Security Officer',
                'image' => 'upload/team/1843610318832484.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'name' => 'Alex Paul',
                'position' => 'Chief Operating Officer',
                'image' => 'upload/team/1843610408200750.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'name' => 'James Keith',
                'position' => 'Technology Officer',
                'image' => 'upload/team/1843610441011080.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'name' => 'Sam Joe',
                'position' => 'Software Engineer',
                'image' => 'upload/team/1843610470360008.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'name' => 'Robert Arauco',
                'position' => 'VP of Sales',
                'image' => 'upload/team/1843611884635561.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'name' => 'Neil Hodgson',
                'position' => 'Marketing Director',
                'image' => 'upload/team/1843610727222243.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                'name' => 'Clarke Kress',
                'position' => 'Customer Success Manager',
                'image' => 'upload/team/1843610772717405.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 12,
                'name' => 'Martina Smith',
                'position' => 'Marketing Expert',
                'image' => 'upload/team/1843610819282951.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
