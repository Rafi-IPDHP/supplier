<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [[
            'name' => 'supplier',
            'email' => 'supplier@gmail.com',
            'password' => bcrypt('supplier'),
            'role' => 'admin', //admin == supplier
        ],
        [
            'name' => 'agen',
            'email' => 'agen@gmail.com',
            'password' => bcrypt('agen'),
            'role' => 'user', // user == agen
        ],
        [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'manager',
        ],
        ];
        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
