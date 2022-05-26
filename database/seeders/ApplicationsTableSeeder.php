<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApplicationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('applications')->delete();
        
        \DB::table('applications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'job_title' => 'Senior Java Developer',
                'job_id' => 1,
                'user_name' => 'Valaki Viktor',
                'user_id' => 2,
                'linkedin_url' => 'dgrhríh',
                'resume' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'job_title' => 'Operations Analyst',
                'job_id' => 2,
                'user_name' => 'Valaki Viktor',
                'user_id' => 2,
                'linkedin_url' => 'dgrhríh',
                'resume' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'job_title' => 'Project Assistant',
                'job_id' => 3,
                'user_name' => 'Valaki Viktor',
                'user_id' => 2,
                'linkedin_url' => 'dgrhríh',
                'resume' => NULL,
            ),
        ));
        
        
    }
}