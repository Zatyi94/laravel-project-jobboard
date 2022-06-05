<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Zatykó Nóra',
                'email' => 'zatyko.nora@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$40InJSHWSioVo5xovcUlwOzi3USMQkmusAvlPidRy6c4rzXwaesnC',
                'remember_token' => NULL,
                'created_at' => '2022-06-05 17:20:18',
                'updated_at' => '2022-06-05 17:20:18',
                'role' => 'admin',
                'applications' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Példa Péter',
                'email' => 'pelda.peter@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$muGo1wQNYJo7Z/H5fX99HO4eGFflPCbJC7G98Yax4CW9H.b1VZAbC',
                'remember_token' => NULL,
                'created_at' => '2022-06-05 18:06:05',
                'updated_at' => '2022-06-05 18:06:05',
                'role' => 'client',
                'applications' => 0,
            ),
        ));
        
        
    }
}