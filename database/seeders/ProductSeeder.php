<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'code' => 'P001',
            'name' => 'Laptop',
            'quantity' => 10,
            'price' => 999.99,
            'description' => 'High-performance laptop with latest processor'
        ]);

        Product::create([
            'code' => 'P002',
            'name' => 'Smartphone',
            'quantity' => 20,
            'price' => 499.99,
            'description' => 'Latest smartphone with great camera'
        ]);

        Product::create([
            'code' => 'P003',
            'name' => 'Headphones',
            'quantity' => 30,
            'price' => 99.99,
            'description' => 'Wireless noise-cancelling headphones'
        ]);
    }
} 