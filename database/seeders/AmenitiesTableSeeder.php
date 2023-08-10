<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmenitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $amenities = [
            ['name' => 'Swimming Pool', 'icon' => 'swimming-pool-icon.png'],
            ['name' => 'Hot Tub', 'icon' => 'hot-tub-icon.png'],
            ['name' => 'Air Conditioning', 'icon' => 'air-conditioning-icon.png'],
            ['name' => 'Free Wi-Fi', 'icon' => 'wifi-icon.png'],
            ['name' => 'Cable TV', 'icon' => 'cable-tv-icon.png'],
            ['name' => 'Kitchenette', 'icon' => 'kitchenette-icon.png'],
            ['name' => 'Private Balcony', 'icon' => 'balcony-icon.png'],
            ['name' => 'Fitness Center', 'icon' => 'fitness-center-icon.png'],
            ['name' => 'Spa Services', 'icon' => 'spa-icon.png'],
            ['name' => 'Outdoor BBQ Area', 'icon' => 'bbq-icon.png'],
            ['name' => "Kid's Play Area", 'icon' => 'play-area-icon.png'],
            ['name' => 'Beach Access', 'icon' => 'beach-icon.png'],
            ['name' => 'On-Site Restaurant', 'icon' => 'restaurant-icon.png'],
            ['name' => 'Concierge Service', 'icon' => 'concierge-icon.png'],
            ['name' => 'Pet-Friendly', 'icon' => 'pet-friendly-icon.png'],
            // Add more amenities here
        ];

        DB::table('amenities')->insert($amenities);
    }
}
