<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExitProduct;

class ExitProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exitProduct = [
            [
                'quantity' => '1',
                'tanggal' => '2023-10-24',
                'product_id' => '1',
            ],
            [
                'quantity' => '5',
                'tanggal' => '2023-10-24',
                'product_id' => '2',
            ],
        ];
        foreach ($exitProduct as $key => $value){
            ExitProduct::create($value);
        }
    }
}
