<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          Product::create([
            'image' => 'lap.png',
            'product_name' => 'Apple MAC Book Pro',
            'description' => 'Core i5-(8 GB/128 GB SSD)',
            'price' => 4,900,
          ]);

          Product::create([
            'image' => 'lap3.png',
            'product_name' => 'Apple MAC Book Pro Max',
            'description' => 'Core i7-(12 GB/228 GB SSD)',
            'price' => 6,000,
          ]);

          Product::create([
            'image' => 'lap4.png',
            'product_name' => 'Apple MAC Book Pro Retina 13',
            'description' => 'Core i5-(8 GB/128 GB SSD/MAC OS)',
            'price' => 5,700,
          ]);

          Product::create([
            'image' => 'lap5.png',
            'product_name' => 'Acer E15 Caleron ',
            'description' => 'Dual Core 4th Gen (6/128)',
            'price' => 5,300,
          ]);

          Product::create([
            'image' => 'laptop.png',
            'product_name' => 'Asus ROG Zephyrus 16',
            'description' => 'Core i7-(16 GB/512 GB SSD)',
            'price' => 7,900,
          ]);

    }
}
