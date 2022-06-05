<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobOpeningsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('job_openings')->delete();
        
        \DB::table('job_openings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country' => 'Hungary',
                'city' => 'Budapest',
                'industry' => 'IT Services',
                'language_required' => 'English',
                'job_title' => 'Senior Java Developer',
                'job_description' => 'xyzzzzzzz',
                'requirements' => 'ezisazis',
                'salary' => '1.600.000 HUF',
                'start_date' => '2022-02-23 08:00:00',
                'deleted_at' => '2022-06-05 13:29:59',
                'created_at' => '2022-06-05 15:29:59',
                'updated_at' => '2022-06-05 13:29:59',
            ),
            1 => 
            array (
                'id' => 2,
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
                'start_date' => '2022-08-24 08:39:04',
                'deleted_at' => '2022-06-05 19:18:13',
                'created_at' => '2022-05-24 08:43:09',
                'updated_at' => '2022-05-24 08:43:09',
            ),
            2 => 
            array (
                'id' => 3,
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
                'start_date' => '2022-12-01 08:43:35',
                'deleted_at' => '2022-06-05 19:18:13',
                'created_at' => '2022-05-24 08:46:01',
                'updated_at' => '2022-05-24 08:46:01',
            ),
            3 => 
            array (
                'id' => 4,
                'country' => 'Germany',
                'city' => 'Düsseldorf',
                'industry' => 'Telecommunications',
                'language_required' => 'English, German',
                'job_title' => 'IMS CORE NETWORK ENGINEER',
            'job_description' => '- Clarify the technical solutions (change requests) during the presale phase
- Perform the HLD, LLD for the SBC solutions
- SBC VNF deployment, artifact creations, SW production, upgrades, MOP creation
- Technical alignment with RnD during RnD implementation phase, Lab implementation, regression testing in Lab, Root cause analysis in case of issues, live network implementation for pilot, rollout, alarm and KPI monitoring, final technical documentation, technical handover to Care
- SBC SW upgrades (release note reviews, Lab implementation, regression testing in Lab, RCA in case of issues, live network implementation for pilot, rollout, alarm and KPI monitoring)
- Trace capturing and analysis for RCA in Lab and Live Network, summary of technical investigation results including RCA
- Regression support (manual + automated) for all new SW introductions, SW corrections, Feature introductions, Change Requests',
                'requirements' => '- Excellent communication skills
- At least 5 years of relevant work experience
- Familiarity with the stacks listed above',
                'salary' => '600 EUR / day',
                'start_date' => '2022-06-13 00:00:00',
                'deleted_at' => '2022-06-05 19:18:13',
                'created_at' => '2022-06-05 15:30:59',
                'updated_at' => '2022-06-05 13:30:59',
            ),
            4 => 
            array (
                'id' => 5,
                'country' => 'Hungary',
                'city' => 'Budapest',
                'industry' => 'IT Services',
                'language_required' => 'English',
                'job_title' => 'MySQL Database Administrator',
                'job_description' => 'Support of database administration tasks
Implementation of defined orders (e.g. installations, migrations)
Installation of multi-node database systems with replication
Handling incident ticket
Incidents or problems documentation and solution
Implementation of regular Changes
Handling easy SQL scripts
Support DB operation basically on stand-alone systems
Communication with other teams and units',
                'requirements' => 'Must Have
- University or college degree and/or equivalent experience
- Min. 1-1,5 years experiences in MySQL administration
- English knowledge
- Linux experiences
- Willing to work in on-call duty 

Nice To Have
- MongoDB, CassandraDB, InnoDB
- Ansible
- Automatisation',
                'salary' => '800.000 HUF',
                'start_date' => '2022-06-13 00:00:00',
                'deleted_at' => '2022-06-05 19:18:13',
                'created_at' => '2022-06-05 13:28:58',
                'updated_at' => '2022-06-05 13:28:58',
            ),
            5 => 
            array (
                'id' => 6,
                'country' => 'Hungary',
                'city' => 'Budapest',
                'industry' => 'Health Care',
                'language_required' => 'English',
                'job_title' => 'Deployment Software Engineer',
                'job_description' => 'Contributes toward defining, implementing and supporting the deployment & delivery solutions for expanding the company’s software development operations
Automating, maintaining and managing a dockerized production system, to ensure the availability, performance, scalability and security of productions systems
Supports system troubleshooting and problem solving across platform and application domains
Supports the Architect by suggesting architecture & process related improvements
Participates in evaluation of new technology options and vendor products
Ensuring critical system security through the use of security solutions',
                'requirements' => '2+ years of experience as a software developer
User level experience with Unix/Linux (e.g. Ubuntu)
Hands-on experience with Kubernetes
Further stacks: Docker, GO, Java, Jenkins',
                'salary' => '1.200.000 HUF',
                'start_date' => '2022-06-27 00:00:00',
                'deleted_at' => '2022-06-05 19:18:13',
                'created_at' => '2022-06-05 13:44:54',
                'updated_at' => '2022-06-05 13:44:54',
            ),
            6 => 
            array (
                'id' => 7,
                'country' => 'Hungary',
                'city' => 'Budapest',
                'industry' => 'IT',
                'language_required' => 'English',
                'job_title' => 'PYTHON DEVELOPER',
                'job_description' => 'Creation, optimization, and extension of trade surveillance processes
Implement and scale processes to handle new requirements
Building infrastructure services to support the market surveillance system
Participating in code reviews via a git/gerrit workflow
Take ownership of internal user issues reported and seeing problems through to resolution',
                'requirements' => 'Bachelor\'s degree in Computer Science
At least 1 year of professional experience
Stacks: Linux OS, Python, pandas/numpy, SQL',
                'salary' => '1.100.000 HUF',
                'start_date' => '2022-06-13 00:00:00',
                'deleted_at' => '2022-06-05 19:18:13',
                'created_at' => '2022-06-05 16:44:29',
                'updated_at' => '2022-06-05 14:44:29',
            ),
        ));
        
        
    }
}