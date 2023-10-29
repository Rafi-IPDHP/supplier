<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\IncomingProduct;

class IncomingProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $incomingProduct = [
            [
                'quantity' => '10',
                'tanggal' => '2023-10-24',
                'product_id' => '1',
            ],
            [
                'quantity' => '3',
                'tanggal' => '2023-10-24',
                'product_id' => '3',
            ],
        ];
        foreach ($incomingProduct as $key => $value){
            IncomingProduct::create($value);
        }
    }
}
