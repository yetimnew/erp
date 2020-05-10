<?php

use App\Hrm\Job;
use Illuminate\Database\Seeder;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
            'name'=>'Dispacher',
            'about'=>'About the job title',
            'status' => 1,
            'department_id' => 1
        ]);
        Job::create([
            'name'=>'recuritment officer',
            'about'=>'About the job title',
            'status' => 1,
            'department_id' => 2
        ]);
        Job::create([
            'name'=>'Maintenace officer',
            'about'=>'About the job title',
            'status' => 1,
            'department_id' => 3
        ]);
    }
}
