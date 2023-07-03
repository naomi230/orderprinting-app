<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
               'name'=>'User',
               'email'=>'user@gmail.com',
               'role'=>0,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'super-admin',
               'email'=>'super-admin@gmail.com',
               'role'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'admin',
               'email'=>'admin@gmail.com',
               'role'=> 2,
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}