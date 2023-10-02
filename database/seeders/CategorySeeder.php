<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Accessories'
        ]);

        DB::table('categories')->insert([
            'name' => 'Apparel'
        ]);

        DB::table('categories')->insert([
            'name' => 'Footwear'
        ]);

        DB::table('categories')->insert([
            'name' => 'Free Items'
        ]);

        DB::table('categories')->insert([
            'name' => 'Home'
        ]);

        DB::table('categories')->insert([
            'name' => 'Personal Care'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sporting Goods'
        ]);
    }
}
