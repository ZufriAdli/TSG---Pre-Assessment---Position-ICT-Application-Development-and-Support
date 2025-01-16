<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufactureSeeder extends Seeder
{
    public function run()
    {
        DB::table('manufactures')->insert([
            ['name' => 'Proton'],
            ['name' => 'Honda'],
            ['name' => 'Toyota'],
        ]);
    }
}
