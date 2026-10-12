<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Elektronik', 'description' => 'Perangkat elektronik'],
            ['name' => 'Aksesoris Komputer', 'description' => 'Aksesoris komputer dan laptop'],
            ['name' => 'Penyimpanan', 'description' => 'Media penyimpanan data'],
            ['name' => 'Audio', 'description' => 'Perangkat audio'],
            ['name' => 'Periferal', 'description' => 'Perangkat periferal komputer'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}