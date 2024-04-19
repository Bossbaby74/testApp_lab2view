<?php

namespace resources;

use Database\Seeders\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
            'slug' => 'admin',
            'permissions' => [""],
        ]);
    }
}
