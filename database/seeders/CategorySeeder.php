<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create()

        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'color' => 'green'
        ]);
        Category::create([
            'name' => 'Web Mobile',
            'slug' => 'web-mobile',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'Web Enginer',
            'slug' => 'web-enginer',
            'color' => 'blue'
        ]);
        Category::create([
            'name' => 'UI-UX',
            'slug' => 'ui-ux',
            'color' => 'yellow'
        ]);
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'orange'
        ]);
    }
}
