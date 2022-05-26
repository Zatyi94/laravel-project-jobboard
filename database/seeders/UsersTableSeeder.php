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
                'email' => 'zn@valami.com',
                'email_verified_at' => NULL,
                'password' => 'valamijelszo',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'role' => 'admin',
                'nationality' => 'hungarian',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Valaki Viktor',
                'email' => 'vv@mail.com',
                'email_verified_at' => NULL,
                'password' => 'xya',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'role' => 'candidate',
                'nationality' => 'hungarian',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Tudomisén Irén',
                'email' => 'ti@mami.hu',
                'email_verified_at' => NULL,
                'password' => 'greherh',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'role' => 'guest',
                'nationality' => 'hungarian',
            ),
        ));
        
        
    }
}