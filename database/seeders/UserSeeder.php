<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::truncate();
        User::create([
            'name' => 'Admin',
            'email' => 'tunassiakanugrah@gmail.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
