<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            'name' => 'Dobierka',
            'price' => 1
        ]);

        DB::table('payments')->insert([
            'name' => 'Karta',
            'price' => 0
        ]);
    }
}
