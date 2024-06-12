<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubCategory::factory()->create([
            'category_id' => '1',
            'name' => 'Pemilu',
            'slug' => 'pemilu'
        ]);
        SubCategory::factory()->create([
            'category_id' => '1',
            'name' => 'Kebijakan Pemerintah',
            'slug' => 'kebijakan-pemerintah'
        ]);
        SubCategory::factory()->create([
            'category_id' => '1',
            'name' => 'Hubungan Internasional',
            'slug' => 'hubungan-internasional'
        ]);
        SubCategory::factory()->create([
            'category_id' => '2',
            'name' => 'Keuangan',
            'slug' => 'keuangan'
        ]);
        SubCategory::factory()->create([
            'category_id' => '2',
            'name' => 'Bisnis',
            'slug' => 'bisnis'
        ]);
        SubCategory::factory()->create([
            'category_id' => '2',
            'name' => 'Pasar Modal',
            'slug' => 'pasar-modal'
        ]);
        SubCategory::factory()->create([
            'category_id' => '3',
            'name' => 'Sepak Bola',
            'slug' => 'sepak-bola'
        ]);
        SubCategory::factory()->create([
            'category_id' => '3',
            'name' => 'Basket',
            'slug' => 'basket'
        ]);
        SubCategory::factory()->create([
            'category_id' => '3',
            'name' => 'Tenis',
            'slug' => 'tenis'
        ]);
        SubCategory::factory()->create([
            'category_id' => '4',
            'name' => 'Gadget',
            'slug' => 'gadget'
        ]);
        SubCategory::factory()->create([
            'category_id' => '4',
            'name' => 'Internet',
            'slug' => 'internet'
        ]);
        SubCategory::factory()->create([
            'category_id' => '4',
            'name' => 'Kecerdasan Buatan',
            'slug' => 'kecerdasan-buatan'
        ]);
        SubCategory::factory()->create([
            'category_id' => '5',
            'name' => 'Film',
            'slug' => 'film'
        ]);
        SubCategory::factory()->create([
            'category_id' => '5',
            'name' => 'Musik',
            'slug' => 'musik'
        ]);
        SubCategory::factory()->create([
            'category_id' => '5',
            'name' => 'Selebriti',
            'slug' => 'selebriti'
        ]);
        SubCategory::factory()->create([
            'category_id' => '6',
            'name' => 'Kesehatan',
            'slug' => 'kesehatan'
        ]);
        SubCategory::factory()->create([
            'category_id' => '6',
            'name' => 'Kuliner',
            'slug' => 'kuliner'
        ]);
        SubCategory::factory()->create([
            'category_id' => '6',
            'name' => 'Travelling',
            'slug' => 'travelling'
        ]);
    }
}
