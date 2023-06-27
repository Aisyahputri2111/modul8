<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Support\Facades\DB;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        user::truncate();

        user::create([
            'name' => 'Administrator',
            'email' => 'admin@admin',
            'password' => bcrypt('adminadmin')
        ]);
    }
}



