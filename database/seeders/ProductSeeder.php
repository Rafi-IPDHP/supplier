<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name'  => 'Indomilk',
                'stock'  => '10',
                'price' => '2000',
                'supplier' => 'Indofood',
            ],
            [
                'name'  => 'Qtela',
                'stock' => '20',
                'price' => '1000',
                'supplier' => 'Indofood',
            ],
            [
                'name'  => 'Pepsodent',
                'stock' => '30',
                'price' => '15000',
                'supplier' => 'Unilever',
            ],
            ];
        foreach ($products as $key => $value){
            Product::create($value);
        }
    }
}
