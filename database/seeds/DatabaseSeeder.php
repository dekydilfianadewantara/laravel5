<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([[
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
            'image' => 'default.PNG',
        ],[
            'name' => 'employee',
            'email' => 'emp@gmail.com',
            'password' => bcrypt('emp'),
            'role' => 'employee',
            'image' => 'default.PNG',
        ]]);
        //Model::unguard();

        // $this->call(UserTableSeeder::class);

       // Model::reguard();
    }
}
