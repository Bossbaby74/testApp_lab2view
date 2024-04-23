<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            User::create([
                'name' => 'user3',
                'email' => 'user3@gmail.com',
                'password' => Hash::make ('user3'),
            ]);
        }catch (\Exception $exception){
            log::error($exception->getMessage());
        }

    }
}
