<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_categories')->insert([
            'category' => 'Downhill',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);
        
        DB::table('sub_categories')->insert([
            'category' => 'Enduro',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('sub_categories')->insert([
            'category' => 'Trail',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('sub_categories')->insert([
            'category' => 'XC',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);
        
        DB::table('sub_categories')->insert([
            'category' => 'Cross',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('sub_categories')->insert([
            'category' => 'Horske',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('sub_categories')->insert([
            'category' => 'Urban',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('sub_categories')->insert([
            'category' => 'Racing',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);
        
        DB::table('sub_categories')->insert([
            'category' => 'Gravel',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);
    }
}
