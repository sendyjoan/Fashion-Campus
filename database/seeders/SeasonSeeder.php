<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seasons')->insert([
            'name' => 'Fall'
        ]);

        DB::table('seasons')->insert([
            'name' => 'Spring'
        ]);

        DB::table('seasons')->insert([
            'name' => 'Summer'
        ]);

        DB::table('seasons')->insert([
            'name' => 'Winter'
        ]);
    }
}
