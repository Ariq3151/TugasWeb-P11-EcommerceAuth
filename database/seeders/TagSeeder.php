<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        foreach ([
            'Terlaris',
            'Baru',
            'Promo',
            'Gaming',
            'Produktivitas',
        ] as $name) {
            Tag::create(['name' => $name]);
        }
    }
}