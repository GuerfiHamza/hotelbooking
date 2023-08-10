<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facilities = [
            ['name' => 'Fully Equipped Kitchen', 'icon' => 'kitchen-icon.png'],
            ['name' => 'Private Garden', 'icon' => 'garden-icon.png'],
            ['name' => 'Outdoor Dining Area', 'icon' => 'outdoor-dining-icon.png'],
            ['name' => 'Sun Loungers', 'icon' => 'sun-loungers-icon.png'],
            ['name' => 'Gated Property', 'icon' => 'gated-property-icon.png'],
            ['name' => 'Parking Space', 'icon' => 'parking-icon.png'],
            ['name' => 'Security System', 'icon' => 'security-icon.png'],
            ['name' => 'Outdoor Shower', 'icon' => 'outdoor-shower-icon.png'],
            ['name' => 'Yoga Pavilion', 'icon' => 'yoga-icon.png'],
            ['name' => 'Home Theater', 'icon' => 'home-theater-icon.png'],
            ['name' => 'Wine Cellar', 'icon' => 'wine-cellar-icon.png'],
            ['name' => 'Billiards Room', 'icon' => 'billiards-icon.png'],
            ['name' => 'Barbecue Grill', 'icon' => 'barbecue-icon.png'],
            ['name' => 'Sauna', 'icon' => 'sauna-icon.png'],
            ['name' => 'Private Beach Area', 'icon' => 'private-beach-icon.png'],
            // Add more facilities here
        ];

        DB::table('facilities')->insert($facilities);
    }
}
