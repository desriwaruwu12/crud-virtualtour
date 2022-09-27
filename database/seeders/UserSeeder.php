<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Risfan',
            'email' => 'risfanyani0109@gmail.com',
            'password' => bcrypt('risfan'),
        ]);

        User::create([
            'name' => 'Risfan Yani',
            'email' => 'risfan@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
