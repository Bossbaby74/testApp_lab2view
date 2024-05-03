<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use function Laravel\Prompts\error;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $allroles = Role::all();
            User::create([
                'name' => 'admin',
                'roles_id' => 1,
                'email' => 'admin@admin.com',
                'password' => Hash::make ('admin'),
            ]
            );
            User::create([
                'name' => 'user',
                //'roles_id' => 2,
                'email' => 'user@user.com',
                'password' => Hash::make ('user'),
            ]
            );
            User::create([
                'name' => 'client',
                //'role_id' => 3,
                'email' => 'client@client.com',
                'password' => Hash::make ('client'),
            ]
            );
            //dd($super_admin);
        //User::factory(5)->create();



    }


}
