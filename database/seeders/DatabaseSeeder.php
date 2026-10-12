<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin Toko',
                'password' => Hash::make('password123'),
                'role' => 'admin',
            ]
        );

        $this->call([
            CategorySeeder::class,
            TagSeeder::class,
        ]);

        // Pastikan factory memiliki kategori dan pengguna.
        Product::factory()->count(60)->create([
            'user_id' => $user->id,
        ]);

        $tags = Tag::all();

        foreach (Product::all() as $product) {
            $product->tags()->attach(
                $tags->random()->id,
                ['created_by' => $user->id]
            );
        }

        // Membuat beberapa pesanan beserta itemnya.
        for ($i = 1; $i <= 5; $i++) {
            $order = Order::create([
                'user_id' => $user->id,
                'order_number' => 'ORD-' . now()->format('Ymd') . '-' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'status' => 'pending',
                'total' => 0,
            ]);

            $total = 0;
            $products = Product::inRandomOrder()->take(2)->get();

            foreach ($products as $product) {
                $qty = rand(1, 3);
                $price = (float) $product->price;

                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'qty' => $qty,
                    'price' => $price,
                ]);

                $total += $qty * $price;
            }

            $order->update(['total' => $total]);
        }
    }
}