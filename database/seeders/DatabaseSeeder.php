<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Hendy Setiawan",
            'email' => "hendysetiawan@gmail.com",
            'password'=>Hash::make('ganteng'),
            'role'=>'admin'
        ]);

        DB::table('users')->insert([
            'name' => "Riko",
            'email' => "riko@gmail.com",
            'password'=>Hash::make('123456'),
            'role'=>'superadmin'
        ]);

        DB::table('users')->insert([
            'name' => "Budi",
            'email' => "budi@gmail.com",
            'password'=>Hash::make('123456'),
            'role'=>'user'
        ]);
    }
}
