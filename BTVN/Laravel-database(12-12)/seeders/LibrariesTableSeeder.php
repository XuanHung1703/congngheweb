<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibrariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('libraries')->insert([
            [
                'name' => 'Thư viện IT Đại học ABC',
                'address' => '123 Đường X, Hà Nội',
                'contact_number' => '0123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thư viện Khoa học',
                'address' => '456 Đường Y, TP. Hồ Chí Minh',
                'contact_number' => '0987654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}