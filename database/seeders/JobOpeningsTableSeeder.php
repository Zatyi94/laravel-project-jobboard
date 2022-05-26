<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobOpeningsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('job_openings')->delete();

        DB::table('job_openings')->insert(array(
            0 =>
            array(
                'ID' => 1,
                'country' => 'Austria',
                'city' => 'Vienna',
                'industry' => 'IT',
                'language_required' => 'English',
                'job_title' => 'Operations Analyst',
                'job_description' => 'Builds and develops a cross-functional profile with the Project Managers',
                'requirements' => 'Monitoring of operational KPIS.
Generates and presents reports for the management / customer.
Direct reporting to the Country Head of Operations.
Setting up the milestones for the project, PM, Budget Consumed analysis.',
                'salary' => '60000 EUR',
                'start_date' => '24/08/2022',
                'created_at' => '2022-05-24 10:43:09',
                'updated_at' => '2022-05-24 10:43:09',
                'deleted_at' => NULL,
            ),
            1 =>
            array(
                'ID' => 2,
                'country' => 'Hungary',
                'city' => 'Budapest',
                'industry' => 'IT',
                'language_required' => 'English',
                'job_title' => 'Project Assistant',
                'job_description' => 'Administration of jobs and orders.
Maintenance of internal databases.
Creating project documentation, uploading photos and documentation to
different IT systems.',
                'requirements' => 'Excellent MS Office knowledge.
English, both written and spoken.',
                'salary' => '2000 EUR / month',
                'start_date' => '01/12/2022',
                'created_at' => '2022-05-24 10:46:01',
                'updated_at' => '2022-05-24 10:46:01',
                'deleted_at' => NULL,
            ),
            2 =>
            array(
                'ID' => 3,
                'country' => 'Hungary',
                'city' => 'Budapest',
                'industry' => 'Financial',
                'language_required' => 'English',
                'job_title' => 'Java Dev',
                'job_description' => 'Designing, implementing, and delivering high quality software solutions that conform to architectural standards',
                'requirements' => 'Degree in Computer Science or related technical field',
                'salary' => '800.000 HUF',
                'start_date' => '10/18/2021',
                'created_at' => '2022-05-26 08:39:44',
                'updated_at' => '2022-05-26 08:39:44',
                'deleted_at' => NULL,
            ),
        ));
    }
}