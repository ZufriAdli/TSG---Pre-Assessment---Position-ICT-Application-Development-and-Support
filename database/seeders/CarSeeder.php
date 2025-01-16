<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    public function run()
    {
        DB::table('manufactures')->insert([
            ['name' => 'Proton'],
            ['name' => 'Honda'],
            ['name' => 'Toyota'],
        ]);

        DB::table('cars')->insert([
            ['name' => 'S70', 'manufacture_id' => 1, 'date_created' => '2024-01-21 13:19:00'],
            ['name' => 'Civic', 'manufacture_id' => 2, 'date_created' => '2024-02-11 13:19:00'],
            ['name' => 'Altis', 'manufacture_id' => 3, 'date_created' => '2024-02-21 09:19:00'],
        ]);
    }
}

