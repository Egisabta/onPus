<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'admin_onPus',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('admin')
            ],
            [
                'name' => 'febri',
                'email' => 'febri@gmail.com',
                'role' => 'user',
                'password' => Hash::make('1234')
            ],

        ]);
    }
}