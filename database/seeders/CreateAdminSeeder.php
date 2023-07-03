<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admins = [
           
            [
               'name'=>'admin',
               'email'=>'admin@gmail.com',
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($admins as $key => $admin) {
            Admin::create($admin);
        }
    }
}
