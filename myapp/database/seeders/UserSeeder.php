<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('users')->insert([
        'role' => 'admin',
        'name' => 'admin',
        'surname' => 'admin',
        'phone_number' => '0000',
        'email' => 'admin@admin',
        'password' => bcrypt('admin1234'),
       ]);
    }
}
