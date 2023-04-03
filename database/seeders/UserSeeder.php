<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Arshad',
            'email' => 'arssshu@mail.com',
            'password' => bcrypt('Shabanu')
        ]);

        User::create([
            'name' => 'Shabau',
            'email' => 'banu@mail.com',
            'password' => bcrypt('Shabanu')
        ]);

        User::create([
            'name' => 'David',
            'email' => 'david@mail.com',
            'password' => bcrypt('Shabanu')
        ]);
    }
}
