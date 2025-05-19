<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        if(!User::where('email', 'admin@example.com')-> exists()){User::insert([
            [
                'nama' => 'Admin Satu',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'nik/nisn' => '1234567890',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Operator Satu',
                'email' => 'operator@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'nik/nisn' => '1234567891',
                'role' => 'operator',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Pemilih Satu',
                'email' => 'pemilih@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'nik/nisn' => '1234567892',
                'role' => 'pemilih',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);}
    }
}
