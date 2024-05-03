<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {

        User::create([
           'name' => 'admin',
           'email' => 'admin@admin.com',
           'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);
        }catch (\Exception $exception){
            log::error($exception->getMessage());
        }
    }
}
