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
            'name' => 'Politik',
            'slug' => 'politik'
        ]);
        Category::factory()->create([
            'name' => 'Ekonomi',
            'slug' => 'ekonomi'
        ]);
        Category::factory()->create([
            'name' => 'Olahraga',
            'slug' => 'olahraga'
        ]);
        Category::factory()->create([
            'name' => 'Teknologi',
            'slug' => 'teknologi'
        ]);
        Category::factory()->create([
            'name' => 'Hiburan',
            'slug' => 'hiburan'
        ]);
        Category::factory()->create([
            'name' => 'Gaya Hidup',
            'slug' => 'gaya-hidup'
        ]);
    }
}
