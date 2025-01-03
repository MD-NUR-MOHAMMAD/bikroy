<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_categories')->insert([
            [
                'name' => 'mobile',
                'slug' => 'mobile',
                'category_id' => 1,
            ],
            [
                'name' => 'tv',
                'slug' => 'tv',
                'category_id' => 1,
            ],
            [
                'name' => 'laptop',
                'slug' => 'laptop',
                'category_id' => 1,
            ],
            [
                'name' => 'camera',
                'slug' => 'camera',
                'category_id' => 1,
            ],
            [
                'name' => 'headphone',
                'slug' => 'headphone',
                'category_id' => 1,
            ],
            [
                'name' => 'rice',
                'slug' => 'rice',
                'category_id' => 2,
            ],
            [
                'name' => 'sugar',
                'slug' => 'sugar',
                'category_id' => 2,
            ],
            [
                'name' => 'salt',
                'slug' => 'salt',
                'category_id' => 2,
            ]
        ]);
    }
}
