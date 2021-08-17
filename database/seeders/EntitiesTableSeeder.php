<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entities')->insert([
            'name' => 'Radio Telewizja Sarmacja',
            'owner' => 'AB726',
            'type' => 'SA',
            'price' => 100,
            'total' => 1000
        ]);
        DB::table('entities')->insert([
            'name' => 'Zakład Pogrzebowy Przebudzenie',
            'owner' => 'A1217',
            'type' => 'SA',
            'price' => 500,
            'total' => 500
        ]);
    }
}
