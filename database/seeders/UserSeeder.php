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
            'name' => 'aldo',
            'email' => 'aldo@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin', //admin == supplier
        ],
        [
            'name' => 'Aldo Ganteng',
            'email' => 'aldoganteng@gmail.com',
            'password' => bcrypt('user'),
            'role' => 'user', // user == agen
        ]
        ];
        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
