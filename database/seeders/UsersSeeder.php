<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // add name, email, password, role to be admin, and remember_token to the fillable property in the User model

        // Insert a sample admin
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@nextpayday.co',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        // Insert a sample user
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@nextpayday.co',
            'password' => Hash::make('user123'),
            'role' => 'user',
        ]);
    }
}
