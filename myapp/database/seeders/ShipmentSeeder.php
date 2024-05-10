<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shipments')->insert([
            'name' => 'Dorucenie na adresu',
            'price' => 4.5
        ]);

        DB::table('shipments')->insert([
            'name' => 'Dorucenie na postu',
            'price' => 2.5
        ]);

        DB::table('shipments')->insert([
            'name' => 'Packeta',
            'price' => 1.5
        ]);

        DB::table('shipments')->insert([
            'name' => 'Osobny odber',
            'price' => 0
        ]);
    }
}
