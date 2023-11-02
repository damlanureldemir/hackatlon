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
            'name' => 'Bahar',
            'surname' => 'Özdoğru',
            'okulno' => '210290026',
            'type' => 1,
            'email' => 'admin@hotmail.com',
            'password' => Hash::make('10203040'),
        ]);
    }
}
