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
        DB::table('products')->insert([
            'main_category_id' => 1,
            'sub_category_id' => 2,
            'price' => 2999,
            'producer' => 'Kellys',
            'model' => 'Swag',
            'model_year' => 2019,
            'frame' => 'hliník',
            'fork_type' => 'vzduchová',
            'frame_size' => 'L',
            'front_lift' => 160,
            'fork' => 'RockShox',
            'rear_shock' => 'RockShox',
            'front_tire' => 'Schwalbe',
            'rear_tire' => 'Schwalbe',
            'rim' => 'DT Swiss',
            'cassette_count' => 12,
            'front_cassette_count' => 1,
            'chain' => 'Sram',
            'drive_train' => 'Sram',
            'cranks' => 'Sram',
            'cassette' => 'Sram',
            'derailleur' => 'Sram',
            'brakes' => 'Shimano',
            'front_rotor' => 'Shimano 180mm',
            'rear_rotor' =>'Shimano 180mm',
            'stem' => 'Kellys',
            'handbar' => 'Kellys',
            'grip' => 'Kellys',
            'seat_post' => 'RockShox',
            'seat' => 'Kellys',
            'is_new' => true,
            'is_offer_of_the_week' => false,
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('products')->insert([
            'main_category_id' => 1,
            'sub_category_id' => 2,
            'price' => 2999,
            'producer' => 'Pivot',
            'model' => 'SwitchBlade',
            'model_year' => 2019,
            'frame' => 'hliník',
            'fork_type' => 'vzduchová',
            'frame_size' => 'L',
            'front_lift' => 160,
            'fork' => 'RockShox',
            'rear_shock' => 'RockShox',
            'front_tire' => 'Schwalbe',
            'rear_tire' => 'Schwalbe',
            'rim' => 'DT Swiss',
            'cassette_count' => 12,
            'front_cassette_count' => 1,
            'chain' => 'Sram',
            'drive_train' => 'Sram',
            'cranks' => 'Sram',
            'cassette' => 'Sram',
            'derailleur' => 'Sram',
            'brakes' => 'Shimano',
            'front_rotor' => 'Shimano 180mm',
            'rear_rotor' =>'Shimano 180mm',
            'stem' => 'Kellys',
            'handbar' => 'Kellys',
            'grip' => 'Kellys',
            'seat_post' => 'RockShox',
            'seat' => 'Kellys',
            'is_new' => true,
            'is_offer_of_the_week' => false,
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);
    }
}