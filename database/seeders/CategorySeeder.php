<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'electronics',
                'slug' => 'electronics',
            ],
            [
                'name' => 'grocery',
                'slug' => 'grocery',
            ],
            [
                'name' => 'jewellery',
                'slug' => 'jewellery',
            ],
            [
                'name' => 'cloth',
                'slug' => 'cloth',
            ],
            [
                'name' => 'home appliances',
                'slug' => 'home_appliances',
            ]
        ];

        foreach ($categories as $category) {
            \App\Models\Category::firstOrCreate([
                'name' => $category['name'],
                'slug' => $category['slug'],
            ]);
        }
    }
}
