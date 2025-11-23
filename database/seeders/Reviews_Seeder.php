<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Reviews_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::insert([
            [
                'id' => 1,
                'name' => 'Renee Ballard',
                'position' => 'Web Dev',
                'image' => 'upload/review/1845475196541591.jpg',
                'message' => 'Yes, this finance apps use bank-level encryption, multi-factor authentication, and other security measures to protect your sensitive information.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Mohammad Carter',
                'position' => 'Web Dev Senior',
                'image' => 'upload/review/1842626947122373.jpg',
                'message' => 'Yes, this finance apps use bank-level encryption, multi-factor authentication, and other security measures to protect your sensitive information.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'TaShya Kinney',
                'position' => 'Product Manager',
                'image' => 'upload/review/1842705979420465.jpg',
                'message' => 'This tool integrate with tax software to help users prepare for tax season, deduct expenses, and file returns.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Odessa Singleton',
                'position' => 'Operations Lead',
                'image' => 'upload/review/1842706042459897.jpg',
                'message' => 'Allows users to record and categorize daily transactions such as income, expenses, bills, and savings.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'name' => 'Mary Moreno',
                'position' => 'Marketing Manager',
                'image' => 'upload/review/1842706082141345.jpg',
                'message' => 'Provides visual insights like graphs or pie charts to show how much is spent versus the budgeted amount.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'name' => 'Yvonne Graham',
                'position' => 'Sales Director',
                'image' => 'upload/review/1842706126621800.jpg',
                'message' => 'For users interested in investing, finance apps often provide tools to track stocks, bonds or mutual funds.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'name' => 'Tarik Blake',
                'position' => 'Web CEO',
                'image' => 'upload/review/1842707232494014.jpg',
                'message' => 'Provides bank-level encryption to ensure user data and financial information remain safe, MFA and biometric logins.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
