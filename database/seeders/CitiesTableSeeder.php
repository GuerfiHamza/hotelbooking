<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['name' => 'Kuta'],
            ['name' => 'Seminyak'],
            ['name' => 'Ubud'],
            ['name' => 'Canggu'],
            ['name' => 'Denpasar'],
            ['name' => 'Sanur'],
            ['name' => 'Jimbaran'],
            ['name' => 'Nusa Dua'],
            ['name' => 'Uluwatu'],
            ['name' => 'Lovina'],
            ['name' => 'Amed'],
            ['name' => 'Candidasa'],
            ['name' => 'Gianyar'],
            ['name' => 'Tabanan'],
            ['name' => 'Singaraja'],
            ['name' => 'Bedugul'],
            ['name' => 'Tegallalang'],
            ['name' => 'Padang Bai'],
        ];

        DB::table('cities')->insert($cities);
    }
}
