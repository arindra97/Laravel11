<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Web Development',
        ]);
        Category::factory()->create([
            'name' => 'Web Design',
        ]);
        Category::factory()->create([
            'name' => 'UI Design',
        ]);
        Category::factory()->create([
            'name' => 'Data Analyst',
        ]);
        Category::factory()->create([
            'name' => 'Machine Learning',
        ]);
    }
}
