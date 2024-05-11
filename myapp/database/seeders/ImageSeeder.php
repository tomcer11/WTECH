<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            'product_id' => 1,
            'name' => 'noid_90_29.jpg',
            'path' => 'ziadny',
            'alt_text' => 'bicykel',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('images')->insert([
            'product_id' => 2,
            'name' => 'ctm_mons.jpg',
            'path' => 'ziadny',
            'alt_text' => 'bicykel',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('images')->insert([
            'product_id' => 3,
            'name' => 'mondraker_foxy.jpg',
            'path' => 'ziadny',
            'alt_text' => 'bicykel',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('images')->insert([
            'product_id' => 4,
            'name' => 'santa_cruz_v10_red.jpg',
            'path' => 'ziadny',
            'alt_text' => 'bicykel',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('images')->insert([
            'product_id' => 5,
            'name' => 'santa_cruz_v10_black.jpg',
            'path' => 'ziadny',
            'alt_text' => 'bicykel',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);


        DB::table('images')->insert([
            'product_id' => 6,
            'name' => 'kellys_swag.jpg',
            'path' => 'ziadny',
            'alt_text' => 'bicykel',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('images')->insert([
            'product_id' => 7,
            'name' => 'ctm_scroll.jpg',
            'path' => 'ziadny',
            'alt_text' => 'bicykel',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('images')->insert([
            'product_id' => 8,
            'name' => 'mondraker_super_foxy.jpg',
            'path' => 'ziadny',
            'alt_text' => 'bicykel',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('images')->insert([
            'product_id' => 9,
            'name' => 'santa_cruz_megatower.jpg',
            'path' => 'ziadny',
            'alt_text' => 'bicykel',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('images')->insert([
            'product_id' => 10,
            'name' => 'santa_cruz_megatower_grey.jpg',
            'path' => 'ziadny',
            'alt_text' => 'bicykel',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('images')->insert([
            'product_id' => 11,
            'name' => 'pivot_switchblade.png',
            'path' => 'ziadny',
            'alt_text' => 'bicykel',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('images')->insert([
            'product_id' => 11,
            'name' => '11.jpg',
            'path' => 'ziadny',
            'alt_text' => 'bicykel',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('images')->insert([
            'product_id' => 11,
            'name' => '22.jpg',
            'path' => 'ziadny',
            'alt_text' => 'bicykel',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

    }
}
