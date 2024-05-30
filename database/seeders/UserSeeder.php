<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::Factory()->create([
     "name"=> "Amministratore",
     "email"=> "admin@admin.com",
     "password"=> 'adminadmin',
     'role'=> 'admin',


        ]);
        User::Factory()->create([
     "name"=> "User",
     "email"=> "user@user.com",
     "password"=> 'useruser',
     'role'=> 'User',


        ]);

        User::factory(50)->create();
    }
}
