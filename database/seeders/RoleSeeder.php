<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'label' => 'admin',
            'description' => 'admin role',
        ]);
        Role::create([
            'label' => 'user',
            'description' => 'user role',
        ]);
        Role::create([
            'label' => 'client',
            'description' => 'client role',
        ]);
    }
}
