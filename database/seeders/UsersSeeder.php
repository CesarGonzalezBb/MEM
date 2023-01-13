<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        User::create([
            'name' => 'Aldo',
            'lastname' => 'Martínez',
            'email' => 'aldoblueberry1@gmail.com',
            'password' => bcrypt('Pa$$w0rd'),
            'phone' => '3315446922',
            'languaje' => 'spanish',
            'zone' => 'México'
        ])->assignRole('Admin');

        User::create([
            'name' => 'Vannesa',
            'lastname' => 'Casillas',
            'email' => 'vanessablueberry1@gmail.com',
            'password' => bcrypt('Pa$$w0rd'),
            'phone' => '3326377904',
            'languaje' => 'spanish',
            'zone' => 'México'
        ])->assignRole('Admin');

        User::create([
            'name' => 'Cesar',
            'lastname' => 'Gonzalez',
            'email' => 'cesarblueberry1@gmail.com',
            'password' => bcrypt('12345'),
            'phone' => '3333333333',
            'languaje' => 'spanish',
            'zone' => 'México'
        ])->assignRole('User');
    }
}
