<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'email' => 'miracle@mail.com',
            'password' => Hash::make('miracle1999#'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
       
    }
}

