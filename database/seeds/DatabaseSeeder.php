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
        ],[
            'name' => 'employee2',
            'email' => 'emp2@gmail.com',
            'password' => bcrypt('emp'),
            'role' => 'employee',
            'image' => 'default.PNG',
        ],[
            'name' => 'employee3',
            'email' => 'emp3@gmail.com',
            'password' => bcrypt('emp'),
            'role' => 'employee',
            'image' => 'default.PNG',
        ],[
            'name' => 'employee4',
            'email' => 'emp4@gmail.com',
            'password' => bcrypt('emp'),
            'role' => 'employee',
            'image' => 'default.PNG',
        ],[
            'name' => 'employee5',
            'email' => 'emp5@gmail.com',
            'password' => bcrypt('emp'),
            'role' => 'employee',
            'image' => 'default.PNG',
        ]]);
        //Model::unguard();

        // $this->call(UserTableSeeder::class);

       // Model::reguard();
    }
}
