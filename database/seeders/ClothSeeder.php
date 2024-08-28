<?php

namespace Database\Seeders;

use App\Models\Clothing;
use Illuminate\Database\Seeder;

class ClothSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Clothing::create([
            'name' => 'T-Shirt',
            'stock' => 100,
            'description' => 'Kaos nyaman',
        ]);

        Clothing::create([
            'name' => 'Jeans',
            'stock' => 50,
            'description' => 'Jeans ga di cuci buat style',
        ]);

        Clothing::create([
            'name' => 'Jacket',
            'stock' => 30,
            'description' => 'Skena abis',
        ]);
        Clothing::create([
            'name' => 'Hoodie',
            'stock' => 30,
            'description' => '100% cotton asli',
        ]);
        Clothing::create([
            'name' => 'Sweatshirt',
            'stock' => 30,
            'description' => 'OOTD abiezz',
        ]);

    }
}
