<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MainCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('main_categories')->insert([
            'category' => 'Horské',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);
        
        DB::table('main_categories')->insert([
            'category' => 'Dámske',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('main_categories')->insert([
            'category' => 'Ebike',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('main_categories')->insert([
            'category' => 'Cestné',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);
    }
}
