<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => Category::inRandomOrder()->value('id'),
            'user_id' => User::inRandomOrder()->value('id'),
            'name' => fake()->randomElement([
                'Laptop ASUS VivoBook',
                'Laptop Acer Aspire',
                'Mouse Wireless',
                'Keyboard Mechanical',
                'Monitor LED',
                'Headset Gaming',
                'Webcam HD',
                'SSD External',
                'Flashdisk USB',
                'Speaker Bluetooth',
                'Kabel USB-C',
                'Power Bank',
            ]) . ' ' . fake()->unique()->numberBetween(100, 9999),
            'sku' => fake()->unique()->bothify('SKU-####-????'),
            'description' => fake()->sentence(12),
            'price' => fake()->randomFloat(2, 25000, 15000000),
            'stock' => fake()->numberBetween(0, 100),
            'is_active' => fake()->boolean(90),
        ];
    }
}