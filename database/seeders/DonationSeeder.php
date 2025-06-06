<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Donation;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Donation::create([
            'user_id' => 1,
            'book_title' => 'Laravel untuk Pemula',
            'author' => 'Jane Doe',
            'quantity' => 5,
            'description' => 'Buku Laravel untuk komunitas.',
            'status' => 'approved',
        ]);

        Donation::create([
            'user_id' => 1,
            'book_title' => 'PHP Fundamentals',
            'author' => 'John Smith',
            'quantity' => 3,
            'description' => 'Panduan belajar PHP.',
            'status' => 'pending',
        ]);
    }
}
