<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncomingProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $incomingProduct = [
            [
                'name' => 'indomilk',
                'price' => '30000',
                'quantity' => '20',
            ]
        ];
    }
}
